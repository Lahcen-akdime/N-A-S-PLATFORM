
  <!-- MAIN -->
<?php $__env->startSection('maincontent'); ?>
    <main >
      <div id="step-4" class="glass-card !items-center !text-center !cursor-default !rounded-2xl !p-14 gap-7 animate-fade-up delay-1 w-full">
        
        <!-- Checkmark -->
        <div class="w-20 h-20 rounded-full bg-gray-900 flex items-center justify-center">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M8 18l7 7 13-14" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        
        <div class="flex flex-col gap-3">
          <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Demande reçue avec succès !</h2>
          <p class="text-sm text-gray-500 leading-relaxed max-w-sm mx-auto">
            Nous avons bien reçu vos informations. Notre équipe va vérifier votre dossier dans les plus brefs délais.
            Vous recevrez un email de confirmation très prochainement.
          </p>
        </div>
        
        <div class="w-full border-t border-gray-100"></div>
        
        <div class="flex flex-col gap-2 w-full max-w-xs">
          <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-gray-50 border border-gray-200">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" class="flex-shrink-0">
              <rect x="2" y="4" width="16" height="12" rx="2" stroke="#6b7280" stroke-width="1.5"/>
              <path d="M2 7l8 5 8-5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <p class="text-xs text-gray-500">Un email vous sera envoyé sous 24h</p>
          </div>
          <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-gray-50 border border-gray-200">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" class="flex-shrink-0">
              <circle cx="10" cy="10" r="7" stroke="#6b7280" stroke-width="1.5"/>
              <path d="M10 6v4l3 2" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <p class="text-xs text-gray-500">Vérification sous 1 à 2 jours ouvrables</p>
          </div>
        </div>
        
        <a href="/" class="btn-validate w-full max-w-xs text-center">
          Retour à l'accueil
        </a>
      </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Worker/waitVerification.blade.php ENDPATH**/ ?>