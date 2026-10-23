<?php
define("ROOT", __DIR__);
$server_root = explode("/", $_SERVER['PHP_SELF'])[1];
$site_root = $_SERVER['DOCUMENT_ROOT'] . "/" . $server_root;

echo "GLOBAL SCRIPT";
