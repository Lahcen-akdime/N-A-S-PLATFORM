<?php $__env->startSection('login_logout_buttons'); ?>
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="<?php echo e(route('Logout')); ?>" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Logout
        </a>
      </div>
<?php $__env->stopSection(); ?>
  <!-- ===== MAIN ===== -->
<?php $__env->startSection('maincontent'); ?>
  <!-- MAIN -->
  <!-- <button id="btn">locate me</h1> -->
  <h1 id="test"></h1>
  <main class="flex-1 max-w-6xl mx-auto w-full px-6 py-12">

    <!-- Welcome + CTA -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10 animate-fade-up">
      <div>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Tableau de bord</p>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Bonjour 👋</h1>
      </div>

      <a href="<?php echo e(route('demande.create')); ?>"
         class="btn-primary inline-flex items-center gap-2 px-5 py-3 rounded-full text-sm font-semibold self-start sm:self-auto">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M7 1v12M1 7h12" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Nouvelle demande
      </a>
    </div>

    

    <!-- History title -->
    <div class="flex items-center justify-between mb-5 animate-fade-up delay-2">
      <h2 class="text-base font-semibold text-gray-900">Historique des demandes</h2>
      <a href="#" class="text-xs font-medium text-gray-400 hover:text-gray-700 transition-colors">Voir tout →</a>
    </div>

    <!-- Demandes list -->
    <div class="flex flex-col gap-4">

      <!-- Demande 1 — Terminée -->
      <div class="glass-card !flex-row !items-center !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-2">
        <!-- Worker avatar -->
        <div class="w-12 h-12 rounded-full bg-gray-200 flex-shrink-0 overflow-hidden flex items-center justify-center">
          <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- Info -->
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-900">Plomberie — Fuite cuisine</p>
          <p class="text-xs text-gray-400 mt-0.5">Travailleur : <span class="text-gray-600 font-medium">Youssef El Amrani</span></p>
          <p class="text-xs text-gray-400 mt-0.5">12 Février 2026 · Casablanca</p>
        </div>
        <!-- State badge -->
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">
          Terminée
        </span>
      </div>

      <!-- Demande 2 — En cours -->
      <div class="glass-card !flex-row !items-center !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-3">
        <div class="w-12 h-12 rounded-full bg-gray-200 flex-shrink-0 overflow-hidden flex items-center justify-center">
          <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-900">Électricité — Prise défectueuse</p>
          <p class="text-xs text-gray-400 mt-0.5">Travailleur : <span class="text-gray-600 font-medium">Khalid Benali</span></p>
          <p class="text-xs text-gray-400 mt-0.5">5 Mars 2026 · Rabat</p>
        </div>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100">
          En cours
        </span>
      </div>

      <!-- Demande 3 — En attente -->
      <div class="glass-card !flex-row !items-center !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-3">
        <div class="w-12 h-12 rounded-full bg-gray-200 flex-shrink-0 overflow-hidden flex items-center justify-center">
          <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-900">Peinture — Salon & couloir</p>
          <p class="text-xs text-gray-400 mt-0.5">Travailleur : <span class="text-gray-600 font-medium">Non assigné</span></p>
          <p class="text-xs text-gray-400 mt-0.5">14 Mars 2026 · Marrakech</p>
        </div>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-orange-50 text-orange-600 border border-orange-100">
          En attente
        </span>
      </div>

      <!-- Demande 4 — Annulée -->
      <div class="glass-card !flex-row !items-center !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-4">
        <div class="w-12 h-12 rounded-full bg-gray-200 flex-shrink-0 overflow-hidden flex items-center justify-center">
          <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-900">Menuiserie — Porte d'entrée</p>
          <p class="text-xs text-gray-400 mt-0.5">Travailleur : <span class="text-gray-600 font-medium">Hamza Tazi</span></p>
          <p class="text-xs text-gray-400 mt-0.5">20 Janvier 2026 · Fès</p>
        </div>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-red-50 text-red-600 border border-red-100">
          Annulée
        </span>
      </div>

    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/client/demandes.blade.php ENDPATH**/ ?>