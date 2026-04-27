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
        <!-- <a href="#" class="hover:text-gray-900 transition-colors">Solutions</a> -->
        <a href="{{route('Dashboard')}}" class="hover:text-gray-900 transition-colors">Home</a>
        @if($role == 'client')
        <a href="{{route('demande.index')}}" class="hover:text-gray-900 transition-colors">Demandes</a>
        <a href="{{route('demande.create')}}" class="hover:text-gray-900 transition-colors">Locate</a>
        @elseif($role == 'worker')
        <a href="#" class="hover:text-gray-900 transition-colors">Profile</a>
        <a href="{{route('workerDemandes.index')}}" class="hover:text-gray-900 transition-colors">Demandes</a>
        @endif
        <a href="#" class="hover:text-gray-900 transition-colors">Contact us</a>
      </nav>

      <!-- Login -->
      @yield('login_logout_buttons')
    </div>
  </header>