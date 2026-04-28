<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

      <!-- Logo -->
      <a href="#" class="flex items-center gap-2 font-display font-bold text-lg tracking-tight">
        <span class="w-7 h-7 bg-gray-900 rounded-full flex items-center justify-center">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 1L9.5 5.5H13L9.75 8.5L11 13L7 10.5L3 13L4.25 8.5L1 5.5H4.5L7 1Z" fill="white"/>
          </svg>
        </span>
        N-A-S 
      </a>

      <!-- Nav -->
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-500">
        <?php if($role == 'visitor'): ?>
        <a href="/" class="hover:text-gray-900 transition-colors">Home</a>
        <?php elseif($role != 'visitor' && $role != 'admin'): ?>
        <a href="<?php echo e(route('Dashboard')); ?>" class="hover:text-gray-900 transition-colors">Home</a>
        <?php endif; ?>
        <?php if($role == 'client'): ?>
        <a href="<?php echo e(route('demande.index')); ?>" class="hover:text-gray-900 transition-colors">Demandes</a>
        <a href="<?php echo e(route('demande.create')); ?>" class="hover:text-gray-900 transition-colors">Locate</a>
        <?php elseif($role == 'worker'): ?>
        <a href="/profile/<?php echo e(Auth::user()->worker->id); ?>" class="hover:text-gray-900 transition-colors">Profile</a>
        <a href="<?php echo e(route('workerDemandes.index')); ?>" class="hover:text-gray-900 transition-colors">Demandes</a>
        <?php endif; ?>
        <?php if($role == 'admin'): ?>
          <a href="<?php echo e(route('Admin.index')); ?>" class="hover:text-gray-900 transition-colors">Home</a>
          <a href="<?php echo e(route('work.index')); ?>" class="hover:text-gray-900 transition-colors">Works</a>
        <?php endif; ?>
        <a href="<?php echo e(route('contact.create')); ?>" class="hover:text-gray-900 transition-colors">Contact us</a>
      </nav>

      <!-- Login -->
      <?php echo $__env->yieldContent('login_logout_buttons'); ?>
    </div>
  </header><?php /**PATH C:\laragon\www\N-A-S\resources\views/components/header.blade.php ENDPATH**/ ?>