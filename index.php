<?php
# --- Позволяет использовать абсолютные пути ---
// define('ROOT_PATH', __DIR__);
// set_include_path(__DIR__);
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);

require 'config/connect.php';

