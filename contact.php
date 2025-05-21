<?php
// Include the trfile
$tr = include("lang/fr.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="grid md:grid-cols-5 gap-12 <?php echo ($tr == 'ar') ? 'lg:grid-cols-5-reverse' : ''; ?>">
    
    <!-- Right Section (devient la gauche en RTL) -->
    <div class="md:col-span-2 space-y-6 <?php echo ($tr== 'ar') ? 'text-right' : 'text-left'; ?>">
      <!-- Image -->
      <div class="mb-6">
        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=400&q=80" 
             alt="<?= $tr['service_image_alt']; ?>" 
             class="w-full h-64 object-cover rounded-lg shadow-md">
      </div>

      <!-- Contact Info -->
     <div class="bg-white p-6 rounded-lg shadow <?php echo ($tr == 'ar') ? 'text-right' : 'text-left'; ?>">
        <h3 class="text-xl font-semibold text-blue-700 mb-2 <?= $lang === 'ar' ? 'text-right' : '' ?>" ><?= $tr['contact_info']; ?></h3>
        <p class="text-gray-700 mb-1 <?= $lang === 'ar' ? 'text-right' : '' ?>""><?= $tr['address']; ?></p>
        <p class="text-gray-700 mb-1 <?= $lang === 'ar' ? 'text-right' : '' ?>""><?= $tr['email']; ?></p>
        <p class="text-gray-700 <?= $lang === 'ar' ? 'text-right' : '' ?>"><?= $tr['phone']; ?></p>
      </div>


      <!-- Video -->
    <div class="rounded-lg overflow-hidden shadow-lg mx-auto w-full max-w-3xl">
  <video class="w-full h-auto"
         controls
         autoplay
         muted
         loop
         playsinline>
    <source src="VID-20250519-WA0012.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la lecture vidéo.
  </video>
</div>



      <!-- Empty space for extension -->
      <div class="mt-8 h-32 bg-gray-100 rounded-lg"></div>
    </div>

    <!-- Left Section (devient la droite en RTL) -->
    <div class="md:col-span-3 space-y-6 <?= $lang === 'ar' ? 'text-right' : '' ?>">
      <h2 class="text-3xl font-bold text-blue-800 mb-16"><?= $tr['contact_us']; ?></h2>
      <p class="text-gray-700 mb-6" style="margin-bottom: 5rem !important;">
        <?= $tr['contact_description']; ?>
      </p>

      <!-- Contact Form -->
      <form action="contact.php" method="POST" class="space-y-4">
        <div>
          <label class="block text-gray-700 font-medium"><?= $tr['form_name']; ?></label>
          <input type="text" name="nom" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
          <label class="block text-gray-700 font-medium"><?= $tr['form_email']; ?></label>
          <input type="email" name="email" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
          <label class="block text-gray-700 font-medium"><?= $tr['form_tel']; ?></label>
          <input type="tel" name="tel" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
          <label class="block text-gray-700 font-medium"><?= $tr['form_message']; ?></label>
          <textarea name="message" rows="5" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded">
          <?= $tr['submit']; ?>
        </button>
      </form>
    </div>

  </div>
</main>



  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
