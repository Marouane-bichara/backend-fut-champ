<?php 
    include("../../config/databse.php");
    header("Content-Type: application/json; charset=UTF-8");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data = file_get_contents("php://input");
        $playersde = json_decode($data , true);

        if(isset($playersde["id"]))
        {
            if($playersde["statudelet"] == "deleted")
            {
                $id = intval($playersde["id"]);
                $query = "UPDATE players SET deleted = CURRENT_TIMESTAMP where id = $id";
                $resault = mysqli_query($conn , $query);
            }
            if($playersde["statudelet"] == "Not Deleted")
            {
                $idoption2 = intval($playersde["id"]);
                $queryoption2 = "UPDATE players SET deleted = NULL where id = $idoption2";
                $resaultoption2 = mysqli_query($conn , $queryoption2);
            }

        }
    }
    mysqli_close($conn);
?> 