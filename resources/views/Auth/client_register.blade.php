@extends('Layouts.app')
  <!-- ===== MAIN ===== -->
@section('maincontent')
    <main class="flex-1 flex items-center justify-center px-6 py-16 bg-gray-50">
    <div class="w-full max-w-md">

      <!-- Title -->
      <div class="text-center mb-8 animate-fade-up">
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-3">Créer un compte</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-2 tracking-tight">Rejoignez N-A-S Platform</h1>
        <p class="text-sm text-gray-500">Remplissez vos informations pour commencer.</p>
      </div>

      <!-- Form inside glass card -->
  <form action="{{route('client.store')}}" method="POST">
    @csrf
    @method("POST")
      <div class="glass-card animate-fade-up delay-1 !items-stretch !text-left gap-4">
       @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li style="color:red">{{$error}}</li>
          @endforeach
        </ul>
        @endif
        <!-- Name -->
        <div class="animate-fade-up delay-1 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Nom complet</label>
          <input type="text" placeholder="Jean Dupont" name="name"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>
        <input type="hidden" name="role" value="client">
        <!-- credantials : -->
        <x-Forms.credantials/>
        <!-- Verify Password -->
        <div class="animate-fade-up delay-3 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Verifier le mot de passe</label>
          <input type="password" placeholder="••••••••" name="password verified"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>
        <!-- Villes -->
        <x-Forms.villes/>
        <!-- Adresse -->
        <div class="animate-fade-up delay-3 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Write your adress</label>
          <input type="text" placeholder="hay saada , chariaa lm7ba" name="adress"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <!-- Divider -->
        <div class="w-full border-t border-gray-100 my-1"></div>

        <!-- Submit -->
        <button type="submit" class="btn-validate w-full animate-fade-up delay-4">
          Créer mon compte
        </button>
  </form>
        <!-- Login link -->
        <p class="text-center text-xs text-gray-400">
          Vous avez déjà un compte ?
          <a href="{{route('login.index')}}" class="text-gray-700 font-medium hover:text-gray-900 transition-colors">Se connecter</a>
        </p>

      </div>
    </div>
  </main>
@endsection