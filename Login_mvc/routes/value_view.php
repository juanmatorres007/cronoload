<?php
include_once "../controller/loginController.php";

 extract($_REQUEST);
 $number_ident = $_REQUEST['document'];
 $pass = $_REQUEST['pass'];

 $valController = new viewController();
 $valController -> validController($number_ident,$pass);