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
  <!-- Header -->
  <?php include('header.php'); ?>
  
   <!-- Section de filtre -->
  <?php include('filtre.php'); ?>


<!-- Section des villas -->
<section class="max-w-5xl mx-auto my-12 space-y-8">
  <!-- Villa 1 -->
  <div class="flex bg-white shadow-lg overflow-hidden">
    <!-- Image (60%) -->
    <div class="w-3/5 h-full">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
           alt="Villa 1"
           class="w-full h-full object-cover rounded-l-lg">
    </div>
    <!-- Texte (40%) -->
    <div class="w-2/5 p-6 justify-between rounded-r-lg">
      <h2 class="text-2xl font-bold mb-1">Villa moderne à La Marsa</h2>
      <p class="text-lg text-green-600 font-semibold mb-20">Prix : 1 200 000 TND</p> <!-- Marge augmentée -->
      <p class="text-sm text-gray-500 mb-1">Type : Villa</p>
      <p class="text-sm text-gray-500 mb-20">Nombre de pièces : 5</p>
      <button class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 font-semibold py-2 px-4 rounded-lg w-full">
        Détails
      </button>
    </div>
    
    
  </div>

  <!-- Villa 2 -->
  <div class="flex bg-white shadow-lg overflow-hidden">
    <div class="w-3/5 h-full">
      <img src="https://images.unsplash.com/photo-1572120360610-d971b9d7767c"
           alt="Villa 2"
           class="w-full h-full object-cover rounded-l-lg">
    </div>
    <div class="w-2/5 p-6 justify-between rounded-r-lg">
      <h2 class="text-2xl font-bold mb-1">Villa avec vue sur mer à Hammamet</h2>
      <p class="text-lg text-green-600 font-semibold mb-20">Prix : 950 000 TND</p>
      <p class="text-sm text-gray-500 mb-4">Type : Villa</p>
      <p class="text-sm text-gray-500 mb-20">Nombre de pièces : 4</p>
      <button class="bg-white border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 font-semibold py-2 px-4 rounded-lg w-full">
        Détails
      </button>
      </div>
  </div>
</section>




  <!-- Footer -->
  <?php include('footer.php'); ?>


</body>
</html>
