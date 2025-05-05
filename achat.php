<?php
// Récupération des filtres depuis l'URL
$villeFiltre = isset($_GET['ville']) ? $_GET['ville'] : '';
$typeFiltre = isset($_GET['type']) ? $_GET['type'] : '';
$piecesFiltre = isset($_GET['pieces']) ? $_GET['pieces'] : '';

// Exemple de données des villas (normalement ça viendrait d'une base de données)
$villas = [
    [
        'nom' => 'Villa moderne à La Marsa',
        'prix' => 1200000,
        'ville' => 'La Marsa',
        'type' => 'villa',
        'pieces' => 5,
        'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c'
    ],
    [
        'nom' => 'Villa avec vue sur mer à Hammamet',
        'prix' => 950000,
        'ville' => 'Hammamet',
        'type' => 'villa',
        'pieces' => 4,
        'image' => 'https://images.unsplash.com/photo-1572120360610-d971b9d7767c'
    ],
    // Ajoute d'autres villas ici selon tes besoins
];

// Filtrage des villas selon les critères
$filteredVillas = array_filter($villas, function($villa) use ($villeFiltre, $typeFiltre, $piecesFiltre) {
    $matchVille = ($villeFiltre === '' || $villa['ville'] === $villeFiltre);
    $matchType = ($typeFiltre === '' || $villa['type'] === $typeFiltre);
    $matchPieces = ($piecesFiltre === '' || ($piecesFiltre === 'plus' ? $villa['pieces'] > 5 : $villa['pieces'] == $piecesFiltre));
    return $matchVille && $matchType && $matchPieces;
});
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendre un bien immobilier en Tunisie | INVEST</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    .divider {
      height: 2px;
      background: linear-gradient(90deg, transparent, #333, transparent);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <?php include('header.php'); ?>


  <!-- Section de filtre -->
  <?php include('filtre.php'); ?>


  <!-- Section des villas -->
  <section class="max-w-5xl mx-auto my-12 space-y-8">
    <?php if (count($filteredVillas) > 0): ?>
      <?php foreach ($filteredVillas as $villa): ?>
        <div class="flex bg-white shadow-lg overflow-hidden mb-6">
          <!-- Image (60%) -->
          <div class="w-3/5 h-full">
            <img src="<?= $villa['image'] ?>" alt="<?= $villa['nom'] ?>" class="w-full h-full object-cover rounded-l-lg">
          </div>
          <!-- Texte (40%) -->
          <div class="w-2/5 p-6 justify-between rounded-r-lg">
            <h2 class="text-2xl font-bold mb-1"><?= $villa['nom'] ?></h2>
            <p class="text-lg text-green-600 font-semibold mb-20">Prix : <?= number_format($villa['prix'], 0, ',', ' ') ?> TND</p>
            <p class="text-sm text-gray-500 mb-1">Type : <?= ucfirst($villa['type']) ?></p>
            <p class="text-sm text-gray-500 mb-20">Nombre de pièces : <?= $villa['pieces'] ?></p>
            <button class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 font-semibold py-2 px-4 rounded-lg w-full relative bottom-5">
              Détails
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center text-lg text-gray-500" style="margin-top: 7rem !important;margin-bottom: 7rem !important;" >Aucune villa ne correspond à vos critères de recherche.</p>
      <?php endif; ?>
  </section>

  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
