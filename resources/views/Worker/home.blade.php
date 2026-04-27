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
<x-hero />
@endsection