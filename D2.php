<?php
$file = $_FILES['document'];
$type = $file["type"];
$FILETYPES_ALLOWED = ['text/plain'];

if(in_array($_FILES['document']['type'], $FILETYPES_ALLOWED)){
    print_r($file);
    exit(); // 
} else {
    echo "File type not supported";
}

?>