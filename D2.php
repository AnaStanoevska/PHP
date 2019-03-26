<?php
print_r($_FILES['document']);
$FILETYPES_ALLOWED = ('.txt');

if($_FILES['document']['type'] > $FILETYPES_ALLOWED){
    ;
    exit(); // 



?>


