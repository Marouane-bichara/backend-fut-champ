<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <title>Responsive Dashboard</title>
</head>
<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen">
    <aside class="bg-blue-900 text-white w-full md:w-64 flex flex-col">

      <div class="p-4 text-center font-bold text-xl border-b border-blue-700">Dashboard</div>
      <div class=" w-ful flex justify-center items-center mt-3 flex-col">
           <img src="../images/marouane.jpg" alt="" class="w-[120px] rounded-[50%]">  
           <h2 class="font-bold text-[1.3em] mt-2">Marouane Bichara</h2>
      </div>
      <nav class="flex-1 mt-4">
        <ul class="space-y-2">
        <li><a href="../index.php" class="block py-2 px-4 hover:bg-blue-700">Home</a></li>
          <li><a href="#players" class="block py-2 px-4 hover:bg-blue-700">Players</a></li>
          <li><a href="#clubs" class="block py-2 px-4 hover:bg-blue-700">Clubs</a></li>
          <li><a href="#nationality" class="block py-2 px-4 hover:bg-blue-700">Nationalities</a></li>
          <li><a href="#otherplayers" class="block py-2 px-4 hover:bg-blue-700">Other Players</a></li>
          <li><a href="#goalkeepers" class="block py-2 px-4 hover:bg-blue-700">Goalkeepers</a></li>
          <li><a href="../pages/addPlayers.php" class="block py-2 px-4 hover:bg-blue-700">Add Player</a></li>
          <li><a href="../pages/field.php" class="block py-2 px-4 hover:bg-blue-700">Field</a></li>
        </ul>
      </nav>
    </aside>
    <main class="flex-1 p-6 overflow-y-auto">
    <section class="mb-6">
        <h1 class="text-3xl font-bold">Welcome to the Dashboard</h1>
      </section>
      <section class="mt-6 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-blue-600 mb-6 text-center">Add a New Player</h2>
    <form id="player-form" class="grid grid-cols-1 md:grid-cols-2 gap-6" action="addpPlayer.php">
        <div class="flex flex-col">
            <label for="name" class="text-gray-800 text-sm mb-2">Name</label>
            <input type="text" id="name" placeholder="Enter player's name" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="position" class="text-gray-800 text-sm mb-2">Position</label>
            <input type="text" id="position" placeholder="Enter player's position" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="overall" class="text-gray-800 text-sm mb-2">Overall (10-99)</label>
            <input type="number" id="overall" placeholder="Player's overall rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="pace" class="text-gray-800 text-sm mb-2">Pace</label>
            <input type="number" id="pace" placeholder="Player's pace rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="shooting" class="text-gray-800 text-sm mb-2">Shooting</label>
            <input type="number" id="shooting" placeholder="Player's shooting rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="passing" class="text-gray-800 text-sm mb-2">Passing</label>
            <input type="number" id="passing" placeholder="Player's passing rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="dribbling" class="text-gray-800 text-sm mb-2">Dribbling</label>
            <input type="number" id="dribbling" placeholder="Player's dribbling rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="defending" class="text-gray-800 text-sm mb-2">Defending</label>
            <input type="number" id="defending" placeholder="Player's defending rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="physical" class="text-gray-800 text-sm mb-2">Physical</label>
            <input type="number" id="physical" placeholder="Player's physical rating" class="p-3 rounded bg-gray-100 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="col-span-2 bg-blue-600 hover:bg-blue-500 p-3 rounded text-white mt-6">Add Player</button>
    </form>
</section>
    </main>
  </div>
</body>
</html>

<?php
 include("../../config/databse.php");


?>