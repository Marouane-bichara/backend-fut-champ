<?php
include("../../config/databse.php");

header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = file_get_contents("php://input");
    $playerss = json_decode($data, true);

    if (isset($playerss["id"], $playerss["status"])) {

        $id = intval($playerss['id']); 
        $status = htmlspecialchars($playerss['status']); 

 
        $query = "UPDATE players SET status = '$status' WHERE id = $id";
        $resaultt = mysqli_query($conn, $query);

    }
}


mysqli_close($conn);
?>
