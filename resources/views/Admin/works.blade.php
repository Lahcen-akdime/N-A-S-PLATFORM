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
  <main class="flex-1 max-w-6xl mx-auto w-full px-6 py-12 flex flex-col gap-8">
    @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li style="color:red">{{$error}}</li>
          @endforeach
        </ul>
    @endif
    <!-- Title + CTA -->
    <div class="animate-fade-up flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Administration</p>
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Métiers disponibles</h1>
        <p class="text-sm text-gray-500 mt-1">Liste des types de travaux proposés sur la plateforme.</p>
      </div>
      <button onclick="openModal()"
        class="btn-primary inline-flex items-center gap-2 px-5 py-3 rounded-full text-sm font-semibold self-start sm:self-auto">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M7 1v12M1 7h12" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Add a work
      </button>
    </div>
 
    <!-- Works table card -->
    <div class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-0 gap-0 animate-fade-up delay-1 w-full overflow-hidden">
 
      <!-- Table header -->
      <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b border-gray-100 bg-gray-50/50">
     
        <span></span>
        <span class="col-span-3 text-xs font-semibold text-gray-400 uppercase tracking-widest">Nom du métier</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest">Workers</span>
        <span class="col-span-2 text-xs font-semibold text-gray-400 uppercase tracking-widest text-right">Actions</span> 
    </div>
    
    <!-- Rows -->
    <div id="works-list" class="flex flex-col divide-y divide-gray-100">
        @foreach($works as $work)
        <div class="work-row grid grid-cols-12 gap-4 px-6 py-5 items-center hover:bg-gray-50/60 transition-colors">
            <span></span><span></span>
            <div class="col-span-3 flex items-center gap-3">
                <span class="text-sm font-semibold text-gray-900">{{$work->name}}</span>
            </div>
            <span></span>
            <span class="col-span-2 text-sm font-semibold text-gray-700">{{$work->worker()->count()}}</span>
            <span></span>
          <div class="col-span-2 flex items-center justify-end gap-2">
            <button onclick="updateModal(this.dataset.work)" data-work="{{$work}}" class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all">
              <svg width="13" height="13" viewBox="0 0 16 16" fill="none"><path d="M11 2l3 3-8 8H3v-3l8-8z" stroke="#6b7280" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </main>
  <!-- update modal -->
  <form id="updateform" action="{{route('work.update',' ')}}" method="post">
      @csrf 
      @method('PUT')
      <div id="updateModal" class="hidden fixed inset-0 z-50 flex items-center justify-center px-4">
      <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" onclick="closeModal2()"></div>
      <div class="glass-card relative !rounded-2xl !p-10 !cursor-default !items-start !text-left gap-6 w-full max-w-md z-10 animate-fade-up">
   
        <div class="flex items-center justify-between w-full">
          <div>
            <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Nouveau</p>
            <h2 class="text-xl font-bold text-gray-900">Ajouter un métier</h2>
          </div>
          <input id="workid" name="workid" hidden >
          <button type="reset" onclick="closeModal2()" class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
              <path d="M1 1l10 10M11 1L1 11" stroke="#6b7280" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
   
        <div class="w-full border-t border-gray-100"></div>
   
        <div class="flex flex-col gap-5 w-full">
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Nom du métier</label>
            <input type="text" placeholder="Ex : Jardinage" id="inputname" name="name" 
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
          </div>  
        </div>
   
        <div class="w-full border-t border-gray-100"></div>
   
        <div class="flex gap-3 w-full">
          <button type="reset" onclick="closeModal2()" class="btn-outline flex-1 px-5 py-3 rounded-full text-sm font-semibold">Annuler</button>
          <button class="btn-validate flex-1">Enregistrer</button>
        </div>
   
      </div>
    </div>
  </form>
  <!-- ADD MODAL -->
   <form action="{{route('work.store')}}" method="post">
    @csrf 
    <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center px-4">
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" onclick="closeModal()"></div>
    <div class="glass-card relative !rounded-2xl !p-10 !cursor-default !items-start !text-left gap-6 w-full max-w-md z-10 animate-fade-up">
 
      <div class="flex items-center justify-between w-full">
        <div>
          <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Nouveau</p>
          <h2 class="text-xl font-bold text-gray-900">Ajouter un métier</h2>
        </div>
        <button onclick="closeModal()" class="w-8 h-8 rounded-xl border border-gray-200 bg-white flex items-center justify-center hover:border-gray-400 transition-all">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
            <path d="M1 1l10 10M11 1L1 11" stroke="#6b7280" stroke-width="1.6" stroke-linecap="round"/>
          </svg>
        </button>
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <div class="flex flex-col gap-5 w-full">
        <div class="flex flex-col gap-1.5 w-full">
          <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Nom du métier</label>
          <input type="text" placeholder="Ex : Jardinage" name="name"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>  
      </div>
 
      <div class="w-full border-t border-gray-100"></div>
 
      <div class="flex gap-3 w-full">
        <button onclick="closeModal()" class="btn-outline flex-1 px-5 py-3 rounded-full text-sm font-semibold">Annuler</button>
        <button class="btn-validate flex-1">Enregistrer</button>
      </div>
 
    </div>
  </div>
   </form>
  
 
  <script>
    
    
    function openModal()  { document.getElementById('modal').classList.remove('hidden'); }
    function closeModal() { document.getElementById('modal').classList.add('hidden'); }
    function updateModal(work)  {
      let resault = JSON.parse(work);
      let form = document.getElementById('updateform');
      let input = document.getElementById('workid') ;
      let inputname = document.getElementById('inputname') ;
      input.value = resault.id
      inputname.value = resault.name
      document.getElementById('updateModal').classList.remove('hidden');
   }
    function closeModal2() { document.getElementById('updateModal').classList.add('hidden'); }
  </script>
@endsection