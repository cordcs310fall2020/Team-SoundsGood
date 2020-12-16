<?php

class Database{

    //Instance variables
    public $connection = NULL;
    public function getConnection(){return $this->connection;}
    public function setConnection($val) {$this->connection = $val;}

    private $host = "localhost";
    private $username = "sachirki_sachin";
    private $password = "C,gh8u{mCax[";
    private $dbname = "sachirki_covid_store";
    private $type = "mysql";

    //Methods

    public function connect(){
        $this->setConnection(new PDO($this->type . ":host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password));
    }

    public function disconnect(){
        $this->setConnection(NULL);
    }


}
?>