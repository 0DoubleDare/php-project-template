<?php

function check_db_is_exist(PDO $pdo, string $db_name): bool {
    $sql = "SHOW DATABASES LIKE ':db_name'";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":db_name", $db_name);
    $value = $stmt->fetchColumn();

    return $value > 0;
}

function create_database(PDO $pdo, string $db_name) {
    $sql = "CREATE DATABASE IF NOT EXISTS `{$db_name}`";
    $pdo->exec($sql);
}

function add_port(string $dsn, int $port): string {
    if ($port > 0) {
        $dsn .= ";port={$port}";
    }
    return $dsn;
}

