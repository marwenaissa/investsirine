<?php
require_once 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $type = $_POST['type'];
    $localisation = $_POST['localisation'];

    try {
        $cnx = Connexion::getInstance()->getConnexion();
        $sql = "INSERT INTO estimation (nom, tel, type, localisation) VALUES (:nom, :tel, :type, :localisation)";
        $stmt = $cnx->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':tel' => $tel,
            ':type' => $type,
            ':localisation' => $localisation
        ]);
    } catch (PDOException $e) {
        echo "Erreur lors de l'envoi : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>INVEST</title>
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

  <?php include('header.php'); ?>

  <!-- Hero Section -->
  <section class="bg-[#dbd5d2] py-16 text-center">
    <h1 class="text-4xl font-bold mb-4"><?= $tr['sell'] ?> <?= $tr['property'] ?> <?= $tr['tunisia'] ?> <?= $tr['with_invest'] ?></h1>
    <p class="text-xl mb-6"><?= $tr['want_to_sell'] ?></p>
    <a href="#contact" class="bg-[#e51820] text-white py-3 px-6 rounded-full hover:bg-[#c4131b] transition"><?= $tr['request_free_estimate'] ?></a>
  </section>

  <!-- Pourquoi Invest -->
  <section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-10"><?= $tr['why_sell_with_invest'] ?></h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div>
          <h3 class="text-xl font-bold mb-2"><?= $tr['local_expertise'] ?></h3>
          <p><?= $tr['deep_knowledge'] ?></p>
        </div>
        <div>
          <h3 class="text-xl font-bold mb-2"><?= $tr['active_network'] ?></h3>
          <p><?= $tr['buyers_waiting'] ?></p>
        </div>
        <div>
          <h3 class="text-xl font-bold mb-2"><?= $tr['full_support'] ?></h3>
          <p><?= $tr['guidance_all_steps'] ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Étapes -->
  <section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-10"><?= $tr['our_sales_method'] ?></h2>
      <div class="grid sm:grid-cols-5 gap-6 text-center">
        <div><p>1. <?= $tr['estimation'] ?></p></div>
        <div><p>2. <?= $tr['valorisation'] ?></p></div>
        <div><p>3. <?= $tr['diffusion'] ?></p></div>
        <div><p>4. <?= $tr['visits'] ?></p></div>
        <div><p>5. <?= $tr['signature'] ?></p></div>
      </div>
    </div>
  </section>

 <!-- Témoignages -->
<!-- Témoignages -->
<!-- Témoignages -->
<div class="rounded-lg overflow-hidden shadow-lg mx-auto w-full max-w-lg">
  <video class="w-full h-auto" 
         controls 
         autoplay 
         muted 
         loop 
         playsinline>
    <source src="VID-20250521-WA0000.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la lecture vidéo.
  </video>
</div>


  <!-- FAQ -->
  <section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-10"><?= $tr['faq'] ?></h2>
      <ul class="space-y-4">
        <li class="<?= $lang === 'ar' ? 'text-right' : '' ?>"><strong><?= $tr['document_preparation'] ?></strong> <?= $tr['documents_needed'] ?></li>
        <li class="<?= $lang === 'ar' ? 'text-right' : '' ?>"><strong><?= $tr['average_sale_time'] ?></strong> <?= $tr['sale_duration'] ?></li>
        <li class="<?= $lang === 'ar' ? 'text-right' : '' ?>"><strong><?= $tr['how_is_estimation_calculated'] ?></strong> <?= $tr['calculation_criteria'] ?></li>
      </ul>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-8 <?= $lang === 'ar' ? 'text-right' : '' ?>""><?= $tr['contact_us'] ?></h2>
      
      <form class="grid gap-6" method="POST" action="vendre.php">
        <input type="text" name="nom" placeholder="<?= $tr['full_name'] ?>" class="border p-3 rounded <?= $lang === 'ar' ? 'text-right' : '' ?>"" required>
        <input type="tel" name="tel" placeholder="<?= $tr['phone'] ?>" class="border p-3 rounded <?= $lang === 'ar' ? 'text-right' : '' ?>"" required>
        <input type="text" name="type" placeholder="<?= $tr['property_type'] ?>" class="border p-3 rounded <?= $lang === 'ar' ? 'text-right' : '' ?>"" required>
        <input type="text" name="localisation" placeholder="<?= $tr['location'] ?>" class="border p-3 rounded <?= $lang === 'ar' ? 'text-right' : '' ?>"" required>
        
        <button type="submit" class="bg-[#e51820] text-white py-3 px-6 rounded-full hover:bg-[#c4131b] transition">
          <?= $tr['send'] ?>
        </button>
      </form>
    </div>
  </section>

  <?php include('footer.php'); ?>

</body>
</html>
