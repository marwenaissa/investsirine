<footer class="w-full px-4 py-8 bg-black text-white rounded-lg">
  <div class="container mx-auto grid md:grid-cols-2 gap-8">
    <div>
      <h3 class="text-xl font-bold mb-4  <?= $lang === 'ar' ? 'text-right' : '' ?>"><?= $tr['contact_info'] ?></h3>
      <p class="mb-2 flex items-center <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?> <?= $lang === 'ar' ? 'text-right' : '' ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
        </svg>
        <?= $tr['adresse_invest'] ?>
      </p>
      <p class=" <?= $lang === 'ar' ? 'text-right' : '' ?>"><?= $tr['email'] ?></p>
      <p class=" <?= $lang === 'ar' ? 'text-right' : '' ?>"><?= $tr['tel'] ?></p>
    </div>
    
    <div>
      <h3 class="text-xl font-bold mb-4  <?= $lang === 'ar' ? 'text-right' : '' ?>"><?= $tr['follow_us'] ?></h3>
      <div class="flex items-center gap-4 text-white <?= $lang === 'ar' ? 'flex-row-reverse' : '' ?>">
        
        <!-- Instagram -->
        <a href="#" aria-label="Instagram" class="hover:text-pink-500 relative -top-[2px]">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M7.5 2h9A5.5 5.5 0 0122 7.5v9a5.5 5.5 0 01-5.5 5.5h-9A5.5 5.5 0 012 16.5v-9A5.5 5.5 0 017.5 2zm0 2A3.5 3.5 0 004 7.5v9A3.5 3.5 0 007.5 20h9a3.5 3.5 0 003.5-3.5v-9A3.5 3.5 0 0016.5 4h-9zm4.5 3a5 5 0 110 10 5 5 0 010-10zm0 2a3 3 0 100 6 3 3 0 000-6zm5.25-.75a.75.75 0 110 1.5.75.75 0 010-1.5z"/>
          </svg>
        </a>
    
        <!-- Facebook -->
        <a href="#" aria-label="Facebook" class="hover:text-blue-500 relative top-[2px]">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M13.5 9H16l.5-3h-3V4.5c0-.8.2-1.5 1.5-1.5H17V0h-2.5C11.6 0 10 1.6 10 4.5V6H7v3h3v9h3v-9z"/>
          </svg>
        </a>
    
        <!-- LinkedIn -->
        <a href="#" aria-label="LinkedIn" class="hover:text-blue-400 relative -top-[2px]">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 24V7h5v17H0zm7.5 0h5v-9.5c0-2.21 3-2.39 3 0V24h5V14.5c0-5.83-6.67-5.61-8-2.75V7h-5v17z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>
