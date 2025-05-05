<?php
require_once 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $cnx = Connexion::getInstance()->getConnexion();
        $sql = "INSERT INTO contact (nom, tel, email, message) VALUES (:nom, :tel, :email, :message)";
        $stmt = $cnx->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':tel' => $tel,
            ':email' => $email,
            ':message' => $message
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
  <title>Contactez-nous - INVEST</title>
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
    <div class="grid md:grid-cols-5 gap-12">
      
      <!-- Partie gauche -->
      <div class="md:col-span-3 space-y-6">
      <h2 class="text-3xl font-bold text-blue-800 mb-16">📞 Contactez-nous</h2>
      <p class="text-gray-700 mb-6" style="margin-bottom: 5rem !important;">
        Vous avez une question, un projet ou souhaitez visiter un bien ? Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.
        </p>

        <!-- Formulaire -->
        <form action="contact.php" method="POST" class="space-y-4">
          <div>
            <label class="block text-gray-700 font-medium">Nom</label>
            <input email="text" name="nom" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label class="block text-gray-700 font-medium">Email</label>
            <input email="email" name="email" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label class="block text-gray-700 font-medium">Tel</label>
            <input email="tel" name="tel" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label class="block text-gray-700 font-medium">Message</label>
            <textarea name="message" rows="5" required class="w-full border border-gray-300 rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
          </div>
          <button email="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded">
            Envoyer
          </button>
        </form>
      </div>

      <!-- Partie droite -->
      <div class="md:col-span-2 space-y-6">
        <!-- Image -->
        <div class="mb-6">
        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=400&q=80" 
     alt="Service client et contact professionnel" 
     class="w-full h-64 object-cover rounded-lg shadow-md">
        </div>

        <!-- Coordonnées -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold text-blue-700 mb-2">Nos coordonnées</h3>
          <p class="text-gray-700 mb-1">📍 123 Avenue des Investissements, Paris</p>
          <p class="text-gray-700 mb-1">📧 contact@invest.fr</p>
          <p class="text-gray-700">📞 +33 1 23 45 67 89</p>
        </div>

    
        <!-- Vidéo -->
        <div class="rounded-lg overflow-hidden shadow-lg">
        <iframe class="w-full h-64 md:h-80" 
                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                title="Vidéo de présentation" 
                frameborder="0" 
                allowfullscreen
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
        </iframe>
        </div>


        <!-- Espace vide pour extension -->
        <div class="mt-8 h-32 bg-gray-100 rounded-lg"></div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include('footer.php'); ?>

</body>
</html>
