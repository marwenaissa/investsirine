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
 
<div class="overflow-hidden whitespace-nowrap">
  <div class="animate-marquee inline-block">
    <span class="text-3xl font-bold text-gray-600">
      Ceci est un texte défilant de droite à gauche avec Tailwind CSS ✨
    </span>
  </div>
  </div>
  
  
  <main class="container mx-auto px-4 py-8">
    <!-- Présentation -->
    <section class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-bold text-center mb-8">Notre Histoire</h2>
      <div class="grid md:grid-cols-2 gap-8 items-center">
        
        <!-- Texte à droite -->
        <div>
          <h3 class="text-2xl font-semibold text-blue-600 mb-4">About us</h3>
          <p class="text-gray-500 mb-4">
            Promier Reality: Creating Connections, Building Communities.
          </p>
          
          <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Innovation</h4>
          <p class="text-gray-700 mb-4">
            Our agency is dedicated to pioneering innovative real estate solutions that make dreams of noniscoverable is reality.
          </p>

          <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Customer-Centric</h4>
          <p class="text-gray-700 mb-4">
            We are committed to delivering exceptional services and building lasting relationships with our clients.
          </p>
          
          <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Expertise</h4>
          <p class="text-gray-700 mb-4">
            With decades of combined experience, our team brings unparalleled expertise and knowledge to every transaction.
          </p>
          
          <h4 class="text-xl font-semibold text-blue-700 mt-6 mb-2">Integrity</h4>
          <p class="text-gray-700">
            Transparency and honesty are at the core of our values, ensuring trust and satisfaction for every client.
          </p>
        </div>
        
        <!-- Image à gauche -->
        <div class="h-screen w-full flex justify-center items-center">
          <img src="Notre.jpg" alt="Notre Histoire" class="object-cover w-full h-full rounded-lg shadow-lg" />
        </div>
        
        
        
      </div>
      
    </div>
  </section>
  
  
  <!-- Nos Valeurs -->
  
  
</main>




<main class="container mx-auto px-4 py-8">
  
  
  <div class="divider my-8"></div>
  <!-- Biens -->
  <section class="mb-16">
    <h2 class="text-2xl font-bold mb-8 text-center">Nos Biens</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Maison Moderne -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden property-card flex flex-col">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1470&q=80"
      alt="Maison Moderne" class="w-full h-48 object-cover" />
      
    </div>
    
    <!-- Appartement Confort -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden property-card flex flex-col">
      <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=1470&q=80"
      alt="Appartement Confort" class="w-full h-48 object-cover" />
      
    </div>
    
    <!-- Villa de Luxe -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden property-card flex flex-col">
      <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&fit=crop&w=1470&q=80"
      alt="Villa de Luxe" class="w-full h-48 object-cover" />
      
    </div>
  </div>
</section>

</main>


<?php include('footer.php'); ?>


</body>
</html>
