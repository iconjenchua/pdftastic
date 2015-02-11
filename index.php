<?php
require 'PDFTastic.php';

$username = 'user101';
$secret = 'j7xHsdlB1jsdLmd0RE12Xls';

// Instantiate class
$pdf = new PDFTastic($username, $secret);
// Authorize user and get token
$token = $pdf->authorize();

// Format data into array
$data = array('url' => 'http://google.com');
// Make the API call
$result = $pdf->make_api_call('pdf', $data, 'POST');

?>