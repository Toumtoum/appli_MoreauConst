<?php

include "../model/homepageM.php";

$infoProjects = displayAllProjects();
var_dump($infoProjects);

include '../view/homepage.php';
