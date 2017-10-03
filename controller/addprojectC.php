<?php
include "../model/addprojectM.php";

include "headerC.php";

//CREATE A NEW PROJECT

if (isset($_POST['project']) && isset($_POST['startingDate']) && isset($_POST['endingDate'])
    && !empty($_POST['project']) && !empty($_POST['startingDate']) && !empty($_POST['endingDate'])){
      $project = htmlspecialchars($_POST['project']);
      addproject($project,$_POST['startingDate_submit'],$_POST['endingDate_submit'],$_SESSION['userID']);
    }

//ADDING MAINSTEPS IN A PROJECT SELECT IN FORM AREA

$project = getUserProjects($_SESSION['userID']); //FUNCTION USE TO ADD IN THE SELECT ALL STEPS OF THE PROJECT
if (isset($_POST['step']) && !empty($_POST['step'])){

$id_project = $_POST['id_project'];
$step = htmlspecialchars($_POST['step']);

addSteps($step,$id_project);

}
//ADDING TASKS IN A MAINSTEPS SELECT IN FORM AREA
if((isset($_POST['id_project']) && !empty($_POST['id_project']))){
$step = getProjectTasks($_POST['id_project']);
}
if (isset($_POST['task']) && !empty($_POST['task'])){

$id_project = $_POST['id_mainSteps'];
$step = htmlspecialchars($_POST['task']);

addTasks($step,$id_project);
}


include '../view/addproject.php';

include "../view/footer.php";
