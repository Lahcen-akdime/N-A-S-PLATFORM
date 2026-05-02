@extends('Layouts.app')
@section('login_logout_buttons')
      <!-- CTA -->
      <div class="flex items-center gap-3">
        <a href="{{route('login.create')}}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Login</a>
        <a href="/shoose" class="btn-primary text-sm font-semibold px-4 py-2 rounded-full hidden sm:inline-block">
          Sign in
        </a>
      </div>
@endsection
  <!-- ===== MAIN ===== -->
@section('maincontent')
    <!-- Hero Section -->
  <x-hero :role="$role"/>
    <!-- Features Strip -->
  <x-features />
    <!-- Feature Cards -->
  <x-cards />
    <!-- CTA Banner -->
   <x-cta />
@endsection