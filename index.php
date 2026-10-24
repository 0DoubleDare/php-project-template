<?php
# --- Позволяет использовать абсолютные пути ---
require 'config/db.php';

$route = $_GET["route"];

switch($route) {
    case "/";
    case "/users":
        require 'app/controllers/users/show.php';
        break;
    default:
        echo "Роут не найден :(";
        break;
}
