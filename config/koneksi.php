<?php

/**
 * Database Configuration & Connection
 * Using PDO for modern and secure database connection
 */

require_once __DIR__ . '/Database.php';

// Initialize Database connection
$db = new Database();
$pdo = $db->getConnection();

?>
