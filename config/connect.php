<?php
require_once 'config/database.php';
require_once 'config/connect_model.php';

# --- Подключение к самому драйверу базы данных (к самому MySQL если быть точнее) ---
$initial_dsn = "{$driver}:host={$db_host};charset={$charset}";
$initial_dsn = add_port($initial_dsn, $override_db_port);

$sql_driver = new PDO($initial_dsn, $user, $password);

$database_is_exist = check_db_is_exist($sql_driver, $db_name);
if (!$database_is_exist) {
    create_database($sql_driver, $db_name);
}

# --- Основное подключение к БД ---
$dsn = "{$driver}:host={$db_host};dbname={$db_name};charset={$charset}";
$dsn = add_port($dsn, $override_db_port);

// try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
// } catch (PDOException $e) {
    // "Не удалось подключиться к базе данных. Текст ошибки: \n {$e}";
// }
