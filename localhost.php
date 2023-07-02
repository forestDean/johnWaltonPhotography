<?php

// Change the values based on your project's needs
$host = 'localhost';
$port = 8000;

// Start the local PHP server
exec("php -S {$host}:{$port} -t .", $output, $exitCode);

// Check if the server started successfully
if ($exitCode === 0) {
    echo "Local server started at http://{$host}:{$port}\n";

    // Perform any necessary build actions here

    // Stop the local PHP server
    exec("kill $(lsof -t -i:{$port})");
    echo "Local server stopped.\n";
} else {
    echo "Failed to start the local server.\n";
    exit(1);
}
