<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INVEST - À propos</title>
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
    <!-- Section principale avec texte à gauche et image à droite -->
    <div class="flex flex-col lg:flex-row gap-12 items-center mb-16">
      <!-- Texte à gauche -->
      <div class="w-full lg:w-1/2 space-y-8">
        <h1 class="text-4xl font-bold t text-blue-800">À propos de nous</h1>
        
        <!-- À propos de l'agence -->
        <div>
          <h2 class="text-2xl font-bold mb-4">À propos de l'agence</h2>
          <p class="text-gray-700 leading-relaxed">
            Nous sommes longueonté, une équipe passionnée dédiée à l'innovation, qui allie créativité et technologie pour offrir des solutions exceptionnelles.
          </p>
        </div>

        <!-- Notre mission -->
        <div>
          <h2 class="text-2xl font-bold mb-4">Notre mission</h2>
          <p class="text-gray-700 leading-relaxed">
            Notre mission est de continuellement fournir des solutions uniques et des services exceptionnels. Une agence à votre service, visant à dépasser vos attentes avec une qualité de service inégalée.
          </p>
        </div>

        <!-- Notre vision -->
        <div>
          <h2 class="text-2xl font-bold mb-4">Notre vision</h2>
          <p class="text-gray-700 leading-relaxed">
            À l'agence, notre vision est de vous accompagner dans vos aspirations en nous inspirant des meilleures pratiques. Nous nous engageons à innover constamment pour vous offrir un service marqué par l'intégrité et la transparence.
          </p>
        </div>
      </div>

      <!-- Image à droite -->
      <div class="w-full lg:w-1/2">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
             alt="Équipe de l'agence travaillant ensemble" 
             class="w-full h-auto rounded-lg shadow-lg" />
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>