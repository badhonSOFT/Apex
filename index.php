<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASEPATH', __DIR__ . '/');
define('APPPATH', BASEPATH . 'application/');

// Load configuration
include APPPATH . 'config/config.php';
include APPPATH . 'config/routes.php';

// Get URI
$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH);
$uri = trim($uri, '/');

// Remove base path if exists
$basePath = 'websites/GAC/Apex';
if ($uri === $basePath || strpos($uri, $basePath . '/') === 0) {
    if ($uri === $basePath) {
        $uri = '';
    } else {
        $uri = substr($uri, strlen($basePath) + 1);
    }
}

session_start();

// Get database connection
$db = getDatabase();
if ($db === null) {
    echo "Database connection failed. Please try again later.";
    exit;
}

// Handle routing
handleRoute($uri, $routes, $db);
?>