<!-- Section de filtre -->
<section class="max-w-5xl mx-auto my-12 bg-white p-6 rounded-lg shadow-lg">
  <form class="space-y-4" method="GET">
    <!-- Filtres et bouton Rechercher dans la même ligne -->
    <div class="flex items-center justify-between gap-4 mb-6">
      
      <!-- Ville -->
      <div class="flex flex-col w-1/4">
        <label for="ville" class="text-lg font-medium mb-2 ml-3">Ville</label>
        <select id="ville" name="ville" class="p-2 border border-gray-300 rounded">
          <option value="">Sélectionnez la Ville</option>
          <option value="Tunis" <?= (isset($_GET['ville']) && $_GET['ville'] == 'Tunis') ? 'selected' : '' ?>>Tunis</option>
          <option value="La Marsa" <?= (isset($_GET['ville']) && $_GET['ville'] == 'La Marsa') ? 'selected' : '' ?>>La Marsa</option>
          <option value="Hammamet" <?= (isset($_GET['ville']) && $_GET['ville'] == 'Hammamet') ? 'selected' : '' ?>>Hammamet</option>
          <option value="Sousse" <?= (isset($_GET['ville']) && $_GET['ville'] == 'Sousse') ? 'selected' : '' ?>>Sousse</option>
        </select>
      </div>

      <!-- Type de bien -->
      <div class="flex flex-col w-1/4">
        <label for="type" class="text-lg font-medium mb-2 ml-3">Type de bien</label>
        <select id="type" name="type" class="p-2 border border-gray-300 rounded">
          <option value="">Sélectionnez le Type</option>
          <option value="villa" <?= (isset($_GET['type']) && $_GET['type'] == 'villa') ? 'selected' : '' ?>>Villa</option>
          <option value="appartement" <?= (isset($_GET['type']) && $_GET['type'] == 'appartement') ? 'selected' : '' ?>>Appartement</option>
          <option value="maison" <?= (isset($_GET['type']) && $_GET['type'] == 'maison') ? 'selected' : '' ?>>Maison</option>
          <option value="terrain" <?= (isset($_GET['type']) && $_GET['type'] == 'terrain') ? 'selected' : '' ?>>Terrain</option>
        </select>
      </div>

      <!-- Nombre de pièces -->
      <div class="flex flex-col w-1/4">
        <label for="pieces" class="text-lg font-medium mb-2 ml-3">Nombre de pièces</label>
        <select id="pieces" name="pieces" class="p-2 border border-gray-300 rounded">
          <option value="">Sélectionnez le Nombre de pièces</option>
          <option value="1" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '1') ? 'selected' : '' ?>>1 Pièce</option>
          <option value="2" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '2') ? 'selected' : '' ?>>2 Pièces</option>
          <option value="3" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '3') ? 'selected' : '' ?>>3 Pièces</option>
          <option value="4" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '4') ? 'selected' : '' ?>>4 Pièces</option>
          <option value="5" <?= (isset($_GET['pieces']) && $_GET['pieces'] == '5') ? 'selected' : '' ?>>5 Pièces</option>
          <option value="plus" <?= (isset($_GET['pieces']) && $_GET['pieces'] == 'plus') ? 'selected' : '' ?>>Plus de 5 Pièces</option>
        </select>
      </div>

      <!-- Rechercher -->
      <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-1.5 rounded-full transition-all mt-8 duration-300 ease-in-out text-lg w-1/4">
        Rechercher
      </button>
    </div>
  </form>
</section>
