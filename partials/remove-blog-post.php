<?php

require_once('../classes/Database.php');
require_once('../classes/Remove.php');

$pdo = (new Database())->pdo();
$remove = new Remove($pdo);
$remove->removePost($_POST['entryID']);

header('Location: ../index.php');