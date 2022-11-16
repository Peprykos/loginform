<?php
require('class/user_class.php');

$db = new mysqli('localhost', 'root', 'loginform');
$user = new user("jkowalski","tajneHaslo");
?>