<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Values</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --red:       #C0202A;
      --red-light: #e8424a;
      --red-bg:    rgba(192, 32, 42, 0.08);
      --dark:      #111419;
      --mid:       #4a4f5a;
      --pale:      #f4f5f7;
      --white:     #ffffff;
      --card-bg:   rgba(255,255,255,0.72);
      --shadow-sm: 0 2px 12px rgba(17,20,25,0.06);
      --shadow-md: 0 12px 40px rgba(17,20,25,0.12);
      --shadow-lg: 0 28px 60px rgba(192,32,42,0.15);
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

    /* ── BACKGROUND MESH ── */
    body::before {
      content: '';
      position: fixed; inset: 0;
      background:
        radial-gradient(ellipse 70% 50% at 15% 20%, rgba(192,32,42,0.07) 0%, transparent 60%),
        radial-gradient(ellipse 60% 60% at 85% 80%, rgba(192,32,42,0.05) 0%, transparent 60%),
        linear-gradient(160deg, #f0f1f4 0%, #fafafa 50%, #eef0f3 100%);
      pointer-events: none;
      z-index: 0;
    }

    /* ── SECTION ── */
    .values-section {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 1180px;
      padding: 0px 32px 100px;
    }

    /* ── HEADER ── */
    .values-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .values-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 0.72rem;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--red);
      margin-bottom: 0px;
    }
    .values-eyebrow::before,
    .values-eyebrow::after {
      content: '';
      width: 28px; height: 1px;
      background: var(--red);
      opacity: 0.5;
    }

    .values-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.4rem, 5vw, 3.5rem);
      font-weight: 700;
      color: var(--dark);
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-bottom: 16px;
    }

    .values-subtitle {
      font-size: 1.05rem;
      font-weight: 300;
      color: var(--mid);
      letter-spacing: 0.01em;
    }

    /* ── GRID ── */
    .values-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }

    /* ── CARD ── */
    .value-card {
      position: relative;
      background: var(--card-bg);
      backdrop-filter: blur(18px) saturate(160%);
      -webkit-backdrop-filter: blur(18px) saturate(160%);
      border: 1px solid rgba(255,255,255,0.85);
      border-radius: 24px;
      padding: 48px 36px 44px;
      box-shadow: var(--shadow-sm);
      overflow: hidden;
      cursor: default;
      transition:
        transform 0.42s cubic-bezier(0.34,1.56,0.64,1),
        box-shadow 0.42s ease,
        border-color 0.3s ease;
    }

    /* corner accent line */
    .value-card::before {
      content: '';
      position: absolute;
      top: 0; left: 36px; right: 36px;
      height: 3px;
      background: linear-gradient(90deg, transparent, var(--red), transparent);
      border-radius: 0 0 4px 4px;
      opacity: 0;
      transform: scaleX(0.4);
      transition: opacity 0.35s ease, transform 0.45s cubic-bezier(0.34,1.56,0.64,1);
    }

    /* subtle glow blob */
    .value-card::after {
      content: '';
      position: absolute;
      bottom: -60px; right: -60px;
      width: 200px; height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(192,32,42,0.10) 0%, transparent 70%);
      transform: scale(0.6);
      opacity: 0;
      transition: transform 0.55s ease, opacity 0.45s ease;
    }

    .value-card:hover {
      transform: translateY(-10px) scale(1.015);
      box-shadow: var(--shadow-lg);
      border-color: rgba(192,32,42,0.18);
    }
    .value-card:hover::before {
      opacity: 1;
      transform: scaleX(1);
    }
    .value-card:hover::after {
      opacity: 1;
      transform: scale(1);
    }

    /* ── ICON WRAPPER ── */
    .card-icon-wrap {
      position: relative;
      width: 72px; height: 72px;
      margin-bottom: 32px;
    }

    .icon-ring {
      position: absolute; inset: 0;
      border-radius: 50%;
      background: var(--red-bg);
      transition: transform 0.45s cubic-bezier(0.34,1.56,0.64,1), background 0.3s ease;
    }

    .value-card:hover .icon-ring {
      transform: scale(1.18) rotate(10deg);
      background: rgba(192,32,42,0.14);
    }

    .card-icon-wrap svg {
      position: relative;
      z-index: 1;
      width: 100%; height: 100%;
      padding: 18px;
      transition: transform 0.45s cubic-bezier(0.34,1.56,0.64,1);
    }
    .value-card:hover .card-icon-wrap svg {
      transform: scale(1.12) rotate(-6deg);
    }

    /* ── CONTENT ── */
    .card-label {
      font-size: 0.68rem;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--red);
      margin-bottom: 10px;
      opacity: 0.75;
    }

    .card-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--dark);
      margin-bottom: 14px;
      line-height: 1.2;
    }

    .card-desc {
      font-size: 0.95rem;
      font-weight: 300;
      color: var(--mid);
      line-height: 1.75;
    }

    /* ── CARD NUMBER ── */
    .card-number {
      position: absolute;
      bottom: 28px; right: 30px;
      font-family: 'Playfair Display', serif;
      font-size: 4rem;
      font-weight: 700;
      color: var(--dark);
      opacity: 0.04;
      line-height: 1;
      user-select: none;
      transition: opacity 0.3s ease, transform 0.4s ease;
    }
    .value-card:hover .card-number {
      opacity: 0.07;
      transform: scale(1.1);
    }

    /* ── ENTRANCE ANIMATION ── */
    .value-card {
      animation: cardIn 0.6s cubic-bezier(0.22,1,0.36,1) both;
    }
    .value-card:nth-child(1) { animation-delay: 0.05s; }
    .value-card:nth-child(2) { animation-delay: 0.18s; }
    .value-card:nth-child(3) { animation-delay: 0.31s; }

    @keyframes cardIn {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .values-header {
      animation: fadeUp 0.7s cubic-bezier(0.22,1,0.36,1) both;
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .values-grid { grid-template-columns: 1fr 1fr; }
      .value-card:nth-child(3) { grid-column: 1 / -1; max-width: 420px; margin: 0 auto; width: 100%; }
    }
    @media (max-width: 580px) {
      .values-grid { grid-template-columns: 1fr; }
      .value-card:nth-child(3) { grid-column: auto; max-width: none; }
      .values-section { padding: 60px 20px 70px; }
    }
  </style>
</head>
<body>

<section class="values-section">

  <header class="values-header">
    <div class="values-eyebrow">Who We Are</div>
    <h2 class="values-title">Our Values</h2>
    <p class="values-subtitle">The principles that drive everything we do</p>
  </header>

  <div class="values-grid">

    <!-- Card 1 -->
    <article class="value-card">
      <div class="card-icon-wrap">
        <div class="icon-ring"></div>
        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="18" cy="18" r="10" stroke="#C0202A" stroke-width="2.2"/>
          <circle cx="18" cy="18" r="5.5"  stroke="#C0202A" stroke-width="2.2"/>
          <circle cx="18" cy="18" r="1.5"  fill="#C0202A"/>
        </svg>
      </div>
      <p class="card-label">01 &nbsp;/ &nbsp;Purpose</p>
      <h4 class="card-title">Mission-Driven</h4>
      <p class="card-desc">Transforming logistics with transparency and accountability at every mile.</p>
      <span class="card-number">01</span>
    </article>

    <!-- Card 2 -->
    <article class="value-card">
      <div class="card-icon-wrap">
        <div class="icon-ring"></div>
        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="13" cy="13" r="4.5" stroke="#C0202A" stroke-width="2.2"/>
          <circle cx="24" cy="13" r="4.5" stroke="#C0202A" stroke-width="2.2"/>
          <path d="M4 28c0-4.418 4.03-8 9-8" stroke="#C0202A" stroke-width="2.2" stroke-linecap="round"/>
          <path d="M23 20c4.97 0 9 3.582 9 8" stroke="#C0202A" stroke-width="2.2" stroke-linecap="round"/>
        </svg>
      </div>
      <p class="card-label">02 &nbsp;/ &nbsp;Culture</p>
      <h4 class="card-title">People First</h4>
      <p class="card-desc">Empowering delivery partners and supporting women entrepreneurs.</p>
      <span class="card-number">02</span>
    </article>

    <!-- Card 3 -->
    <article class="value-card">
      <div class="card-icon-wrap">
        <div class="icon-ring"></div>
        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 4l2.5 7.7H28l-6.5 4.7 2.5 7.7L18 20l-6 4.4 2.5-7.7L8 12.7h7.5z" stroke="#C0202A" stroke-width="2.1" stroke-linejoin="round"/>
          <path d="M18 26v6M14 30h8" stroke="#C0202A" stroke-width="2.1" stroke-linecap="round"/>
        </svg>
      </div>
      <p class="card-label">03 &nbsp;/ &nbsp;Standards</p>
      <h4 class="card-title">Excellence</h4>
      <p class="card-desc">Setting new standards in logistics technology and service delivery.</p>
      <span class="card-number">03</span>
    </article>

  </div>
</section>

</body>
</html>