<?php

include "../model/homepageM.php";

include "headerC.php";

$infoProjects = displayAllProjects();

include '../view/homepage.php';

include "../view/footer.php";
