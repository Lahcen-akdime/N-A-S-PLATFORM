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
  <form action="client.store" method="POST">
    @csrf
    @method('POST')
      <div class="glass-card animate-fade-up delay-1 !items-stretch !text-left gap-4">

        <!-- Name -->
        <div class="animate-fade-up delay-1 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Nom complet</label>
          <input type="text" placeholder="Jean Dupont" name="name"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <!-- Email -->
        <div class="animate-fade-up delay-2 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Adresse email</label>
          <input type="email" placeholder="jean@exemple.com" name="email"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <!-- Password -->
        <div class="animate-fade-up delay-3 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Mot de passe</label>
          <input type="password" placeholder="••••••••" name="password"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <!-- Verify Password -->
        <div class="animate-fade-up delay-3 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Verifier le mot de passe</label>
          <input type="password" placeholder="••••••••" name="password verified"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <!-- City -->
        <div class="animate-fade-up delay-4 flex flex-col gap-1 w-full">
          <label class="text-xs font-medium text-gray-500 pl-1">Ville</label>
          <select name="ville" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all">
            <option value="" disabled selected>Sélectionner une ville</option>
            <option>Casablanca</option>
            <option>Rabat</option>
            <option>Marrakech</option>
            <option>Fès</option>
            <option>Tanger</option>
            <option>Agadir</option>
            <option>Meknès</option>
            <option>Oujda</option>
            <option>Kénitra</option>
            <option>Tétouan</option>
            <option>Salé</option>
            <option>Temara</option>
            <option>Safi</option>
            <option>El Jadida</option>
            <option>Béni Mellal</option>
            <option>Nador</option>
            <option>Mohammédia</option>
            <option>Khouribga</option>
            <option>Settat</option>
            <option>Berrechid</option>
            <option>Khémisset</option>
            <option>Taza</option>
            <option>Inezgane</option>
            <option>Larache</option>
            <option>Ksar El Kébir</option>
            <option>Guelmim</option>
            <option>Berkane</option>
            <option>Al Hoceima</option>
            <option>Taourirt</option>
            <option>Ouarzazate</option>
            <option>Tiznit</option>
            <option>Errachidia</option>
            <option>Azrou</option>
            <option>Ifrane</option>
            <option>Bouskoura</option>
            <option>Dakhla</option>
            <option>Laâyoune</option>
            <option>Tan-Tan</option>
            <option>Sidi Ifni</option>
            <option>Zagora</option>
            <option>Midelt</option>
            <option>Sidi Slimane</option>
            <option>Sidi Kacem</option>
            <option>Souk El Arbaa</option>
            <option>Fnideq</option>
            <option>M'diq</option>
            <option>Martil</option>
            <option>Asilah</option>
            <option>Chefchaouen</option>
            <option>Ouezzane</option>
          </select>
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
          Déjà un compte ?
          <a href="#" class="text-gray-700 font-medium hover:text-gray-900 transition-colors">Se connecter</a>
        </p>

      </div>
    </div>
  </main>
@endsection