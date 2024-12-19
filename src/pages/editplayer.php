<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <title>Dashboard</title>
</head>

<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen">
    <aside class="bg-blue-900 text-white w-full md:w-64 flex flex-col">
      <div class="p-4 text-center font-bold text-xl border-b border-blue-700">Dashboard</div>
      <div class="flex justify-center items-center mt-3 flex-col">
        <img src="../images/marouane.jpg" alt="Profile" class="w-28 rounded-full">
        <h2 class="font-bold text-lg mt-2">Marouane Bichara</h2>
      </div>
      <nav class="flex-1 mt-4">
        <ul class="space-y-2">
          <li><a href="../index.php" class="block py-2 px-4 hover:bg-blue-700">Players</a></li>
          <li><a href="../pages/addPlayers.php" class="block py-2 px-4 hover:bg-blue-700">Add Player</a></li>
          <li><a href="../pages/editplayer.php" class="block py-2 px-4 hover:bg-blue-700">Edit Player</a></li>
          <li><a href="../pages/field.php" class="block py-2 px-4 hover:bg-blue-700">Field</a></li>
        </ul>
      </nav>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
      <section class="mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6">Welcome to the Dashboard</h1>
      </section>

      <section class="mb-12 flex justify-center items-center">
        <div class="flex items-center space-x-4">
          <input type="text" id="searchInput" placeholder="Search for a player..." class="w-full md:w-80 lg:w-96 p-3 rounded-lg bg-gray-200 text-gray-800 text-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 hover:bg-gray-100 ">
          <button id="searchButton" class="ml-2 bg-blue-600 text-white text-lg font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
            Search
          </button>
        </div>
      </section>

      <section id="playersGoal" class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Players Goalkeepers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="playersContainer">
          <div class="bg-white rounded-xl shadow-lg p-6 h-72 flex justify-center items-center text-gray-500 text-lg font-medium border border-gray-300">
            <span>No results yet. Search for a player!</span>
          </div>
          <div class="bg-white rounded-xl shadow-lg p-6 h-72 flex justify-center items-center text-gray-500 text-lg font-medium border border-gray-300">
            <span>No results yet. Search for a player!</span>
          </div>
          <div class="bg-white rounded-xl shadow-lg p-6 h-72 flex justify-center items-center text-gray-500 text-lg font-medium border border-gray-300">
            <span>No results yet. Search for a player!</span>
          </div>
        </div>
      </section>

    </main>
  </div>

  <script src="../scripts/editplayer.js echo time(); ?>"></script>

</body>

</html>

<?php

?>
