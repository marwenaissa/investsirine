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




  <!-- Hero Section -->
  <section class="bg-yellow-400 py-16 text-center">
    <h1 class="text-4xl font-bold mb-4">Vendre un bien immobilier en Tunisie avec Invest</h1>
    <p class="text-xl mb-6">Vous souhaitez vendre rapidement et au meilleur prix ? Confiez-nous votre bien !</p>
    <a href="#contact" class="bg-black text-white py-3 px-6 rounded-full hover:bg-gray-800 transition">Demander une estimation gratuite</a>
  </section>

  <!-- Pourquoi Invest -->
  <section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-10">Pourquoi vendre avec Invest ?</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div>
          <h3 class="text-xl font-bold mb-2">Expertise locale</h3>
          <p>Une connaissance approfondie du marché tunisien.</p>
        </div>
        <div>
          <h3 class="text-xl font-bold mb-2">Réseau actif</h3>
          <p>Des acheteurs qualifiés en attente de biens comme le vôtre.</p>
        </div>
        <div>
          <h3 class="text-xl font-bold mb-2">Accompagnement complet</h3>
          <p>Nous vous guidons de l’estimation à la signature chez le notaire.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Étapes -->
  <section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-10">Notre méthode de vente en 5 étapes</h2>
      <div class="grid sm:grid-cols-5 gap-6 text-center">
        <div><p>1. Estimation</p></div>
        <div><p>2. Valorisation</p></div>
        <div><p>3. Diffusion</p></div>
        <div><p>4. Visites</p></div>
        <div><p>5. Signature</p></div>
      </div>
    </div>
  </section>

  <!-- Témoignages -->
  <section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold mb-8">Ce que disent nos clients</h2>
      <blockquote class="italic">"Grâce à Invest, j’ai vendu mon appartement en moins d’un mois ! Super accompagnement."</blockquote>
      <p class="mt-2">— Mme Fatma, Tunis</p>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-10">Questions fréquentes</h2>
      <ul class="space-y-4">
        <li><strong>Quels documents dois-je préparer ?</strong> Titre foncier, carte d’identité, contrat d’acquisition, etc.</li>
        <li><strong>Quel est le délai moyen de vente ?</strong> En moyenne entre 1 à 3 mois selon le type de bien.</li>
        <li><strong>Comment est calculée l’estimation ?</strong> En fonction de l’emplacement, de la superficie, et de la tendance du marché.</li>
      </ul>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center mb-8">Contactez-nous</h2>
      
      <form class="grid gap-6" method="POST" action="vendre.php">
        <input type="text" name="nom" placeholder="Nom complet" class="border p-3 rounded" required>
        <input type="tel" name="tel" placeholder="Téléphone" class="border p-3 rounded" required>
        <input type="text" name="type" placeholder="Type de bien" class="border p-3 rounded" required>
        <input type="text" name="localisation" placeholder="Localisation" class="border p-3 rounded" required>
        
        <button type="submit" class="bg-yellow-400 py-3 rounded text-black font-bold hover:bg-yellow-500">
          Envoyer
        </button>
      </form>
    </div>
  </section>


  
  <?php include('footer.php'); ?>


</body>
</html>