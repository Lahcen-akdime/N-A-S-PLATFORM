<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>N-A-S — Inscription Client</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* ========================================================
       REGISTER CLIENT — SPECIFIC STYLES
       ======================================================== */

    .auth-layout {
      min-height: 100vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    /* LEFT PANEL */
    .auth-left {
      background: linear-gradient(145deg, #0f0f11 0%, #14101a 100%);
      border-right: 1px solid var(--c-border);
      padding: var(--space-2xl);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
    }

    .auth-left::before {
      content: '';
      position: absolute;
      bottom: -20%;
      left: -20%;
      width: 80%;
      height: 80%;
      background: radial-gradient(ellipse, rgba(212,168,83,0.07) 0%, transparent 70%);
      pointer-events: none;
    }

    .auth-left__top {
      display: flex;
      flex-direction: column;
      gap: var(--space-2xl);
    }

    .auth-back {
      display: inline-flex;
      align-items: center;
      gap: var(--space-sm);
      font-size: 0.875rem;
      color: var(--c-text-muted);
      transition: color var(--duration-fast) var(--ease);
      width: fit-content;
    }

    .auth-back:hover { color: var(--c-text); }

    .auth-left__content {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: var(--space-2xl) 0;
    }

    .auth-left__label {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--c-accent-warm);
      margin-bottom: var(--space-md);
    }

    .auth-left__title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 3vw, 3rem);
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-bottom: var(--space-lg);
    }

    .auth-left__desc {
      font-size: 1rem;
      color: var(--c-text-muted);
      line-height: 1.7;
      max-width: 380px;
    }

    /* PERKS */
    .auth-perks {
      display: flex;
      flex-direction: column;
      gap: var(--space-md);
      margin-top: var(--space-2xl);
    }

    .perk-item {
      display: flex;
      align-items: center;
      gap: var(--space-md);
    }

    .perk-item__icon {
      width: 36px; height: 36px;
      border-radius: var(--radius-sm);
      background: var(--c-surface-3);
      border: 1px solid var(--c-border);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }

    .perk-item__text {
      font-size: 0.9375rem;
      color: var(--c-text-muted);
    }

    .perk-item__text strong {
      color: var(--c-text);
      font-weight: 600;
    }

    /* TESTIMONIAL */
    .auth-testimonial {
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-lg);
      padding: var(--space-lg);
      position: relative;
    }

    .auth-testimonial::before {
      content: '"';
      position: absolute;
      top: -12px;
      left: var(--space-lg);
      font-family: var(--font-display);
      font-size: 4rem;
      color: var(--c-accent-warm);
      line-height: 1;
    }

    .auth-testimonial__text {
      font-size: 0.9375rem;
      color: var(--c-text-muted);
      line-height: 1.6;
      font-style: italic;
    }

    .auth-testimonial__author {
      display: flex;
      align-items: center;
      gap: var(--space-sm);
      margin-top: var(--space-md);
    }

    .auth-testimonial__avatar {
      width: 36px; height: 36px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--c-accent-warm), #e07820);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }

    .auth-testimonial__name {
      font-size: 0.875rem;
      font-weight: 600;
      color: var(--c-text);
    }

    .auth-testimonial__role {
      font-size: 0.75rem;
      color: var(--c-text-dim);
    }

    /* RIGHT PANEL — FORM */
    .auth-right {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: var(--space-2xl) clamp(var(--space-lg), 5vw, var(--space-3xl));
      background: var(--c-bg);
    }

    .auth-form-wrap {
      width: 100%;
      max-width: 420px;
    }

    .auth-form-wrap__title {
      font-family: var(--font-display);
      font-size: 2rem;
      letter-spacing: -0.02em;
      margin-bottom: var(--space-xs);
    }

    .auth-form-wrap__sub {
      font-size: 0.9375rem;
      color: var(--c-text-muted);
      margin-bottom: var(--space-2xl);
    }

    .auth-form-wrap__sub a {
      color: var(--c-accent-warm);
      text-decoration: underline;
      text-underline-offset: 3px;
    }

    /* SOCIAL BUTTONS */
    .social-btns {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-sm);
      margin-bottom: var(--space-xl);
    }

    .btn--social {
      gap: var(--space-sm);
      justify-content: center;
      padding: 12px var(--space-md);
      font-size: 0.875rem;
    }

    .btn--social svg { flex-shrink: 0; }

    /* DIVIDER */
    .auth-divider {
      display: flex;
      align-items: center;
      gap: var(--space-md);
      margin-bottom: var(--space-xl);
      color: var(--c-text-dim);
      font-size: 0.8125rem;
    }

    .auth-divider::before,
    .auth-divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--c-border);
    }

    /* FORM */
    .auth-form {
      display: flex;
      flex-direction: column;
      gap: var(--space-md);
    }

    .form-row-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-md);
    }

    .password-toggle {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: var(--c-text-dim);
      cursor: pointer;
      display: flex;
      align-items: center;
      transition: color var(--duration-fast) var(--ease);
    }

    .password-toggle:hover { color: var(--c-text-muted); }

    .auth-form__terms {
      display: flex;
      align-items: flex-start;
      gap: var(--space-sm);
      font-size: 0.8125rem;
      color: var(--c-text-muted);
      cursor: pointer;
    }

    .auth-form__terms input[type="checkbox"] {
      margin-top: 2px;
      width: 16px; height: 16px;
      accent-color: var(--c-accent-warm);
      flex-shrink: 0;
      cursor: pointer;
    }

    .auth-form__terms a {
      color: var(--c-accent-warm);
      text-decoration: underline;
      text-underline-offset: 2px;
    }

    .btn--submit {
      width: 100%;
      padding: 16px;
      font-size: 1rem;
      margin-top: var(--space-sm);
      position: relative;
    }

    .btn--submit .btn-arrow {
      margin-left: auto;
    }

    /* ARTISAN LINK */
    .auth-form-wrap__artisan {
      margin-top: var(--space-lg);
      padding: var(--space-md) var(--space-lg);
      background: var(--c-surface-2);
      border: 1px solid var(--c-border);
      border-radius: var(--radius-md);
      display: flex;
      align-items: center;
      gap: var(--space-md);
    }

    .auth-form-wrap__artisan-text {
      flex: 1;
      font-size: 0.875rem;
      color: var(--c-text-muted);
    }

    .auth-form-wrap__artisan-text strong {
      color: var(--c-text);
      display: block;
      font-size: 0.9375rem;
      margin-bottom: 2px;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
      .auth-layout {
        grid-template-columns: 1fr;
      }

      .auth-left {
        display: none;
      }

      .auth-right {
        padding: var(--space-xl) var(--space-md);
        padding-top: 100px;
      }
    }

    @media (max-width: 480px) {
      .form-row-2 { grid-template-columns: 1fr; }
      .social-btns { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

  <!-- MINIMAL NAVBAR -->
  <nav class="navbar">
    <div class="navbar__logo">N<span style="color: var(--c-accent-warm)">·</span>A<span style="color: var(--c-accent-warm)">·</span>S</div>
    <div class="navbar__actions">
      <span style="font-size:0.875rem; color: var(--c-text-muted)">Déjà inscrit ?</span>
      <a href="#" class="btn btn--ghost btn--sm">Se connecter</a>
    </div>
  </nav>

  <div class="auth-layout">

    <!-- LEFT PANEL -->
    <div class="auth-left">
      <div class="auth-left__top">
        <a href="index.html" class="auth-back">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path d="m15 18-6-6 6-6"/>
          </svg>
          Retour à l'accueil
        </a>
      </div>

      <div class="auth-left__content">
        <p class="auth-left__label">Espace Client</p>
        <h1 class="auth-left__title">Trouvez vos<br>artisans en<br>toute confiance</h1>
        <p class="auth-left__desc">Créez votre compte gratuit et accédez instantanément à notre réseau de professionnels vérifiés.</p>

        <div class="auth-perks">
          <div class="perk-item">
            <div class="perk-item__icon" aria-hidden="true">✅</div>
            <div class="perk-item__text"><strong>Artisans vérifiés</strong> — Identité et diplômes contrôlés</div>
          </div>
          <div class="perk-item">
            <div class="perk-item__icon" aria-hidden="true">⚡</div>
            <div class="perk-item__text"><strong>Réponse rapide</strong> — Moins de 45 min en moyenne</div>
          </div>
          <div class="perk-item">
            <div class="perk-item__icon" aria-hidden="true">🛡️</div>
            <div class="perk-item__text"><strong>Paiement sécurisé</strong> — Libéré après validation</div>
          </div>
        </div>
      </div>

      <div class="auth-testimonial">
        <p class="auth-testimonial__text">J'ai trouvé un plombier disponible en moins d'une heure. Service impeccable, artisan professionnel. Je ne cherche plus ailleurs.</p>
        <div class="auth-testimonial__author">
          <div class="auth-testimonial__avatar" aria-hidden="true">👩</div>
          <div>
            <div class="auth-testimonial__name">Amina K.</div>
            <div class="auth-testimonial__role">Cliente depuis 2024</div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT PANEL — FORM -->
    <div class="auth-right">
      <div class="auth-form-wrap animate-in">
        <h2 class="auth-form-wrap__title">Créer un compte</h2>
        <p class="auth-form-wrap__sub">
          Vous êtes artisan ? <a href="register-artisan.html">Inscrivez-vous ici →</a>
        </p>

        <!-- SOCIAL LOGIN -->
        <div class="social-btns" role="group" aria-label="Connexion via réseaux sociaux">
          <button class="btn btn--ghost btn--social">
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            Google
          </button>
          <button class="btn btn--ghost btn--social">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--c-text)" aria-hidden="true">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            Facebook
          </button>
        </div>

        <div class="auth-divider">ou avec votre email</div>

        <!-- FORM -->
        <form class="auth-form" id="registerClientForm" novalidate>
          <div class="form-row-2">
            <div class="input-group">
              <label for="firstName">Prénom</label>
              <input class="input" id="firstName" type="text" placeholder="Mehdi" autocomplete="given-name" required>
            </div>
            <div class="input-group">
              <label for="lastName">Nom</label>
              <input class="input" id="lastName" type="text" placeholder="Benali" autocomplete="family-name" required>
            </div>
          </div>

          <div class="input-group">
            <label for="email">Adresse email</label>
            <div class="input-wrap">
              <span class="input-icon" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </span>
              <input class="input input--icon" id="email" type="email" placeholder="votre@email.com" autocomplete="email" required>
            </div>
          </div>

          <div class="input-group">
            <label for="phone">Téléphone</label>
            <div class="input-wrap">
              <span class="input-icon" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.5 2 2 0 0 1 3.6 1.5h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9.1a16 16 0 0 0 6 6l.87-.87a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21.5 16.5l.42.42z"/>
                </svg>
              </span>
              <input class="input input--icon" id="phone" type="tel" placeholder="+33 6 00 00 00 00" autocomplete="tel">
            </div>
          </div>

          <div class="input-group">
            <label for="password">Mot de passe</label>
            <div class="input-wrap">
              <input class="input" id="password" type="password" placeholder="Minimum 8 caractères" autocomplete="new-password" required minlength="8">
              <button type="button" class="password-toggle" id="togglePwd" aria-label="Afficher le mot de passe">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                  <circle cx="12" cy="12" r="3"/>
                </svg>
              </button>
            </div>
            <!-- Password strength indicator -->
            <div class="password-strength" id="strengthBar" style="display:none;">
              <div style="display:flex; gap:4px; margin-top:6px;">
                <div class="strength-seg" style="height:3px; flex:1; border-radius:99px; background: var(--c-surface-3); transition: background 0.3s;"></div>
                <div class="strength-seg" style="height:3px; flex:1; border-radius:99px; background: var(--c-surface-3); transition: background 0.3s;"></div>
                <div class="strength-seg" style="height:3px; flex:1; border-radius:99px; background: var(--c-surface-3); transition: background 0.3s;"></div>
                <div class="strength-seg" style="height:3px; flex:1; border-radius:99px; background: var(--c-surface-3); transition: background 0.3s;"></div>
              </div>
              <p class="input-hint" id="strengthLabel" style="margin-top:4px;"></p>
            </div>
          </div>

          <label class="auth-form__terms">
            <input type="checkbox" id="terms" required>
            J'accepte les <a href="#">Conditions Générales d'Utilisation</a> et la <a href="#">Politique de Confidentialité</a> de N-A-S.
          </label>

          <button type="submit" class="btn btn--gold btn--submit">
            Créer mon compte gratuitement
            <span class="btn-arrow" aria-hidden="true">→</span>
          </button>

          <p style="text-align:center; font-size:0.8125rem; color: var(--c-text-dim);">100% gratuit — Aucune carte bancaire requise</p>
        </form>

        <!-- ARTISAN LINK -->
        <div class="auth-form-wrap__artisan">
          <div style="font-size:1.5rem" aria-hidden="true">🔧</div>
          <div class="auth-form-wrap__artisan-text">
            <strong>Vous êtes un professionnel ?</strong>
            Créez votre profil artisan pour recevoir des missions.
          </div>
          <a href="register-artisan.html" class="btn btn--ghost btn--sm">Continuer →</a>
        </div>
      </div>
    </div>

  </div>

  <script src="app.js"></script>
  <script>
    // Password toggle
    const togglePwd = document.getElementById('togglePwd');
    const pwdInput = document.getElementById('password');
    const strengthBar = document.getElementById('strengthBar');
    const strengthSegs = document.querySelectorAll('.strength-seg');
    const strengthLabel = document.getElementById('strengthLabel');

    togglePwd.addEventListener('click', () => {
      const isText = pwdInput.type === 'text';
      pwdInput.type = isText ? 'password' : 'text';
      togglePwd.style.color = isText ? 'var(--c-text-dim)' : 'var(--c-accent-warm)';
    });

    // Password strength
    pwdInput.addEventListener('input', () => {
      const val = pwdInput.value;
      if (!val) { strengthBar.style.display = 'none'; return; }
      strengthBar.style.display = 'block';

      let score = 0;
      if (val.length >= 8) score++;
      if (/[A-Z]/.test(val)) score++;
      if (/[0-9]/.test(val)) score++;
      if (/[^A-Za-z0-9]/.test(val)) score++;

      const colors = ['#ef4444','#f97316','#eab308','#4ade80'];
      const labels = ['Très faible','Faible','Moyen','Fort'];

      strengthSegs.forEach((seg, i) => {
        seg.style.background = i < score ? colors[score - 1] : 'var(--c-surface-3)';
      });
      strengthLabel.textContent = labels[score - 1] || '';
      strengthLabel.style.color = colors[score - 1] || 'var(--c-text-dim)';
    });

    // Form submit
    document.getElementById('registerClientForm').addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = e.target.querySelector('[type="submit"]');
      btn.textContent = '✓ Compte créé avec succès !';
      btn.style.background = 'var(--c-success)';
      btn.style.color = 'var(--c-bg)';
      btn.disabled = true;
    });
  </script>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="register-form" method="POST" action="{{ route('create') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Full Name</label>
                        <input 
                            type="text" 
                            id="firstname" 
                            placeholder="John"
                            name="name"
                            required
                        >
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="email">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        placeholder="john.doe@example.com"
                        autocomplete="email"
                        name="email"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="Create a strong password"
                        autocomplete="new-password"
                        name="password"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="confirm-password">Confirm Password</label>
                    <input 
                        type="password" 
                        id="confirm-password" 
                        placeholder="Re-enter your password"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">
                        Send me sustainable gardening tips and exclusive offers
                    </label>
                </div>

                <button type="submit" class="register-button">Create Account</button>
            </form>
</body>
</html> -->