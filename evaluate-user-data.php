<?php
    /*
    array

    Funktion isset() zusammen mit einer if-Abfrage
    */

if (isset ($_SESSION['index'])) {

$post = $_SESSION['index'];

print_r($post);
  
}
?>