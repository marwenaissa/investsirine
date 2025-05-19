<!-- Section de filtre -->
<section class="max-w-5xl mx-auto my-6 sm:my-12 bg-white p-4 sm:p-6 rounded-lg shadow-lg">
  <form method="GET">
    <!-- Préservation de la langue -->
    <input type="hidden" name="lang" value="<?= htmlspecialchars($lang) ?>">

    <!-- Filtres et bouton Rechercher -->
<!-- Filtres et bouton Rechercher -->
<div class="flex flex-col md:flex-row <?= $lang === 'ar' ? 'md:flex-row-reverse' : '' ?> items-stretch md:items-end justify-between gap-4 mb-4 sm:mb-6">
      
      <!-- Ville -->
     <div class="flex flex-col w-full md:w-1/4" <?= $lang === 'ar' ? 'dir="rtl"' : '' ?>>
        <label for="ville" class="text-sm sm:text-lg font-medium mb-1 sm:mb-2 <?= $lang === 'ar' ? 'text-right' : 'ml-1 sm:ml-3' ?>">
          <?= $tr['city'] ?>
        </label>
        <select id="ville" name="ville"
                class="p-2 border border-gray-300 rounded text-sm sm:text-base <?= $lang === 'ar' ? 'text-right' : '' ?>">
          <option value=""><?= $tr['select_city'] ?? 'Sélectionnez la Ville' ?></option>
          <option value="tunis" <?= (isset($_GET['ville']) && $_GET['ville'] == 'tunis') ? 'selected' : '' ?>>
            <?= $tr['tunis'] ?? 'Tunis' ?>
          </option>
          <option value="la_marsa" <?= (isset($_GET['ville']) && $_GET['ville'] == 'la_marsa') ? 'selected' : '' ?>>
            <?= $tr['la_marsa'] ?? 'La Marsa' ?>
          </option>
          <option value="hammamet" <?= (isset($_GET['ville']) && $_GET['ville'] == 'hammamet') ? 'selected' : '' ?>>
            <?= $tr['hammamet'] ?? 'Hammamet' ?>
          </option>
          <option value="sousse" <?= (isset($_GET['ville']) && $_GET['ville'] == 'sousse') ? 'selected' : '' ?>>
            <?= $tr['sousse'] ?? 'Sousse' ?>
          </option>
        </select>
      </div>


      <!-- Type de bien -->
      <div class="flex flex-col w-full md:w-1/4" <?= $lang === 'ar' ? 'dir="rtl"' : '' ?>>
        <label for="type" class="text-sm sm:text-lg font-medium mb-1 sm:mb-2 <?= $lang === 'ar' ? 'text-right' : 'ml-1 sm:ml-3' ?>">
          <?= $tr['property_type'] ?>
        </label>
        <select id="type" name="type"
                class="p-2 border border-gray-300 rounded text-sm sm:text-base <?= $lang === 'ar' ? 'text-right' : '' ?>">
          <option value=""><?= $tr['select_type'] ?? 'Sélectionnez le Type' ?></option>
          <option value="villa" <?= (isset($_GET['type']) && $_GET['type'] == 'villa') ? 'selected' : '' ?>>
            <?= $tr['villa'] ?? 'Villa' ?>
          </option>
          <option value="appartement" <?= (isset($_GET['type']) && $_GET['type'] == 'appartement') ? 'selected' : '' ?>>
            <?= $tr['appartement'] ?? 'Appartement' ?>
          </option>
          <option value="maison" <?= (isset($_GET['type']) && $_GET['type'] == 'maison') ? 'selected' : '' ?>>
            <?= $tr['maison'] ?? 'Maison' ?>
          </option>
          <option value="terrain" <?= (isset($_GET['type']) && $_GET['type'] == 'terrain') ? 'selected' : '' ?>>
            <?= $tr['terrain'] ?? 'Terrain' ?>
          </option>
        </select>
      </div>



    <div class="flex flex-col w-full md:w-1/4" <?= $lang === 'ar' ? 'dir="rtl"' : '' ?>>
      <label for="pieces" class="text-sm sm:text-lg font-medium mb-1 sm:mb-2 <?= $lang === 'ar' ? 'text-right' : 'ml-1 sm:ml-3' ?>">
        <?= $tr['rooms'] ?>
      </label>
      <select id="pieces" name="pieces"
              class="p-2 border border-gray-300 rounded text-sm sm:text-base <?= $lang === 'ar' ? 'text-right' : '' ?>">
        <option value=""><?= $tr['select_rooms'] ?? 'Sélectionnez le Nombre de pièces' ?></option>
        <option value="1" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '1') ? 'selected' : '' ?>>1 <?= $tr['room'] ?? 'Pièce' ?></option>
        <option value="2" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '2') ? 'selected' : '' ?>>2 <?= $tr['rooms'] ?? 'Pièces' ?></option>
        <option value="3" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '3') ? 'selected' : '' ?>>3 <?= $tr['rooms'] ?? 'Pièces' ?></option>
        <option value="4" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '4') ? 'selected' : '' ?>>4 <?= $tr['rooms'] ?? 'Pièces' ?></option>
        <option value="5" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '5') ? 'selected' : '' ?>>5 <?= $tr['rooms'] ?? 'Pièces' ?></option>
        <option value="plus" <?= (isset($_GET['pieces']) && $_GET['pieces'] == 'plus') ? 'selected' : '' ?>>
          <?= $tr['more_than_5'] ?? 'Plus de 5 Pièces' ?>
        </option>
      </select>
    </div>



      <!-- Rechercher -->
      <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-medium px-4 sm:px-6 py-2 sm:py-1.5 rounded-full transition-all duration-300 ease-in-out text-sm sm:text-lg w-full md:w-1/4 mt-2 sm:mt-0">
        <?= $tr['search'] ?? 'Rechercher'; ?>
    </button>
    </div>
  </form>
</section>
