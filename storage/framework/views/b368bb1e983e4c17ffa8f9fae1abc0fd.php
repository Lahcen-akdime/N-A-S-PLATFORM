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
  <main class="flex-1 w-full px-6 py-16 flex flex-col gap-8 max-w-3xl mx-auto">
 
    <!-- Back -->
    <a href="locate.html" class="animate-fade-up inline-flex items-center gap-2 text-sm text-gray-400 hover:text-gray-700 transition-colors self-start">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
        <path d="M9 2L3 7l6 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Retour
    </a>
 
    <!-- Profile card -->
    <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-14 gap-12 animate-fade-up delay-1 w-full">
 
      <!-- Avatar + name + badge -->
      <div class="flex items-center gap-8 w-full">
        <div class="w-28 h-28 rounded-2xl bg-gray-200 flex-shrink-0 flex items-center justify-center">
          <svg width="52" height="52" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <h1 class="text-xl font-bold text-gray-900 tracking-tight"><?php echo e($worker->user); ?></h1>
          <p class="text-sm text-gray-400 mt-0.5"><?php echo e($worker->work->name); ?> · <?php echo e($worker->ville); ?></p>
          <!-- Evaluation stars -->
          <div class="flex items-center gap-1 mt-2">
            <span class="text-orange-400 text-base leading-none">★★★★</span>
            <span class="text-gray-300 text-base leading-none">★</span>
            <span class="text-xs font-semibold text-gray-600 ml-1">4 / 5</span>
          </div>
        </div>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100 self-start">
          Disponible
        </span>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Info grid -->
      <div class="grid grid-cols-2 gap-10 w-full">
 
        <!-- Expérience -->
        <div class="flex items-start gap-5">
          <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <rect x="3" y="4" width="14" height="13" rx="2" stroke="#6b7280" stroke-width="1.5"/>
              <path d="M7 2v4M13 2v4M3 9h14" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium">Années d'expérience</p>
            <p class="text-base font-semibold text-gray-900 mt-2"><?php echo e($worker->experience_years); ?> ans</p>
          </div>
        </div>
 
        <!-- Téléphone -->
        <div class="flex items-start gap-5">
          <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M3 5a2 2 0 012-2h1.5a1 1 0 01.96.72l.8 2.8a1 1 0 01-.23 1l-1.2 1.2a11 11 0 004.41 4.41l1.2-1.2a1 1 0 011-.23l2.8.8A1 1 0 0117 15.5V17a2 2 0 01-2 2A13 13 0 013 5z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium">Téléphone</p>
            <p class="text-base font-semibold text-gray-900 mt-2">+212 6 12 34 56 78</p>
          </div>
        </div>
 
        <!-- Ville -->
        <div class="flex items-start gap-5">
          <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M10 2a6 6 0 016 6c0 4-6 10-6 10S4 12 4 8a6 6 0 016-6z" stroke="#6b7280" stroke-width="1.5"/>
              <circle cx="10" cy="8" r="2" stroke="#6b7280" stroke-width="1.4"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium">Ville</p>
            <p class="text-base font-semibold text-gray-900 mt-2"><?php echo e($worker->ville); ?></p>
          </div>
        </div>
 
        <!-- Adresse -->
        <div class="flex items-start gap-5">
          <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M3 9.5L10 3l7 6.5V17a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7 18v-5h6v5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium">Adresse</p>
            <p class="text-base font-semibold text-gray-900 mt-2"><?php echo e($worker->adress); ?></p>
          </div>
        </div>
 
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Certificats -->
      <div class="w-full">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-5">Certificats &amp; Documents</p>
        <div class="flex flex-wrap gap-3">
 
          <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-xl border border-gray-200 bg-white text-xs font-medium text-gray-700 hover:border-gray-400 hover:text-gray-900 transition-all">
            <svg width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M4 2h6l4 4v8a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1z" stroke="#9ca3af" stroke-width="1.3"/>
              <path d="M9 2v4h4" stroke="#9ca3af" stroke-width="1.3" stroke-linecap="round"/>
            </svg>
            Certificat_Plomberie.pdf
          </a>
 
          <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-xl border border-gray-200 bg-white text-xs font-medium text-gray-700 hover:border-gray-400 hover:text-gray-900 transition-all">
            <svg width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M4 2h6l4 4v8a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1z" stroke="#9ca3af" stroke-width="1.3"/>
              <path d="M9 2v4h4" stroke="#9ca3af" stroke-width="1.3" stroke-linecap="round"/>
            </svg>
            CIN.jpg
          </a>
 
          <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-xl border border-gray-200 bg-white text-xs font-medium text-gray-700 hover:border-gray-400 hover:text-gray-900 transition-all">
            <svg width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M4 2h6l4 4v8a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1z" stroke="#9ca3af" stroke-width="1.3"/>
              <path d="M9 2v4h4" stroke="#9ca3af" stroke-width="1.3" stroke-linecap="round"/>
            </svg>
            Attestation_formation.pdf
          </a>
 
        </div>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Action buttons -->
      <div class="flex flex-col sm:flex-row gap-3 w-full">
        <a href="<?php echo e(route('demande.show',$worker->id)); ?>"
           class="btn-primary flex-1 flex items-center justify-center gap-2 px-6 py-4 rounded-full text-sm font-semibold">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M7 1v12M1 7h12" stroke="white" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Faire une demande
        </a>
        <a href="update-profile.html"
           class="btn-outline flex-1 flex items-center justify-center gap-2 px-6 py-4 rounded-full text-sm font-semibold">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
            <path d="M11 2l3 3-8 8H3v-3l8-8z" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Modifier le profil
        </a>
      </div>
 
    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/WorkerProfile.blade.php ENDPATH**/ ?>