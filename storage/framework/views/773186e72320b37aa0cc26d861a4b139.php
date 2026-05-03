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
  <main class="flex-1 max-w-7xl mx-auto w-full px-6 py-12 flex flex-col gap-10">
 
    <!-- Welcome -->
    <div class="animate-fade-up flex items-center justify-between">
      <div>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Vue d'ensemble</p>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Tableau de bord</h1>
        <p class="text-sm text-gray-500 mt-1">Statistiques globales de la plateforme </p>
      </div>
      <span class="text-xs text-gray-400 font-medium">Mis à jour : aujourd'hui à <?php echo e($currentTime); ?></span>
    </div>
 
    <!-- KPI Cards row 1 -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 animate-fade-up delay-1">
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Utilisateurs totaux</p>
          <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($usersNumber); ?></p>
        </div>
      </div>
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <path d="M8 26L24 10" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            <rect x="3" y="3" width="14" height="14" rx="3" stroke="#6b7280" stroke-width="1.5"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Travailleurs actifs</p>
          <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($workersNumber); ?></p>
        </div>
      </div>
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <path d="M3 5h14M3 10h14M3 15h8" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Demandes totales</p>
          <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($demandesNumber); ?></p>
        </div>
      </div>
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="10" r="7" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M10 6v4l3 2" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">En attente vérif.</p>
          <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($pendingWorkersNumber); ?></p>
          <p class="text-xs text-orange-500 font-medium mt-1">⚠ À traiter</p>
        </div>
      </div>
 
    </div>
    <!-- Bottom section: Recent verifications + Top services -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 animate-fade-up delay-3">
 
      <!-- Recent verifications -->
      <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-8 gap-5">
        <div class="flex items-center justify-between w-full">
          <div>
            <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-0.5">Vérifications récentes</p>
            <h2 class="text-base font-bold text-gray-900">Travailleurs en attente</h2>
          </div>
          <span class="text-xs font-semibold px-3 py-1 rounded-full bg-orange-50 text-orange-600 border border-orange-100"><?php echo e($pendingWorkersNumber); ?> en attente</span>
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
 
        <div class="flex flex-col gap-4 w-full">
 <?php $__currentLoopData = $pendingWorkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="flex items-center gap-4 w-full">
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <p class="text-sm font-semibold text-gray-900"><?php echo e($worker->user->name); ?></p>
              <p class="text-xs text-gray-400"><?php echo e($worker->work->name); ?> · <?php echo e($worker->ville); ?></p>
            </div>
            <div class="flex gap-2">
              <a href="<?php echo e(route('worker.show',$worker->id)); ?>" class="btn-primary text-xs px-3 py-1.5 rounded-full font-semibold">Review</a>
            </div>
          </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
        <!-- <a href="#" class="text-xs font-semibold text-gray-400 hover:text-gray-700 transition-colors">Voir toutes les demandes →</a> -->
      </div>
    </div>
 
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Admin/Dashboard.blade.php ENDPATH**/ ?>