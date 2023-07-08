<?php

// Set the output directory where the static HTML files will be saved
$outputDirectory = $_SERVER['GITHUB_WORKSPACE'] . '/static/';
echo 'Directory: ' . $outputDirectory . PHP_EOL;

// Create the output directory if it doesn't exist
if (!is_dir($outputDirectory)) {
    if (!mkdir($outputDirectory, 0755, true) && !is_dir($outputDirectory)) {
        die('Failed to create output directory: ' . $outputDirectory);
    }
}

// Define the pages you want to render as HTML
$pages = [
    'index.php',
    'pages/about.php',
    'pages/prints.php',
    'pages/contact.php',
    // Add more page filenames as needed
];

// Loop through each page and render it as HTML
foreach ($pages as $page) {

    // Capture the rendered HTML output
    ob_start();
    include $page;
    $html = ob_get_clean();

    // Set the output filename by replacing the .php extension with .html
    $outputFilename = str_replace('.php', '.html', $page);
    echo ' ~ ' . $outputFilename . PHP_EOL;
    
    // // Replace file links in the HTML content
    // $htmlContent = str_replace('../assets/', '/assets/', $htmlContent);

    // Save the rendered HTML to the output file
    if (!file_put_contents($outputDirectory . $outputFilename, $html)) {
        die('Failed to write HTML to file: ' . $outputDirectory . $outputFilename);
    }

     // Set file permissions for the output file
    if (!chmod($outputDirectory . $outputFilename, 0644)) {
        die('Failed to set file permissions: ' . $outputDirectory . $outputFilename);
    }
    
   // Check if the file exists
    if (!file_exists($outputDirectory . $outputFilename)) {
        die('Failed to create HTML file: ' . $outputDirectory . $outputFilename);
    }
    
}

echo 'PHP to HTML build completed successfully.' . PHP_EOL;