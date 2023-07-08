<?php

// Set the output directory where the static HTML files will be saved
$outputDirectory = '/static/';
echo $outputDirectory;

// Create the output directory if it doesn't exist
if (!is_dir($outputDirectory)) {
    mkdir($outputDirectory, 0755, true);
}

// Define the pages you want to render as HTML
$pages = [
    'index.php',
    'pages/about.php',
    'pages/prints.php',
    'pages/contact.php',
    // Add more page filenames as needed
];
    
// // Set the output directory where the static HTML files will be saved
// $outputDirectory = __DIR__ . '/static/'; // Specify the output directory path
// $outputFile = $outputDirectory . $pages; // Specify the output file path

// Loop through each page and render it as HTML
foreach ($pages as $page) {

    // Capture the rendered HTML output
    ob_start();
    include $page;
    $html = ob_get_clean();

    // Set the output filename by replacing the .php extension with .html
    $outputFilename = str_replace('.php', '.html', $page);

    // // Replace file links in the HTML content
    // $htmlContent = str_replace('../assets/', '/assets/', $htmlContent);

    // Save the rendered HTML to the output file
    file_put_contents($outputDirectory . '/' . $outputFilename, $html);
    // file_put_contents($outputFile, $htmlContent);
}

echo 'PHP to HTML build completed successfully.';
