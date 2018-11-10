<?php
require_once '../libraries/Database.php';
require_once '../helpers/Format.php';

class Category
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Database();
    } 
    
    public function insert($category_name)
    {
        $category_name = Format::validation($category_name);

        if(empty($category_name) ) {
            $msg = "<span class='error'>Category field must not be empty!</span>";
        } else {
            $sql = "INSERT INTO `categories` (name) VALUES (:name)";

            $stmt = $this->pdo->link->prepare($sql);
            $stmt->bindValue(':name', $category_name);
            $stmt->execute();

            if($stmt->rowCount() > 0)
                $msg = "<span class='success'>Category inserted successfully.</span>";
            else
                $msg = "<span class='error'>Category not inserted.</span>";
        }

        return $msg;
    }
}