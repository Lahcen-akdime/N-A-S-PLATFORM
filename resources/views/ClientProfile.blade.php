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
  <main class="flex-1 flex items-center justify-center px-6 py-16 bg-gray-50">
    <div class="w-full max-w-xl flex flex-col gap-6">
 
      <!-- Profile card -->
      <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-8 animate-fade-up w-full">
 
        <!-- Avatar + name -->
        <div class="flex items-center gap-6 w-full">
          <div class="w-20 h-20 rounded-2xl bg-gray-200 flex items-center justify-center flex-shrink-0">
            <svg width="36" height="36" viewBox="0 0 20 20" fill="none">
              <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.5"/>
              <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div>
            <h1 class="text-xl font-bold text-gray-900 tracking-tight">Mohamed Alaoui</h1>
            <p class="text-sm text-gray-400 mt-0.5">Client</p>
          </div>
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
 
        <!-- Info rows -->
        <div class="flex flex-col gap-6 w-full">
 
          <div class="flex items-start gap-5">
            <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="17" height="17" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
                <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Nom complet</p>
              <p class="text-sm font-semibold text-gray-900 mt-1">Mohamed Alaoui</p>
            </div>
          </div>
 
          <div class="flex items-start gap-5">
            <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="17" height="17" viewBox="0 0 20 20" fill="none">
                <rect x="2" y="4" width="16" height="12" rx="2" stroke="#6b7280" stroke-width="1.5"/>
                <path d="M2 7l8 5 8-5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Email</p>
              <p class="text-sm font-semibold text-gray-900 mt-1">mohamed.alaoui@gmail.com</p>
            </div>
          </div>
 
          <div class="flex items-start gap-5">
            <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="17" height="17" viewBox="0 0 20 20" fill="none">
                <path d="M3 5a2 2 0 012-2h1.5a1 1 0 01.96.72l.8 2.8a1 1 0 01-.23 1l-1.2 1.2a11 11 0 004.41 4.41l1.2-1.2a1 1 0 011-.23l2.8.8A1 1 0 0117 15.5V17a2 2 0 01-2 2A13 13 0 013 5z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Téléphone</p>
              <p class="text-sm font-semibold text-gray-900 mt-1">+212 6 61 23 45 67</p>
            </div>
          </div>
 
          <div class="flex items-start gap-5">
            <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="17" height="17" viewBox="0 0 20 20" fill="none">
                <path d="M10 2a6 6 0 016 6c0 4-6 10-6 10S4 12 4 8a6 6 0 016-6z" stroke="#6b7280" stroke-width="1.5"/>
                <circle cx="10" cy="8" r="2" stroke="#6b7280" stroke-width="1.4"/>
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Ville</p>
              <p class="text-sm font-semibold text-gray-900 mt-1">Casablanca</p>
            </div>
          </div>
 
          <div class="flex items-start gap-5">
            <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="17" height="17" viewBox="0 0 20 20" fill="none">
                <path d="M3 9.5L10 3l7 6.5V17a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7 18v-5h6v5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div>
              <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Adresse</p>
              <p class="text-sm font-semibold text-gray-900 mt-1">12 Rue Ibn Battouta, Maârif</p>
            </div>
          </div>
 
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
 
        <!-- Edit button -->
        <a href="edit-profile.html"
           class="btn-primary w-full flex items-center justify-center gap-2 px-5 py-3 rounded-full text-sm font-semibold">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
            <path d="M11 2l3 3-8 8H3v-3l8-8z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Modifier mon profil
        </a>
 
      </div>
 
    </div>
  </main>
@endsection