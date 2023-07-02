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
// Define the PHP pages you want to render as HTML
$pages = [
    'current/about.php',
    'current/contact.php',
    'current/index.php',
    'current/print.php',
];

// Set the base URL of your local server
$baseUrl = 'http://localhost';

// Loop through each page and render it as HTML
foreach ($pages as $page) {
    // Construct the local URL
    $url = $baseUrl . '/' . $page;

    // Get the contents of the PHP page locally
    $file = file_get_contents($url);

    // Generate the output filename based on the page path
    $outputFilename = basename($page, '.php') . '.html';

    // Save the contents to the output file
    file_put_contents($outputFilename, $file);
}

echo 'PHP to HTML build completed successfully.';

    // Stop the local PHP server
    exec("kill $(lsof -t -i:{$port})");
    echo "Local server stopped.\n";
} else {
    echo "Failed to start the local server.\n";
    exit(1);
}


