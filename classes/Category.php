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

    public function index()
    {
        $sql = "SELECT * FROM `categories` ORDER BY `id` DESC LIMIT 10";
        $categories = $this->pdo->link->query($sql)->fetchAll();

        return $categories;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM `categories` WHERE id = :id";
        $stmt = $this->pdo->link->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
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
    
    public function update($id, $name)
    {
        $category_id = Format::validation($id);
        $category_name = Format::validation($name);

        if(empty($category_name) ) {
            $msg = "<span class='error'>Category field must not be empty!</span>";
        } else {
            $sql = "UPDATE `categories` SET `name` = :name WHERE `id` = :id";

            $stmt = $this->pdo->link->prepare($sql);
            $stmt->bindValue(':name', $category_name, PDO::PARAM_STR);
            $stmt->bindValue(':id', $category_id, PDO::PARAM_INT);
            $stmt->execute();

            if($stmt->rowCount() > 0)
                $msg = "<span class='success'>Category updated successfully.</span>";
            else
                $msg = "<span class='error'>Category not updated.</span>";
        }

        return $msg;
    }

    public function delete($id)
    {
        $category_id = Format::validation($id);

        $sql = "DELETE FROM `categories` WHERE `id` = :id";

        $stmt = $this->pdo->link->prepare($sql);
        $stmt->bindValue(':id', $category_id, PDO::PARAM_INT);
        $stmt->execute();
//
        if($stmt->rowCount() > 0)
            $msg = "<span class='success'>Category deleted successfully.</span>";
        else
            $msg = "<span class='error'>Category not deleted.</span>";

        return $msg;
    }

}