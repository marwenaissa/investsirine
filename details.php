<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Détails du Bien - INVEST</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    body {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <?php include('header.php'); ?>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <!-- Image principale -->
    <div class="w-full h-[450px] overflow-hidden rounded-lg shadow-lg mb-6">
      <img src="https://images.unsplash.com/photo-1560185127-6ed189bf02b5?auto=format&fit=crop&w=1600&h=900&q=80"
           alt="Image principale"
           class="w-full h-full object-cover" />
    </div>

    <!-- Titre -->
    <h1 class="text-3xl font-bold text-blue-800 mb-2">Villa moderne avec vue sur mer</h1>

    <!-- Prix & Propriétaire -->
   <!-- Prix & Propriétaire alignés à gauche -->
<div class="mb-8 space-y-2">
  <p class="text-xl text-green-600 font-semibold">Prix : 1 200 000 €</p>
  <p class="text-gray-700">Propriétaire : <span class="font-medium">Jean Dupont</span></p>
</div>


    <!-- Galerie de 6 images -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-12">
      <?php
        $images = [
          'photo-1600585154340-be6161a56a0c',
          'photo-1616594039964-0b1c066f93fd',
          'photo-1570129477492-45c003edd2be',
          'photo-1580587771525-78b9dba3b914',
          'photo-1560448070-c6e75019317d',
          'photo-1628011461295-028dcb5c3d65'
        ];
        foreach ($images as $img) {
          echo '<img src="https://images.unsplash.com/' . $img . '?auto=format&fit=crop&w=600&h=400&q=80"
                     class="rounded-lg shadow-md object-cover w-full h-48" alt="photo">';
        }
      ?>
    </div>

    <!-- Bloc Description & Caractéristiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- Description -->
      <div>
        <h2 class="text-2xl font-semibold text-blue-700 mb-3">Description</h2>
        <p class="text-gray-700 leading-relaxed">
          Cette magnifique villa contemporaine est située en bord de mer. Elle dispose de grandes baies vitrées,
          d'une piscine privée, d'un séjour lumineux, de 4 chambres spacieuses et d'une cuisine entièrement équipée.
          L’environnement est calme, idéal pour une résidence principale ou secondaire.
        </p>
      </div>

      <!-- Caractéristiques -->
      <div>
        <h2 class="text-2xl font-semibold text-blue-700 mb-3">Caractéristiques</h2>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
          <li>Surface : 250 m²</li>
          <li>Chambres : 4</li>
          <li>Salles de bain : 3</li>
          <li>Garage : Oui</li>
          <li>Piscine : Oui</li>
          <li>Jardin : 800 m²</li>
        </ul>
      </div>

    </div>

  </main>

  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
