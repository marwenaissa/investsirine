<!-- Ajoute Font Awesome dans le <head> si ce n’est pas déjà fait -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<?php
  $idParam = isset($_GET['id']) ? '&id=' . (int)$_GET['id'] : '';
?>

<?php
// Langue par défaut
$lang = 'fr';
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en', 'ar'])) {
    $lang = $_GET['lang'];
}
$tr = include __DIR__ . "/lang/$lang.php";
?>

<header class="fixed top-0 left-0 w-full z-50 bg-white shadow-md rounded-b-2xl">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between flex-wrap <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
  
    <!-- Logo + Hamburger -->
    <div class="flex items-center justify-between w-full md:w-auto <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
 <a href="index.php?lang=<?= $lang ?>">
  <img src="Logo.png" alt="Logo INVEST" class="h-20 md:h-24 object-contain" />
</a>
      <!-- Hamburger -->
      <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>

    <div>

      <!-- Menu principal -->
      <ul id="nav-menu" class="hidden md:flex flex-col md:flex-row <?= $lang === 'ar' ? 'md:flex-row-reverse' : '' ?> md:items-center w-full md:w-auto gap-6 mt-4 md:mt-0 text-xl md:text-2xl font-semibold text-center">
        <li>
          <a href="achat.php?lang=<?= $lang ?>" class="hover:text-blue-900 flex items-center gap-2 <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
            <i class="fas fa-home"></i> <?= $tr['buy'] ?>
          </a>
        </li>
        <li>
          <a href="location.php?lang=<?= $lang ?>" class="hover:text-blue-900 flex items-center gap-2 <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
            <i class="fas fa-building"></i> <?= $tr['rent'] ?>
          </a>
        </li>
        <li>
          <a href="vendre.php?lang=<?= $lang ?>" class="hover:text-blue-900 flex items-center gap-2 <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
            <i class="fas fa-handshake"></i> <?= $tr['sell'] ?>
          </a>
        </li>
        <li>
          <a href="apropos.php?lang=<?= $lang ?>" class="hover:text-blue-900 flex items-center gap-2 <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
            <i class="fas fa-star"></i> <?= $tr['about'] ?>
          </a>
        </li>
        <li>
          <a href="contact.php?lang=<?= $lang ?>" class="hover:text-blue-900 flex items-center gap-2 <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
            <i class="fas fa-envelope"></i> <?= $tr['contact'] ?>
          </a>
        </li>
      </ul>
    </div>

    <!-- Langues + Téléphone -->
    <div class="mt-6 md:mt-0 w-full md:w-auto flex flex-col items-center md:items-end gap-2 <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
      
      <div class="text-base font-bold text-red-600 flex gap-2">
        <a href="?lang=fr<?= $idParam ?>" class="hover:text-blue-800"><?= $tr['FR'] ?></a>
        <span class="text-gray-600">|</span>
        <a href="?lang=ar<?= $idParam ?>" class="hover:text-blue-800"><?= $tr['AR'] ?></a>
        <span class="text-gray-600">|</span>
        <a href="?lang=en<?= $idParam ?>" class="hover:text-blue-800"><?= $tr['ENG'] ?></a>
      </div>

      <div class="flex items-center gap-2 text-sm text-blue-900 font-medium <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
        <i class="fas fa-phone-alt text-sm"></i>
        <span>+216 28 444 303</span>
      </div>
    </div>

  </div>
</header>

<script>
  // Mobile menu toggle
  document.getElementById('menu-toggle').addEventListener('click', () => {
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.toggle('hidden');
  });
</script>
