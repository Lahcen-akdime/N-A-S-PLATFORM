<?php $__env->startSection('login_logout_buttons'); ?>
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="<?php echo e(route('login.create')); ?>" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Login</a>
        <a href="/shoose" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Sign in
        </a>
      </div>
<?php $__env->stopSection(); ?>
  <!-- ===== MAIN ===== -->
<?php $__env->startSection('maincontent'); ?>
    <!-- Hero Section -->
  <?php if (isset($component)) { $__componentOriginal04f02f1e0f152287a127192de01fe241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04f02f1e0f152287a127192de01fe241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero','data' => ['role' => $role]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['role' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($role)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $attributes = $__attributesOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__attributesOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $component = $__componentOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__componentOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
    <!-- Features Strip -->
  <?php if (isset($component)) { $__componentOriginalf67dc3bc3f984190149e50f478986108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf67dc3bc3f984190149e50f478986108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.features','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('features'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf67dc3bc3f984190149e50f478986108)): ?>
<?php $attributes = $__attributesOriginalf67dc3bc3f984190149e50f478986108; ?>
<?php unset($__attributesOriginalf67dc3bc3f984190149e50f478986108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf67dc3bc3f984190149e50f478986108)): ?>
<?php $component = $__componentOriginalf67dc3bc3f984190149e50f478986108; ?>
<?php unset($__componentOriginalf67dc3bc3f984190149e50f478986108); ?>
<?php endif; ?>
    <!-- Feature Cards -->
  <?php if (isset($component)) { $__componentOriginale45d827ea11283b24a031a845c83a052 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale45d827ea11283b24a031a845c83a052 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale45d827ea11283b24a031a845c83a052)): ?>
<?php $attributes = $__attributesOriginale45d827ea11283b24a031a845c83a052; ?>
<?php unset($__attributesOriginale45d827ea11283b24a031a845c83a052); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale45d827ea11283b24a031a845c83a052)): ?>
<?php $component = $__componentOriginale45d827ea11283b24a031a845c83a052; ?>
<?php unset($__componentOriginale45d827ea11283b24a031a845c83a052); ?>
<?php endif; ?>
    <!-- CTA Banner -->
   <?php if (isset($component)) { $__componentOriginala649cfbd6b1ff6fb80672d9879217508 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala649cfbd6b1ff6fb80672d9879217508 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cta','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala649cfbd6b1ff6fb80672d9879217508)): ?>
<?php $attributes = $__attributesOriginala649cfbd6b1ff6fb80672d9879217508; ?>
<?php unset($__attributesOriginala649cfbd6b1ff6fb80672d9879217508); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala649cfbd6b1ff6fb80672d9879217508)): ?>
<?php $component = $__componentOriginala649cfbd6b1ff6fb80672d9879217508; ?>
<?php unset($__componentOriginala649cfbd6b1ff6fb80672d9879217508); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Home.blade.php ENDPATH**/ ?>