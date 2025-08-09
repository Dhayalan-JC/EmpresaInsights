<?php

// Define the PROJECT_ROOT constant at the very top.
// This allows you to include files from anywhere in your project.
define('PROJECT_ROOT', dirname(__DIR__));

// Get the requested URI (e.g., '/about.php' or '/contact.php').
$request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// A simple routing mechanism.
if ($request_uri === '') {
    // This is the home page.
    require_once PROJECT_ROOT . '/index.php';
} elseif (file_exists(PROJECT_ROOT . '/' . $request_uri)) {
    // If a file with the requested name exists in the root, serve it.
    // Example: A request for '/about.php' will serve the file 'about.php'.
    require_once PROJECT_ROOT . '/' . $request_uri;
} else {
    // Handle 404 Not Found error.
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1><p>The page you requested could not be found.</p>";
}
