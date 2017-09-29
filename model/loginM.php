<?php

require_once 'connectionSQL.php';


function verifUserLog($name,$password){
  $req = connectBdd() -> preapre ('SELECT name,password FROM user WHERE name = :name && password = :pass');
  $req -> execute(['name' => $name,'pass'=>$password]);
  $data = $req -> fetch();
  return $data;
}
