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
    <div class="w-full max-w-2xl flex flex-col gap-8">
 
      <!-- Title -->
      <div class="animate-fade-up">
        <a href="worker-profile.html" class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-gray-700 transition-colors mb-6">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M9 2L3 7l6 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Retour
        </a>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-2">Nouvelle demande</p>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Décrivez votre besoin</h1>
        <p class="text-sm text-gray-500 mt-2">Donnez le maximum de détails pour que le bricoleur comprenne votre demande.</p>
      </div>
     @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li style="color:red">{{$error}}</li>
          @endforeach
        </ul>
      @endif
      <!-- Form card -->
    <form action="{{route('demande.store')}}" method="POST">
        @csrf
      <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-8 animate-fade-up delay-1 w-full">
        <!-- Worker info -->
    <div class="flex items-center gap-8 w-full">
        <div class="w-28 h-28 rounded-2xl bg-gray-200 flex-shrink-0 flex items-center justify-center">
          <svg width="52" height="52" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#9ca3af" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <h1 class="text-xl font-bold text-gray-900 tracking-tight">{{$worker->user->name}}</h1>
          <p class="text-sm text-gray-400 mt-0.5">{{$worker->work->name}} · {{$worker->ville}}</p>
          <!-- Evaluation stars -->
          <div class="flex items-center gap-1 mt-2">
            <span class="text-orange-400 text-base leading-none">★★★★</span>
            <span class="text-gray-300 text-base leading-none">★</span>
            <span class="text-xs font-semibold text-gray-600 ml-1">4 / 5</span>
          </div>
        </div>
    </div>
        <div class="w-full border-t border-gray-100"></div>
 
        <!-- Title of request -->
        <div class="flex flex-col gap-2 w-full">
          <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Titre de la demande</label>
          <input type="text" placeholder="Ex : Fuite d'eau sous l'évier de la cuisine" name='title' value="i need a service" required
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>
        
        <input type="hidden" name="worker_id" value="{{$worker->id}}">
 
        <!-- Description -->
        <div class="flex flex-col gap-2 w-full">
          <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Description</label>
          <textarea name='description' rows="6" placeholder="Décrivez le problème en détail : depuis quand, où exactement, ce que vous avez déjà essayé…"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all resize-none leading-relaxed"></textarea>
          <p class="text-xs text-gray-400 text-right">0 / 500 caractères</p>
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
 

        <div class="flex flex-col gap-3 w-full">
          <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Urgence</label>
          <div class="flex gap-3 flex-wrap">
            <label class="flex items-center gap-2 px-4 py-2.5 rounded-xl border border-gray-200 bg-white text-sm font-medium text-gray-700 cursor-pointer hover:border-gray-400 transition-all has-[:checked]:border-gray-900 has-[:checked]:bg-gray-900 has-[:checked]:text-white">
              <input type="radio" name="emergency" value="normal" class="hidden" checked /> Normal
            </label>
            <label class="flex items-center gap-2 px-4 py-2.5 rounded-xl border border-gray-200 bg-white text-sm font-medium text-gray-700 cursor-pointer hover:border-gray-400 transition-all has-[:checked]:border-gray-900 has-[:checked]:bg-gray-900 has-[:checked]:text-white">
              <input type="radio" name="emergency" value="urgent" class="hidden" /> Urgent
            </label>
            <label class="flex items-center gap-2 px-4 py-2.5 rounded-xl border border-gray-200 bg-white text-sm font-medium text-gray-700 cursor-pointer hover:border-gray-400 transition-all has-[:checked]:border-gray-900 has-[:checked]:bg-gray-900 has-[:checked]:text-white">
              <input type="radio" name="emergency" value="flexible" class="hidden" /> Flexible
            </label>
          </div>
        </div>
 
        <div class="w-full border-t border-gray-100"></div>
 
        <!-- Submit -->
        <button class="btn-validate w-full">
          Envoyer la demande
        </button>
    </div>
</form>
    </div>
  </main>
@endsection