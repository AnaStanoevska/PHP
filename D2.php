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

$from = $_FILES['document']['tmp_name'];
$to = 'uploads/'.$_FILES['document']['text.txt'];

move_uploaded_file($from, $to);


$text = fopen($file, 'r');
$data = fread($text, $size);
echo $data;
echo "<br/>";




?>