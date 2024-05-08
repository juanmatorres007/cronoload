<?php
class LoginModel{

    private $conn;

    public function __construct(){
        $this->db();
    }

    public function db(){
        $this->conn = conectaDb();
    }

    public function startSession($number_ident, $pass){

     $number = $number_ident;
     $password = $pass;

         $sql = $this -> conn -> prepare("SELECT * FROM acceso WHERE account_acc=? AND password_acc=?");
         $sql -> bindParam(1,$number);
         $sql -> bindParam(2,$password);
         $sql -> execute();

         $user = $sql ->fetchAll(PDO::FETCH_ASSOC);

         return $user;
    }


}