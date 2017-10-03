<?php

require_once 'connectionSQL.php';

function dataProject($id){
  $req = connectBdd() -> prepare ('SELECT name,project,startingDate,endingDate,step,task,tasks.id as idTask,projects.id
  FROM user
  LEFT JOIN projects ON user.id = projects.id_user
  LEFT JOIN mainSteps ON projects.id = mainSteps.id_projects
  LEFT JOIN tasks ON mainSteps.id = tasks.id_mainSteps
  WHERE projects.id = :id');
  $req -> execute(['id' => $id]);
  $data = $req -> fetchAll();
  return $data;
}
