<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $experience = htmlspecialchars($_POST['experience']);
    $education = htmlspecialchars($_POST['education']);
    $template = htmlspecialchars($_POST['template']);

    include "templates/{$template}.php";
}
?>
