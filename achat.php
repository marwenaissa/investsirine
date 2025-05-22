<?php
// Langue par défaut
$lang = 'fr';
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en', 'ar'])) {
    $lang = $_GET['lang'];
}
$tr = include __DIR__ . "/lang/$lang.php";

// Récupération des filtres depuis l'URL
$villeFiltre = isset($_GET['ville']) ? $_GET['ville'] : '';
$typeFiltre = isset($_GET['type']) ? $_GET['type'] : '';
$piecesFiltre = isset($_GET['pieces']) ? $_GET['pieces'] : '';

// Exemple de données des villas (normalement ça viendrait d'une base de données)
include 'data.php';


// Filtrage des villas selon les critères
$filteredVillas = array_filter($villas, function($villa) use ($villeFiltre, $typeFiltre, $piecesFiltre) {
    if ($villa['transaction'] !== 'vente') {
        return false;
    }
    $matchVille = ($villeFiltre === '' || $villa['ville'] === $villeFiltre);
    $matchType = ($typeFiltre === '' || $villa['type'] === $typeFiltre);
    $matchPieces = ($piecesFiltre === '' || ($piecesFiltre === 'plus' ? $villa['pieces'] > 5 : $villa['pieces'] == $piecesFiltre));
    return $matchVille && $matchType && $matchPieces;
});
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tr['title'] ?></title>
  <meta name="description" content="<?= $tr['description'] ?>">
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
<div style="height: 120px;"></div>

  <!-- Section des filtres -->
  <?php include('filtre.php'); ?>

  <!-- Section des villas -->
  <section class="max-w-5xl mx-auto px-4 sm:px-6 my-8 sm:my-12 space-y-6">
    <?php if (count($filteredVillas) > 0): ?>
        <?php foreach ($filteredVillas as $villa): ?>
            <div class="flex flex-col md:flex-row <?= $lang === 'ar' ? 'md:flex-row-reverse' : '' ?>  bg-white shadow-md rounded-lg overflow-hidden mb-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-full md:w-3/5 h-48 sm:h-64 lg:h-72">
                    <img src="<?= $villa['image'] ?>" alt="<?= $villa['nom'] ?>" 
                         class="w-full h-full object-cover md:rounded-l-lg">
                </div>
                <div class="w-full md:w-2/5 p-4 sm:p-6 flex flex-col">
                    <h2 class="text-xl sm:text-2xl font-bold mb-2 <?= $lang === 'ar' ? 'text-right' : '' ?>"><?= $tr[$villa['nom']] ?? $villa['nom'] ?></h2>
                        <p class="text-lg text-green-600 font-semibold mb-4 sm:mb-6 <?= $lang === 'ar' ? 'text-right' : '' ?>">
                        <?= number_format($villa['prix'], 0, ',', ' ') ?> TND
                    </p>
                    <div class="space-y-2 mb-4 sm:mb-6" <?= $lang === 'ar' ? 'dir="rtl"' : '' ?>>
                        <p class="text-sm sm:text-base text-gray-600 <?= $lang === 'ar' ? 'text-right' : '' ?>">
                            <span class="font-medium"><?= $tr['type'] ?> :</span> <?= $tr[$villa['type']] ?? $villa['type'] ?>
                        </p>
                        <p class="text-sm sm:text-base text-gray-600 <?= $lang === 'ar' ? 'text-right' : '' ?>">
                            <span class="font-medium"><?= $tr['rooms'] ?> :</span> <?= $tr[$villa['pieces']] ?? $villa['pieces'] ?>
                        </p>
                        <p class="text-sm sm:text-base text-gray-600 <?= $lang === 'ar' ? 'text-right' : '' ?>">
                            <span class="font-medium"><?= $tr['city'] ?> :</span> <?= $tr[$villa['ville']] ?? $villa['ville'] ?>
                        </p>
                    </div>

                    <a href="details.php?id=<?= $villa['id'] ?>&lang=<?= $lang ?>" class="mt-auto bg-white border-2 border-orange-500 hover:bg-orange-500 
                        hover:text-white text-orange-500 font-semibold py-2 px-4 rounded-lg 
                        w-full transition duration-300 text-center">
                        <?= $tr['details'] ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="flex justify-center items-center py-10 sm:py-16">
          <p class="text-center text-lg sm:text-xl text-gray-500">
              <?= $tr['no_villas'] ?>
          </p>
      </div>

    <?php endif; ?>
  </section>

  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
