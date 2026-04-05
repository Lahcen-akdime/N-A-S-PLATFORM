<?php $__env->startSection('login_logout_buttons'); ?>
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="<?php echo e(route('Logout')); ?>" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Logout
        </a>
      </div>
<?php $__env->stopSection(); ?>

  <!-- MAIN -->
<?php $__env->startSection('maincontent'); ?>
  <main class="flex-1 max-w-6xl mx-auto w-full px-6 py-10 flex flex-col gap-6">

    <!-- Page title -->
    <div class="animate-fade-up">
      <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Localisation</p>
      <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Trouver un bricoleur près de vous</h1>
      <p class="text-sm text-gray-500 mt-1">Filtrez par type de service et évaluation, puis repérez les disponibles sur la carte.</p>
    </div>

    <!-- Filters row -->
    <div class="glass-card !flex-row !flex-wrap !items-end !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-1">

      <!-- Type de travail -->
      <div class="flex flex-col gap-1 flex-1 min-w-[180px]">
        <label class="text-xs font-medium text-gray-500">Type de travail</label>
        <select id="work" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all">
          <option value="all" disabled selected>Sélectionner un service</option>
          <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option><?php echo e($work->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

      <!-- Évaluation minimum -->
      <div class="flex flex-col gap-1 min-w-[160px]">
        <label class="text-xs font-medium text-gray-500">Évaluation minimum</label>
        <select id="evaluation" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all">
          <option value="0" disabled selected>Toutes les notes</option>
          <option value="1">⭐ 1 étoile et +</option>
          <option value="2">⭐⭐ 2 étoiles et +</option>
          <option value="3">⭐⭐⭐ 3 étoiles et +</option>
          <option value="4">⭐⭐⭐⭐ 4 étoiles et +</option>
          <option value="5">⭐⭐⭐⭐⭐ 5 étoiles</option>
        </select>
      </div>

      <!-- Search button -->
      <button onclick="locateCloserWorkers()" class="btn-primary px-6 py-2.5 rounded-full text-sm font-semibold flex items-center gap-2 self-end">
        <svg width="14" height="14" viewBox="0 0 20 20" fill="none">
          <circle cx="9" cy="9" r="6" stroke="white" stroke-width="1.8"/>
          <path d="M13.5 13.5L17 17" stroke="white" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        Rechercher
      </button>

    </div>

    <!-- Map container -->
    <div class="animate-fade-up delay-2 flex-1 min-h-[480px] rounded-2xl overflow-hidden border border-gray-200 shadow-lg relative bg-white"
         style="box-shadow: 0 2px 4px rgba(0,0,0,0.04), 0 8px 24px rgba(0,0,0,0.08);">

      <!-- Map placeholder — replace this div's content with your map API init -->
      <div id="map" class="w-full h-full min-h-[480px] bg-gray-100 flex flex-col items-center justify-center gap-3">
        <div class="w-14 h-14 rounded-2xl bg-gray-200 flex items-center justify-center">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
            <path d="M12 2a7 7 0 017 7c0 5-7 13-7 13S5 14 5 9a7 7 0 017-7z" stroke="#9ca3af" stroke-width="1.6"/>
            <circle cx="12" cy="9" r="2.5" stroke="#9ca3af" stroke-width="1.5"/>
          </svg>
        </div>
      </div>

      <!-- Workers pins legend — overlay bottom left -->
      <div class="absolute bottom-4 left-4 glass-card !flex-row !items-center !text-left !p-3 !rounded-xl !cursor-default gap-4 !shadow-lg">
        <div class="flex items-center gap-1.5">
          <span class="w-3 h-3 rounded-full bg-green-500 flex-shrink-0"></span>
          <span class="text-xs text-gray-600">Disponible</span>
        </div>
        <div class="flex items-center gap-1.5">
          <span class="w-3 h-3 rounded-full bg-orange-400 flex-shrink-0"></span>
          <span class="text-xs text-gray-600">Occupé</span>
        </div>
        <div class="flex items-center gap-1.5">
          <span class="w-3 h-3 rounded-full bg-gray-400 flex-shrink-0"></span>
          <span class="text-xs text-gray-600">Hors ligne</span>
        </div>
      </div>

      <!-- Result count — overlay top left -->
      <div class="absolute top-4 left-4 glass-card !flex-row !items-center !text-left !py-2 !px-4 !rounded-full !cursor-default gap-2">
        <span class="w-2 h-2 rounded-full bg-green-500"></span>
        <span class="text-xs font-semibold text-gray-700">12 bricoleurs trouvés</span>
      </div>

    </div>

  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/client/Locate.blade.php ENDPATH**/ ?>