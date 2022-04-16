<?php
    $username=filter_input(INPUT_POST,"name");
    $password=filter_input(INPUT_POST,"password");


    if(empty($username)){
        echo $user_error="Please enter your Username";
    }

    include("index.php");
    ?>