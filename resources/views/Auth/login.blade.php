@extends('Layouts.app')
  <!-- ===== MAIN ===== -->
@section('maincontent')
    <main class="flex-1 flex items-center justify-center px-6 py-16 bg-gray-50">
    <div class="w-full max-w-md">
       @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li style="color:red">{{$error}}</li>
          @endforeach
        </ul>
        @endif
      <!-- Title -->
      <div class="text-center mb-8 animate-fade-up">
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-3">Bienvune</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-2 tracking-tight">Rejoignez N-A-S Platform</h1>
        <p class="text-sm text-gray-500">Remplissez vos informations pour acceder.</p>
      </div>

      <!-- Form inside glass card -->
    <form class="login-form" method="POST" action="{{route('login.store')}}">
    @csrf
    @method("POST")
      <div class="glass-card animate-fade-up delay-1 !items-stretch !text-left gap-4">

        <!-- credantials : -->
        <x-Forms.credantials/>

        <!-- Submit -->
        <button type="submit" class="btn-validate w-full animate-fade-up delay-4">
          Login
        </button>
  </form>
        <!-- Login link -->
        <p class="text-center text-xs text-gray-400">
          Vous n'avez pas un compte ?
          <a href="/shoose" class="text-gray-700 font-medium hover:text-gray-900 transition-colors">S'inscrire</a>
        </p>

      </div>
    </div>
  </main>
@endsection