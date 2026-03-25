

<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --red: #c01227;
    --red-light: #fff0ee;
    --dark: #1a1e2e;
    --mid: #3d4259;
    --muted: #8d93a8;
    --bg: #f3f4f7;
    --white: #ffffff;
    --card-shadow: 0 4px 30px rgba(0,0,0,0.07);
    --card-shadow-hover: 0 16px 60px rgba(232,55,42,0.13);
  }

  body {
    font-family: 'Barlow', sans-serif;
    background: var(--bg);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow-x: hidden;
  }

  /* ─── SECTION WRAPPER ─── */
  .problem-section {
    width: 100%;
    max-width: 1400px;
    margin: auto;
    padding: 50px 40px 50px;
    position: relative;
    align-items: center;
    justify-content: center;
  }

  /* Decorative dashed grid lines (Logico style) */
  .problem-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(to right, rgba(0,0,0,0.04) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(0,0,0,0.04) 1px, transparent 1px);
    background-size: 80px 80px;
    pointer-events: none;
    border-radius: 24px;
    mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 40%, transparent 100%);
  }

  /* ─── HEADER ─── */
  .section-header {
    text-align: center;
    margin-bottom: 70px;
    position: relative;
  }

  .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Manrope', sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--red);
    margin-bottom: 20px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }

  .eyebrow::before,
  .eyebrow::after {
    content: '';
    display: block;
    width: 30px;
    height: 1px;
    background: var(--red);
  }

  .section-title {
    font-family: 'Manrope', sans-serif;
    font-size: clamp(40px, 6vw, 72px);
    font-weight: 800;
    color: var(--dark);
    line-height: 1.0;
    letter-spacing: -1px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease 0.15s, transform 0.7s ease 0.15s;
  }

  .section-title em {
    font-style: normal;
    color: var(--red);
    position: relative;
  }

  .section-title em::after {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 0; right: 0;
    height: 3px;
    background: var(--red);
    border-radius: 2px;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.8s cubic-bezier(.16,1,.3,1) 0.9s;
  }

  .section-subtitle {
    margin-top: 22px;
    font-size: 16px;
    color: var(--muted);
    line-height: 1.75;
    max-width: 520px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease 0.3s, transform 0.7s ease 0.3s;
    display: inline-block;
    justify-content: center;
    align-items: center;
  }

  /* ─── IN-VIEW TRIGGERS ─── */
  .in-view .eyebrow { opacity: 1; transform: translateY(0); }
  .in-view .section-title { opacity: 1; transform: translateY(0); }
  .in-view .section-title em::after { transform: scaleX(1); }
  .in-view .section-subtitle { opacity: 1; transform: translateY(0); }

  /* ─── STAT CARDS ─── */
  .cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }

  .stat-card {
    background: var(--white);
    border-radius: 20px;
    padding: 36px 28px 32px;
    position: relative;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    cursor: default;
    opacity: 0;
    transform: translateY(50px) scale(0.97);
    transition:
      opacity 0.65s cubic-bezier(.16,1,.3,1),
      transform 0.65s cubic-bezier(.16,1,.3,1),
      box-shadow 0.3s ease;
  }

  .stat-card:nth-child(1) { transition-delay: 0.1s; }
  .stat-card:nth-child(2) { transition-delay: 0.25s; }
  .stat-card:nth-child(3) { transition-delay: 0.4s; }

  .in-view .stat-card {
    opacity: 1;
    transform: translateY(0) scale(1);
  }

  .stat-card:hover {
    box-shadow: var(--card-shadow-hover);
    transform: translateY(-6px) scale(1.01) !important;
  }

  /* Corner accent stripe */
  .stat-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--red), transparent);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.5s cubic-bezier(.16,1,.3,1);
  }

  .stat-card:hover::before,
  .in-view .stat-card::before { transform: scaleX(1); }

  /* Subtle radial glow on hover */
  .stat-card::after {
    content: '';
    position: absolute;
    top: -60px; left: -60px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(232,55,42,0.06) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
  }

  .stat-card:hover::after { opacity: 1; }

  /* ─── ICON ─── */
  .card-icon-wrap {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    background: var(--red-light);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 28px;
    transition: transform 0.35s cubic-bezier(.16,1,.3,1), background 0.3s;
  }

  .stat-card:hover .card-icon-wrap {
    transform: rotate(-6deg) scale(1.1);
    background: var(--red);
  }

  .card-icon-wrap svg {
    width: 26px;
    height: 26px;
    stroke: var(--red);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke 0.3s;
  }

  .stat-card:hover .card-icon-wrap svg { stroke: #fff; }

  /* ─── NUMBER COUNTER ─── */
  .card-number {
    font-family: 'Manrope', sans-serif;
    font-size: 56px;
    font-weight: 800;
    color: var(--dark);
    line-height: 1;
    letter-spacing: -2px;
    display: flex;
    align-items: baseline;
    gap: 2px;
    margin-bottom: 12px;
  }

  .card-number .suffix {
    font-size: 38px;
    font-weight: 700;
    color: var(--red);
  }

  .card-label {
    font-size: 14.5px;
    color: var(--muted);
    line-height: 1.55;
    font-weight: 400;
  }

  /* Progress bar accent */
  .card-bar {
    margin-top: 28px;
    height: 3px;
    border-radius: 3px;
    background: #ebebed;
    overflow: hidden;
  }

  .card-bar-fill {
    height: 100%;
    border-radius: 3px;
    background: linear-gradient(90deg, var(--red), #ff7b6e);
    width: 0%;
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }

  .in-view .stat-card:nth-child(1) .card-bar-fill { width: 73%; transition-delay: 0.8s; }
  .in-view .stat-card:nth-child(2) .card-bar-fill { width: 40%; transition-delay: 0.95s; }
  .in-view .stat-card:nth-child(3) .card-bar-fill { width: 60%; transition-delay: 1.1s; }

  /* ─── FLOATING BADGE ─── */
  .float-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    font-family: 'Manrope', sans-serif;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--red);
    background: var(--red-light);
    padding: 4px 10px;
    border-radius: 20px;
    opacity: 0;
    transform: translateY(-6px);
    transition: opacity 0.3s, transform 0.3s;
  }

  .stat-card:hover .float-badge { opacity: 1; transform: translateY(0); }

  /* ─── LARGE DESKTOP (1440px+) ─── */
  @media (min-width: 1440px) {

    .problem-section {
      max-width: 1560px;
      padding: 60px 52px 60px;
    }

    .problem-section::before {
      background-size: 90px 90px;
    }

    .section-header {
      margin-bottom: 78px;
    }

    .eyebrow {
      font-size: 13px;
      letter-spacing: 3.5px;
      gap: 12px;
      margin-bottom: 23px;
    }

    .eyebrow::before,
    .eyebrow::after {
      width: 34px;
    }

    .section-title {
      font-size: clamp(44px, 5.5vw, 78px);
      letter-spacing: -1.2px;
    }

    .section-subtitle {
      font-size: 17px;
      max-width: 580px;
      margin-top: 25px;
      line-height: 1.78;
    }

    .cards-grid {
      gap: 24px;
    }

    .stat-card {
      border-radius: 22px;
      padding: 40px 32px 36px;
    }

    .card-icon-wrap {
      width: 66px;
      height: 66px;
      border-radius: 18px;
      margin-bottom: 30px;
    }

    .card-icon-wrap svg {
      width: 29px;
      height: 29px;
    }

    .card-number {
      font-size: 60px;
      letter-spacing: -2.2px;
      margin-bottom: 14px;
    }

    .card-number .suffix {
      font-size: 41px;
    }

    .card-label {
      font-size: 15.5px;
      line-height: 1.6;
    }

    .card-bar {
      margin-top: 30px;
      height: 3px;
    }

    .float-badge {
      font-size: 11px;
      letter-spacing: 2.2px;
      padding: 4px 12px;
      top: 22px;
      right: 22px;
    }
  }

  /* ─── EXTRA-LARGE DESKTOP (1920px+) ─── */
  @media (min-width: 1920px) {

    .problem-section {
      max-width: 1780px;
      padding: 72px 64px 72px;
    }

    .problem-section::before {
      background-size: 100px 100px;
    }

    .section-header {
      margin-bottom: 88px;
    }

    .eyebrow {
      font-size: 14px;
      letter-spacing: 3.8px;
      gap: 13px;
      margin-bottom: 26px;
    }

    .eyebrow::before,
    .eyebrow::after {
      width: 38px;
    }

    .section-title {
      font-size: clamp(50px, 5.2vw, 84px);
      letter-spacing: -1.4px;
    }

    .section-subtitle {
      font-size: 18px;
      max-width: 640px;
      margin-top: 28px;
      line-height: 1.8;
    }

    .cards-grid {
      gap: 28px;
    }

    .stat-card {
      border-radius: 24px;
      padding: 44px 36px 40px;
    }

    .card-icon-wrap {
      width: 72px;
      height: 72px;
      border-radius: 20px;
      margin-bottom: 34px;
    }

    .card-icon-wrap svg {
      width: 32px;
      height: 32px;
    }

    .card-number {
      font-size: 64px;
      letter-spacing: -2.4px;
      margin-bottom: 15px;
    }

    .card-number .suffix {
      font-size: 44px;
    }

    .card-label {
      font-size: 16.5px;
      line-height: 1.62;
    }

    .card-bar {
      margin-top: 34px;
      height: 3.5px;
    }

    .float-badge {
      font-size: 11.5px;
      letter-spacing: 2.4px;
      padding: 5px 13px;
      top: 23px;
      right: 23px;
    }
  }

  /* ─── ULTRA-WIDE (2560px+) ─── */
  @media (min-width: 2560px) {

    /* Section wrapper — wider container, more breathing room */
    .problem-section {
      max-width: 2000px;
      padding: 80px 72px 80px;
    }

    /* Grid lines scale up */
    .problem-section::before {
      background-size: 110px 110px;
    }

    /* Header spacing */
    .section-header {
      margin-bottom: 96px;
    }

    /* Eyebrow */
    .eyebrow {
      font-size: 15px;
      letter-spacing: 4px;
      gap: 14px;
      margin-bottom: 28px;
    }

    .eyebrow::before,
    .eyebrow::after {
      width: 42px;
    }

    /* Section title */
    .section-title {
      font-size: clamp(56px, 5vw, 88px);
      letter-spacing: -1.5px;
    }

    /* Subtitle */
    .section-subtitle {
      font-size: 19px;
      max-width: 680px;
      margin-top: 30px;
      line-height: 1.8;
    }

    /* Stat cards grid — wider gaps */
    .cards-grid {
      gap: 32px;
    }

    /* Individual cards — more internal space */
    .stat-card {
      border-radius: 24px;
      padding: 48px 38px 42px;
    }

    /* Icon */
    .card-icon-wrap {
      width: 76px;
      height: 76px;
      border-radius: 20px;
      margin-bottom: 36px;
    }

    .card-icon-wrap svg {
      width: 34px;
      height: 34px;
    }

    /* Number counter */
    .card-number {
      font-size: 68px;
      letter-spacing: -2.5px;
      margin-bottom: 16px;
    }

    .card-number .suffix {
      font-size: 46px;
    }

    /* Card label */
    .card-label {
      font-size: 17px;
      line-height: 1.65;
    }

    /* Progress bar */
    .card-bar {
      margin-top: 36px;
      height: 4px;
    }

    /* Floating badge */
    .float-badge {
      font-size: 12px;
      letter-spacing: 2.5px;
      padding: 5px 14px;
      top: 24px;
      right: 24px;
    }
  }
</style>
</head>
<body>

<section class="problem-section" id="problem">
  <div class="section-header">
    <div class="eyebrow">The Problem</div>
    <h2 class="section-title">Fragmented Logistics<br>is <em>Broken</em></h2>
    <p class="section-subtitle">When first, mid, and last mile operate independently, nobody owns the outcome. Handoffs become failure points. Delays cascade.</p>
  </div>

  <div class="cards-grid">

    <!-- Card 1 -->
    <div class="stat-card">
      <span class="float-badge">Critical</span>
      <div class="card-icon-wrap">
        <svg viewBox="0 0 24 24">
          <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
          <line x1="12" y1="9" x2="12" y2="13"/>
          <line x1="12" y1="17" x2="12.01" y2="17"/>
        </svg>
      </div>
      <div class="card-number">
        <span class="counter" data-target="73">0</span><span class="suffix">%</span>
      </div>
      <div class="card-label">of delays happen at handoffs between logistics segments</div>
      <div class="card-bar"><div class="card-bar-fill"></div></div>
    </div>

    <!-- Card 2 -->
    <div class="stat-card">
      <span class="float-badge">High Risk</span>
      <div class="card-icon-wrap">
        <svg viewBox="0 0 24 24">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
          <polyline points="16 7 22 7 22 13"/>
        </svg>
      </div>
      <div class="card-number">
        <span class="counter" data-target="40">0</span><span class="suffix">%</span>
      </div>
      <div class="card-label">of all shipments require manual intervention to complete delivery</div>
      <div class="card-bar"><div class="card-bar-fill"></div></div>
    </div>

    <!-- Card 3 -->
    <div class="stat-card">
      <span class="float-badge">Inefficiency</span>
      <div class="card-icon-wrap">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"/>
          <polyline points="12 6 12 12 16 14"/>
        </svg>
      </div>
      <div class="card-number">
        <span class="counter" data-target="2" data-decimals="1" data-step="0.1">0</span><span class="suffix">x</span>
      </div>
      <div class="card-label">more time wasted on coordination across fragmented logistics providers</div>
      <div class="card-bar"><div class="card-bar-fill"></div></div>
    </div>

  </div>
</section>

<script>
  // ─── INTERSECTION OBSERVER ───
  const section = document.getElementById('problem');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        startCounters();
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  observer.observe(section);

  // Auto-trigger since we're in a standalone demo
  setTimeout(() => {
    section.classList.add('in-view');
    startCounters();
  }, 300);

  // ─── COUNTER ANIMATION ───
  function startCounters() {
    document.querySelectorAll('.counter').forEach(el => {
      const target = parseFloat(el.dataset.target);
      const decimals = parseInt(el.dataset.decimals || '0');
      const step = parseFloat(el.dataset.step || '1');
      const duration = 1800;
      const startTime = performance.now();

      function update(now) {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        // Ease out expo
        const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
        const current = ease * target;
        el.textContent = decimals > 0 ? current.toFixed(decimals) : Math.floor(current);
        if (progress < 1) requestAnimationFrame(update);
      }

      requestAnimationFrame(update);
    });
  }

  // ─── PARALLAX TILT ON CARDS ───
  document.querySelectorAll('.stat-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      card.style.transform = `translateY(-6px) scale(1.01) rotateX(${-y * 5}deg) rotateY(${x * 5}deg)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
</script>
</body>
</html>