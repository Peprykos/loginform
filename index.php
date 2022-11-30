<?php
<<<<<<< HEAD

use Steampixel\Route;

require_once('config.php');
require_once('class/User.class.php');

Route::add('/login', function() {
    echo "Strona Główna";
});

Route::run('loginform');

?>
=======
require_once('config.php');
require_once('class/User.class.php');

$user = new User('jkowalski', 'tajneHasło');
/*
if($user->register()) {
    echo "Zarejestrowano poprawnie";
} else {
    echo "Błąd rejestracji użytkownika";
}
*/

if($user->login()) {
    echo "Zalogowano poprawnie";
} else {
    echo "Błędny login lub hasło";
}

?>
>>>>>>> 3ce05127637a8b02d133d92155b7075b93362be3
