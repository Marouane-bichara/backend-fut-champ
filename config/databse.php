<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "futchampplayers";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }catch(mysqli_sql_exception)
    {
        echo "Could not connect!";
    }

    // $sql = "SELECT * FROM players" ;
    // $resault = mysqli_query($conn , $sql);
    // $allplayers = mysqli_fetch_all($resault, MYSQLI_ASSOC);
    // print_r($allplayers);

 


    ?>