<?php
require_once '../model/projectM.php';
include 'headerC.php';
// $id = htmlspecialchars($_GET['project']);
$data = dataProject($_GET['project']);
include '../view/project.php';
include '../view/footer.php';
