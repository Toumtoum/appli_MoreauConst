<?php

require_once 'connectionSQL.php';

// function dataProject($id){
//   $req = connectBdd() -> prepare ('SELECT name,project,startingDate,endingDate,step,task,tasks.id as idTask,projects.id
//   FROM user
//   LEFT JOIN projects ON user.id = projects.id_user
//   LEFT JOIN mainSteps ON projects.id = mainSteps.id_projects
//   LEFT JOIN tasks ON mainSteps.id = tasks.id_mainSteps
//   WHERE projects.id = :id');
//   $req -> execute(['id' => $id]);
//   $data = $req -> fetchAll();
//   return $data;
// }

//RETRIVE ALL STEPS OF A PROJECT
function mainStepsProject($id){
  $req = connectBdd() -> prepare('SELECT step,id FROM mainSteps WHERE id_projects = :id');
    $req -> execute(['id' => $id]);
    $data = $req -> fetchAll();
    return $data;
}

function getTasks($id){
  $req = connectBdd() -> prepare('SELECT task,tasks.id,tasks.id_mainSteps FROM tasks
  INNER JOIN mainSteps on mainSteps.id = tasks.id_mainSteps
  WHERE mainSteps.id_projects = :id');
  $req -> execute(['id' => $id]);
  $data = $req -> fetchAll();
  return $data;
}
