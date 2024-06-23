<?php 
    $file = '../assets/pdf/Java.pdf';

    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($file) . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');


?>