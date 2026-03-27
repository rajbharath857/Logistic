<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vision & Mission</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --red:        #C0202A;
      --red-mid:    #d63c45;
      --red-pale:   rgba(192,32,42,0.08);
      --dark:       #111419;
      --mid:        #4d5261;
      --pale:       #f3f4f7;
      --white:      #ffffff;
      --border:     rgba(255,255,255,0.9);
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--pale);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed; inset: 0;
      background:
        radial-gradient(ellipse 80% 60% at 5% 50%, rgba(192,32,42,0.06) 0%, transparent 55%),
        radial-gradient(ellipse 70% 60% at 95% 50%, rgba(192,32,42,0.05) 0%, transparent 55%),
        linear-gradient(150deg, #eff0f4 0%, #fafafa 50%, #edf0f4 100%);
      pointer-events: none;
      z-index: 0;
    }

    /* ── SECTION ── */
    .vm-section {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 1140px;
      padding: 80px 32px 90px;
    }

    /* ── GRID ── */
    .vm-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
      align-items: stretch;
    }

    /* ── CARD ── */
    .vm-card {
      position: relative;
      background: rgba(255,255,255,0.75);
      backdrop-filter: blur(20px) saturate(170%);
      -webkit-backdrop-filter: blur(20px) saturate(170%);
      border: 1px solid var(--border);
      border-radius: 28px;
      padding: 52px 48px 10px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(17,20,25,0.06);
      transition:
        transform 0.44s cubic-bezier(0.34,1.56,0.64,1),
        box-shadow 0.44s ease,
        border-color 0.3s ease;
    }

    /* animated top bar */
    .vm-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, transparent 0%, var(--red) 40%, var(--red-mid) 60%, transparent 100%);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.5s cubic-bezier(0.34,1.2,0.64,1);
    }

    /* background radial glow */
    .vm-card::after {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse 70% 70% at 50% 110%, rgba(192,32,42,0.07) 0%, transparent 65%);
      opacity: 0;
      transition: opacity 0.45s ease;
      pointer-events: none;
    }

    .vm-card:hover {
      transform: translateY(-10px) scale(1.012);
      box-shadow: 0 30px 64px rgba(192,32,42,0.13), 0 8px 24px rgba(17,20,25,0.08);
      border-color: rgba(192,32,42,0.2);
    }
    .vm-card:hover::before { transform: scaleX(1); }
    .vm-card:hover::after  { opacity: 1; }

    /* ── ICON ── */
    .vm-icon-wrap {
      position: relative;
      width: 68px; height: 68px;
      margin-bottom: 36px;
    }
    .vm-icon-bg {
      position: absolute; inset: 0;
      border-radius: 50%;
      background: var(--red-pale);
      transition: transform 0.45s cubic-bezier(0.34,1.56,0.64,1), background 0.3s;
    }
    .vm-card:hover .vm-icon-bg {
      transform: scale(1.2) rotate(12deg);
      background: rgba(192,32,42,0.13);
    }
    .vm-icon-wrap svg {
      position: relative;
      z-index: 1;
      width: 100%; height: 100%;
      padding: 17px;
      transition: transform 0.45s cubic-bezier(0.34,1.56,0.64,1);
    }
    .vm-card:hover .vm-icon-wrap svg {
      transform: scale(1.1) rotate(-8deg);
    }

    /* ── TAG ── */
    .vm-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.67rem;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--red);
      opacity: 0.8;
      margin-bottom: 12px;
    }
    .vm-tag span {
      width: 18px; height: 1px;
      background: var(--red);
      opacity: 0.5;
      display: inline-block;
    }

    /* ── TITLE ── */
    .vm-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.7rem, 3vw, 2.2rem);
      font-weight: 700;
      color: var(--dark);
      line-height: 1.15;
      margin-bottom: 20px;
      letter-spacing: -0.02em;
    }
    .vm-title em {
      font-style: italic;
      color: var(--red);
    }

    /* ── DIVIDER ── */
    .vm-divider {
      width: 40px; height: 2px;
      background: linear-gradient(90deg, var(--red), transparent);
      border-radius: 2px;
      margin-bottom: 20px;
      transition: width 0.4s ease;
    }
    .vm-card:hover .vm-divider { width: 68px; }

    /* ── BODY ── */
    .vm-body {
      font-size: 1rem;
      font-weight: 300;
      color: var(--mid);
      line-height: 1.82;
    }

    /* ── BIG GHOST LETTER ── */
    .vm-ghost {
      position: absolute;
      bottom: 16px; right: 26px;
      font-family: 'Playfair Display', serif;
      font-size: 7rem;
      font-weight: 700;
      line-height: 1;
      color: var(--dark);
      opacity: 0.03;
      user-select: none;
      transition: opacity 0.35s ease, transform 0.4s ease;
      pointer-events: none;
    }
    .vm-card:hover .vm-ghost {
      opacity: 0.055;
      transform: scale(1.08) translateY(-4px);
    }

    /* ── ENTRANCE ── */
    .vm-card {
      animation: rise 0.65s cubic-bezier(0.22,1,0.36,1) both;
    }
    .vm-card:nth-child(1) { animation-delay: 0.05s; }
    .vm-card:nth-child(2) { animation-delay: 0.2s;  }

    @keyframes rise {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 700px) {
      .vm-grid { grid-template-columns: 1fr; }
      .vm-section { padding: 50px 20px 60px; }
      .vm-card { padding: 40px 32px 44px; }
    }
  </style>
</head>
<body>

<section class="vm-section">
  <div class="vm-grid">

    <!-- Vision -->
    <article class="vm-card">
      <div class="vm-icon-wrap">
        <div class="vm-icon-bg"></div>
        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="18" cy="18" rx="14" ry="9" stroke="#C0202A" stroke-width="2.1"/>
          <circle cx="18" cy="18" r="4" stroke="#C0202A" stroke-width="2.1"/>
          <circle cx="18" cy="18" r="1.4" fill="#C0202A"/>
        </svg>
      </div>
      <p class="vm-tag"><span></span>Vision<span></span></p>
      <h3 class="vm-title">Our <em>Vision</em></h3>
      <div class="vm-divider"></div>
      <p class="vm-body">To become India's most trusted connected logistics platform, where every package travels on a single, transparent timeline—powered by sustainable energy and driven by empowered communities.</p>
      <div class="vm-ghost">V</div>
    </article>

    <!-- Mission -->
    <article class="vm-card">
      <div class="vm-icon-wrap">
        <div class="vm-icon-bg"></div>
        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 28 L14 22 Q16 14 24 8 Q30 6 30 6 Q28 12 22 20 L16 26 Z" stroke="#C0202A" stroke-width="2.1" stroke-linejoin="round"/>
          <circle cx="19" cy="17" r="2.4" fill="#C0202A" opacity="0.35"/>
          <path d="M8 22 Q6 20 7 16" stroke="#C0202A" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M14 28 Q16 30 20 29" stroke="#C0202A" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
      </div>
      <p class="vm-tag"><span></span>Mission<span></span></p>
      <h3 class="vm-title">Our <em>Mission</em></h3>
      <div class="vm-divider"></div>
      <p class="vm-body">To eliminate the chaos of fragmented logistics by unifying first, mid, and last miles with MileTruth™ AI—delivering accountability, sustainability, and opportunity at every step.</p>
      <div class="vm-ghost">M</div>
    </article>

  </div>
</section>

</body>
</html>