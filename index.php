<?php
require('class/user_class.php');

$db = new mysqli('localhost', 'root', 'loginform');
$user = new user("jkowalski","tajneHaslo");

$user->login();
of($user->isAuth()) {
    echo "Użytkownik zalogowany" }
     else  {
    echo "Błąd logowania";
}
?>