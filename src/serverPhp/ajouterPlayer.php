<?php

      include("../../config/databse.php");

      header("Content-Type: application/json; charset=UTF-8");

      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $data = file_get_contents("php://input");
        $playerinfoAdd = json_decode($data,true);

        if(isset($playerinfoAdd["name"]))
        {   

            $nome = htmlspecialchars($playerinfoAdd["name"]);
            $photo = htmlspecialchars($playerinfoAdd["photo"]);
            $position = htmlspecialchars($playerinfoAdd["position"]);

            $query = "INSERT INTO players (`name`, `photo`, `position`,`status`,`deleted`) 
            VALUES ('$nome', '$photo', '$position', NULL , Null)";
            $resaultt = mysqli_query($conn,$query);

            $last_id = mysqli_insert_id($conn);





            if($playerinfoAdd["position"] == "GK")
            {
                // echo json_encode(['success' => true]);
                // die();
                $nationality = htmlspecialchars($playerinfoAdd["nationality"]);
                $flage = htmlspecialchars($playerinfoAdd["flage"]);
                $club = htmlspecialchars($playerinfoAdd["club"]);
                $logo = htmlspecialchars($playerinfoAdd["logo"]);
                $rating = htmlspecialchars($playerinfoAdd["rating"]);
                $Diving = htmlspecialchars($playerinfoAdd["Diving"]);
                $Handling = htmlspecialchars($playerinfoAdd["Handling"]);
                $Kicking = htmlspecialchars($playerinfoAdd["Kicking"]);
                $Reflexes = htmlspecialchars($playerinfoAdd["Reflexes"]);
                $Speed = htmlspecialchars($playerinfoAdd["Speed"]);
                $Positioning = htmlspecialchars($playerinfoAdd["Positioning"]);


                $querynationality = "INSERT INTO nationality (`name`, `flage` , `id_player`)
                VALUES ('$nationality','$flage','$last_id')";
                $resaultnation = mysqli_query($conn , $querynationality);
                

                $queryclub = "INSERT INTO club (`name`, `logo` , `id_player`)
                VALUES ('$club','$logo','$last_id')";
                $resaultClub = mysqli_query($conn , $queryclub);

                $querygoolkeeper = "INSERT INTO goolkeeper (`id_player`, `rating` , `diving`,`handling`,`kicking`,`reflexes`,`speed`,`positioning`)
                VALUES ('$last_id','$rating','$Diving','$Handling','$Kicking','$Reflexes','$Speed','$Positioning')";
                $resaultgoolkeeper = mysqli_query($conn , $querygoolkeeper);
              

            }
            if($playerinfoAdd["position"] != "GK")
            {

                $nationality = htmlspecialchars($playerinfoAdd["nationality"]);
                $flage = htmlspecialchars($playerinfoAdd["flage"]);
                $club = htmlspecialchars($playerinfoAdd["club"]);
                $logo = htmlspecialchars($playerinfoAdd["logo"]);
                $rating = htmlspecialchars($playerinfoAdd["rating"]);
                $pace = htmlspecialchars($playerinfoAdd["pace"]);
                $shooting = htmlspecialchars($playerinfoAdd["shooting"]);
                $passing = htmlspecialchars($playerinfoAdd["passing"]);
                $dribbling = htmlspecialchars($playerinfoAdd["dribbling"]);
                $defending = htmlspecialchars($playerinfoAdd["defending"]);
                $physical = htmlspecialchars($playerinfoAdd["physical"]);


                $querynationalityy = "INSERT INTO nationality (`name`, `flage` , `id_player`)
                VALUES ('$nationality','$flage','$last_id')";
                $resaultnation = mysqli_query($conn , $querynationalityy);
                

                $queryclubb = "INSERT INTO club (`name`, `logo` , `id_player`)
                VALUES ('$club','$logo','$last_id')";
                $resaultClubb = mysqli_query($conn , $queryclubb);

                $queryotherplayers = "INSERT INTO otherplayers (`id_player`, `rating` , `pace`,`shooting`,`passing`,`dribbling`,`defending`,`physical`)
                VALUES ('$last_id','$rating','$pace','$shooting','$passing','$dribbling','$defending','$physical')";
                $resaultotherplayers = mysqli_query($conn , $queryotherplayers);

            }
            
        }
      }

?>