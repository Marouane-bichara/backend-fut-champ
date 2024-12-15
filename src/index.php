<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen">
    <aside class="bg-blue-900 text-white w-full md:w-64 flex flex-col">

      <div class="p-4 text-center font-bold text-xl border-b border-blue-700">Dashboard</div>
      <div class=" w-ful flex justify-center items-center mt-3 flex-col">
           <img src="./images/marouane.jpg" alt="" class="w-[120px] rounded-[50%]">  
           <h2 class="font-bold text-[1.3em] mt-2">Marouane Bichara</h2>
      </div>
      <nav class="flex-1 mt-4">
        <ul class="space-y-2">
        <li><a href="./index.php" class="block py-2 px-4 hover:bg-blue-700">Home</a></li>
          <li><a href="#players" class="block py-2 px-4 hover:bg-blue-700">Players</a></li>
          <li><a href="#clubs" class="block py-2 px-4 hover:bg-blue-700">Clubs</a></li>
          <li><a href="#nationality" class="block py-2 px-4 hover:bg-blue-700">Nationalities</a></li>
          <li><a href="#otherplayers" class="block py-2 px-4 hover:bg-blue-700">Other Players</a></li>
          <li><a href="#goalkeepers" class="block py-2 px-4 hover:bg-blue-700">Goalkeepers</a></li>
          <li><a href="./pages/addPlayers.php" class="block py-2 px-4 hover:bg-blue-700">Add Player</a></li>
          <li><a href="./pages/field.php" class="block py-2 px-4 hover:bg-blue-700">Field</a></li>
        </ul>
      </nav>
    </aside>
    <main class="flex-1 p-6 overflow-y-auto">
    <section class="mb-6">
        <h1 class="text-3xl font-bold">Welcome to the Dashboard</h1>
      </section>
      <div id="players" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Players</h2>
        <div class="bg-white p-4 rounded shadow">Content for players</div>
      </div>
      <div id="clubs" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Clubs</h2>
        <div class="bg-white p-4 rounded shadow">Content for clubs</div>
      </div>
      <div id="nationality" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Nationalities</h2>
        <div class="bg-white p-4 rounded shadow">Content for nationalities</div>
      </div>
      <div id="otherplayers" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Other Players</h2>
        <div class="bg-white p-4 rounded shadow">Content for other players</div>
      </div>
      <div id="goalkeepers" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Goalkeepers</h2>
        <div class="bg-white p-4 rounded shadow">Content for goalkeepers</div>
      </div>
    </main>
  </div>
</body>
</html>

<?php
 include("../config/databse.php");


?>