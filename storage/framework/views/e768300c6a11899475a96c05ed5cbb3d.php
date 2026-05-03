  <!-- ===== MAIN ===== -->
<?php $__env->startSection('maincontent'); ?>
    <main class="flex-1 flex items-center justify-center px-6 py-16 bg-gray-50">
    <div class="w-full max-w-md">

      <!-- Title -->
      <div class="text-center mb-8 animate-fade-up">
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-3">Créer un compte</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-2 tracking-tight">Rejoignez N-A-S Platform</h1>
        <p class="text-sm text-gray-500">Remplissez vos informations pour commencer.</p>
      </div>

      <!-- Form inside glass card -->
  <form action="<?php echo e(route('client.update',$client)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field("PUT"); ?>
      <div class="glass-card animate-fade-up delay-1 !items-stretch !text-left gap-4">
       <?php if($errors->any()): ?>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li style="color:red"><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <!-- Name -->
        <div class="animate-fade-up delay-1 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Nom complet</label>
          <input type="text" placeholder="Jean Dupont" name="name" value="<?php echo e($client->user->name); ?>"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>
        <input type="hidden" name="role" value="client">
        <!-- Villes -->
        <?php if (isset($component)) { $__componentOriginald1c94873a314d1c03f35001b46732646 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald1c94873a314d1c03f35001b46732646 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Forms.villes','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('Forms.villes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald1c94873a314d1c03f35001b46732646)): ?>
<?php $attributes = $__attributesOriginald1c94873a314d1c03f35001b46732646; ?>
<?php unset($__attributesOriginald1c94873a314d1c03f35001b46732646); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1c94873a314d1c03f35001b46732646)): ?>
<?php $component = $__componentOriginald1c94873a314d1c03f35001b46732646; ?>
<?php unset($__componentOriginald1c94873a314d1c03f35001b46732646); ?>
<?php endif; ?>
        <!-- Adresse -->
        <div class="animate-fade-up delay-3 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1"> Adress</label>
          <input type="text" placeholder="hay saada , chariaa lm7ba" name="adress" value="<?php echo e($client->adress); ?>"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <!-- Divider -->
        <div class="w-full border-t border-gray-100 my-1"></div>

        <!-- Submit -->
        <button type="submit" class="btn-validate w-full animate-fade-up delay-4">
          Modifier mon compte
        </button>
  </form>
        <!-- Login link -->
        <p class="text-center text-xs text-gray-400">
          
          <a href="<?php echo e(route('client.show',$client)); ?>" class="text-gray-700 font-medium hover:text-gray-900 transition-colors">Retour ➡️</a>
        </p>

      </div>
    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\N-A-S\resources\views/Client/EditProfile.blade.php ENDPATH**/ ?>