<?php

// Set the output directory where the static HTML files will be saved
$outputDirectory = 'static';

// Define the pages you want to render as HTML
$pages = [
    'index.php',
    './pages/about.php',
    './pages/prints.php',
    './pages/contact.php',
    // Add more page filenames as needed
];

// Loop through each page and render it as HTML
foreach ($pages as $page) {
    // Set the output filename by replacing the .php extension with .html
    $outputFilename = str_replace('.php', '.html', $page);

    // Capture the rendered HTML output
    ob_start();
    include $page;
    $html = ob_get_clean();

    // Create the output directory if it doesn't exist
    if (!is_dir($outputDirectory)) {
        mkdir($outputDirectory, 0755, true);
    }

    // Save the rendered HTML to the output file
    file_put_contents($outputDirectory . '/' . $outputFilename, $html);
}

echo 'PHP to HTML build completed successfully.';
