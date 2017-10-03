<?php

require_once 'connectionSQL.php';

function addproject ($project,$startingDate,$endingDate,$id_user){
  $req = connectBdd() -> prepare('INSERT INTO projects (project,startingDate,endingDate,id_user) VALUES (:project,:sdate,:edate,:id_user)');
  $req -> execute(['project' => $project,
                   'sdate' => $startingDate,
                   'edate' => $endingDate,
                   'id_user' => $id_user]);
}

function getUserProjects($userID){
  $req = connectBdd() -> prepare('SELECT project,id FROM projects WHERE id_user = :id_user');
  $req -> execute(['id_user' => $userID]);
  $data = $req -> fetchAll();
  RETURN $data;
}


function addSteps ($step,$id_project){
  $req = connectBdd() -> prepare ('INSERT INTO mainSteps (step,id_projects) VALUES (:step,:id_projects)');
  $req -> execute (['step' => $step,
                    'id_projects' => $id_project]);
}

function getProjectSteps($id_project){
  $req = connectBdd() -> prepare('SELECT step,id FROM mainSteps WHERE id_projects = :id_project');
  $req -> execute(['id_project' => $id_project]);
  $data = $req -> fetchAll();
  RETURN $data;
}

function addTasks ($task,$id_mainSteps){
  $req = connectBdd() -> prepare ('INSERT INTO tasks (task,id_mainSteps,comments,status) VALUES (:task,:id_mainSteps,:comments,:status)');
  $req -> execute (['task' => $task,
                    'id_mainSteps' => $id_mainSteps,
                    'comments'=>'neant',
                    'status' => 0]);
}
