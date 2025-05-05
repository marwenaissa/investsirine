<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADMIN - INVEST</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .sidebar {
      min-height: 100vh;
    }

    .fade-slide {
      animation: fadeSlide 0.8s ease-out;
    }

    @keyframes fadeSlide {
      0% { opacity: 0; transform: translateY(10px); }
      100% { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 flex">

  <!-- Sidebar -->
  <aside class="sidebar w-64 bg-white shadow-md px-6 py-8">
    <h2 class="text-2xl font-bold mb-10 text-blue-700">INVEST Admin</h2>
    <nav class="space-y-4">
      <a href="index.php" class="block text-blue-600 font-semibold hover:underline">🏠 Dashboard</a>
      <a href="messages.php" class="block text-gray-700 hover:text-blue-600">📩 Messages</a>
      <a href="emails.php" class="block text-gray-700 hover:text-blue-600">📬 Mails</a>
    </nav>
  </aside>

  <!-- Main content -->
  <main class="flex-1 p-8 fade-slide relative">

    <!-- Bouton Déconnexion -->
    <div class="absolute top-8 right-8">
      <a href="logout.php" class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded">
        Déconnexion
      </a>
    </div>

    <h1 class="text-3xl font-bold mb-8 text-green-900">Panneau d'administration</h1>

    <!-- Dashboard Stats -->
    <section id="dashboard-stats" class="mb-16">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Stats: Messages -->
        <div class="bg-white shadow rounded-lg p-6">
          <h2 class="text-xl font-semibold text-blue-600">📩 Messages</h2>
          <p class="text-2xl font-bold text-blue-900">102</p>
          <p class="text-gray-600">Messages reçus</p>
          <a href="messages.php" class="text-blue-600 hover:text-blue-800">Voir les messages</a>
        </div>

        <!-- Stats: Mails -->
        <div class="bg-white shadow rounded-lg p-6">
          <h2 class="text-xl font-semibold text-blue-600">📬 Mails</h2>
          <p class="text-2xl font-bold text-blue-900">58</p>
          <p class="text-gray-600">Mails reçus</p>
          <a href="emails.php" class="text-blue-600 hover:text-blue-800">Voir les mails</a>
        </div>

        <!-- Stats: Nouveaux Messages -->
        <div class="bg-white shadow rounded-lg p-6">
          <h2 class="text-xl font-semibold text-blue-600">📩 Nouveaux Messages</h2>
          <p class="text-2xl font-bold text-blue-900">5</p>
          <p class="text-gray-600">Messages non lus</p>
          <a href="messages.php" class="text-blue-600 hover:text-blue-800">Voir les nouveaux</a>
        </div>

      </div>
    </section>

    <!-- Section Mails et Messages Recents -->
    <section id="recent-activity" class="mb-16">
      <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4 text-blue-600">📩 Derniers Messages et Mails</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Derniers Messages -->
          <div>
            <h3 class="text-xl font-semibold text-blue-600">Derniers Messages</h3>
            <ul class="list-disc pl-5">
              <li><strong>Jean Dupont</strong> - "Je souhaite visiter la villa..."</li>
              <li><strong>Marie Claire</strong> - "Est-ce que le bien est encore dispo ?"</li>
              <li><strong>Alex Martin</strong> - "Question concernant l'appartement..."</li>
            </ul>
            <a href="messages.php" class="text-blue-600 hover:text-blue-800">Voir tous les messages</a>
          </div>

          <!-- Derniers Mails -->
          <div>
            <h3 class="text-xl font-semibold text-blue-600">Derniers Mails</h3>
            <ul class="list-disc pl-5">
              <li><strong>contact@client.com</strong> - "Demande d'information"</li>
              <li><strong>user@example.com</strong> - "Visite d’un appartement"</li>
              <li><strong>admin@company.com</strong> - "Rappel de la réunion"</li>
            </ul>
            <a href="emails.php" class="text-blue-600 hover:text-blue-800">Voir tous les mails</a>
          </div>
        </div>
      </div>
    </section>

  </main>
</body>
</html>
