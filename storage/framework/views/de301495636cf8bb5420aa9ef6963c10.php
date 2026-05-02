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
<main class="flex-1 max-w-7xl mx-auto w-full px-6 py-12 flex flex-col gap-8">
 
    <!-- Title -->
    <div class="animate-fade-up flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Administration</p>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Messages des clients</h1>
        <p class="text-sm text-gray-500 mt-1">Consultez et répondez aux messages reçus via le formulaire de contact.</p>
      </div>
      <div class="flex items-center gap-3">
        <div class="glass-card !flex-row !p-3 !px-4 !rounded-full !cursor-default !items-center gap-2">
          <span class="text-xs font-semibold text-gray-700"><?php echo e($messages->count()); ?> total</span>
        </div>
      </div>
    </div>
 
    <!-- Filter tabs -->
    <div class="animate-fade-up delay-1 flex items-center gap-2 flex-wrap">
      <button  class="filter-btn px-4 py-2 rounded-full text-sm font-semibold bg-gray-900 text-white transition-all">Tous <span class="ml-1 text-xs opacity-60"><?php echo e($messages->count()); ?></span></button>
      <button  class="filter-btn px-4 py-2 rounded-full text-sm font-semibold  border border-gray-200  bg-gray-900 text-white hover:border-gray-400 transition-all">Authentifiés <span class="ml-1 text-xs opacity-60">4</span></button>
      <button  class="filter-btn px-4 py-2 rounded-full text-sm font-semibold border border-gray-200  bg-gray-900 text-white hover:border-gray-400 transition-all">Anonymes <span class="ml-1 text-xs opacity-60">3</span></button>
    </div>
 
    <!-- Table card -->
    <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-0 gap-0 animate-fade-up delay-2 w-full overflow-hidden">
 
      <!-- Head -->
      <div class="grid grid-cols-12 gap-3 px-6 py-4 border-b border-gray-100 bg-gray-50/60">
        <span class="col-span-1 text-xs font-semibold text-gray-400 uppercase tracking-widest">#</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Nom</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Email</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Sujet</span>
        <span class="col-span-1 text-xs font-semibold text-gray-400 uppercase tracking-widest text-right">Action</span>
      </div>
 
      <!-- Rows -->
      <div class="flex flex-col divide-y divide-gray-100" id="msg-list">
 <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="msg-row grid grid-cols-12 gap-4 px-6 py-5 items-start hover:bg-gray-50/60 transition-colors" data-read="false" data-auth="true">
          <div class="col-span-1 flex items-center gap-1.5 pt-1"><span class="w-2 h-2 rounded-full bg-orange-400 flex-shrink-0"></span><span class="text-xs font-bold text-gray-300">01</span></div>
          <div class="col-span-2"><p class="text-sm font-semibold text-gray-900"><?php echo e($message->name); ?></p></div>
          <div class="col-span-2"><p class="text-sm text-gray-500 truncate"><?php echo e($message->email); ?></p></div>
          <div class="col-span-2"><span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-red-50 text-red-600 border border-red-100"><?php echo e($message->subject); ?></span></div>
          <div class="col-span-1 flex justify-end"><button onclick="openMsg(0)" class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all"><svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg></button></div>
        </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
 
  </main>
 
  <!-- MODAL -->
  <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center px-4">
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" onclick="closeModal()"></div>
    <div class="glass-card relative !rounded-2xl !p-10 !cursor-default !items-start !text-left gap-6 w-full max-w-lg z-10 animate-fade-up">
 
      <div class="flex items-start justify-between w-full gap-4">
        <div>
          <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Message complet</p>
          <h2 class="text-xl font-bold text-gray-900" id="m-name">—</h2>
          <p class="text-sm text-gray-400 mt-0.5" id="m-email">—</p>
        </div>
        <button onclick="closeModal()" class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all flex-shrink-0">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 1l10 10M11 1L1 11" stroke="#6b7280" stroke-width="1.6" stroke-linecap="round"/></svg>
        </button>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <div class="flex flex-wrap gap-2">
        <span id="m-subject" class="text-xs font-semibold px-3 py-1 rounded-full bg-gray-100 text-gray-600 border border-gray-200">—</span>
        <span id="m-auth" class="text-xs font-semibold px-3 py-1 rounded-full">—</span>
      </div>
 
      <div class="w-full bg-gray-50 border border-gray-100 rounded-xl px-5 py-4">
        <p class="text-sm text-gray-700 leading-relaxed" id="m-message">—</p>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <div class="flex gap-3 w-full">
        <button onclick="closeModal()" class="btn-outline flex-1 px-5 py-3 rounded-full text-sm font-semibold">Fermer</button>
        <a id="m-reply" href="#" class="btn-validate flex-1 flex items-center justify-center gap-2 text-sm font-semibold">
          <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><rect x="2" y="4" width="16" height="12" rx="2" stroke="white" stroke-width="1.5"/><path d="M2 7l8 5 8-5" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg>
          Répondre par email
        </a>
      </div>
 
    </div>
  </div>
 
 
  <script>
 
    function openMsg(i) {
      document.getElementById('m-name').textContent    = m.name;
      document.getElementById('m-email').textContent   = m.email;
      document.getElementById('m-subject').textContent = m.subject;
      document.getElementById('m-message').textContent = m.message;
      document.getElementById('m-reply').href = 'mailto:' + m.email;
      const badge = document.getElementById('m-auth');
      badge.textContent = m.auth ? 'Authentifié' : 'Anonyme';
      badge.className   = m.auth
        ? 'text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100'
        : 'text-xs font-semibold px-3 py-1 rounded-full bg-gray-100 text-gray-500 border border-gray-200';
      document.getElementById('modal').classList.remove('hidden');
    }
    function closeModal() { document.getElementById('modal').classList.add('hidden'); }
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Admin/contact.blade.php ENDPATH**/ ?>