<?php

require_once 'connectionSQL.php';

function verifUserLog($name,$password){
  $req = connectBdd() -> prepare ('SELECT name,password,surname FROM user WHERE name = :name AND password = :pass');
  $req -> execute(['name' => $name,'pass'=> $password]);
  $data = $req -> fetch();
  return $data;
}
