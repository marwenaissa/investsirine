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
      <a href="#" class="block text-blue-600 font-semibold hover:underline">🏠 Dashboard</a>
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

    <!-- Messages Section -->
    <section id="messages" class="mb-16">
    <h2 class="text-2xl font-semibold mb-4 text-blue-600">📩 Messages des utilisateurs</h2>
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-blue-200">
        <thead class="bg-blue-300">
            <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-blue-900 uppercase">Nom</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-blue-900 uppercase">Message</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-blue-900 uppercase">Date</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-blue-900 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-blue-50 divide-y divide-blue-200">
            <!-- Exemple de message 1 -->
            <tr class="hover:bg-blue-100 transition">
            <td class="px-6 py-4 text-blue-900">Jean Dupont</td>
            <td class="px-6 py-4 text-blue-900">Bonjour, je souhaite visiter la villa...</td>
            <td class="px-6 py-4 text-blue-900">02/05/2025</td>
            <td class="px-6 py-4">
                <a href="lire_message.php?id=1" class="text-blue-600 hover:text-blue-800 mr-4">Lire</a>
                <a href="supprimer_message.php?id=1" class="text-red-600 hover:text-red-800">Supprimer</a>
            </td>
            </tr>
            <!-- Exemple de message 2 -->
            <tr class="hover:bg-blue-100 transition">
            <td class="px-6 py-4 text-blue-900">Marie Claire</td>
            <td class="px-6 py-4 text-blue-900">Est-ce que le bien est encore dispo ?</td>
            <td class="px-6 py-4 text-blue-900">01/05/2025</td>
            <td class="px-6 py-4">
                <a href="lire_message.php?id=2" class="text-blue-600 hover:text-blue-800 mr-4">Lire</a>
                <a href="supprimer_message.php?id=2" class="text-red-600 hover:text-red-800">Supprimer</a>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </section>

  </main>
</body>
</html>
