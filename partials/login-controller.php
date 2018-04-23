<?php

require_once('../classes/Database.php');
require_once('../classes/Login.php');


$pdo = (new Database())->pdo();
$login = new Login($pdo);

$userID = $login->signIn($_POST['username'], $_POST['password']);

if ($userID) {
    $_SESSION['userID'] = $userID;
    header('Location: ../index.php');
}else {
    header('Location: ../login.php');
}

