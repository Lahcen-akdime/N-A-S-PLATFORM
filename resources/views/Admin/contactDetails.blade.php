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
          <h1 class="text-lg font-bold text-gray-900 tracking-tight">Karim Alaoui</h1>
          <p class="text-sm text-gray-400 mt-0.5">karim@gmail.com</p>
        </div>
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">Authentifié</span>
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
            <p class="text-sm font-semibold text-gray-900 mt-1">karim@gmail.com</p>
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
            <p class="text-sm font-semibold text-gray-900 mt-1">2 Mai 2026 · 10:34</p>
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
            <span class="inline-block mt-1 text-xs font-semibold px-3 py-1 rounded-full bg-red-50 text-red-600 border border-red-100">Problème technique</span>
          </div>
        </div>
 
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Message body -->
      <div class="flex flex-col gap-3 w-full">
        <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Message</p>
        <div class="w-full bg-gray-50 border border-gray-100 rounded-2xl px-6 py-5">
          <p class="text-sm text-gray-700 leading-loose">
            Bonjour,
            <br/><br/>
            L'application ne charge pas ma liste de bricoleurs sur mobile depuis hier soir. J'ai réessayé plusieurs fois en vidant le cache, en changeant de réseau Wi-Fi et en réinstallant complètement l'application, mais le problème persiste à chaque tentative.
            <br/><br/>
            J'ai un chantier urgent prévu demain matin et j'ai besoin de contacter un plombier via la plateforme. Pourriez-vous regarder ce problème en priorité et me tenir informé dès que possible ?
            <br/><br/>
            Merci d'avance pour votre aide.
            <br/><br/>
            Karim Alaoui
          </p>
        </div>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <!-- Actions -->
      <div class="flex flex-col sm:flex-row gap-3 w-full">
        <a href="mailto:karim@gmail.com"
           class="btn-primary flex-1 flex items-center justify-center gap-2 px-5 py-3 rounded-full text-sm font-semibold">
          <svg width="14" height="14" viewBox="0 0 20 20" fill="none">
            <rect x="2" y="4" width="16" height="12" rx="2" stroke="white" stroke-width="1.5"/>
            <path d="M2 7l8 5 8-5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
          Répondre par email
        </a>
        <button class="btn-outline flex-1 flex items-center justify-center gap-2 px-5 py-3 rounded-full text-sm font-semibold">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
            <path d="M2 4h12M5 4V2h6v2M6 7v5M10 7v5M3 4l1 10h8l1-10" stroke="#111827" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Supprimer
        </button>
      </div>
 
    </div>
 
  </main>
@endsection