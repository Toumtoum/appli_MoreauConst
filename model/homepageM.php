<?php

require_once 'connectionSQL.php';

function displayAllProjects(){
  $req = connectBdd() -> query('SELECT project,DATE_FORMAT(startingDate, "%d/%m/%Y") as startingDate,DATE_FORMAT(endingDate, "%d/%m/%Y") as endingDate,name,surname,projects.id
    FROM user
    INNER JOIN projects ON user.id = projects.id_user ');
  $data = $req -> fetchAll();
  RETURN $data;
}
