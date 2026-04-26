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
        <p class="text-sm text-gray-500 mt-1">Statistiques globales de la plateforme Sparrow.ai</p>
      </div>
      <span class="text-xs text-gray-400 font-medium">Mis à jour : aujourd'hui à 09:14</span>
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
          <p class="text-3xl font-bold text-gray-900 mt-1">4 812</p>
          <p class="text-xs text-green-600 font-medium mt-1">↑ +12% ce mois</p>
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
          <p class="text-3xl font-bold text-gray-900 mt-1">1 247</p>
          <p class="text-xs text-green-600 font-medium mt-1">↑ +8% ce mois</p>
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
          <p class="text-3xl font-bold text-gray-900 mt-1">9 634</p>
          <p class="text-xs text-green-600 font-medium mt-1">↑ +21% ce mois</p>
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
          <p class="text-3xl font-bold text-gray-900 mt-1">38</p>
          <p class="text-xs text-orange-500 font-medium mt-1">⚠ À traiter</p>
        </div>
      </div>
 
    </div>
 
    <!-- KPI Cards row 2 -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 animate-fade-up delay-2">
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <path d="M10 2l2.5 5H18l-4.5 4 1.5 5.5L10 14l-5 2.5L6.5 11 2 7h5.5L10 2z" stroke="#6b7280" stroke-width="1.4" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Note moyenne</p>
          <p class="text-3xl font-bold text-gray-900 mt-1">4.3 <span class="text-orange-400 text-xl">★</span></p>
          <p class="text-xs text-gray-400 font-medium mt-1">Sur 5 000+ avis</p>
        </div>
      </div>
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <path d="M4 15V9a6 6 0 0112 0v6" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            <rect x="2" y="14" width="16" height="4" rx="2" stroke="#6b7280" stroke-width="1.4"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Demandes terminées</p>
          <p class="text-3xl font-bold text-gray-900 mt-1">7 891</p>
          <p class="text-xs text-green-600 font-medium mt-1">82% taux complétion</p>
        </div>
      </div>
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <rect x="2" y="4" width="16" height="12" rx="2" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M2 7l8 5 8-5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Nouveaux inscrits</p>
          <p class="text-3xl font-bold text-gray-900 mt-1">214</p>
          <p class="text-xs text-gray-400 font-medium mt-1">Cette semaine</p>
        </div>
      </div>
 
      <div class="glass-card !p-6 !rounded-2xl !cursor-default !items-start !text-left gap-3">
        <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
            <path d="M10 2a6 6 0 016 6c0 4-6 10-6 10S4 12 4 8a6 6 0 016-6z" stroke="#6b7280" stroke-width="1.5"/>
            <circle cx="10" cy="8" r="2" stroke="#6b7280" stroke-width="1.4"/>
          </svg>
        </div>
        <div>
          <p class="text-xs text-gray-400 font-medium">Villes couvertes</p>
          <p class="text-3xl font-bold text-gray-900 mt-1">27</p>
          <p class="text-xs text-green-600 font-medium mt-1">↑ 3 nouvelles villes</p>
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
            <h2 class="text-base font-bold text-gray-900">Bricoleurs en attente</h2>
          </div>
          <span class="text-xs font-semibold px-3 py-1 rounded-full bg-orange-50 text-orange-600 border border-orange-100">38 en attente</span>
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
 
        <div class="flex flex-col gap-4 w-full">
 
          <div class="flex items-center gap-4 w-full">
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <p class="text-sm font-semibold text-gray-900">Karim Benjelloun</p>
              <p class="text-xs text-gray-400">Plombier · Casablanca · il y a 2h</p>
            </div>
            <div class="flex gap-2">
              <button class="btn-primary text-xs px-3 py-1.5 rounded-full font-semibold">Review</button>
              
            </div>
          </div>
 
          <div class="flex items-center gap-4 w-full">
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <p class="text-sm font-semibold text-gray-900">Sara Sariri</p>
              <p class="text-xs text-gray-400">Peintre · Marrakech · il y a 5h</p>
            </div>
            <div class="flex gap-2">
              <button class="btn-primary text-xs px-3 py-1.5 rounded-full font-semibold">Review</button>
              
            </div>
          </div>
 
          <div class="flex items-center gap-4 w-full">
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <p class="text-sm font-semibold text-gray-900">Omar Tahiri</p>
              <p class="text-xs text-gray-400">Électricien · Rabat · il y a 7h</p>
            </div>
            <div class="flex gap-2">
              <button class="btn-primary text-xs px-3 py-1.5 rounded-full font-semibold">Review</button>
              
            </div>
          </div>
 
          <div class="flex items-center gap-4 w-full">
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="flex-1 min-w-0">
              <p class="text-sm font-semibold text-gray-900">Nadia Lahlou</p>
              <p class="text-xs text-gray-400">Menuisière · Fès · il y a 10h</p>
            </div>
            <div class="flex gap-2">
              <button class="btn-primary text-xs px-3 py-1.5 rounded-full font-semibold">Review</button>
              
            </div>
          </div>
 
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
        <a href="#" class="text-xs font-semibold text-gray-400 hover:text-gray-700 transition-colors">Voir toutes les demandes →</a>
      </div>
 
      <!-- Top services + city stats -->
      <div class="flex flex-col gap-6">
 
        <!-- Top services -->
        <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-8 gap-5">
          <div>
            <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-0.5">Popularité</p>
            <h2 class="text-base font-bold text-gray-900">Services les plus demandés</h2>
          </div>
          <div class="w-full border-t border-gray-100"></div>
          <div class="flex flex-col gap-4 w-full">
 
            <div class="flex items-center gap-3 w-full">
              <span class="text-xs font-bold text-gray-400 w-4">1</span>
              <p class="text-sm font-medium text-gray-800 flex-1">Plomberie</p>
              <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full bg-gray-900 rounded-full" style="width: 82%"></div>
              </div>
              <span class="text-xs font-semibold text-gray-500 w-8 text-right">82%</span>
            </div>
 
            <div class="flex items-center gap-3 w-full">
              <span class="text-xs font-bold text-gray-400 w-4">2</span>
              <p class="text-sm font-medium text-gray-800 flex-1">Électricité</p>
              <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full bg-gray-900 rounded-full" style="width: 71%"></div>
              </div>
              <span class="text-xs font-semibold text-gray-500 w-8 text-right">71%</span>
            </div>
 
            <div class="flex items-center gap-3 w-full">
              <span class="text-xs font-bold text-gray-400 w-4">3</span>
              <p class="text-sm font-medium text-gray-800 flex-1">Peinture</p>
              <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full bg-gray-900 rounded-full" style="width: 55%"></div>
              </div>
              <span class="text-xs font-semibold text-gray-500 w-8 text-right">55%</span>
            </div>
 
            <div class="flex items-center gap-3 w-full">
              <span class="text-xs font-bold text-gray-400 w-4">4</span>
              <p class="text-sm font-medium text-gray-800 flex-1">Menuiserie</p>
              <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full bg-gray-900 rounded-full" style="width: 38%"></div>
              </div>
              <span class="text-xs font-semibold text-gray-500 w-8 text-right">38%</span>
            </div>
 
            <div class="flex items-center gap-3 w-full">
              <span class="text-xs font-bold text-gray-400 w-4">5</span>
              <p class="text-sm font-medium text-gray-800 flex-1">Carrelage</p>
              <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full bg-gray-900 rounded-full" style="width: 24%"></div>
              </div>
              <span class="text-xs font-semibold text-gray-500 w-8 text-right">24%</span>
            </div>
 
          </div>
        </div>
 
        <!-- Top cities -->
        <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-8 gap-5">
          <div>
            <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-0.5">Géographie</p>
            <h2 class="text-base font-bold text-gray-900">Top villes actives</h2>
          </div>
          <div class="w-full border-t border-gray-100"></div>
          <div class="grid grid-cols-3 gap-3 w-full">
            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-gray-50 border border-gray-100 gap-1">
              <p class="text-base font-bold text-gray-900">1 840</p>
              <p class="text-xs text-gray-400 text-center">Casablanca</p>
            </div>
            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-gray-50 border border-gray-100 gap-1">
              <p class="text-base font-bold text-gray-900">934</p>
              <p class="text-xs text-gray-400 text-center">Rabat</p>
            </div>
            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-gray-50 border border-gray-100 gap-1">
              <p class="text-base font-bold text-gray-900">712</p>
              <p class="text-xs text-gray-400 text-center">Marrakech</p>
            </div>
            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-gray-50 border border-gray-100 gap-1">
              <p class="text-base font-bold text-gray-900">523</p>
              <p class="text-xs text-gray-400 text-center">Fès</p>
            </div>
            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-gray-50 border border-gray-100 gap-1">
              <p class="text-base font-bold text-gray-900">418</p>
              <p class="text-xs text-gray-400 text-center">Tanger</p>
            </div>
            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-gray-50 border border-gray-100 gap-1">
              <p class="text-base font-bold text-gray-900">389</p>
              <p class="text-xs text-gray-400 text-center">Agadir</p>
            </div>
          </div>
        </div>
 
      </div>
    </div>
 
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Admin/dashboard.blade.php ENDPATH**/ ?>