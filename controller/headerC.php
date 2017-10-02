<?php
session_start();

include '../model/headerM.php';

if (isset($_SESSION['user']) && !empty($_SESSION['user'])){
include '../view/headerlog.php';
}
else{
  include '../view/header.php';
}
