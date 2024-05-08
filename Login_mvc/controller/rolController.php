<?php

include '../conexion/conexion.php';
include "../model/rolModel.php";

class rolController{

  public function Rol($name_rol, $state_rol){
      
    $rolModel = new rolModel();
    $rol = $rolModel->insertRol($name_rol,$state_rol);
    include "../view/exitoRol.php";
  }
}