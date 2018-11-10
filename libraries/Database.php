<?php

require_once '../config/config.php';

class Database
{
    public $link;
    private $error;
    private $stmt;

    // Connect to link
    public function __construct()
    {
        // Set DSN
        $dsn ='mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => FALSE,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        );

        // Create new PDO
        try{
            $this->link = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e){
            $this->error = $e->getMessage();
        }
    }

}