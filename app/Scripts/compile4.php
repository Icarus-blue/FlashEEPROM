<?php

require_once('functions.php');

if (isset($_POST['name'])) {
    $name = preg_replace('/[^a-z0-9áéíóú]+/i', '', $_POST['name']);
    
    if (isset($_POST['is_intel_hex']) && $_POST['is_intel_hex']) {
        $result = compile_hex($_POST['hex']);
        $extension = 'hex';
    } else {
        $result = compile_binary($_POST['hex']);
        $extension = 'bin';
    }
    
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$name.$extension");
    header("Content-Length: " . strlen($result));
    
    echo $result;
}
