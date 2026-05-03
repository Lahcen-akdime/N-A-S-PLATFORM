@extends('Layouts.app')
@section('login_logout_buttons')
    @if($role == 'visitor')
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="{{route('login.create')}}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Login</a>
        <a href="/shoose" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Sign in
        </a>
      </div>
    @else
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="{{route('Logout')}}" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Logout
        </a>
      </div>
    @endif
@endsection
  <!-- ===== MAIN ===== -->
@section('maincontent')
<!-- MAIN -->
<main class="flex-1 max-w-6xl mx-auto w-full px-6 py-16 flex flex-col gap-14">
  @if(session('message'))
  <h2 style="color:green ; border:solid 1px green;border-radius:5px;padding:10px;text-align:center">{{session('message')}}</h2>
  @endif
  <!-- Title -->
  <div class="animate-fade-up text-center">
    <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-3">Support</p>
      <h1 class="text-4xl font-bold text-gray-900 tracking-tight mb-3">Contactez-nous</h1>
      <p class="text-sm text-gray-500 max-w-md mx-auto">Une question, un problème ou une suggestion ? Notre équipe vous répond dans les plus brefs délais.</p>
  </div>
    
    <!-- Grid: info left + form right -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 animate-fade-up delay-1">
      
      <!-- Left — contact info -->
      <div class="md:col-span-2 flex flex-col gap-5">
        
        <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-7 gap-5">
          
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
              <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <rect x="2" y="4" width="16" height="12" rx="2" stroke="#6b7280" stroke-width="1.5"/>
                <path d="M2 7l8 5 8-5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-1">Email</p>
              <p class="text-sm font-semibold text-gray-900">support@nas.ma</p>
              <p class="text-xs text-gray-400 mt-0.5">Réponse sous 24h</p>
            </div>
            </div>
            
            <div class="w-full border-t border-gray-100"></div>
            
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <path d="M3 5a2 2 0 012-2h1.5a1 1 0 01.96.72l.8 2.8a1 1 0 01-.23 1l-1.2 1.2a11 11 0 004.41 4.41l1.2-1.2a1 1 0 011-.23l2.8.8A1 1 0 0117 15.5V17a2 2 0 01-2 2A13 13 0 013 5z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </div>
              <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-1">Téléphone</p>
                <p class="text-sm font-semibold text-gray-900">+212 7 71 49 27 31</p>
                <p class="text-xs text-gray-400 mt-0.5">Lun – Ven, 9h – 18h</p>
              </div>
              </div>
              
              <div class="w-full border-t border-gray-100"></div>
          
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center flex-shrink-0">
                  <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                <path d="M10 2a6 6 0 016 6c0 4-6 10-6 10S4 12 4 8a6 6 0 016-6z" stroke="#6b7280" stroke-width="1.5"/>
                <circle cx="10" cy="8" r="2" stroke="#6b7280" stroke-width="1.4"/>
              </svg>
            </div>
            <div>
              <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-1">Adresse</p>
              <p class="text-sm font-semibold text-gray-900">Agadir , Maroc</p>
              <p class="text-xs text-gray-400 mt-0.5"> Center, Tour Ouest</p>
            </div>
          </div>
          
        </div>
        
        <!-- Status -->
        <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-6 gap-3">
          <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-green-500"></div>
            <p class="text-xs font-semibold text-gray-700">Équipe disponible</p>
          </div>
          <p class="text-xs text-gray-400 leading-relaxed">Temps de réponse moyen : <span class="font-semibold text-gray-700">moins de 8 heures</span> en semaine.</p>
        </div>
        
      </div>
      
      <!-- Right — form -->
      <div class="md:col-span-3">
        <form action="{{route('contact.store')}}" method="post">
          @csrf
          <div id="form-view" class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-6 w-full">
            
            <div>
              <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Formulaire</p>
              <h2 class="text-xl font-bold text-gray-900">Envoyez-nous un message</h2>
            </div>
            
            <div class="w-full border-t border-gray-100"></div>
            
            <div class="flex flex-col gap-5 w-full">
            @if($errors->any())
                <ul>
                  @foreach($errors->all() as $error)
                  <li style="color:red;border:solid 1px red;border-radius:5px;padding:10px;text-align:center">{{$error}}</li>
                  @endforeach
                </ul>
            @endif
            @if($role == 'visitor')
            <div class="animate-fade-up delay-1 flex flex-col gap-1 w-full">
            <label class="text-xs font-medium text-gray-500 pl-1">YOUR NAME</label>
            <input type="text" placeholder="Jean Dupont" name="name"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
            </div>
            <div class="animate-fade-up delay-2 flex flex-col gap-1 w-full">
            <label class="text-xs font-medium text-gray-500 pl-1">ADRESS EMAIL</label>
            <input type="email" placeholder="jean@exemple.com" name="email"
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
            </div>
            @endif

            <div class="flex flex-col gap-1.5 w-full">
              <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Sujet</label>
              <select require name="subject" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all">
                <option value="" disabled selected>Sélectionnez un sujet</option>
                <option value="technical problem">technical problem</option>
                <option value="Question of compte">Question of compte</option>
                <option value="Report a user">Report a user</option>
                <option value="Demander un stage">demande du stage</option>
                <option value="autre">Autre</option>
              </select>
            </div>
 
            <div class="flex flex-col gap-1.5 w-full">
              <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest" >Message</label>
              <textarea name="message" rows="6" placeholder="Décrivez votre demande en détail..." require
                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all resize-none leading-relaxed"></textarea>
            </div>
 
          </div>
 
          <div class="w-full border-t border-gray-100"></div>
 
          <button onclick="handleSend()" class="btn-validate w-full flex items-center justify-center gap-2">
            <svg width="15" height="15" viewBox="0 0 20 20" fill="none">
              <path d="M2 10l16-7-7 16-2-7-7-2z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Envoyer le message
          </button>
 
        </div>
 
        <!-- Success state -->
        <div id="success-view" class="hidden glass-card !items-center !text-center !cursor-default !rounded-2xl !p-14 gap-6 w-full">
          <div class="w-16 h-16 rounded-full bg-gray-900 flex items-center justify-center">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
              <path d="M6 15l6 6 12-12" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="flex flex-col gap-2">
            <h2 class="text-xl font-bold text-gray-900">Message envoyé !</h2>
            <p class="text-sm text-gray-500 max-w-xs mx-auto leading-relaxed">Nous avons bien reçu votre message. Notre équipe vous répondra très prochainement.</p>
          </div>
          <button onclick="resetForm()" class="btn-outline px-6 py-3 rounded-full text-sm font-semibold">
            Envoyer un autre message
          </button>
        </div>
      </form>
      </div>
 
    </div>
 
  </main>

@endsection