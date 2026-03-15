  <!-- ===== MAIN ===== -->
<?php $__env->startSection('maincontent'); ?>
    <main class="flex-1 flex items-center justify-center px-6 py-16 bg-gray-50">
    <div class="w-full max-w-md">

      <!-- Title -->
      <div class="text-center mb-8 animate-fade-up">
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-3">Bienvune</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-2 tracking-tight">Rejoignez N-A-S Platform</h1>
        <p class="text-sm text-gray-500">Remplissez vos informations pour acceder.</p>
      </div>

      <!-- Form inside glass card -->
    <form class="login-form" method="POST" action="<?php echo e(route('login.store')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field("POST"); ?>
      <div class="glass-card animate-fade-up delay-1 !items-stretch !text-left gap-4">

        <!-- credantials : -->
        <?php if (isset($component)) { $__componentOriginal5f43ef558bd0483ce346b7804ca1bb05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f43ef558bd0483ce346b7804ca1bb05 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Forms.credantials','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('Forms.credantials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f43ef558bd0483ce346b7804ca1bb05)): ?>
<?php $attributes = $__attributesOriginal5f43ef558bd0483ce346b7804ca1bb05; ?>
<?php unset($__attributesOriginal5f43ef558bd0483ce346b7804ca1bb05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f43ef558bd0483ce346b7804ca1bb05)): ?>
<?php $component = $__componentOriginal5f43ef558bd0483ce346b7804ca1bb05; ?>
<?php unset($__componentOriginal5f43ef558bd0483ce346b7804ca1bb05); ?>
<?php endif; ?>

        <!-- Submit -->
        <button type="submit" class="btn-validate w-full animate-fade-up delay-4">
          Login
        </button>
  </form>
        <!-- Login link -->
        <p class="text-center text-xs text-gray-400">
          Vous n'avez pas un compte ?
          <a href="/shoose" class="text-gray-700 font-medium hover:text-gray-900 transition-colors">S'inscrire</a>
        </p>

      </div>
    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Auth/login.blade.php ENDPATH**/ ?>