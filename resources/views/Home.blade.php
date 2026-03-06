@extends('Layouts.app')
@section('login_logout_buttons')
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="/login" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Login</a>
        <a href="/shoose" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Sign in
        </a>
      </div>
@endsection
  <!-- ===== MAIN ===== -->
@section('maincontent')
    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center min-h-[calc(100vh-72px)]">

      <!-- Left: Text -->
      <div class="space-y-8">

        <!-- TrustPilot badge -->
        <div class="animate-fade-up flex items-center gap-2 text-sm text-gray-600">
          <span class="text-yellow-400 text-base">★</span>
          <span class="font-medium">4.7 on Trust</span>
        </div>

        <!-- Headline -->
        <h1 class="animate-fade-up delay-1 text-5xl md:text-6xl font-bold leading-[1.1] tracking-tight text-gray-900">
          Need A<br/>Service
        </h1>

        <!-- Description -->
        <p class="animate-fade-up delay-2 text-gray-500 text-base leading-relaxed max-w-md">
        its a web application designed to bridge the gap between skilled tradespeople and individuals.
        This platform enables users to easily find a qualified professional in a specific field, based on their immediate needs.
        </p>

        <!-- Buttons -->
        <div class="animate-fade-up delay-3 flex items-center gap-3 flex-wrap">
          <a href="#" class="btn-primary px-6 py-3 rounded-full text-sm font-semibold">
            Try App For Free
          </a>
          <a href="#" class="btn-outline px-6 py-3 rounded-full text-sm font-semibold">
            Book A Demo
          </a>
        </div>
      </div>

      <!-- Right: Image + Floating UI -->
      <div class="animate-slide-in delay-2 relative rounded-3xl overflow-hidden hero-image-wrap min-h-[480px] flex items-end">

        <!-- Background photo placeholder / gradient -->
        <!-- <div class="absolute inset-0 flex items-center justify-center overflow-hidden"> -->
          <!-- <div class="w-full h-full bg-gradient-to-br from-sky-300 via-blue-400 to-blue-500 opacity-80"></div> -->
          <!-- Simulated person silhouette using CSS -->
          <!-- <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-56 h-80 rounded-t-full bg-gradient-to-b from-slate-100/60 to-slate-200/40 backdrop-blur-sm"></div> -->
        <!-- </div> -->

        <!-- Funnel Conversion Card -->
        <div class="float-card absolute top-6 left-4 bg-white rounded-2xl shadow-xl p-4 w-52 z-10">
          <div class="flex items-center justify-between mb-3">
            <span class="text-xs font-semibold text-gray-800">Statistics</span>
          </div>
          <div class="flex items-center gap-1 mb-2">
            <span class="text-[10px] text-gray-400 animate-pulse-soft">⬤ 0.01%</span>
            <span class="text-[10px] text-gray-400 ml-auto">⏱ 22m 56s</span>
          </div>
          <div class="grid grid-cols-2 gap-3 text-center">
            <div>
              <p class="text-[10px] text-gray-400 mb-1">Conversion</p>
              <div class="bar-pink rounded-lg h-16 flex items-end justify-center pb-1">
                <span class="text-white text-[11px] font-bold">82.45%</span>
              </div>
            </div>
            <div>
              <p class="text-[10px] text-gray-400 mb-1">Added to cart</p>
              <div class="space-y-1">
                <div class="bar-green rounded-lg h-7 flex items-center justify-center">
                  <span class="text-white text-[10px] font-bold">23.4%</span>
                </div>
                <div class="bar-green rounded-lg h-7 flex items-center justify-center opacity-75">
                  <span class="text-white text-[10px] font-bold">76.6%</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Love it chat bubble -->
        <div class="float-card-2 absolute bottom-16 right-4 bg-white rounded-2xl shadow-lg px-4 py-3 flex items-center gap-3 z-10 max-w-[180px]">
          <span class="text-orange-500 text-xl">♥</span>
          <span class="text-xs font-medium text-gray-800">Love it! Going to try it out</span>
        </div>

        <!-- Bottom bar -->
        <div class="relative z-10 w-full bg-black/60 backdrop-blur-md px-5 py-4 flex items-center gap-3">
          <div class="w-7 h-7 rounded-full bg-white/20 flex items-center justify-center">
            <span class="text-white text-xs">✦</span>
          </div>
          <span class="text-white text-sm font-medium">Di</span>
        </div>
      </div>
    </section>


    <!-- Features Strip -->
    <section class="bg-gray-50 border-y border-gray-100 py-14">
      <div class="max-w-6xl mx-auto px-6">
        <p class="text-center text-xs font-semibold uppercase tracking-widest text-gray-400 mb-10">Why teams choose Sparrow</p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
          <div class="space-y-2">
            <div class="text-3xl font-bold text-gray-900">10x</div>
            <p class="text-sm text-gray-500">Faster lead discovery vs manual research</p>
          </div>
          <div class="space-y-2">
            <div class="text-3xl font-bold text-gray-900">98%</div>
            <p class="text-sm text-gray-500">Contact data accuracy in real-time</p>
          </div>
          <div class="space-y-2">
            <div class="text-3xl font-bold text-gray-900">3 min</div>
            <p class="text-sm text-gray-500">Average time to first qualified lead</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Feature Cards -->
    <section class="max-w-6xl mx-auto px-6 py-20">
      <div class="text-center mb-14 space-y-3">
        <h2 class="text-3xl font-semibold tracking-tight text-gray-900">Everything you need to convert</h2>
        <p class="text-gray-400 text-base max-w-lg mx-auto">Sparrow combines real-time prospecting, AI targeting, and funnel analytics in one place.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-gray-950 text-white rounded-3xl p-8 space-y-4 hover:-translate-y-1 transition-transform duration-200">
          <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-xl">🎯</div>
          <h3 class="font-semibold text-base">Real-Time Data</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Pull live contact info as you browse, no stale databases, no guessing.</p>
        </div>
        <!-- Card 2 -->
        <div class="border border-gray-100 rounded-3xl p-8 space-y-4 hover:-translate-y-1 transition-transform duration-200">
          <div class="w-10 h-10 rounded-xl bg-pink-50 flex items-center justify-center text-xl">🤖</div>
          <h3 class="font-semibold text-base">AI Targeting</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Smart algorithms surface the right leads at the exact moment they're ready.</p>
        </div>
        <!-- Card 3 -->
        <div class="border border-gray-100 rounded-3xl p-8 space-y-4 hover:-translate-y-1 transition-transform duration-200">
          <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center text-xl">📊</div>
          <h3 class="font-semibold text-base">Funnel Analytics</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Track conversion at every stage with beautiful, actionable dashboards.</p>
        </div>
      </div>
    </section>


    <!-- CTA Banner -->
    <section class="max-w-6xl mx-auto px-6 pb-20">
      <div class="bg-gray-950 rounded-3xl px-10 py-14 text-center text-white space-y-6">
        <h2 class="text-3xl font-semibold tracking-tight">Start finding leads today.</h2>
        <p class="text-gray-400 max-w-md mx-auto text-base">Join thousands of teams using Sparrow to grow faster with AI-powered prospecting.</p>
        <div class="flex items-center justify-center gap-3 flex-wrap">
          <a href="#" class="bg-white text-gray-900 px-6 py-3 rounded-full text-sm font-bold hover:bg-gray-100 transition-colors">
            Try App For Free
          </a>
          <a href="#" class="border border-white/20 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-white/10 transition-colors">
            Book A Demo
          </a>
        </div>
      </div>
    </section>
@endsection