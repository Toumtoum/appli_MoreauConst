<?php

include "../model/homepageM.php";

include "headerC.php";

if (isset($_SESSION['user'])){
$infoProjects = displayUserProjects($_SESSION['user']);
}
else $infoProjects = displayAllProjects();

include '../view/homepage.php';

include "../view/footer.php";
