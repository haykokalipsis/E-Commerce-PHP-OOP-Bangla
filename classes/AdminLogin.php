<?php
require_once  '../libraries/Session.php';
Session::checkLogin();
require_once  '../libraries/Database.php';
require_once  '../helpers/Format.php';

class AdminLogin
{
    private $pdo;
    private $fm;

    public function __construct()
    {
        $this->pdo = new Database();
//        $this->fm = new Format();
    }

    public function login($username, $password)
    {
        $username = Format::validation($username);
        $password = Format::validation($password);

        if(empty($username) || empty($password)) {
            $loginMsg = 'Username or password must not be empty!';
            return $loginMsg;
        } else {
            $sql = "SELECT * FROM `admins` WHERE `username` = :username";

            $stmt = $this->pdo->link->prepare($sql);
            $stmt->bindValue(':username', $username);
            $stmt->execute();
            $result = $stmt->fetch();

            if($result != false) {
                if(password_verify($password, $result['password'])) {
                    Session::set('adminLogin', true);
                    Session::set('adminId', $result['id']);
                    Session::set('adminUsername', $result['username']);
                    Session::set('adminEmail', $result['email']);
                    header('Location:dashboard.php');
                }
            } else {
                $loginMsg = 'Username or password invalid';
                return $loginMsg;
            }
        }
    }
}