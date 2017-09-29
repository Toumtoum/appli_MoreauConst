<?php

require_once 'connectionSQL.php';

function dataProject(){
  $req = connectBdd() -> query ('SELECT name,project,startingDate,endingDate,step,task
  FROM user
  INNER JOIN projects ON user.id = projects.id_user
  INNER JOIN mainSteps ON projects.id = mainSteps.id_projects
  INNER JOIN tasks ON mainSteps.id = tasks.id_mainSteps');
  $data = $req -> fetchAll();
  return $data;
}
