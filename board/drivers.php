<?php
  // Povezivanje sa bazom podataka
  require_once("baza.php");

  // SQL upit za uzimanje podataka o vozačima
  $rezultat = $baza->query("SELECT * FROM drivers");

  // Dohvatanje svih podataka kao asocijativni niz
  $drivers = $rezultat->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <div class="bg-gray-800 text-white p-4">
  <div class="flex justify-between">
    <h1 class="text-3xl font-semibold">Super Ego Holding</h1>
    <div class="flex space-x-4">
      <a href="#" class="hover:bg-gray-700 p-2 rounded">Home</a>
      <a href="drivers.php" class="hover:bg-gray-700 p-2 rounded">Drivers</a>
      <a href="#" class="hover:bg-gray-700 p-2 rounded">Trailers</a>
    </div>
  </div>
</div>

  <div class="container mx-auto py-8">
    <!-- Tabela sa podacima o vozačima -->
    <div class="overflow-x-auto shadow-md rounded-lg bg-white">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-medium">ID</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Truck</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Trailer</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Agreement</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Phone</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Name</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Company</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Make</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Model</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Year</th>
            <th class="px-6 py-3 text-left text-sm font-medium">VIN</th>
            <th class="px-6 py-3 text-left text-sm font-medium">Key Code</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach($drivers as $driver): ?>
            <tr>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['id']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['truck']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['trailer']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['agreemant']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['phone']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['name']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['company']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['make']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['model']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['year']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['vin']) ?></td>
              <td class="px-6 py-4 text-sm"><?= htmlspecialchars($driver['keycode']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
