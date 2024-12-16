<?php
    include("../../config/databse.php");
    header("Content-Type: application/json");
    if(isset($_POST))
    {
        $data = file_get_contents("php://input");
        $playerss = json_decode($data,true);

        
        if(isset($playerss['id'], $playerss['status']))
        {

            $id = intval($playerss['id']);
            $status = $playerss["status"];

            $query = "UPDATE players SET status = $status where players.id = $id";
            $resault = mysqli_query($conn , $query);
        }
    }

?>