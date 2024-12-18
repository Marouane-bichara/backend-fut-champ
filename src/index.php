<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../src/output.css" rel="stylesheet">
  <title>Dashboard</title>
</head>

<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen">
    <aside class="bg-blue-900 text-white w-full md:w-64 flex flex-col">
      <div class="p-4 text-center font-bold text-xl border-b border-blue-700">Dashboard</div>
      <div class="flex justify-center items-center mt-3 flex-col">
        <img src="./images/marouane.jpg" alt="Profile" class="w-28 rounded-full">
        <h2 class="font-bold text-lg mt-2">Marouane Bichara</h2>
      </div>
      <nav class="flex-1 mt-4">
        <ul class="space-y-2">
          <li><a href="./index.php" class="block py-2 px-4 hover:bg-blue-700">Players</a></li>
          <li><a href="#clubs" class="block py-2 px-4 hover:bg-blue-700">Clubs</a></li>
          <li><a href="./pages/addPlayers.php" class="block py-2 px-4 hover:bg-blue-700">Add Player</a></li>
          <li><a href="./pages/field.php" class="block py-2 px-4 hover:bg-blue-700">Field</a></li>
        </ul>
      </nav>
    </aside>

    <main class="flex-1 p-6">
      <section class="mb-6">
        <h1 class="text-3xl font-bold">Welcome to the Dashboard</h1>
      </section>

      <section id="playersGoal" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Players Goalkeepers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php
          include("../config/databse.php");
          $query = "SELECT players.name AS player_name, players.position, goolkeeper.rating, club.name AS club_name, players.status as playerStatus, players.photo as player_image , players.id as player_id , players.deleted as player_deleted FROM players 
                    JOIN goolkeeper ON goolkeeper.id_player = players.id
                    JOIN club ON club.id_player = players.id";
          $resault = mysqli_query($conn, $query);
          $j = 0;
          while ($row = mysqli_fetch_assoc($resault)) {

            if($row["playerStatus"] == null)
            {
              $row["playerStatus"] = "Not selected";
            }
            echo "<div class='bg-white p-6 rounded-lg shadow-lg'>
                                <div class='mb-4'>
                      <img src='{$row['player_image']}' alt='Player Image' class='w-full h-32 object-cover rounded-lg'>
                    </div>
                    <h3 class='text-xl font-semibold'>{$row['player_name']}</h3>
                    <p class='text-gray-500'>{$row['position']}</p>
                    <p class='mt-2 text-sm'>{$row['club_name']}</p>
                    <p class='mt-2 text-lg font-bold'>Rating: {$row['rating']}</p>
                    <div class='mt-4'>
                      <label class='block text-sm'>Status</label>
                      <select id='{$row['player_id']}' class='playerselect w-full mt-1 border rounded px-3 py-2'>
                        <option value='{$row['playerStatus']}'>{$row['playerStatus']}</option>
                        <option value='Field'>Field</option>
                        <option value='Reserve'>Reserve</option>
                        <option value='Null'>Not assignée</option>
                      </select>
                      <select id='{$row['player_id']}' name='selectPlayer' class='playerDelted w-full mt-1 border rounded px-3 py-2'>
                        <option value='{$row['player_deleted']}'>{$row['player_deleted']}</option>
                        <option value='deleted'>Deleted</option>
                        <option value='Not Deleted'>Not Deleted</option>
                      </select>
                    </div>
                    <div class='p-3'>

                    
                    </div>
                    
                  </div>";
                  $j++;
          }
          ?>
        </div>
      </section>

      <section id="players" class="mb-8 overflow-y-auto max-h-[400px]">
        <h2 class="text-2xl font-bold mb-4">Players</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php
          $query = "SELECT players.name AS player_name, players.position, otherplayers.rating, club.name AS club_name , players.status as playerStatus , players.photo as player_image , players.id as player_id, players.deleted as player_deleted FROM players 
                    JOIN otherplayers ON otherplayers.id_player = players.id
                    JOIN club ON club.id_player = players.id";
          $resault = mysqli_query($conn, $query);
$j = 0;
          while ($row = mysqli_fetch_assoc($resault)) {
            if($row["playerStatus"] == null)
            {
              $row["playerStatus"] = "Not selected";
            }
            echo "<div class='bg-white p-6 rounded-lg shadow-lg'>
                    <div class='mb-4'>
                      <img src='{$row['player_image']}' alt='Player Image' class='w-full h-32 object-cover rounded-lg'>
                    </div>
                    <h3 class='playername text-xl font-semibold'>{$row['player_name']}</h3>
                    <p class='text-gray-500'>{$row['position']}</p>
                    <p class='mt-2 text-sm'>{$row['club_name']}</p>
                    <p class='mt-2 text-lg font-bold'>Rating: {$row['rating']}</p>
                    <div class='mt-4'>
                      <label class='block text-sm'>Status</label>
                      <select id='{$row['player_id']}' name='selectPlayer' class='playerselect w-full mt-1 border rounded px-3 py-2'>
                        <option value='{$row['playerStatus']}'>{$row['playerStatus']}</option>
                        <option value='Field'>Field</option>
                        <option value='Reserve'>Reserve</option>
                        <option value='Null'>Not assignée</option>
                      </select>
                      <select id='{$row['player_id']}' name='selectPlayer' class='playerDelted w-full mt-1 border rounded px-3 py-2'>
                        <option value='{$row['player_deleted']}'>{$row['player_deleted']}</option>
                        <option value='deleted'>Deleted</option>
                        <option value='Not Deleted'>Not Deleted</option>
                      </select>
                    </div>
                    <div class='p-3'>

                    
                    </div>

                  </div>";
                  $j++;
          }
          ?>
        </div>
      </section> 
    </main>
  </div>

  <script src="../src/scripts/sendRequest.js"></script>
  <script src="../src/scripts/deletplayer.js"></script>
</body>

</html>



<?php

?>