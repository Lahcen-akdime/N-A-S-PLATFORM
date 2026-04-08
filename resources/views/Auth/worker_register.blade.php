<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>N-A-S — Inscription Artisan</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* ========================================================
       MULTI-STEP REGISTER ARTISAN — SPECIFIC STYLES
       ======================================================== */

    .artisan-layout {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding-top: 72px;
    }

    /* PROGRESS HEADER */
    .progress-header {
      position: fixed;
      top: 72px;
      left: 0;
      right: 0;
      z-index: 50;
      background: var(--c-bg);
      border-bottom: 1px solid var(--c-border);
      padding: var(--space-lg) var(--space-xl);
    }

    .progress-header__inner {
      max-width: 640px;
      margin: 0 auto;
    }

    .progress-steps-label {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: var(--space-md);
    }

    .progress-steps-label__current {
      font-size: 0.8125rem;
      font-weight: 600;
      color: var(--c-text-muted);
    }

    .progress-steps-label__total {
      font-size: 0.8125rem;
      color: var(--c-text-dim);
    }

    .progress-track {
      height: 4px;
      background: var(--c-surface-3);
      border-radius: var(--radius-pill);
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      background: linear-gradient(90deg, var(--c-accent-warm), #e8d470);
      border-radius: var(--radius-pill);
      transition: width 0.5s var(--ease);
      box-shadow: 0 0 12px rgba(212,168,83,0.4);
    }

    /* STEP INDICATORS */
    .step-indicators {
      display: flex;
      gap: var(--space-xs);
      margin-top: var(--space-sm);
    }

    .step-dot {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }

    .step-dot__circle {
      width: 28px; height: 28px;
      border-radius: 50%;
      background: var(--c-surface-3);
      border: 2px solid var(--c-border);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--c-text-dim);
      transition: all var(--duration-mid) var(--ease);
    }

    .step-dot.active .step-dot__circle {
      background: var(--c-accent-warm);
      border-color: var(--c-accent-warm);
      color: var(--c-bg);
      box-shadow: 0 0 12px rgba(212,168,83,0.4);
    }

    .step-dot.done .step-dot__circle {
      background: var(--c-success);
      border-color: var(--c-success);
      color: var(--c-bg);
    }

    .step-dot__label {
      font-size: 0.6875rem;
      color: var(--c-text-dim);
      text-align: center;
      transition: color var(--duration-fast) var(--ease);
      white-space: nowrap;
    }

    .step-dot.active .step-dot__label { color: var(--c-accent-warm); }
    .step-dot.done .step-dot__label { color: var(--c-success); }

    /* STEP CONNECTOR LINE */
    .step-connector {
      flex: 1;
      height: 2px;
      background: var(--c-surface-3);
      align-self: center;
      margin-bottom: 16px;
      transition: background var(--duration-slow) var(--ease);
    }

    .step-connector.done {
      background: linear-gradient(90deg, var(--c-success), var(--c-accent-warm));
    }

    /* MAIN CONTENT */
    .artisan-main {
      flex: 1;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 8px var(--space-xl) var(--space-3xl);
      padding-top: calc(72px + 100px + 24px);
    }

    .form-container {
      width: 100%;
      max-width: 640px;
    }

    /* STEPS */
    .form-step {
      display: none;
      animation: stepIn 0.4s var(--ease) forwards;
    }

    .form-step.active {
      display: block;
    }

    @keyframes stepIn {
      from { opacity: 0; transform: translateX(30px); }
      to { opacity: 1; transform: translateX(0); }
    }

    @keyframes stepInReverse {
      from { opacity: 0; transform: translateX(-30px); }
      to { opacity: 1; transform: translateX(0); }
    }

    .form-step.reverse {
      animation: stepInReverse 0.4s var(--ease) forwards;
    }

    .step-header {
      margin-bottom: var(--space-2xl);
    }

    .step-header__num {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--c-accent-warm);
      margin-bottom: var(--space-sm);
    }

    .step-header__title {
      font-family: var(--font-display);
      font-size: 2.25rem;
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-bottom: var(--space-sm);
    }

    .step-header__desc {
      font-size: 0.9375rem;
      color: var(--c-text-muted);
      line-height: 1.6;
    }

    /* FORM FIELDS */
    .fields-grid {
      display: grid;
      gap: var(--space-md);
    }

    .fields-grid--2 {
      grid-template-columns: 1fr 1fr;
    }

    /* TRADE SELECTION */
    .trade-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
      gap: var(--space-sm);
      margin-top: var(--space-sm);
    }

    .trade-chip {
      position: relative;
    }

    .trade-chip input[type="radio"] {
      position: absolute;
      opacity: 0;
      width: 0; height: 0;
    }

    .trade-chip label {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: var(--space-sm);
      padding: var(--space-md);
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-md);
      cursor: pointer;
      transition: all var(--duration-fast) var(--ease);
      text-align: center;
    }

    .trade-chip label:hover {
      border-color: rgba(212,168,83,0.3);
      background: var(--c-surface-3);
    }

    .trade-chip input:checked + label {
      background: var(--c-accent-glow);
      border-color: rgba(212,168,83,0.5);
      box-shadow: 0 0 0 3px rgba(212,168,83,0.1);
    }

    .trade-chip__icon { font-size: 1.5rem; }
    .trade-chip__name { font-size: 0.8125rem; font-weight: 600; color: var(--c-text-muted); }

    .trade-chip input:checked + label .trade-chip__name {
      color: var(--c-accent-warm);
    }

    /* STEP 2 — DRAG & DROP */
    .dropzone {
      border: 2px dashed var(--c-border);
      border-radius: var(--radius-xl);
      padding: var(--space-2xl);
      text-align: center;
      cursor: pointer;
      transition: all var(--duration-mid) var(--ease);
      position: relative;
      overflow: hidden;
    }

    .dropzone:hover,
    .dropzone.drag-over {
      border-color: rgba(212,168,83,0.5);
      background: var(--c-accent-glow);
    }

    .dropzone__input {
      position: absolute;
      inset: 0;
      opacity: 0;
      cursor: pointer;
    }

    .dropzone__icon {
      width: 64px; height: 64px;
      border-radius: var(--radius-lg);
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      margin: 0 auto var(--space-md);
    }

    .dropzone__title {
      font-family: var(--font-display);
      font-size: 1.25rem;
      margin-bottom: var(--space-sm);
    }

    .dropzone__desc {
      font-size: 0.875rem;
      color: var(--c-text-muted);
      margin-bottom: var(--space-md);
    }

    .dropzone__formats {
      display: flex;
      gap: var(--space-xs);
      justify-content: center;
      flex-wrap: wrap;
    }

    .format-tag {
      padding: 4px 10px;
      background: var(--c-surface-3);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-pill);
      font-size: 0.75rem;
      font-weight: 600;
      color: var(--c-text-muted);
    }

    /* FILE LIST */
    .file-list {
      display: flex;
      flex-direction: column;
      gap: var(--space-sm);
      margin-top: var(--space-md);
    }

    .file-item {
      display: flex;
      align-items: center;
      gap: var(--space-md);
      padding: var(--space-md);
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-md);
      animation: stepIn 0.3s var(--ease) forwards;
    }

    .file-item__icon {
      width: 36px; height: 36px;
      border-radius: var(--radius-sm);
      background: var(--c-accent-glow);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }

    .file-item__info { flex: 1; }
    .file-item__name { font-size: 0.875rem; font-weight: 600; color: var(--c-text); }
    .file-item__size { font-size: 0.75rem; color: var(--c-text-muted); }

    .file-item__remove {
      width: 28px; height: 28px;
      border-radius: 50%;
      background: var(--c-surface-3);
      border: 1px solid var(--c-border);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--c-text-muted);
      transition: all var(--duration-fast) var(--ease);
      cursor: pointer;
      flex-shrink: 0;
      font-size: 0.875rem;
    }

    .file-item__remove:hover {
      background: rgba(248, 113, 113, 0.15);
      border-color: rgba(248, 113, 113, 0.4);
      color: var(--c-error);
    }

    /* STEP 3 — EXPERIENCE */
    .exp-slider-wrap {
      display: flex;
      flex-direction: column;
      gap: var(--space-sm);
    }

    .exp-display {
      display: flex;
      align-items: baseline;
      gap: var(--space-xs);
    }

    .exp-display__num {
      font-family: var(--font-display);
      font-size: 4rem;
      line-height: 1;
      color: var(--c-accent-warm);
    }

    .exp-display__unit {
      font-size: 1.25rem;
      color: var(--c-text-muted);
    }

    .exp-slider {
      -webkit-appearance: none;
      width: 100%;
      height: 4px;
      border-radius: 99px;
      background: var(--c-surface-3);
      outline: none;
      cursor: pointer;
    }

    .exp-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 20px; height: 20px;
      border-radius: 50%;
      background: var(--c-accent-warm);
      box-shadow: 0 0 0 4px rgba(212,168,83,0.2);
      cursor: grab;
      transition: box-shadow var(--duration-fast) var(--ease);
    }

    .exp-slider::-webkit-slider-thumb:active {
      cursor: grabbing;
      box-shadow: 0 0 0 8px rgba(212,168,83,0.2);
    }

    .exp-labels {
      display: flex;
      justify-content: space-between;
      font-size: 0.75rem;
      color: var(--c-text-dim);
    }

    /* TEXTAREA */
    .textarea {
      width: 100%;
      padding: 14px 18px;
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-md);
      color: var(--c-text);
      font-size: 0.9375rem;
      transition: all var(--duration-fast) var(--ease);
      outline: none;
      resize: vertical;
      min-height: 140px;
      line-height: 1.6;
    }

    .textarea:focus {
      border-color: var(--c-accent-warm);
      box-shadow: var(--shadow-input-focus);
      background: var(--c-surface-3);
    }

    .textarea::placeholder { color: var(--c-text-dim); }

    .char-count {
      text-align: right;
      font-size: 0.75rem;
      color: var(--c-text-dim);
      margin-top: 4px;
    }

    /* AVAILABILITY TOGGLES */
    .avail-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: var(--space-xs);
    }

    .avail-chip {
      position: relative;
    }

    .avail-chip input { position: absolute; opacity: 0; width: 0; height: 0; }

    .avail-chip label {
      display: block;
      text-align: center;
      padding: 8px 4px;
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-sm);
      font-size: 0.8125rem;
      font-weight: 600;
      color: var(--c-text-muted);
      cursor: pointer;
      transition: all var(--duration-fast) var(--ease);
    }

    .avail-chip label:hover { border-color: rgba(212,168,83,0.3); }

    .avail-chip input:checked + label {
      background: var(--c-accent-glow);
      border-color: rgba(212,168,83,0.5);
      color: var(--c-accent-warm);
    }

    /* SUCCESS STATE */
    .success-state {
      text-align: center;
      padding: var(--space-3xl) var(--space-xl);
    }

    .success-state__icon {
      width: 80px; height: 80px;
      border-radius: 50%;
      background: rgba(74,222,128,0.12);
      border: 2px solid rgba(74,222,128,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.5rem;
      margin: 0 auto var(--space-xl);
    }

    .success-state__title {
      font-family: var(--font-display);
      font-size: 2.5rem;
      margin-bottom: var(--space-md);
    }

    .success-state__desc {
      font-size: 1rem;
      color: var(--c-text-muted);
      max-width: 400px;
      margin: 0 auto var(--space-xl);
      line-height: 1.7;
    }

    /* NAVIGATION BUTTONS */
    .step-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: var(--space-2xl);
      padding-top: var(--space-xl);
      border-top: 1px solid var(--c-border);
    }

    .step-nav--right {
      justify-content: flex-end;
    }

    .step-save {
      font-size: 0.8125rem;
      color: var(--c-text-dim);
    }

    /* SELECT */
    .select {
      width: 100%;
      padding: 14px 18px;
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-md);
      color: var(--c-text);
      font-size: 0.9375rem;
      font-family: var(--font-body);
      outline: none;
      transition: all var(--duration-fast) var(--ease);
      -webkit-appearance: none;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%23666' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 16px center;
      cursor: pointer;
    }

    .select:focus {
      border-color: var(--c-accent-warm);
      box-shadow: var(--shadow-input-focus);
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .progress-header { padding: var(--space-md); }
      .artisan-main { padding: var(--space-md); padding-top: calc(72px + 120px + 16px); }
      .fields-grid--2 { grid-template-columns: 1fr; }
      .avail-grid { grid-template-columns: repeat(2, 1fr); }
      .trade-grid { grid-template-columns: repeat(3, 1fr); }

      .step-dot__label { display: none; }
    }

    @media (max-width: 480px) {
      .trade-grid { grid-template-columns: repeat(2, 1fr); }
      .step-header__title { font-size: 1.75rem; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="navbar__logo">N<span style="color: var(--c-accent-warm)">·</span>A<span style="color: var(--c-accent-warm)">·</span>S</div>
    <div class="navbar__actions">
      <a href="index.html" class="btn btn--ghost btn--sm">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
        Retour
      </a>
    </div>
  </nav>

  <!-- PROGRESS HEADER -->
  <div class="progress-header" role="navigation" aria-label="Étapes d'inscription">
    <div class="progress-header__inner">
      <div class="progress-steps-label">
        <span class="progress-steps-label__current" id="stepLabel">Étape 1 sur 3 — Informations personnelles</span>
        <span class="progress-steps-label__total" id="stepPercent">33%</span>
      </div>
      <div class="progress-track" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="33" aria-label="Progression de l'inscription">
        <div class="progress-fill" id="progressFill" style="width: 33%"></div>
      </div>

      <!-- STEP INDICATORS -->
      <div class="step-indicators" style="display:flex; align-items:center; margin-top: var(--space-md);" role="list">
        <div class="step-dot active" id="dot-1" role="listitem">
          <div class="step-dot__circle">1</div>
          <div class="step-dot__label">Identité</div>
        </div>
        <div class="step-connector" id="connector-1"></div>
        <div class="step-dot" id="dot-2" role="listitem">
          <div class="step-dot__circle">2</div>
          <div class="step-dot__label">Documents</div>
        </div>
        <div class="step-connector" id="connector-2"></div>
        <div class="step-dot" id="dot-3" role="listitem">
          <div class="step-dot__circle">3</div>
          <div class="step-dot__label">Expérience</div>
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN CONTENT -->
  <div class="artisan-layout">
    <main class="artisan-main">
      <div class="form-container">

        <!-- ================================
             STEP 1 — PERSONAL INFO
             ================================ -->
        <div class="form-step active" id="step-1" role="form" aria-labelledby="step1-title">
          <div class="step-header animate-in">
            <p class="step-header__num">Étape 01 / 03</p>
            <h1 class="step-header__title" id="step1-title">Vos informations<br>personnelles & métier</h1>
            <p class="step-header__desc">Ces informations seront affichées sur votre profil public. Soyez précis pour maximiser vos chances.</p>
          </div>

          <div class="fields-grid animate-in" style="transition-delay: 80ms;">
            <div class="fields-grid fields-grid--2">
              <div class="input-group">
                <label for="s1-first">Prénom *</label>
                <input class="input" id="s1-first" type="text" placeholder="Karim" autocomplete="given-name" required>
              </div>
              <div class="input-group">
                <label for="s1-last">Nom *</label>
                <input class="input" id="s1-last" type="text" placeholder="Benali" autocomplete="family-name" required>
              </div>
            </div>

            <div class="input-group">
              <label for="s1-email">Adresse email *</label>
              <div class="input-wrap">
                <span class="input-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                  </svg>
                </span>
                <input class="input input--icon" id="s1-email" type="email" placeholder="votre@email.com" autocomplete="email" required>
              </div>
            </div>

            <div class="fields-grid fields-grid--2">
              <div class="input-group">
                <label for="s1-phone">Téléphone *</label>
                <input class="input" id="s1-phone" type="tel" placeholder="+33 6 00 00 00 00" autocomplete="tel" required>
              </div>
              <div class="input-group">
                <label for="s1-city">Ville *</label>
                <input class="input" id="s1-city" type="text" placeholder="Paris, Lyon, Marseille..." required>
              </div>
            </div>

            <div class="input-group">
              <label for="s1-radius">Rayon d'intervention (km)</label>
              <select class="select" id="s1-radius">
                <option value="">Sélectionnez un rayon</option>
                <option>5 km</option>
                <option>10 km</option>
                <option>25 km</option>
                <option>50 km</option>
                <option>100 km</option>
              </select>
            </div>
          </div>

          <!-- TRADE SELECTION -->
          <div class="input-group animate-in" style="transition-delay: 160ms; margin-top: var(--space-xl);">
            <label>Votre métier principal *</label>
            <div class="trade-grid" role="radiogroup" aria-label="Choisissez votre métier">
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-plomb" value="plombier">
                <label for="trade-plomb"><span class="trade-chip__icon">🚿</span><span class="trade-chip__name">Plombier</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-elec" value="electricien">
                <label for="trade-elec"><span class="trade-chip__icon">⚡</span><span class="trade-chip__name">Électricien</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-menu" value="menuisier">
                <label for="trade-menu"><span class="trade-chip__icon">🪚</span><span class="trade-chip__name">Menuisier</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-peintre" value="peintre">
                <label for="trade-peintre"><span class="trade-chip__icon">🎨</span><span class="trade-chip__name">Peintre</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-macon" value="macon">
                <label for="trade-macon"><span class="trade-chip__icon">🏗️</span><span class="trade-chip__name">Maçon</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-clim" value="climatisation">
                <label for="trade-clim"><span class="trade-chip__icon">❄️</span><span class="trade-chip__name">Climatisation</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-jardin" value="jardinier">
                <label for="trade-jardin"><span class="trade-chip__icon">🌿</span><span class="trade-chip__name">Jardinier</span></label>
              </div>
              <div class="trade-chip">
                <input type="radio" name="trade" id="trade-autre" value="autre">
                <label for="trade-autre"><span class="trade-chip__icon">🔧</span><span class="trade-chip__name">Autre</span></label>
              </div>
            </div>
          </div>

          <div class="step-nav step-nav--right animate-in" style="transition-delay: 240ms;">
            <button class="btn btn--gold btn--lg" id="next-1">
              Continuer
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>

        <!-- ================================
             STEP 2 — DOCUMENTS
             ================================ -->
        <div class="form-step" id="step-2" role="form" aria-labelledby="step2-title">
          <div class="step-header">
            <p class="step-header__num">Étape 02 / 03</p>
            <h2 class="step-header__title" id="step2-title">Vos documents<br>de certification</h2>
            <p class="step-header__desc">Vos documents restent confidentiels et sont utilisés uniquement pour la vérification. Ils ne sont jamais partagés.</p>
          </div>

          <!-- IDENTITY DROP ZONE -->
          <div class="input-group" style="margin-bottom: var(--space-lg);">
            <label>Pièce d'identité *</label>
            <div class="dropzone" id="dropzone-id" tabindex="0" role="button" aria-label="Déposer votre pièce d'identité">
              <input type="file" class="dropzone__input" id="file-id" accept=".jpg,.jpeg,.png,.pdf" aria-label="Sélectionner votre pièce d'identité">
              <div class="dropzone__icon" aria-hidden="true">🪪</div>
              <div class="dropzone__title">Glissez votre pièce d'identité</div>
              <p class="dropzone__desc">CNI, passeport ou titre de séjour — recto/verso</p>
              <div class="dropzone__formats">
                <span class="format-tag">JPG</span>
                <span class="format-tag">PNG</span>
                <span class="format-tag">PDF</span>
                <span class="format-tag">Max 10MB</span>
              </div>
            </div>
            <div class="file-list" id="file-list-id"></div>
          </div>

          <!-- DIPLOMA DROP ZONE -->
          <div class="input-group" style="margin-bottom: var(--space-lg);">
            <label>Diplômes & certifications</label>
            <div class="dropzone" id="dropzone-dip" tabindex="0" role="button" aria-label="Déposer vos diplômes">
              <input type="file" class="dropzone__input" id="file-dip" accept=".jpg,.jpeg,.png,.pdf" multiple aria-label="Sélectionner vos diplômes">
              <div class="dropzone__icon" aria-hidden="true">📜</div>
              <div class="dropzone__title">Glissez vos diplômes ici</div>
              <p class="dropzone__desc">CAP, BTS, certifications professionnelles — Plusieurs fichiers acceptés</p>
              <div class="dropzone__formats">
                <span class="format-tag">JPG</span>
                <span class="format-tag">PNG</span>
                <span class="format-tag">PDF</span>
                <span class="format-tag">Multiple</span>
              </div>
            </div>
            <div class="file-list" id="file-list-dip"></div>
          </div>

          <!-- INSURANCE DROP ZONE -->
          <div class="input-group">
            <label>Attestation d'assurance RC Pro</label>
            <div class="dropzone" id="dropzone-ins" tabindex="0" role="button" aria-label="Déposer votre attestation d'assurance">
              <input type="file" class="dropzone__input" id="file-ins" accept=".jpg,.jpeg,.png,.pdf" aria-label="Sélectionner votre attestation">
              <div class="dropzone__icon" aria-hidden="true">🛡️</div>
              <div class="dropzone__title">Attestation RC Pro</div>
              <p class="dropzone__desc">Recommandé pour rassurer vos futurs clients et être mis en avant</p>
              <div class="dropzone__formats">
                <span class="format-tag">JPG</span>
                <span class="format-tag">PNG</span>
                <span class="format-tag">PDF</span>
              </div>
            </div>
            <div class="file-list" id="file-list-ins"></div>
          </div>

          <div class="step-nav">
            <button class="btn btn--ghost btn--lg" id="prev-2">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
              Retour
            </button>
            <button class="btn btn--gold btn--lg" id="next-2">
              Continuer
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>

        <!-- ================================
             STEP 3 — EXPERIENCE & DESCRIPTION
             ================================ -->
        <div class="form-step" id="step-3" role="form" aria-labelledby="step3-title">
          <div class="step-header">
            <p class="step-header__num">Étape 03 / 03</p>
            <h2 class="step-header__title" id="step3-title">Votre expérience<br>& profil public</h2>
            <p class="step-header__desc">Votre profil sera visible par des milliers de clients. Prenez le temps de vous présenter.</p>
          </div>

          <!-- EXPERIENCE SLIDER -->
          <div class="input-group" style="margin-bottom: var(--space-xl);">
            <label id="exp-label">Années d'expérience</label>
            <div class="exp-slider-wrap">
              <div class="exp-display">
                <span class="exp-display__num" id="expNum" aria-live="polite">5</span>
                <span class="exp-display__unit">ans d'expérience</span>
              </div>
              <input
                type="range"
                class="exp-slider"
                id="expSlider"
                min="0" max="40" value="5" step="1"
                aria-labelledby="exp-label"
                aria-valuenow="5"
                aria-valuetext="5 ans d'expérience"
              >
              <div class="exp-labels">
                <span>Débutant (0)</span>
                <span>Expert (40+)</span>
              </div>
            </div>
          </div>

          <!-- DESCRIPTION -->
          <div class="input-group" style="margin-bottom: var(--space-xl);">
            <label for="s3-desc">Présentation professionnelle *</label>
            <textarea class="textarea" id="s3-desc" placeholder="Ex: Plombier certifié avec 8 ans d'expérience dans le résidentiel et le tertiaire. Spécialisé en installation de systèmes de chauffage et dépannage d'urgence. Disponible 7j/7..." maxlength="500" required aria-required="true"></textarea>
            <div class="char-count"><span id="charCount">0</span> / 500 caractères</div>
          </div>

          <!-- TARIF -->
          <div class="fields-grid fields-grid--2" style="margin-bottom: var(--space-xl);">
            <div class="input-group">
              <label for="s3-rate">Tarif horaire (€)</label>
              <div class="input-wrap">
                <span class="input-icon" aria-hidden="true" style="color: var(--c-accent-warm); font-weight: 700;">€</span>
                <input class="input input--icon" id="s3-rate" type="number" placeholder="45" min="10" max="500">
              </div>
            </div>
            <div class="input-group">
              <label for="s3-website">Site web / Portfolio</label>
              <div class="input-wrap">
                <span class="input-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="2" y1="12" x2="22" y2="12"/>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                  </svg>
                </span>
                <input class="input input--icon" id="s3-website" type="url" placeholder="https://votre-site.fr">
              </div>
            </div>
          </div>

          <!-- AVAILABILITY -->
          <div class="input-group" style="margin-bottom: var(--space-xl);">
            <label>Disponibilités</label>
            <div class="avail-grid" role="group" aria-label="Choisissez vos jours de disponibilité">
              <div class="avail-chip"><input type="checkbox" id="avail-lun" value="lundi"><label for="avail-lun">Lun</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-mar" value="mardi"><label for="avail-mar">Mar</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-mer" value="mercredi"><label for="avail-mer">Mer</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-jeu" value="jeudi"><label for="avail-jeu">Jeu</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-ven" value="vendredi"><label for="avail-ven">Ven</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-sam" value="samedi"><label for="avail-sam">Sam</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-dim" value="dimanche"><label for="avail-dim">Dim</label></div>
              <div class="avail-chip"><input type="checkbox" id="avail-urge" value="urgences"><label for="avail-urge">Urgences</label></div>
            </div>
          </div>

          <div class="step-nav">
            <button class="btn btn--ghost btn--lg" id="prev-3">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
              Retour
            </button>
            <button class="btn btn--gold btn--lg" id="submit-btn" aria-label="Finaliser l'inscription">
              Créer mon profil artisan 🚀
            </button>
          </div>
        </div>

        <!-- ================================
             SUCCESS STATE
             ================================ -->
        <div class="form-step" id="step-success" role="status" aria-live="polite" aria-label="Inscription réussie">
          <div class="success-state">
            <div class="success-state__icon" aria-hidden="true">✓</div>
            <h2 class="success-state__title">Profil créé avec succès !</h2>
            <p class="success-state__desc">
              Bienvenue sur N-A-S ! Notre équipe va vérifier vos documents sous 24h. Vous recevrez une confirmation par email.
            </p>
            <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
              <a href="index.html" class="btn btn--ghost btn--lg">Découvrir la plateforme</a>
              <a href="#" class="btn btn--gold btn--lg">Mon tableau de bord →</a>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <script src="app.js"></script>
  <script>
    // ============================================================
    // MULTI-STEP FORM LOGIC
    // ============================================================
    const TOTAL_STEPS = 3;
    let currentStep = 1;
    let isReverse = false;

    const progressFill = document.getElementById('progressFill');
    const stepLabel = document.getElementById('stepLabel');
    const stepPercent = document.getElementById('stepPercent');
    const progressTrack = document.querySelector('.progress-track');

    const stepLabels = [
      'Étape 1 sur 3 — Informations personnelles',
      'Étape 2 sur 3 — Documents & certifications',
      'Étape 3 sur 3 — Expérience & profil',
    ];

    function goToStep(n, reverse = false) {
      const old = document.getElementById(`step-${currentStep}`);
      old.classList.remove('active', 'reverse');

      currentStep = n;

      if (n > TOTAL_STEPS) {
        // Success
        document.getElementById('step-success').classList.add('active');
        stepLabel.textContent = 'Inscription terminée !';
        stepPercent.textContent = '100%';
        progressFill.style.width = '100%';
        progressTrack.setAttribute('aria-valuenow', '100');
        updateDots(TOTAL_STEPS + 1);
        return;
      }

      const next = document.getElementById(`step-${n}`);
      if (reverse) next.classList.add('reverse');
      next.classList.add('active');

      const pct = Math.round((n / TOTAL_STEPS) * 100);
      progressFill.style.width = pct + '%';
      stepPercent.textContent = pct + '%';
      stepLabel.textContent = stepLabels[n - 1];
      progressTrack.setAttribute('aria-valuenow', pct);

      updateDots(n);
      window.scrollTo({ top: 0, behavior: 'smooth' });

      // Trigger animations
      setTimeout(() => {
        next.querySelectorAll('.animate-in').forEach((el, i) => {
          setTimeout(() => el.classList.add('visible'), i * 60);
        });
      }, 50);
    }

    function updateDots(active) {
      for (let i = 1; i <= TOTAL_STEPS; i++) {
        const dot = document.getElementById(`dot-${i}`);
        dot.classList.remove('active', 'done');
        if (i < active) dot.classList.add('done');
        else if (i === active) dot.classList.add('active');

        if (i < TOTAL_STEPS) {
          const conn = document.getElementById(`connector-${i}`);
          conn.classList.toggle('done', i < active);
        }
      }
    }

    // NAV BUTTONS
    document.getElementById('next-1').addEventListener('click', () => goToStep(2));
    document.getElementById('next-2').addEventListener('click', () => goToStep(3));
    document.getElementById('prev-2').addEventListener('click', () => goToStep(1, true));
    document.getElementById('prev-3').addEventListener('click', () => goToStep(2, true));
    document.getElementById('submit-btn').addEventListener('click', () => goToStep(4));

    // ============================================================
    // EXPERIENCE SLIDER
    // ============================================================
    const expSlider = document.getElementById('expSlider');
    const expNum = document.getElementById('expNum');

    expSlider.addEventListener('input', () => {
      const val = expSlider.value;
      expNum.textContent = val;
      expSlider.setAttribute('aria-valuenow', val);
      expSlider.setAttribute('aria-valuetext', `${val} ans d'expérience`);

      // Color gradient based on experience
      const pct = (val / 40) * 100;
      expSlider.style.background = `linear-gradient(90deg, var(--c-accent-warm) ${pct}%, var(--c-surface-3) ${pct}%)`;
    });

    // Initialize gradient
    expSlider.dispatchEvent(new Event('input'));

    // ============================================================
    // CHARACTER COUNT
    // ============================================================
    const descTextarea = document.getElementById('s3-desc');
    const charCount = document.getElementById('charCount');

    descTextarea.addEventListener('input', () => {
      const len = descTextarea.value.length;
      charCount.textContent = len;
      charCount.style.color = len > 450 ? 'var(--c-accent-warm)' : 'var(--c-text-dim)';
    });

    // ============================================================
    // DRAG & DROP FILE UPLOAD
    // ============================================================
    function setupDropzone(dropzoneId, inputId, fileListId) {
      const dz = document.getElementById(dropzoneId);
      const input = document.getElementById(inputId);
      const list = document.getElementById(fileListId);
      const files = [];

      function handleFiles(newFiles) {
        Array.from(newFiles).forEach(file => {
          if (files.find(f => f.name === file.name)) return;
          files.push(file);
          addFileItem(file);
        });
      }

      function addFileItem(file) {
        const item = document.createElement('div');
        item.className = 'file-item';
        const ext = file.name.split('.').pop().toUpperCase();
        const size = file.size > 1024 * 1024
          ? (file.size / 1024 / 1024).toFixed(1) + ' MB'
          : (file.size / 1024).toFixed(0) + ' KB';

        item.innerHTML = `
          <div class="file-item__icon" aria-hidden="true">${ext === 'PDF' ? '📄' : '🖼️'}</div>
          <div class="file-item__info">
            <div class="file-item__name">${file.name}</div>
            <div class="file-item__size">${size}</div>
          </div>
          <button class="file-item__remove" aria-label="Supprimer ${file.name}" title="Supprimer">×</button>
        `;

        item.querySelector('.file-item__remove').addEventListener('click', () => {
          const idx = files.indexOf(file);
          if (idx > -1) files.splice(idx, 1);
          item.style.opacity = '0';
          item.style.transform = 'translateX(16px)';
          item.style.transition = 'all 0.2s ease';
          setTimeout(() => item.remove(), 200);
        });

        list.appendChild(item);
      }

      dz.addEventListener('dragover', (e) => {
        e.preventDefault();
        dz.classList.add('drag-over');
      });

      dz.addEventListener('dragleave', () => dz.classList.remove('drag-over'));

      dz.addEventListener('drop', (e) => {
        e.preventDefault();
        dz.classList.remove('drag-over');
        handleFiles(e.dataTransfer.files);
      });

      dz.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          input.click();
        }
      });

      input.addEventListener('change', () => {
        handleFiles(input.files);
        input.value = '';
      });

      // Click on zone (but not on input to avoid double-fire)
      dz.addEventListener('click', (e) => {
        if (e.target !== input) input.click();
      });
    }

    setupDropzone('dropzone-id', 'file-id', 'file-list-id');
    setupDropzone('dropzone-dip', 'file-dip', 'file-list-dip');
    setupDropzone('dropzone-ins', 'file-ins', 'file-list-ins');

    // ============================================================
    // INITIAL ANIMATIONS
    // ============================================================
    document.querySelectorAll('#step-1 .animate-in').forEach((el, i) => {
      setTimeout(() => el.classList.add('visible'), 100 + i * 80);
    });
  </script>
</body>
</html>