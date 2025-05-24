<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INVEST - Agence Immobilière</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

    body {
      font-family: 'Montserrat', sans-serif;
    }

    .divider {
      height: 2px;
      background: linear-gradient(90deg, transparent, #333, transparent);
    }

    .property-card {
      transition: transform 0.3s ease;
    }

    .property-card:hover {
      transform: translateY(-5px);
    }

    @keyframes fadeSlide {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .fade-slide {
      animation: fadeSlide 1s ease-out;
    }
   
  @keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
  }

  @layer utilities {
    .animate-marquee {
      animation: marquee 15s linear infinite;
    }
  }
</style>

</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header -->
<?php include('header.php'); ?>

  <div style="height: 120px;"></div>


<!-- Hero Slider Section -->
<section class="relative w-full h-[500px] overflow-hidden mb-16">
  <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1473&q=80"
  alt="Hero background"
  class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <h2 class="text-white text-3xl md:text-5xl font-bold text-center px-4 fade-slide">
      INVEST - Votre agence immobilière de confiance
    </h2>
  </div>
</section>



<style>
  .animate-marquee {
    animation: marquee 50s linear infinite; /* Durée 50 secondes */
  }

  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  /* Texte défilant en rouge stable */
  .animate-marquee span {
    color: #d32f2f; /* Rouge stable */
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2), 0px 0px 25px rgba(0, 0, 0, 0.1); /* Ombre portée pour l'effet 3D */
    letter-spacing: 1px;
    transition: color 0.5s ease-in-out, text-shadow 0.3s ease-in-out;
  }

  /* Survol - Effet rouge stable avec ombre 3D plus marquée */
  .animate-marquee span:hover {
    color: #b71c1c; /* Rouge plus foncé */
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3), 0px 0px 30px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 51, 102, 0.5); /* Ombre plus intense avec un reflet bleu marine */
  }

  /* Éliminer le tiré sous le texte (garantir l'absence de toute bordure ou décoration sous le texte) */
  h2, .animate-marquee span {
    text-decoration: none !important; /* Enlever toute décoration de texte comme un soulignement */
    border-bottom: none !important; /* Enlever toute bordure sous le texte */
    box-shadow: none !important; /* Supprimer les ombres sous le texte */
  }

  /* Pour être plus sûr, on s'assure qu'il n'y a pas d'autres effets */
  .fade-slide {
    text-decoration: none !important;
    border-bottom: none !important;
    box-shadow: none !important;
  }
</style>







  
  
<main class="container mx-auto px-4 py-8 font-serif">
  <!-- Présentation -->
  <section class="container mx-auto px-4 py-16">
  <h2 class="text-2xl font-bold mb-8 text-center text-[#2c2c2c] tracking-wide">Notre Histoire</h2>
  <div class="grid md:grid-cols-2 gap-8 items-center leading-relaxed tracking-wide">

      <!-- Texte à gauche -->
      <div>
        <h3 class="text-2xl font-semibold text-blue-600 mb-4">À propos de nous</h3>
        <p class="text-[#2c2c2c] font-medium mb-4">
          INVEST Immobilier : Votre confiance, notre mission.
        </p>

        <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Innovation</h4>
        <p class="text-[#2c2c2c] font-medium mb-4">
          Nous proposons des solutions modernes et efficaces pour répondre aux besoins actuels du marché immobilier. Notre approche s’adapte à chaque client pour lui offrir un service personnalisé et de qualité.
        </p>

        <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Sens du client</h4>
        <p class="text-[#2c2c2c] font-medium mb-4">
          Votre satisfaction est notre priorité. Nous vous accompagnons à chaque étape de votre projet, que ce soit pour vendre, acheter ou louer, en toute sécurité.
        </p>

        <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Expertise</h4>
        <p class="text-[#2c2c2c] font-medium mb-4">
          Notre agence couvre les zones les plus prisées : la Banlieue Nord, La Marsa, Carthage, les Jardins de Carthage, Gammarth, Sidi Bou Saïd, ainsi que les quartiers d’affaires tels que le Lac 1 et le Lac 2. Notre parfaite connaissance du terrain fait toute la différence.
        </p>

        <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Intégrité</h4>
        <p class="text-[#2c2c2c] font-medium">
          La transparence, le respect et le sens des responsabilités guident chacune de nos actions. Chez INVEST, nous défendons vos intérêts avec rigueur et professionnalisme pour bâtir une relation durable et de confiance.
        </p>
      </div>

      
      <!-- Bloc contenant l'image à droite du texte -->
      <div class="flex justify-center items-center">
        <img src="Notre1.jpg" alt="Notre Histoire" class="object-cover w-full h-[600px] max-h-[600px] rounded-lg shadow-lg" />
      </div>
    </div>
  </section>
</main>


        
        
        
      </div>
      
    </div>
  </section>
  
  
  <!-- Nos Valeurs -->
  
  
</main>




<main class="container mx-auto px-4 py-8">
  
  
  <div class="divider my-8"></div>
  <!-- Biens -->
  <section class="mb-16">
  <h2 class="text-2xl font-bold mb-8 text-center text-[#2c2c2c] tracking-wide">Nos Biens</h2>
  <div class="grid md:grid-cols-3 gap-8">

    <!-- Maison Moderne -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden property-card flex flex-col">
      <div class="relative slideshow">
        <img src="image1.jpeg" class="w-full h-48 object-cover slide active" />
        <img src="image2.jpeg" class="w-full h-48 object-cover slide" />
      </div>
    </div>

    <!-- Appartement Confort -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden property-card flex flex-col">
      <div class="relative slideshow">
        <img src="image3.jpeg" class="w-full h-48 object-cover slide active" />
        <img src="image4.jpeg" class="w-full h-48 object-cover slide" />
      </div>
    </div>

    <!-- Villa de Luxe -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden property-card flex flex-col">
      <div class="relative slideshow">
        <img src="image5.jpeg" class="w-full h-48 object-cover slide active" />
        <img src="image6.jpeg" class="w-full h-48 object-cover slide" />
      </div>
    </div>

  </div>
</section>

<!-- Style pour les slides -->
<style>
  .slide {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  .slide.active {
    opacity: 1;
  }

  .slideshow {
    position: relative;
    height: 12rem; /* 48 = 12*4rem */
  }
</style>

<!-- Script pour faire défiler les images -->
<script>
  const slideshows = document.querySelectorAll('.slideshow');

  slideshows.forEach(slideshow => {
    const slides = slideshow.querySelectorAll('.slide');
    let current = 0;

    setInterval(() => {
      slides[current].classList.remove('active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('active');
    }, 3000); // toutes les 3 secondes
  });
</script>


</main>


<?php include('footer.php'); ?>


</body>
</html>
