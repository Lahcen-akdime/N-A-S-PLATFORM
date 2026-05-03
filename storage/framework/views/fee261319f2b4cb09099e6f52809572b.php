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
  <main class="flex-1 max-w-2xl mx-auto w-full px-6 py-16 flex flex-col gap-6">
 
    <!-- Back -->
    <a href="admin-messages.html" class="animate-fade-up inline-flex items-center gap-2 text-sm text-gray-400 hover:text-gray-700 transition-colors self-start">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
        <path d="M9 2L3 7l6 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Retour aux messages
    </a>
 
    <!-- Message card -->
    <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-8 animate-fade-up delay-1 w-full">
 
      <!-- Sender info -->
      <div class="flex items-center gap-5 w-full">
        <div class="w-14 h-14 rounded-2xl bg-gray-200 flex items-center justify-center flex-shrink-0">
          <svg width="26" height="26" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <h1 class="text-lg font-bold text-gray-900 tracking-tight"><?php echo e($contact->name); ?></h1>
          <p class="text-sm text-gray-400 mt-0.5"><?php echo e($contact->email); ?></p>
        </div>
        <?php if($contact->user_id != null): ?>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Authentifié</span>
        <?php else: ?>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-red-50 text-red-700 border border-green-100">Pas Authentifié</span>
        <?php endif; ?>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Meta info -->
      <div class="grid grid-cols-2 gap-5 w-full">
 
        <div class="flex items-start gap-4">
          <div class="w-9 h-9 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none">
              <rect x="2" y="4" width="16" height="12" rx="2" stroke="#6b7280" stroke-width="1.5"/>
              <path d="M2 7l8 5 8-5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Email</p>
            <p class="text-sm font-semibold text-gray-900 mt-1"><?php echo e($contact->email); ?></p>
          </div>
        </div>
 
        <div class="flex items-start gap-4">
          <div class="w-9 h-9 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none">
              <rect x="3" y="4" width="14" height="13" rx="2" stroke="#6b7280" stroke-width="1.5"/>
              <path d="M7 2v4M13 2v4M3 9h14" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Date</p>
            <p class="text-sm font-semibold text-gray-900 mt-1"><?php echo e($contact->created_at); ?></p>
          </div>
        </div>
 
        <div class="flex items-start gap-4 col-span-2">
          <div class="w-9 h-9 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none">
              <path d="M4 4h12a1 1 0 011 1v7a1 1 0 01-1 1H7l-4 3V5a1 1 0 011-1z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Sujet</p>
            <span class="inline-block mt-1 text-xs font-semibold px-3 py-1 rounded-full bg-red-50 text-red-600 border border-red-100"><?php echo e($contact->subject); ?></span>
          </div>
        </div>
 
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Message body -->
      <div class="flex flex-col gap-3 w-full">
        <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Message</p>
        <div class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-5">
          <p class="text-sm text-gray-700 leading-loose">
            <?php echo e($contact->message); ?>

          </p>
        </div>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Actions -->
      <div class="flex flex-col sm:flex-row gap-3 w-full">
        <a href="<?php echo e(route('contact.index')); ?>"
           class="btn-primary flex-1 flex items-center justify-center gap-2 px-5 py-3 rounded-full text-sm font-semibold">
          Retour
        </a>
      </div>
 
    </div>
 
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Admin/contactDetails.blade.php ENDPATH**/ ?>