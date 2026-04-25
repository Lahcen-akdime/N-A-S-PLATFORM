@extends('Layouts.app')
  <!-- ===== MAIN ===== -->
@section('maincontent')
  <main class="flex-1 flex items-center justify-center px-6 py-14 bg-gray-50" >
    <div class="w-full max-w-xl flex flex-col gap-8">

      <!-- Progress bar -->
      <div class="animate-fade-up flex flex-col gap-3">
        <div class="flex items-center gap-2">
          <!-- Step dots -->
          <div class="flex items-center gap-2 flex-1">
            <div class="step-dot w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold bg-gray-900 text-white transition-all" id="dot-1">1</div>
            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden"><div class="h-full bg-gray-900 transition-all duration-500" id="bar-1" style="width:0%"></div></div>
            <div class="step-dot w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold bg-gray-200 text-gray-400 transition-all" id="dot-2">2</div>
            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden"><div class="h-full bg-gray-900 transition-all duration-500" id="bar-2" style="width:0%"></div></div>
            <div class="step-dot w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold bg-gray-200 text-gray-400 transition-all" id="dot-3">3</div>
            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden"><div class="h-full bg-gray-900 transition-all duration-500" id="bar-3" style="width:0%"></div></div>
            <div class="step-dot w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold bg-gray-200 text-gray-400 transition-all" id="dot-4">4</div>
          </div>
        </div>
      </div>
      <form action="{{route('worker.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
      <!-- ── STEP 1 ── -->
      <div id="step-1" class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-7 animate-fade-up delay-1 w-full">
        <div>
          <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Étape 1</p>
          <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Informations personnelles</h2>
          <p class="text-sm text-gray-500 mt-1">Commencez par vos coordonnées de base.</p>
        </div>
        <div class="w-full border-t border-gray-100"></div>

        <div class="flex flex-col gap-5 w-full">
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Nom complet</label>
            <input type="text" name="name" placeholder="Jean Dupont"
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
          </div>
           <!-- credantials : -->
        <x-Forms.credantials/>
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Numéro de téléphone</label>
            <input name="phone" type="tel" placeholder="+212 6 XX XX XX XX"
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
          </div>
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Adress</label>
            <input type="text" name="adress" placeholder="Jean Dupont"
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
          </div>
        </div>
        <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Click here to set your location automaticly or type it manualy</label>
            <button id="getCoordsButton" type="button" onclick="getWorkerCoords()" style="border: 1px solid black;border-radius:15px;">Get My coodrs automaticly</button>
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Latitude</label>
            <input type="text" name="latitude" placeholder="latitude"
            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Longitude</label>
            <input type="text" name="longitude" placeholder="longitude"
             class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
        </div>

        <div class="w-full border-t border-gray-100"></div>
        <button type="button" onclick="goTo(2)" class="btn-validate w-full">Continuer →</button>
      </div>

      <!-- ── STEP 2 ── -->
      <div id="step-2" class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-7 animate-fade-up delay-1 w-full hidden">
        <div>
          <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Étape 2</p>
          <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Profil professionnel</h2>
          <p class="text-sm text-gray-500 mt-1">Complétez votre profil pour être visible par les clients.</p>
        </div>
        <div class="w-full border-t border-gray-100"></div>

        <div class="flex flex-col gap-5 w-full">

          <!-- Profile image upload -->
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Photo de profil</label>
            <label class="w-full flex flex-col items-center justify-center gap-3 px-4 py-8 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 cursor-pointer hover:border-gray-400 hover:bg-white transition-all">
              <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 16V8m0 0l-3 3m3-3l3 3" stroke="#9ca3af" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                  <rect x="3" y="3" width="18" height="18" rx="4" stroke="#9ca3af" stroke-width="1.4"/>
                </svg>
              </div>
              <span class="text-sm text-gray-400 font-medium">Cliquez pour uploader une photo</span>
              <span class="text-xs text-gray-300">JPG, PNG — max 5 MB</span>
              <input type="file" name="profile_image"  />
            </label>
          </div>

          <x-Forms.villes/>
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Type de travail</label>
            <select name="work_id" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all">
              <option value="" disabled selected>Sélectionner un service</option>
              @foreach($works as $work)
              <option value="{{$work->id}}">{{$work->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Années d'expérience</label>
            <input name="experience_years" type="number" min="0" max="50" placeholder="Ex : 5"
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm text-gray-900 placeholder-gray-400 outline-none focus:border-gray-900 focus:bg-white focus:ring-2 focus:ring-gray-900/5 transition-all" />
          </div>
        </div>

        <div class="w-full border-t border-gray-100"></div>
        <div class="flex gap-3 w-full">
          <button type="button" onclick="goTo(1)" class="btn-outline flex-1 px-5 py-3 rounded-full text-sm font-semibold">← Retour</button>
          <button type="button" onclick="goTo(3)" class="btn-validate flex-1">Continuer →</button>
        </div>
      </div>

      <!-- ── STEP 3 ── -->
      <div id="step-3" class="glass-card !items-start !text-left !cursor-default !rounded-2xl !p-10 gap-7 animate-fade-up delay-1 w-full hidden">
        <div>
          <p class="text-xs uppercase tracking-widest font-semibold text-gray-400 mb-1">Étape 3</p>
          <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Documents officiels</h2>
          <p class="text-sm text-gray-500 mt-1">Ces documents seront vérifiés par notre équipe.</p>
        </div>
        <div class="w-full border-t border-gray-100"></div>

        <div class="flex flex-col gap-6 w-full">

          <!-- Diplôme -->
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Diplôme</label>
            <label class="w-full flex items-center gap-4 px-4 py-4 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 cursor-pointer hover:border-gray-400 hover:bg-white transition-all">
              <div class="w-10 h-10 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <path d="M4 2h8l5 5v11a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1z" stroke="#9ca3af" stroke-width="1.5"/>
                  <path d="M11 2v5h5" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-700">Uploader votre diplôme</p>
                <p class="text-xs text-gray-400 mt-0.5">PDF, JPG, PNG — max 10 MB</p>
              </div>
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none" class="text-gray-300 flex-shrink-0">
                <path d="M10 14V6m0 0L7 9m3-3l3 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <input name="diploma" type="file"  />
            </label>
          </div>
          <!-- Certificats -->
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Certificats professionnels</label>
            <label class="w-full flex items-center gap-4 px-4 py-4 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 cursor-pointer hover:border-gray-400 hover:bg-white transition-all">
              <div class="w-10 h-10 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <path d="M4 2h8l5 5v11a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1z" stroke="#9ca3af" stroke-width="1.5"/>
                  <path d="M11 2v5h5" stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-700">Uploader vos certificats</p>
                <p class="text-xs text-gray-400 mt-0.5">Plusieurs fichiers acceptés — max 10 MB chacun</p>
              </div>
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none" class="text-gray-300 flex-shrink-0">
                <path d="M10 14V6m0 0L7 9m3-3l3 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <input name="certificate" type="file"  />
            </label>
          </div>

          <!-- CIN -->
          <div class="flex flex-col gap-1.5 w-full">
            <label class="text-xs font-semibold text-gray-500 uppercase tracking-widest">Carte nationale d'identité (CIN)</label>
            <label class="w-full flex items-center gap-4 px-4 py-4 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 cursor-pointer hover:border-gray-400 hover:bg-white transition-all">
              <div class="w-10 h-10 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                  <rect x="2" y="5" width="16" height="11" rx="2" stroke="#9ca3af" stroke-width="1.5"/>
                  <circle cx="7" cy="10.5" r="2" stroke="#9ca3af" stroke-width="1.4"/>
                  <path d="M11 9h4M11 12h3" stroke="#9ca3af" stroke-width="1.4" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-700">Uploader votre CIN</p>
                <p class="text-xs text-gray-400 mt-0.5">Recto et verso — JPG, PNG, PDF</p>
              </div>
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none" class="text-gray-300 flex-shrink-0">
                <path d="M10 14V6m0 0L7 9m3-3l3 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <input name="national_card" type="file"  />
            </label>
          </div>
          
        </div>
        
        <div class="w-full border-t border-gray-100"></div>
        <div class="flex gap-3 w-full">
          <button type="button" onclick="goTo(2)" class="btn-outline flex-1 px-5 py-3 rounded-full text-sm font-semibold">← Retour</button>
          <button type="submit" class="btn-validate flex-1">Soumettre →</button>
        </div>
      </div> 
</form>
    </div>
  </main>
  <script>
    let current = 1;

    function goTo(step) {
    
      document.getElementById('step-' + current).classList.add('hidden');
      document.getElementById('step-' + step).classList.remove('hidden');

      // Update dots
      for (let i = 1; i <= 4; i++) {
        const dot = document.getElementById('dot-' + i);
        if (i < step) {
          dot.classList.remove('bg-gray-200', 'text-gray-400');
          dot.classList.add('bg-gray-900', 'text-white');
          dot.innerHTML = `<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 6L5 9L10 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
        } else if (i === step) {
          dot.classList.remove('bg-gray-200', 'text-gray-400');
          dot.classList.add('bg-gray-900', 'text-white');
          dot.innerHTML = i;
        } else {
          dot.classList.remove('bg-gray-900', 'text-white');
          dot.classList.add('bg-gray-200', 'text-gray-400');
          dot.innerHTML = i;
        }
      }
      current = step;
      
      // Update progress bars
      for (let i = 1; i <= 3; i++) {
        document.getElementById('bar-' + i).style.width = i < step ? '100%' : '0%';
      }

      document.getElementById('step-label').textContent = `Étape ${step} / 4`;
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>
@endsection
