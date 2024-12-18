<?php 
    include("../../config/databse.php");
    header("Content-Type: application/json; charset=UTF-8");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data = file_get_contents("php://input");
        $playersde = json_decode($data , true);

        if(isset($playersde["id"]))
        {
            $id = intval($playersde["id"]);
            $query = "UPDATE players SET deleted = CURRENT_TIMESTAMP where id = $id";
            $resault = mysqli_query($conn , $query);
        }
    }
    mysqli_close($conn);
?>