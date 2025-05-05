<header class="relative container mx-auto px-4 py-3">
  <div class="flex items-center justify-between h-24">

    <!-- Bloc 1 : Logo -->
    <div class="flex-shrink-0 ml-8 mt-10"> <!-- Augmentation de l'espacement -->
      <a href="index.php">
        <img src="Logo.png" alt="Logo INVEST" class="h-64 object-contain" /> <!-- Agrandissement du logo -->
      </a>
    </div>

    <!-- Bloc 2 : Menu centré verticalement -->
    <ul class="flex justify-center items-center gap-8 text-xl font-semibold flex-grow"> <!-- Espacement du menu un peu plus large -->
      <li><a href="achat.php" class="hover:text-[#131d44]">Achat</a></li>
      <li><a href="location.php" class="hover:text-[#131d44]">Location</a></li>
      <li><a href="vendre.php" class="hover:text-[#131d44]">Vendre</a></li>
      <li><a href="apropos.php" class="hover:text-[#131d44]">À propos</a></li>
      <li><a href="contact.php" class="hover:text-[#131d44]">Contact</a></li>
    </ul>

    <!-- Bloc 3 : Langues en haut à droite + téléphone -->
    <div class="relative w-44 h-full flex flex-col justify-between items-end pt-1 pb-1"> <!-- Augmentation de l'espacement du bloc des langues -->
      <!-- Langues -->
      <div class="text-xs text-red-600 font-bold flex gap-1">
        <span class="hover:text-blue-800 cursor-pointer">FR</span>
        <span class="text-gray-600">|</span>
        <span class="hover:text-blue-800 cursor-pointer">AR</span>
        <span class="text-gray-600">|</span>
        <span class="hover:text-blue-800 cursor-pointer">ENG</span>
      </div>

      <!-- Téléphone -->
      <div class="flex items-center gap-1 text-sm text-blue-700 mt-3"> <!-- Espacement du téléphone -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.3 3.9a1 1 0 01-.21 1.02L9.28 10.6a16.01 16.01 0 006.11 6.11l1.99-1.84a1 1 0 011.02-.21l3.9 1.3a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C10.07 21 3 13.93 3 5z"/>
        </svg>
        <span>+216 28 444 303</span>
      </div>
    </div>

  </div>
</header>