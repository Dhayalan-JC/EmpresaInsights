<?php

// 1. Define a constant for the project's root directory.
//    __DIR__ is the directory of the current file ('/api').
//    dirname(__DIR__) goes up one level to the project's root folder.
define('PROJECT_ROOT', dirname(__DIR__));

// 2. Here are examples of how to use this constant for includes.
//    You would typically put these in a main file or an autoloader.

// Example for including a common PHP file (like a header or a function file)
// This assumes your file is located at '/common/header.php'
// require_once PROJECT_ROOT . '/common/header.php';

// Example for including a configuration file
// This assumes your file is located at '/config/database.php'
// require_once PROJECT_ROOT . '/config/database.php';

// Example for a specific library or component
// This assumes your file is located at '/venobox/init.php'
// require_once PROJECT_ROOT . '/venobox/init.php';

// Note: For static assets (CSS, JS, images) in 'assets' or 'venobox',
//       these files should be placed inside your 'public' directory
//       and linked directly in your HTML, not included with PHP.
//       Example: <link rel="stylesheet" href="/assets/css/style.css">

// 3. Finally, require your main application logic from the public directory.
//    This line correctly loads your application's public index file.
require PROJECT_ROOT . '/public/index.php';
