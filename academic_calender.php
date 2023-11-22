<?php
// Path to the PDF file
$pdfFilePath = "C:\Users\ISHAN\Downloads\Resume .pdf";

// Check if the file exists
if (file_exists($pdfFilePath)) {
    // Set the content type to PDF
    header("Content-type: application/pdf");

    // Open the PDF file
    header("Content-Disposition: inline; filename='Ishan's Resume.pdf'");

    // Read and output the PDF file
    readfile($pdfFilePath);
} else {
    // PDF file not found, display an error message
    echo "PDF file not found.";
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
