<?php
session_start();
ob_start();


require_once '../model/loginM.php';


if (isset($_POST['name']) && isset($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['pass'])){
  $verif = verifUserLog($_POST['name'],$_POST['pass']);
  if ($verif){
    $_SESSION['user'] = $verif['surname'];
    $_SESSION['userID'] = $verif['id'];
    header('location:homepageC.php');exit;
  }
  else{
    $_SESSION['errors']['log'] = "You may not have acces to the area or check your loging info";
  }
}

include '../view/login.php';


ob_end_flush();
