<?php

if (isset($_POST['submit'])) {
    $result1 = $_POST['numb1'];
    $result2 = $_POST['numb2'];
    $operator = $_POST['operator'];
    
    switch ($operator) {
        case '+':
            echo $result1 + $result2;
            break;
        case '-':
            echo $result1 - $result2;
            break;
        case '*':
            echo $result1 * $result2;
            break;
        case '/':
            echo $result1 / $result2;
            break;
    }
}


?>