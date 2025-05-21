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

<?php

include 'data.php';


$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$villaChoisie = null;
foreach ($villas as $villa) {
    if ($villa['id'] === $id) {
        $villaChoisie = $villa;
        break;
    }
}
?>

  <!-- Header -->
  <?php include('header.php'); ?>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <!-- Image principale -->
    <div class="w-full h-[450px] overflow-hidden rounded-lg shadow-lg mb-6">
      <img src="<?= $villaChoisie['image'] ?>" alt="<?= $villaChoisie['nom']?>"  class="w-full h-full object-cover">
    </div>


    
    <!-- Titre -->
      <h1 class="text-3xl font-bold text-blue-800 mb-2 <?= ($lang == 'ar') ? 'text-right' : 'text-left' ?>">

      <?= $tr[$villaChoisie['nom']] ?>
    </h1>

    <!-- Prix & Propriétaire -->
   <!-- Prix & Propriétaire alignés à gauche -->
    <div class="mb-8 space-y-2 <?= ($lang == 'ar') ? 'text-right' : 'text-left' ?>">
      <p class="text-xl text-green-600 font-semibold"><?= number_format($villaChoisie['prix'], 0, ',', ' ') ?> TND</p>
        <p class="text-gray-700">
            <?php if ($lang === 'ar'): ?>
                <span class="font-medium">Jean Dupont</span> : <?= $tr['Propriétaire'] ?>
            <?php else: ?>
                <?= $tr['Propriétaire'] ?> : <span class="font-medium">Jean Dupont</span>
            <?php endif; ?>
        </p>
    </div>


    <!-- Galerie de 6 images -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-12">
      <?php
      // Boucle sur les images secondaires si elles existent
      for ($i = 1; $i <= 6; $i++) {
          $key = 'image_secondaire_' . $i;
          if (!empty($villaChoisie[$key])) {
              echo '<img src="' . htmlspecialchars($villaChoisie[$key]) . '" 
                        class="rounded-lg shadow-md object-cover w-full h-48" 
                        alt="photo secondaire">';
          }
      }
      ?>

    </div>

    <!-- Bloc Description & Caractéristiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- Description -->
      <div>
        <h2 class="text-2xl font-semibold text-blue-700 mb-3"><?= $tr['Description_details'] ?> </h2>
        <p class="text-gray-700 leading-relaxed">
          <?= $villaChoisie['description'] ?>
        </p>
      </div>

      <!-- Caractéristiques -->
      <div>
        <h2 class="text-2xl font-semibold text-blue-700 mb-3"><?= $tr['Caractéristiques'] ?></h2>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
          <?php foreach ($villaChoisie['caracteristiques'] as $key => $value): ?>
              <li>
                  <?php
                  // Si la clé est numérique, c'est une entrée sans valeur : on affiche la valeur comme label
                  if (is_int($key)) {
                      $label = ucfirst(str_replace('_', ' ', $value));
                      echo $label;
                  } else {
                      // Sinon, clé => valeur
                      $label = ucfirst(str_replace('_', ' ', $key));
                      if (is_bool($value)) {
                          echo $label . ' : ' . ($value ? 'Oui' : 'Non');
                      } else {
                          echo $label . ' : ' . $value;
                      }
                  }
                  ?>
              </li>
          <?php endforeach; ?>
        </ul>
      </div>



    </div>

  </main>

  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
