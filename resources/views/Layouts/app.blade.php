<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>N-A-S PLATFORM</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Inter', sans-serif; }
    h1, h2, h3, nav, .font-display { font-family: 'Inter', sans-serif; }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideIn {
      from { opacity: 0; transform: translateX(40px); }
      to   { opacity: 1; transform: translateX(0); }
    }
    @keyframes floatCard {
      0%, 100% { transform: translateY(0px); }
      50%       { transform: translateY(-8px); }
    }
    @keyframes pulse-soft {
      0%, 100% { opacity: 1; }
      50%       { opacity: 0.7; }
    }

    .animate-fade-up   { animation: fadeUp  0.7s ease both; }
    .animate-slide-in  { animation: slideIn 0.7s ease both; }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.25s; }
    .delay-3 { animation-delay: 0.4s; }
    .delay-4 { animation-delay: 0.55s; }

    .float-card { animation: floatCard 4s ease-in-out infinite; }
    .float-card-2 { animation: floatCard 5s ease-in-out infinite reverse; }

    .hero-image-wrap {
      background-image: url('{{asset("Ressources/european-man-plumber-transparent-white-isolated-backgroun-white-background-white-background-hd-pho_873925-930389.jpg")}}');
      background-size: cover;
      /* background: linear-gradient(135deg, #bfdbfe 0%, #93c5fd 30%, #60a5fa 60%, #3b82f6 100%); */
    }

    .bar-pink  { background: #f472b6; }
    .bar-green { background: #34d399; }

    .btn-primary {
      background: #111827;
      color: #fff;
      transition: background 0.2s, transform 0.15s;
    }
    .btn-primary:hover { background: #374151; transform: translateY(-1px); }

    .btn-outline {
      border: 1.5px solid #d1d5db;
      color: #111827;
      transition: border-color 0.2s, background 0.2s;
    }
    .btn-outline:hover { border-color: #9ca3af; background: #f9fafb; }

    /* Footer columns hover */
    .footer-link { transition: color 0.15s; }
    .footer-link:hover { color: #111827; }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes shimmer {
      0%   { background-position: -400% center; }
      100% { background-position:  400% center; }
    }

    .animate-fade-up { animation: fadeUp 0.7s ease both; }
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.25s; }
    .delay-3 { animation-delay: 0.4s; }

    /* ── Same buttons as landing ── */
    .btn-primary {
      background: #111827;
      color: #fff;
      transition: background 0.2s, transform 0.15s;
    }
    .btn-primary:hover { background: #374151; transform: translateY(-1px); }

    .footer-link { transition: color 0.15s; }
    .footer-link:hover { color: #111827; }

    /* ── Glossy cards ── */
    .glass-card {
      position: relative;
      border-radius: 20px;
      cursor: pointer;
      overflow: hidden;
      padding: 2.5rem 2rem 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;

      /* white glossy surface */
      background: linear-gradient(
        150deg,
        rgba(255,255,255,1)   0%,
        rgba(245,245,245,0.9) 50%,
        rgba(255,255,255,1)   100%
      );
      border: 1px solid rgba(0,0,0,0.08);
      border-top: 1.5px solid rgba(255,255,255,0.95);
      box-shadow:
        0 2px 4px rgba(0,0,0,0.04),
        0 8px 24px rgba(0,0,0,0.08),
        0 20px 40px rgba(0,0,0,0.06),
        inset 0 1.5px 0 rgba(255,255,255,1),
        inset 0 -1px 0 rgba(0,0,0,0.04);

      transition:
        transform 0.25s cubic-bezier(.22,.68,0,1.2),
        box-shadow 0.25s ease,
        border-color 0.2s ease;
    }

    /* top gloss highlight streak */
    .glass-card::before {
      content: '';
      position: absolute;
      top: 0; left: 10%; right: 10%;
      height: 1px;
      background: linear-gradient(90deg,
        transparent,
        rgba(255,255,255,0.9) 50%,
        transparent
      );
    }

    /* shimmer sweep on hover */
    .glass-card::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(110deg,
        transparent 0%,
        rgba(255,255,255,0.45) 50%,
        transparent 100%
      );
      opacity: 0;
      transition: opacity 0.25s ease;
      pointer-events: none;
    }
    .glass-card:hover::after {
      opacity: 1;
    }
    .glass-card:hover {
      transform: translateY(-6px) scale(1.015);
      box-shadow:
        0 4px 8px rgba(0,0,0,0.05),
        0 16px 40px rgba(0,0,0,0.12),
        0 32px 60px rgba(0,0,0,0.08),
        inset 0 1.5px 0 rgba(255,255,255,1);
    }

    /* ── Selected — black border + orange glow ── */
    .glass-card.selected {
      border-color: #111827;
      box-shadow:
        0 4px 8px rgba(0,0,0,0.06),
        0 16px 40px rgba(0,0,0,0.12),
        0 0 0 3px rgba(17,24,39,0.08),
        0 0 24px rgba(249,115,22,0.12),
        inset 0 1.5px 0 rgba(255,255,255,1);
      transform: translateY(-4px) scale(1.015);
    }

    /* icon wrap: orange tint on selected */
    .glass-card.selected .role-icon-wrap {
      background: linear-gradient(135deg, #fff7ed, #ffedd5);
      border-color: rgba(249,115,22,0.3);
      box-shadow: 0 0 16px rgba(249,115,22,0.15), inset 0 1px 0 rgba(255,255,255,0.9);
    }
    .glass-card.selected .role-icon-wrap svg path,
    .glass-card.selected .role-icon-wrap svg circle {
      stroke: #ea580c;
    }

    /* check badge */
    .check-icon {
      opacity: 0;
      transform: scale(0.4) rotate(-20deg);
      transition: opacity 0.22s ease, transform 0.3s cubic-bezier(.22,.68,0,1.6);
    }
    .glass-card.selected .check-icon {
      opacity: 1;
      transform: scale(1) rotate(0deg);
    }

    /* ── Icon wrap ── */
    .role-icon-wrap {
      width: 68px; height: 68px;
      border-radius: 18px;
      background: linear-gradient(135deg, #f9fafb, #f3f4f6);
      border: 1px solid rgba(0,0,0,0.07);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 1.25rem;
      transition: background 0.3s, box-shadow 0.3s, border-color 0.3s;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.9),
        0 2px 8px rgba(0,0,0,0.08);
    }

    /* ── Validate button — glossy black ── */
    .btn-validate {
      position: relative;
      overflow: hidden;
      background: linear-gradient(160deg, #1f2937 0%, #111827 60%, #0f172a 100%);
      color: #fff;
      border: none;
      border-top: 1px solid rgba(255,255,255,0.12);
      border-radius: 50px;
      padding: 0.85rem 3.5rem;
      font-size: 0.875rem;
      font-weight: 600;
      letter-spacing: 0.01em;
      cursor: pointer;
      transition: transform 0.18s ease, box-shadow 0.22s ease, opacity 0.2s;
      box-shadow:
        0 2px 4px rgba(0,0,0,0.15),
        0 8px 24px rgba(0,0,0,0.2),
        inset 0 1px 0 rgba(255,255,255,0.12),
        inset 0 -1px 0 rgba(0,0,0,0.2);
    }
    /* gloss sweep */
    .btn-validate::before {
      content: '';
      position: absolute;
      top: 0; left: -80%;
      width: 50%; height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.12), transparent);
      transform: skewX(-18deg);
      transition: left 0.45s ease;
    }
    .btn-validate:not(:disabled):hover {
      transform: translateY(-2px);
      box-shadow:
        0 4px 8px rgba(0,0,0,0.18),
        0 14px 32px rgba(0,0,0,0.22),
        0 0 20px rgba(249,115,22,0.12),
        inset 0 1px 0 rgba(255,255,255,0.14);
    }
    .btn-validate:not(:disabled):hover::before { left: 160%; }
    .btn-validate:disabled {
      opacity: 0.35;
      cursor: not-allowed;
      box-shadow: none;
    }
  </style>
</head>
<body class="bg-white text-gray-900 antialiased">

  <!-- ===== HEADER ===== -->
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
        <a href="#" class="hover:text-gray-900 transition-colors">Product</a>
        <a href="#" class="hover:text-gray-900 transition-colors">Solutions</a>
        <a href="#" class="hover:text-gray-900 transition-colors">Resources</a>
        <a href="#" class="hover:text-gray-900 transition-colors">Contact us</a>
      </nav>

      <!-- Login -->
      @yield('login_logout_buttons')
    </div>
  </header>


  <!-- ===== MAIN ===== -->
  <main>
    @yield('maincontent')
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

</body>
</html>