<?php $__env->startSection('login_logout_buttons'); ?>
      <div class="flex items-center gap-3">
        <a href="/" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">← Back</a>
        <a href="#" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Try For Free
        </a>
      </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('maincontent'); ?>
  <!-- ===== MAIN ===== -->
  <main class="flex-1 flex items-center justify-center px-6 py-16 bg-gray-50">
    <div class="w-full max-w-2xl">

      <!-- Title -->
      <div class="text-center mb-12 animate-fade-up">
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-3">Inscription</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-3 tracking-tight">Quel est votre rôle ?</h1>
        <p class="text-sm text-gray-500">Sélectionnez un profil pour personnaliser votre expérience.</p>
      </div>

      <!-- Cards -->
      <form action="">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
  <!-- Card Client -->
  <div class="glass-card animate-fade-up delay-1" id="card-client" onclick="selectRole('client')">

    <span class="check-icon absolute top-5 right-5 w-6 h-6 rounded-full bg-gray-900 flex items-center justify-center">
      <svg width="11" height="11" viewBox="0 0 12 12" fill="none">
        <path d="M2 6L5 9L10 3" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </span>

    <div class="role-icon-wrap">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
        <circle cx="16" cy="11" r="5" stroke="#111827" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M6 27c0-5.523 4.477-10 10-10s10 4.477 10 10" stroke="#111827" stroke-width="1.8" stroke-linecap="round"/>
      </svg>
    </div>

    <h2 class="text-base font-semibold text-gray-900 mb-2">Client</h2>
    <p class="text-sm text-gray-400 leading-relaxed">Je cherche un professionnel pour réaliser mes travaux à domicile.</p>
  </div>

  <!-- Card worker -->
  <div class="glass-card animate-fade-up delay-2" id="card-worker" onclick="selectRole('worker')">

    <span class="check-icon absolute top-5 right-5 w-6 h-6 rounded-full bg-gray-900 flex items-center justify-center">
      <svg width="11" height="11" viewBox="0 0 12 12" fill="none">
        <path d="M2 6L5 9L10 3" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </span>

    <div class="role-icon-wrap">
      <svg width="32" height="32" viewBox="0 0 34 34" fill="none">
        <path d="M8 26L24 10" stroke="#111827" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M22 7l5 5-2.5 2.5-5-5L22 7z" stroke="#111827" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M7 22l2.5 5 2.5-2.5-5-2.5z" stroke="#111827" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        <circle cx="25" cy="8" r="2.5" stroke="#111827" stroke-width="1.5"/>
      </svg>
    </div>

    <h2 class="text-base font-semibold text-gray-900 mb-2">worker</h2>
    <p class="text-sm text-gray-400 leading-relaxed">Je propose mes compétences et services aux particuliers.</p>
  </div>
</div>
</form>

      <!-- Validate -->
      <div class="animate-fade-up delay-3 flex justify-center">
        <button id="btn-validate" class="btn-validate" disabled onclick="handleValidate()">
          Continue
        </button>
      </div>

    </div>
  </main>
  <?php $__env->stopSection(); ?>

  <script>
    let selectedRole = null;
    function selectRole(role) {
      selectedRole = role;
      document.getElementById('card-client').classList.remove('selected');
      document.getElementById('card-worker').classList.remove('selected');
      document.getElementById('card-' + role).classList.add('selected');
      document.getElementById('btn-validate').disabled = false;
    }
    function handleValidate() {
      if (!selectedRole) return;
      else{
      window.location.href='/'+selectedRole+'/create';
      }
    }
  </script>

<?php echo $__env->make('Layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/ShooseRole.blade.php ENDPATH**/ ?>