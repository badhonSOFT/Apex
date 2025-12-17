<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'passw0rd');
define('DB_NAME', 'Apex');

// Base URL
define('BASE_URL', 'http://202.59.208.112/');

// Database Connection Function
function getDatabase() {
    try {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($db->connect_error) {
            error_log("Database connection failed: " . $db->connect_error);
            return null;
        }
        return $db;
    } catch (Exception $e) {
        error_log("Database error: " . $e->getMessage());
        return null;
    }
}
?>