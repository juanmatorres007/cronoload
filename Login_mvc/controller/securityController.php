<?php
// include_once "../conexion/conexion.php";
// class SecurityController {
//     public function login() {
//         // Verifica si se ha enviado el formulario de inicio de sesión
//         if ($_SERVER["REQUEST_METHOD"] == "POST") {
//             // Obtiene las credenciales del formulario
//             $username = $_POST["document"];
//             $password = $_POST["pass"];
            
//             // Verifica las credenciales (puedes usar una base de datos para esto)
//             if ($username === "account_acc" && $password === "password_acc") {
//                 // Inicia la sesión y redirige al usuario a una página protegida
//                 session_start();
//                 $_SESSION["user"] = $username;
//                 header("Location: ../view/mainPanel.php");
//                 exit;
//             } else {
//                 // Autenticación fallida, muestra un mensaje de error
//                 echo "Credenciales incorrectas. Inténtalo de nuevo.";
//             }
//         }
//         // Si no se ha enviado el formulario, muestra el formulario de inicio de sesión
//         include '../index.php';
//     }
// }
?>