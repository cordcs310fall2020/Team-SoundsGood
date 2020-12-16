<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $hash = crypt($psw);

    require_once("database.php");

    $database = new database();
    $database->connect();

    
        if ($fname == '' || $lname == '' || $email == '' || $psw == '') {
           echo 'Empty field';
            return false;
        }

        try
        {
            $sql = 'insert into customers (fname, lname, email, psw) values (:fname, :lname, :email, :psw)';
            $ps	= $database->getConnection()->prepare($sql);
        
            // Bind SQL parameters
            $ps->bindParam( ":fname", $fname);
            $ps->bindParam(":lname", $lname);
            $ps->bindParam(":email", $email);
            $ps->bindParam(":psw", $psw);

            //execute SQL statement
            if ($ps->execute()) {
                $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                header("Location: ../index.php");
                return true;
            } else {
                //error message
                echo ('Error on execution ' . $ps->errorInfo()[2]);
                return false;
            }
        }
        catch(PDOException $e)
        {
            echo ('Database connection error ' . $e->getMessage());
        }

        $database = NULL;
    
?>	