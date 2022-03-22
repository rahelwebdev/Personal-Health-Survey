<?php
   
//$POST is a super global variable used to collect form data after submit with method="post"
    $lastPageID= $_POST["lastPageID"];

//$_SESSION sets session variables
    $_SESSION[$lastPageID]= $_POST;

    echo '<pre>';
    //show all the session variables for a user
    print_r($_SESSION);
    echo '</pre>';

    ?>