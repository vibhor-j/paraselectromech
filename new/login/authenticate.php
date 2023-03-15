<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] == 'paras_electromech@yahoo.com' && $_POST['password'] == 'anil8081jain') {
    $_SESSION['login'] = 'true';
} else {
    $_SESSION['login'] = 'false';
}

//print($_SESSION['login']);

header('Location:../');
?>


