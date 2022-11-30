<?php
require_once('vendor/autoload.php');
require_once('class/User_class.php');

$loader = new Twig\Loader\FilesystemLoader('./templates');

$twig = new Twig\Environment($loader);

$db = new mysqli('localhost', 'root', 'loginform');
?>