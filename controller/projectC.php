<?php
require_once '../model/projectM.php';

include 'headerC.php';

$id = htmlspecialchars($_GET['project_id']);
$data = mainStepsProject($id);

$project = htmlspecialchars($_GET['project']);

$dataTasks = getTasks($id);


include '../view/project.php';

include '../view/footer.php';
