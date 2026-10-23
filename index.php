<?php
# --- Позволяет использовать абсолютные пути ---
// define('ROOT_PATH', __DIR__);
// set_include_path(__DIR__);
// echo $_SERVER['DOCUMENT_ROOT'];
// $server_root = explode("/", $_SERVER['PHP_SELF'])[1];
// $site_root = $_SERVER['DOCUMENT_ROOT'] . "/" . $server_root;

require 'config/connect.php';


require 'app/controllers/users/show.php';
// header('Location: app/controllers/users/show.php');
