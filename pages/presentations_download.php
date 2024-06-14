<?php
// document_download.php

if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Sanitize the file name to prevent directory traversal attacks
    $file = basename($file);

    // Define the path to the directory where your presentation files are stored
    $filePath = '../public/presentations/' . $file . '.pptx';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Set the appropriate headers to force a download as a pptx file
        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));

        // Read the file and send it to the output buffer
        readfile($filePath);
        exit;
    } else {
        echo 'File not found: ' . htmlspecialchars($filePath);
    }
} else {
    echo 'No file specified.';
}
?>
