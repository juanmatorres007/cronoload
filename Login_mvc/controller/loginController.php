<?php
include_once "../conexion/conexion.php";
include_once "../model/loginModel.php";

 class viewController{
    public function validController($number_ident,$pass){
        $answer = new LoginModel();
        $user = $answer->startSession($number_ident,$pass);

        if (!empty($user)) {
            echo "Bienvenido";         
                include_once "../view/mainPanel.php";
           $conn =null; 
        }else{
            header('location:../index.php');
        }
    }
   
  // Verifica las credenciales (puedes usar una base de datos para esto)
  public function segurity($number_ident,$pass) {
    $username = $number_ident;
    $password = $pass;

  if ($username === "account_acc" && $password === "password_acc") {
    // Inicia la sesión y redirige al usuario a una página protegida
    session_start();
    $_SESSION["user"] = $username;
    header("Location: ../view/mainPanel.php");
    exit;
} else {
    // Autenticación fallida, muestra un mensaje de error
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
 } 
 }
}  
