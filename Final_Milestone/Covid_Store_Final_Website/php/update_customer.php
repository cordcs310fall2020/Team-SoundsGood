<?php
    session_start();

    $email = $_SESSION['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $newEmail = $_POST['email'];
    $psw = $_POST['psw'];
    $phone = $_POST['phone'];

    $hash = crypt($psw);

    require_once("database.php");

    $database = new database();
    $database->connect();

        try
        {
            if(!empty($fname)){
                $sql = "UPDATE customers SET fname = '$fname' WHERE email='$email'";
                $ps = $database->getConnection()->prepare($sql);
                if ($ps->execute()) {
                    $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                } else {
                    echo ('Error on execution ' . $ps->errorInfo()[2]);
                    return false;
                }
            }    
            if(!empty($lname)){
                $sql = "UPDATE customers SET lname = '$lname' WHERE email='$email'";
                $ps = $database->getConnection()->prepare($sql);
                if ($ps->execute()) {
                    $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                } else {
                    echo ('Error on execution ' . $ps->errorInfo()[2]);
                    return false;
                } 
            }     
            if (!empty($dob)){
                $sql = "UPDATE customers SET dob = '$dob' WHERE email='$email'";
                $ps = $database->getConnection()->prepare($sql);
                if ($ps->execute()) {
                    $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                } else {
                    echo ('Error on execution ' . $ps->errorInfo()[2]);
                    return false;
                }
            }    
            if (!empty($gender)){
                $sql = "UPDATE customers SET gender = '$gender' WHERE email='$email'";
                $ps = $database->getConnection()->prepare($sql);
                if ($ps->execute()) {
                    $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                } else {
                    echo ('Error on execution ' . $ps->errorInfo()[2]);
                    return false;
                }
            }    
            if (!empty($newEmail)){
                    $sql = "UPDATE customers SET email = '$newEmail' WHERE email='$email'";
                    $ps = $database->getConnection()->prepare($sql);
                    if ($ps->execute()) {
                        $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                    } else {
                        echo ('Error on execution ' . $ps->errorInfo()[2]);
                        return false;
                    }
            }    
            if (!empty($psw)){
                    $sql = "UPDATE customers SET psw = '$psw' WHERE email='$email'";
                    $ps = $database->getConnection()->prepare($sql);
                    if ($ps->execute()) {
                        $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                    } else {
                        echo ('Error on execution ' . $ps->errorInfo()[2]);
                        return false;
                    }
            }    
            if (!empty($phone)){
                    $sql = "UPDATE customers SET phone = '$phone' WHERE email='$email'";
                    $ps = $database->getConnection()->prepare($sql);
                    if ($ps->execute()) {
                        $_SESSION['currentId'] = $database->getConnection()->lastInsertId();
                    } else {
                        echo ('Error on execution ' . $ps->errorInfo()[2]);
                        return false;
                    }        
                }
        }
        catch(PDOException $e)
        {
            echo ('Database connection error ' . $e->getMessage());
        }

        header("Location: ../UserSettings.php");

        $database = NULL;
    
?>	