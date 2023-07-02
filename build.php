<?php
// Disable PHP output buffering
while (ob_get_level()) {
    ob_end_flush();
}

// Set content type to HTML
header('Content-Type: text/html');

// Get the requested path
$path = $_SERVER['REQUEST_URI'];

// Serve PHP files as flat HTML
if (preg_match('/\.php$/', $path)) {
    // Remove the PHP file extension
    $path = preg_replace('/\.php$/', '', $path);

    // Check if the file exists in the current directory
    $currentPath = __DIR__ . '/current/' . $path . '.php';
    if (is_file($currentPath)) {
        // Render the PHP file in the current directory as flat HTML
        include_once($currentPath);
        exit();
    }
}

// Serve static files
$path = __DIR__ . $path;
if (is_file($path)) {
    readfile($path);
    exit();
}

// Return a 404 error if the file doesn't exist
http_response_code(404);
echo '<h1>404 Not Found</h1>';