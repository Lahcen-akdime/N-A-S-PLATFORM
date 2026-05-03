@extends('layouts.app')
@section('login_logout_buttons')
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="{{route('Logout')}}" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Logout
        </a>
      </div>
@endsection
  <!-- ===== MAIN ===== -->
@section('maincontent')
  <!-- MAIN -->
  <main class="flex-1 max-w-7xl mx-auto w-full px-6 py-12 flex flex-col gap-8">
 
    <!-- Title -->
    <div class="animate-fade-up flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Administration</p>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Utilisateurs</h1>
        <p class="text-sm text-gray-500 mt-1">Gérez les clients et bricoleurs de la plateforme.</p>
      </div>
      <!-- Stats -->
      <div class="flex items-center gap-3">
        <div class="glass-card !flex-row !p-3 !px-4 !rounded-full !cursor-default !items-center gap-2">
          <span class="text-xs font-semibold text-gray-700">3 565 clients</span>
        </div>
        <div class="glass-card !flex-row !p-3 !px-4 !rounded-full !cursor-default !items-center gap-2">
          <span class="text-xs font-semibold text-gray-700">1 247 bricoleurs</span>
        </div>
      </div>
    </div>
 
    <!-- Filters + Search -->
    <div class="animate-fade-up delay-1 flex flex-col sm:flex-row gap-3 items-start sm:items-center">
 
      <!-- Search -->
      <div class="relative sm:ml-auto w-full sm:w-64">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
          <svg width="15" height="15" viewBox="0 0 20 20" fill="none">
            <circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.7"/>
            <path d="M13.5 13.5L17 17" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
          </svg>
        </span>
        <input type="text" placeholder="Rechercher un utilisateur..."
          class="w-full pl-9 pr-4 py-2.5 rounded-full border border-gray-200 bg-white text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-900/5 transition-all" />
      </div>
 
    </div>
 
    <!-- Table -->
    <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-0 gap-0 animate-fade-up delay-2 w-full overflow-hidden">
 
      <!-- Head -->
      <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b border-gray-100 bg-gray-50/60">
        <span class="col-span-1 text-xs font-semibold text-gray-400 uppercase tracking-widest">#</span>
        <span class="col-span-3 text-xs font-semibold text-gray-400 uppercase tracking-widest">Utilisateur</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Email</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Rôle</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Statut</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest text-right">Actions</span>
      </div>
 
      <!-- Rows -->
      <div class="flex flex-col divide-y divide-gray-100">
 
        <!-- User 1 — Client actif -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors">
          <span class="col-span-1 text-xs font-bold text-gray-300">01</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-900 truncate">Mohamed Alaoui</p>
              <p class="text-xs text-gray-400">Inscrit le 12 Jan. 2026</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-500 truncate">m.alaoui@gmail.com</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100">Client</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Actif</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 hover:border-red-300 transition-all">
              Bannir
            </button>
          </div>
        </div>
 
        <!-- User 2 — Bricoleur actif -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors">
          <span class="col-span-1 text-xs font-bold text-gray-300">02</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-900 truncate">Youssef El Amrani</p>
              <p class="text-xs text-gray-400">Inscrit le 5 Fév. 2026</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-500 truncate">youssef.ea@gmail.com</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-orange-50 text-orange-600 border border-orange-100">Bricoleur</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Actif</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 hover:border-red-300 transition-all">
              Bannir
            </button>
          </div>
        </div>
 
        <!-- User 3 — Client banni -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors bg-gray-50/40">
          <span class="col-span-1 text-xs font-bold text-gray-300">03</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#d1d5db" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#d1d5db" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-400 truncate line-through">Sara Idrissi</p>
              <p class="text-xs text-gray-300">Inscrit le 20 Déc. 2025</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-400 truncate">sara.i@outlook.com</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-100 text-gray-400 border border-gray-200">Client</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-red-50 text-red-600 border border-red-100">Banni</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-green-200 bg-green-50 text-green-700 hover:bg-green-100 hover:border-green-300 transition-all">
              Débannir
            </button>
          </div>
        </div>
 
        <!-- User 4 — Bricoleur actif -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors">
          <span class="col-span-1 text-xs font-bold text-gray-300">04</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-900 truncate">Khalid Benali</p>
              <p class="text-xs text-gray-400">Inscrit le 8 Mar. 2026</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-500 truncate">k.benali@yahoo.fr</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-orange-50 text-orange-600 border border-orange-100">Bricoleur</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Actif</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 hover:border-red-300 transition-all">
              Bannir
            </button>
          </div>
        </div>
 
        <!-- User 5 — Client actif -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors">
          <span class="col-span-1 text-xs font-bold text-gray-300">05</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-900 truncate">Nadia Lahlou</p>
              <p class="text-xs text-gray-400">Inscrit le 14 Avr. 2026</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-500 truncate">nadia.l@gmail.com</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100">Client</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Actif</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 hover:border-red-300 transition-all">
              Bannir
            </button>
          </div>
        </div>
 
        <!-- User 6 — Bricoleur banni -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors bg-gray-50/40">
          <span class="col-span-1 text-xs font-bold text-gray-300">06</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#d1d5db" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#d1d5db" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-400 truncate line-through">Hamza Tazi</p>
              <p class="text-xs text-gray-300">Inscrit le 3 Nov. 2025</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-400 truncate">h.tazi@hotmail.com</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-100 text-gray-400 border border-gray-200">Bricoleur</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-red-50 text-red-600 border border-red-100">Banni</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-green-200 bg-green-50 text-green-700 hover:bg-green-100 hover:border-green-300 transition-all">
              Débannir
            </button>
          </div>
        </div>
 
        <!-- User 7 — Client actif -->
        <div class="grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors">
          <span class="col-span-1 text-xs font-bold text-gray-300">07</span>
          <div class="col-span-3 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center flex-shrink-0">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.4"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="min-w-0">
              <p class="text-sm font-semibold text-gray-900 truncate">Fatima Oulad</p>
              <p class="text-xs text-gray-400">Inscrit le 27 Avr. 2026</p>
            </div>
          </div>
          <div class="col-span-2">
            <p class="text-sm text-gray-500 truncate">fatima.o@gmail.com</p>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100">Client</span>
          </div>
          <div class="col-span-2">
            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Actif</span>
          </div>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all" title="Voir">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M1 8s2.5-5 7-5 7 5 7 5-2.5 5-7 5-7-5-7-5z" stroke="#6b7280" stroke-width="1.4"/><circle cx="8" cy="8" r="2" stroke="#6b7280" stroke-width="1.3"/></svg>
            </button>
            <button class="text-xs font-semibold px-3 py-1.5 rounded-full border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 hover:border-red-300 transition-all">
              Bannir
            </button>
          </div>
        </div>
 
      </div>
    </div>
 
  </main>
@endsection