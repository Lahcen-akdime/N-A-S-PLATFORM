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
  <!-- <button id="btn">locate me</h1> -->
  <h1 id="test"></h1>
  <main class="flex-1 max-w-6xl mx-auto w-full px-6 py-12">

    <!-- Welcome + CTA -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10 animate-fade-up">
      <div>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Tableau des demandes</p>
      </div>

      <a href="{{route('locate.create')}}"
         class="btn-primary inline-flex items-center gap-2 px-5 py-3 rounded-full text-sm font-semibold self-start sm:self-auto">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M7 1v12M1 7h12" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Nouvelle demande
      </a>
    </div>

    
    <!-- History title -->
    <div class="flex items-center justify-between mb-5 animate-fade-up delay-2">
      <h2 class="text-base font-semibold text-gray-900">Historique des demandes</h2>
      <a href="#" class="text-xs font-medium text-gray-400 hover:text-gray-700 transition-colors">Voir tout →</a>
    </div><br>
    <!-- Demandes list -->
<div class="flex flex-col gap-4">
    @foreach($demandes as $demande)
    @if($demande->state != 'rejected' && $demande->state != 'Canceled')
      <div class="glass-card !flex-row !items-center !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-2">
        
        <div class="w-12 h-12 rounded-full bg-gray-200 flex-shrink-0 overflow-hidden flex items-center justify-center">
          <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-900">{{$demande->title}}</p>
          <p class="text-xs text-gray-400 mt-0.5">Vers le travailleur : <span class="text-gray-600 font-medium">{{$demande->worker->user->name}} - {{$demande->worker->work->name}}</span></p>
          <p class="text-xs text-gray-400 mt-0.5">{{$demande->created_at}}</p>
        </div>
        @if($demande->state == 'Accepted')
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">
          Accepted
        </span>
        @elseif($demande->state == 'done')
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100">
          Done
        </span>
          @else
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-orange-50 text-orange-600 border border-orange-100">
          Pending
        </span>
          @endif
        <form action="{{route('demande.destroy',$demande)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-orange-50 text-red-600 border border-orange-800">Cancel the demande</button>
        </form>
      </div>
      @endif
      @endforeach
      <br><div class="flex items-center justify-between mb-5 animate-fade-up delay-2">
        <h2 class="text-base font-semibold text-gray-900">Canceled & Rejected demandes</h2>
      </div>
      @foreach($demandes as $demande)
      @if($demande->state == 'Rejected' || $demande->state == 'Canceled')
      <div class="glass-card !flex-row !items-center !text-left !p-5 !rounded-2xl !cursor-default gap-4 animate-fade-up delay-2">
        <div class="w-12 h-12 rounded-full bg-gray-200 flex-shrink-0 overflow-hidden flex items-center justify-center">
          <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="7" r="3.5" stroke="#6b7280" stroke-width="1.5"/>
            <path d="M3 17c0-3.866 3.134-7 7-7s7 3.134 7 7" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- Info -->
        <div class="flex-1 min-w-0">
          <p class="text-sm font-semibold text-gray-900">{{$demande->title}}</p>
          <p class="text-xs text-gray-400 mt-0.5">Vers le travailleur : <span class="text-gray-600 font-medium">{{$demande->worker->user->name}} - {{$demande->worker->work->name}}</span></p>
          <p class="text-xs text-gray-400 mt-0.5">{{$demande->created_at}}</p>
        </div>
        @if($demande->state == 'Rejected')
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">
          Rejected
        </span>
        @elseif($demande->state == 'Canceled')
        <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100">
          Canceled
        </span>
        @endif
      </div>
      @endif
      @endforeach
</div>
  </main>
@endsection