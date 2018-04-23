<?php

require_once('../classes/Database.php');
require_once('../classes/Register.php');


$pdo = (new Database())->pdo();
$register = new Register($pdo);

$register->store($_POST['username'], $_POST['password']);

header('Location: ../register.php');



