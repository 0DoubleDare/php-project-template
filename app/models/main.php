<?php

function get_users(PDO $pdo): Array {
    $sql = "SELECT id, name FROM greeter";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}