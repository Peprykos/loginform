<?php

use Steampixel\Route;

require_once('config.php');
require_once('class/User.class.php');

Route::add('/login', function() {
    echo "Strona Główna";
});

Route::run('loginform');

?>