<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>N-A-S PLATFORM</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="<?php echo e(asset('js/script.js')); ?>" defer></script>
</head>
<body class="bg-white text-gray-900 antialiased">
  <!-- ===== HEADER ===== -->
  <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => ['role' => $role]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['role' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($role)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
  <!-- ===== MAIN ===== -->
  <main>
    <?php echo $__env->yieldContent('maincontent'); ?>
  </main>
  <!-- ===== FOOTER ===== -->
  <footer class="border-t border-gray-100 bg-white">
    <div class="max-w-6xl mx-auto px-6 py-14 grid grid-cols-2 md:grid-cols-5 gap-10">

      <!-- Brand -->
      <div class="col-span-2 md:col-span-1 space-y-4">
        <a href="#" class="flex items-center gap-2 font-display font-bold text-base">
          <span class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
            <svg width="11" height="11" viewBox="0 0 14 14" fill="none"><path d="M7 1L9.5 5.5H13L9.75 8.5L11 13L7 10.5L3 13L4.25 8.5L1 5.5H4.5L7 1Z" fill="white"/></svg>
          </span>
          N-A-S
        </a>
        <p class="text-xs text-gray-400 leading-relaxed">AI-powered prospecting for modern sales teams.</p>
        <p class="text-xs text-gray-300">★★★★★ 4.7 on TrustPilot</p>
      </div>

      <!-- Product -->
      <div class="space-y-3">
        <p class="text-xs font-semibold uppercase tracking-widest text-gray-400">Product</p>
        <ul class="space-y-2 text-sm text-gray-500">
          <li><a href="#" class="footer-link">Features</a></li>
          <li><a href="#" class="footer-link">Pricing</a></li>
          <li><a href="#" class="footer-link">Changelog</a></li>
          <li><a href="#" class="footer-link">Roadmap</a></li>
        </ul>
      </div>

      <!-- Solutions -->
      <div class="space-y-3">
        <p class="text-xs font-semibold uppercase tracking-widest text-gray-400">Solutions</p>
        <ul class="space-y-2 text-sm text-gray-500">
          <li><a href="#" class="footer-link">For Startups</a></li>
          <li><a href="#" class="footer-link">For Agencies</a></li>
          <li><a href="#" class="footer-link">For Enterprise</a></li>
        </ul>
      </div>

      <!-- Resources -->
      <div class="space-y-3">
        <p class="text-xs font-semibold uppercase tracking-widest text-gray-400">Resources</p>
        <ul class="space-y-2 text-sm text-gray-500">
          <li><a href="#" class="footer-link">Blog</a></li>
          <li><a href="#" class="footer-link">Documentation</a></li>
          <li><a href="#" class="footer-link">Support</a></li>
          <li><a href="#" class="footer-link">API</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div class="space-y-3">
        <p class="text-xs font-semibold uppercase tracking-widest text-gray-400">Company</p>
        <ul class="space-y-2 text-sm text-gray-500">
          <li><a href="#" class="footer-link">About</a></li>
          <li><a href="#" class="footer-link">Careers</a></li>
          <li><a href="#" class="footer-link">Privacy</a></li>
          <li><a href="#" class="footer-link">Terms</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t border-gray-100 py-5 px-6 max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-gray-400">
      <p>© 2026 N-A-S — All rights reserved.</p>
      <div class="flex items-center gap-4">
        <a href="#" class="footer-link">Privacy Policy</a>
        <a href="#" class="footer-link">Terms of Service</a>
        <a href="#" class="footer-link">Cookies</a>
      </div>
    </div>
  </footer>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\N-A-S\resources\views/Layouts/app.blade.php ENDPATH**/ ?>