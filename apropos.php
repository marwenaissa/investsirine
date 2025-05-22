<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INVEST</title>
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
  <div style="height: 120px;"></div>

 <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Section principale avec texte à droite et image à gauche (pour les langues RTL) -->
    <div class="flex flex-col lg:flex-row-reverse gap-12 items-center mb-16">
      <!-- Texte à droite -->
      <div class="w-full lg:w-1/2 space-y-8 text-right">
        <h1 class="text-4xl font-bold text-blue-800"><?= $tr['about_us']; ?></h1>
        
        <!-- À propos de l'agence -->
        <div>
          <h2 class="text-2xl font-bold mb-4"><?= $tr['about_agency']; ?></h2>
          <p class="text-gray-700 leading-relaxed"><?= $tr['about_agency_text']; ?></p>
        </div>

        <!-- Notre mission -->
        <div>
          <h2 class="text-2xl font-bold mb-4"><?= $tr['our_mission']; ?></h2>
          <p class="text-gray-700 leading-relaxed"><?= $tr['mission_text']; ?></p>
        </div>

        <!-- Notre vision -->
        <div>
          <h2 class="text-2xl font-bold mb-4"><?= $tr['our_vision']; ?></h2>
          <p class="text-gray-700 leading-relaxed"><?= $tr['vision_text']; ?></p>
        </div>
      </div>

      <!-- Image à gauche -->
      <div class="w-full lg:w-1/2">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
             alt="<?= $tr['team_image_alt']; ?>" 
             class="w-full h-auto rounded-lg shadow-lg" />
      </div>
    </div>
</main>


  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
