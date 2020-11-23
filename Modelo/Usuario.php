<?php

class Usuario {
    
  private $numero;
  private $pri_Apellido;
  private $pri_Nombre;
  private $Email;
  private $Direccion;
  private $Ciudad;
  private $Celular;
  private $Telefono;
  private $Contraseña;

  public function __Construct($num,$pApe,$pNom,$Ema,$direcc,$ciud,$cel,$tel,$contr){

    $this-> numero = $num;
    $this-> pri_Apellido = $pApe;
    $this-> pri_Nombre = $pNom;
    $this-> Email = $Ema;
    $this-> Direccion = $direcc;
    $this-> Ciudad = $ciud;
    $this-> Celular = $cel;
    $this-> Telefono = $tel;
    $this-> Contraseña = $contr;
  }

  public function getNumero(){
    return $this -> numero;
  }
  
  public function getpri_Apellido(){
    return $this -> pri_Apellido;
  }

  public function getpri_Nombre(){
    return $this -> pri_Nombre;
  }

  public function getEmail(){
    return $this -> Email;
  }

  public function getDireccion(){
    return $this -> Direccion;
  }

  public function getCiudad(){
    return $this -> Ciudad;
  }

  public function getCelular(){
    return $this -> Celular;
  }

  public function getTelefono(){
    return $this -> Telefono;
  }

  public function getContraseña(){
    return $this -> Contraseña;
  }

}
