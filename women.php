<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Empowering Women in Logistics – Doormile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=DM+Sans:wght@300;400;500&family=Barlow:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --red:        #C0202A;
      --red-deep:   #a01820;
      --red-mid:    #d63c45;
      --red-pale:   rgba(192,32,42,0.08);
      --red-pale2:  rgba(192,32,42,0.05);
      --dark:       #111419;
      --dark2:      #1d2130;
      --mid:        #4d5261;
      --light:      #8a90a2;
      --pale:       #f3f4f7;
      --white:      #ffffff;
      --card:       rgba(255,255,255,0.75);
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Manrope', sans-serif;
      background: var(--pale);
      color: var(--dark);
      overflow-x: hidden;
    }
    .hero {
      position: relative;
      min-height: 92vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 100px 32px 80px;
      overflow: hidden;
    }

    /* layered gradient bg */
    .hero::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 100% 80% at 50% -5%, rgba(192,32,42,0.13) 0%, transparent 55%),
        radial-gradient(ellipse 60% 60% at 10% 80%, rgba(192,32,42,0.07) 0%, transparent 55%),
        radial-gradient(ellipse 55% 55% at 90% 90%, rgba(192,32,42,0.06) 0%, transparent 55%),
        linear-gradient(165deg, #ecedf2 0%, #f8f9fb 45%, #edf0f5 100%);
      opacity: 1;
    }

    /* Fix the error of the header menu container and nav bar visibility */
    .header-menu-container, .elementor-element-e44ee7e {
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    #masthead {
        z-index: 9999 !important;
    }

    /* decorative arcs */
    .hero-arc {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(192,32,42,0.08);
      pointer-events: none;
    }
    .hero-arc-1 { width: 700px; height: 700px; top: 50%; left: 50%; transform: translate(-50%,-50%); }
    .hero-arc-2 { width: 500px; height: 500px; top: 50%; left: 50%; transform: translate(-50%,-50%); }
    .hero-arc-3 { width: 300px; height: 300px; top: 50%; left: 50%; transform: translate(-50%,-50%); }

    .hero-inner {
      position: relative;
      z-index: 2;
      max-width: 820px;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(192,32,42,0.07);
      border: 1px solid rgba(192,32,42,0.15);
      border-radius: 100px;
      padding: 7px 18px 7px 14px;
      font-size: 0.7rem;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--red);
      margin-bottom: 32px;
      animation: fadeDown 0.7s cubic-bezier(0.22,1,0.36,1) both;
    }
    .hero-badge svg { width: 13px; height: 13px; }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.8rem, 7vw, 5rem);
      font-weight: 700;
      line-height: 1.05;
      letter-spacing: -0.03em;
      color: var(--dark);
      margin-bottom: 24px;
      animation: fadeUp 0.75s cubic-bezier(0.22,1,0.36,1) 0.1s both;
    }
    .hero-title em {
      font-style: italic;
      color: var(--red);
    }

    .hero-sub {
      font-size: 1.1rem;
      font-weight: 300;
      color: var(--mid);
      line-height: 1.82;
      max-width: 580px;
      margin: 0 auto 40px;
      animation: fadeUp 0.75s cubic-bezier(0.22,1,0.36,1) 0.2s both;
    }

    .hero-cta {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: var(--red);
      color: var(--white);
      font-family: 'Manrope', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 0.04em;
      padding: 15px 32px;
      border-radius: 100px;
      border: none;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 8px 28px rgba(192,32,42,0.35);
      transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.3s ease, background 0.2s;
      animation: fadeUp 0.75s cubic-bezier(0.22,1,0.36,1) 0.3s both;
    }
    .hero-cta:hover {
      transform: translateY(-3px) scale(1.04);
      box-shadow: 0 14px 38px rgba(192,32,42,0.45);
      background: var(--red-deep);
    }
    .hero-cta svg { width: 16px; height: 16px; transition: transform 0.3s ease; }
    .hero-cta:hover svg { transform: translateX(4px); }

    /* scroll indicator */
    .hero-scroll {
      position: absolute;
      bottom: 36px; left: 50%;
      transform: translateX(-50%);
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      color: var(--light);
      font-size: 0.68rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      animation: fadeUp 1s cubic-bezier(0.22,1,0.36,1) 0.6s both;
    }
    .scroll-line {
      width: 1px; height: 44px;
      background: linear-gradient(to bottom, var(--red), transparent);
      animation: scrollPulse 2s ease-in-out infinite;
    }
    @keyframes scrollPulse {
      0%,100% { opacity: 0.4; transform: scaleY(0.6) translateY(0); }
      50%      { opacity: 1;   transform: scaleY(1)   translateY(4px); }
    }

    /* ═══════════════════════════════════════
       STATS BAR
    ═══════════════════════════════════════ */
    .stats-bar {
      background: var(--dark2);
      padding: 52px 40px;
      position: relative;
      overflow: hidden;
    }
    .stats-bar::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 60% 100% at 50% 50%, rgba(192,32,42,0.12) 0%, transparent 65%);
      pointer-events: none;
    }

    .stats-inner {
      max-width: 1100px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      position: relative;
      z-index: 1;
    }

    .stat-item {
      text-align: center;
      padding: 16px 24px;
      position: relative;
    }
    .stat-item:not(:last-child)::after {
      content: '';
      position: absolute;
      right: 0; top: 20%; bottom: 20%;
      width: 1px;
      background: rgba(255,255,255,0.08);
    }

    .stat-num {
      font-family: 'Manrope', sans-serif;
      font-size: 3rem;
      font-weight: 700;
      color: var(--white);
      letter-spacing: -0.04em;
      line-height: 1;
      margin-bottom: 8px;
    }
    .stat-num span { color: var(--red-mid); }

    .stat-lbl {
      font-size: 0.78rem;
      font-weight: 400;
      color: rgba(255,255,255,0.45);
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    /* ═══════════════════════════════════════
       INITIATIVES
    ═══════════════════════════════════════ */
    .initiatives {
      padding: 100px 36px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .section-header {
      text-align: center;
      margin-bottom: 64px;
    }
    .section-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 0.80rem;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--red);
      margin-bottom: 16px;
    }
    .section-eyebrow::before, .section-eyebrow::after {
      content: ''; width: 26px; height: 1px;
      background: var(--red); opacity: 0.45;
    }
    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700;
      color: var(--dark);
      letter-spacing: -0.025em;
      line-height: 1.1;
      margin-bottom: 16px;
    }
    .section-sub {
      font-size: 1rem;
      font-weight: 300;
      color: var(--mid);
      max-width: 520px;
      margin: 0 auto;
      line-height: 1.8;
    }

    .init-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
    }

    .init-card {
      background: var(--card);
      backdrop-filter: blur(18px) saturate(160%);
      -webkit-backdrop-filter: blur(18px) saturate(160%);
      border: 1px solid rgba(255,255,255,0.88);
      border-radius: 24px;
      padding: 44px 40px;
      display: flex;
      gap: 28px;
      align-items: flex-start;
      box-shadow: 0 4px 18px rgba(17,20,25,0.06);
      overflow: hidden;
      position: relative;
      transition: transform 0.42s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.42s ease, border-color 0.3s;
    }
    .init-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(90deg, transparent, var(--red), transparent);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.45s cubic-bezier(0.34,1.2,0.64,1);
    }
    .init-card:hover {
      transform: translateY(-8px) scale(1.012);
      box-shadow: 0 26px 56px rgba(192,32,42,0.13);
      border-color: rgba(192,32,42,0.2);
    }
    .init-card:hover::before { transform: scaleX(1); }

    .init-icon {
      flex-shrink: 0;
      width: 58px; height: 58px;
      background: var(--red-pale);
      border-radius: 16px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.6rem;
      transition: transform 0.45s cubic-bezier(0.34,1.56,0.64,1), background 0.3s;
    }
    .init-card:hover .init-icon {
      transform: scale(1.15) rotate(-6deg);
      background: rgba(192,32,42,0.13);
    }

    .init-content {}
    .init-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--dark);
      margin-bottom: 10px;
    }
    .init-desc {
      font-size: 0.92rem;
      font-weight: 300;
      color: var(--mid);
      line-height: 1.78;
    }

    /* ═══════════════════════════════════════
       SUCCESS STORIES
    ═══════════════════════════════════════ */
    .stories-section {
      background: var(--dark2);
      padding: 100px 36px;
      position: relative;
      overflow: hidden;
    }
    .stories-section::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 80% 60% at 50% 0%, rgba(192,32,42,0.1) 0%, transparent 55%);
      pointer-events: none;
    }

    .stories-inner {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .stories-inner .section-eyebrow { color: rgba(192,32,42,0.9); }
    .stories-inner .section-eyebrow::before,
    .stories-inner .section-eyebrow::after { background: var(--red); opacity: 0.35; }
    .stories-inner .section-title { color: var(--white); }
    .stories-inner .section-sub   { color: rgba(255,255,255,0.5); }

    .stories-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-top: 60px;
    }

    .story-card {
      background: var(--dark2);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 24px;
      height: 420px; /* Consistent height for overlay */
      overflow: hidden;
      transition: transform 0.42s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.42s ease, border-color 0.3s;
      position: relative;
    }
    .story-card:hover {
      transform: translateY(-10px) scale(1.015);
      box-shadow: 0 28px 60px rgba(0,0,0,0.4);
      border-color: rgba(192,32,42,0.3);
    }

    /* image area */
    .story-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top center;
      display: block;
      filter: grayscale(15%) contrast(1.05);
      transition: filter 0.5s ease, transform 0.5s ease;
    }
    .story-card:hover .story-img {
      filter: grayscale(0%) contrast(1.08);
      transform: scale(1.04);
    }

    .story-img-wrap {
      overflow: hidden;
      position: relative;
    }
    /* gradient over image bottom */
    .story-img-wrap::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 80px;
      background: linear-gradient(to top, var(--dark2), transparent);
      pointer-events: none;
    }

    .story-body {
      position: absolute;
      inset: auto 0 0 0;
      padding: 40px 30px;
      background: linear-gradient(to top, rgba(17,20,25,0.95) 0%, rgba(17,20,25,0.7) 60%,transparent 100%);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
      pointer-events: none;
      z-index: 10;
    }
    .story-card:hover .story-body {
      opacity: 1;
      transform: translateY(0);
      pointer-events: all;
    }

    .story-role {
      font-size: 0.80rem;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.35);
      margin-bottom: 8px;
      display: flex; align-items: center; gap: 6px;
    }
    .story-role::before {
      content: ''; width: 14px; height: 1px;
      background: var(--red-mid); opacity: 0.6;
    }

    .story-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.45rem;
      font-weight: 600;
      color: var(--white);
      margin-bottom: 6px;
    }

    .story-location {
      font-size: 0.78rem;
      color: rgba(255,255,255,0.35);
      margin-bottom: 16px;
      display: flex; align-items: center; gap: 5px;
    }
    .story-location svg { width: 11px; height: 11px; opacity: 0.5; }

    .story-divider {
      width: 30px; height: 2px;
      background: linear-gradient(90deg, var(--red), transparent);
      border-radius: 2px; margin-bottom: 14px;
      transition: width 0.4s ease;
    }
    .story-card:hover .story-divider { width: 52px; }

    .story-quote {
      font-size: 0.9rem;
      font-weight: 300;
      color: rgba(255,255,255,0.55);
      line-height: 1.78;
    }

    /* ═══════════════════════════════════════
       CTA BANNER
    ═══════════════════════════════════════ */
    .cta-section {
      position: relative;
      background: var(--red);
      padding: 90px 36px;
      text-align: center;
      overflow: hidden;
    }
    .cta-section::before {
      content: '';
      position: absolute; inset: 0;
      background:
        radial-gradient(ellipse 80% 100% at 50% 50%, rgba(255,255,255,0.08) 0%, transparent 65%);
      pointer-events: none;
    }
    /* decorative circles */
    .cta-circle {
      position: absolute;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.1);
      pointer-events: none;
    }
    .cta-circle-1 { width: 600px; height: 600px; top:50%; left:50%; transform:translate(-50%,-50%); }
    .cta-circle-2 { width: 400px; height: 400px; top:50%; left:50%; transform:translate(-50%,-50%); }

    .cta-inner {
      position: relative;
      z-index: 2;
      max-width: 640px;
      margin: 0 auto;
    }

    .cta-eyebrow {
      font-size: 0.68rem;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.6);
      margin-bottom: 20px;
    }

    .cta-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 5vw, 3.2rem);
      font-weight: 700;
      color: var(--white);
      line-height: 1.1;
      letter-spacing: -0.025em;
      margin-bottom: 18px;
    }
    .cta-title em { font-style: italic; color: rgba(255,255,255,0.75); }

    .cta-sub {
      font-size: 1rem;
      font-weight: 300;
      color: rgba(255,255,255,0.65);
      line-height: 1.8;
      margin-bottom: 44px;
    }

    .cta-buttons {
      display: flex;
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-primary {
      display: inline-flex; align-items: center; gap: 9px;
      background: var(--white);
      color: var(--red);
      font-family: 'Manrope', sans-serif;
      font-size: 0.88rem;
      font-weight: 500;
      letter-spacing: 0.03em;
      padding: 14px 30px;
      border-radius: 100px;
      border: none; cursor: pointer; text-decoration: none;
      box-shadow: 0 8px 28px rgba(0,0,0,0.2);
      transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.3s ease;
    }
    .btn-primary:hover {
      transform: translateY(-3px) scale(1.04);
      box-shadow: 0 14px 38px rgba(0,0,0,0.28);
    }

    .btn-outline {
      display: inline-flex; align-items: center; gap: 9px;
      background: transparent;
      color: var(--white);
      font-family: 'Manrope', sans-serif;
      font-size: 0.88rem;
      font-weight: 500;
      letter-spacing: 0.03em;
      padding: 14px 30px;
      border-radius: 100px;
      border: 1px solid rgba(255,255,255,0.4);
      cursor: pointer; text-decoration: none;
      transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1), background 0.25s, border-color 0.25s;
    }
    .btn-outline:hover {
      transform: translateY(-3px) scale(1.04);
      background: rgba(255,255,255,0.1);
      border-color: rgba(255,255,255,0.7);
    }

    /* ═══════════════════════════════════════
       GLOBAL ANIMATIONS
    ═══════════════════════════════════════ */
    @keyframes fadeUp   { from { opacity:0; transform:translateY(22px); } to { opacity:1; transform:translateY(0); } }
    @keyframes fadeDown { from { opacity:0; transform:translateY(-14px); } to { opacity:1; transform:translateY(0); } }

    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.7s cubic-bezier(0.22,1,0.36,1), transform 0.7s cubic-bezier(0.22,1,0.36,1);
    }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal-d1 { transition-delay: 0.08s; }
    .reveal-d2 { transition-delay: 0.18s; }
    .reveal-d3 { transition-delay: 0.28s; }
    .reveal-d4 { transition-delay: 0.38s; }

    /* ═══════════════════════════════════════
       RESPONSIVE
    ═══════════════════════════════════════ */
    @media (max-width: 900px) {
      .stats-inner  { grid-template-columns: repeat(2,1fr); }
      .stat-item:nth-child(2)::after { display: none; }
      .init-grid    { grid-template-columns: 1fr; }
      .stories-grid { grid-template-columns: 1fr; max-width: 460px; margin-left: auto; margin-right: auto; }
    }
    @media (max-width: 560px) {
      .stats-inner  { grid-template-columns: 1fr 1fr; gap: 0; }
      .hero { min-height: 80vh; padding: 80px 20px 60px; }
      .initiatives, .stories-section { padding: 70px 20px; }
      .cta-section { padding: 70px 20px; }
    }
  </style>
</head>
<body>

<?php
$current_page = 'women';
include 'header.php';
?>      

<!-- ═══ HERO ═══ -->
<section class="hero">
  <div class="hero-arc hero-arc-1"></div>
  <div class="hero-arc hero-arc-2"></div>
  <div class="hero-arc hero-arc-3"></div>

  <div class="hero-inner">
    <div class="hero-badge">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
      </svg>
      ESG Initiative
    </div>

    <h1 class="hero-title">
      Empowering <em>Women</em><br>in Logistics
    </h1>

    <p class="hero-sub">
      At Doormile, we believe in creating equal opportunities. Our Women Entrepreneurship program is dedicated to training, supporting, and celebrating women who are transforming the last-mile delivery ecosystem.
    </p>

    <a href="#" class="hero-cta">
      Join Our Program
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
      </svg>
    </a>
  </div>

  <!-- <div class="hero-scroll">
    <div class="scroll-line"></div>
    <span>Scroll</span>
  </div> -->
</section>

<!-- ═══ STATS BAR ═══ -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat-item reveal reveal-d1">
      <div class="stat-num">500 <span>+</span></div>
      <div class="stat-lbl">Women Entrepreneurs Trained</div>
    </div>
    <div class="stat-item reveal reveal-d2">
      <div class="stat-num">35 <span>%</span></div>
      <div class="stat-lbl">Of Our Fleet Partners</div>
    </div>
    <div class="stat-item reveal reveal-d3">
      <div class="stat-num">₹2 <span>Cr+</span></div>
      <div class="stat-lbl">Earnings Generated</div>
    </div>
    <div class="stat-item reveal reveal-d4">
      <div class="stat-num">15 </div>
      <div class="stat-lbl">Cities Covered</div>
    </div>
  </div>
</div>

<!-- ═══ INITIATIVES ═══ -->
<div class="initiatives">
  <div class="section-header reveal">
    <div class="section-eyebrow">What We Offer</div>
    <h2 class="section-title">Our Initiatives</h2>
    <p class="section-sub">Comprehensive programs designed to support women at every stage of their entrepreneurship journey.</p>
  </div>

  <div class="init-grid">
    <article class="init-card reveal reveal-d1">
      <div class="init-icon">📚</div>
      <div class="init-content">
        <h3 class="init-title">Training & Development</h3>
        <p class="init-desc">Comprehensive training programs designed to equip women with logistics management skills, from route planning to customer service excellence.</p>
      </div>
    </article>
    <article class="init-card reveal reveal-d2">
      <div class="init-icon">💼</div>
      <div class="init-content">
        <h3 class="init-title">Business Support</h3>
        <p class="init-desc">Access to micro-financing, business mentorship, and operational support to help women entrepreneurs build sustainable delivery businesses.</p>
      </div>
    </article>
    <article class="init-card reveal reveal-d3">
      <div class="init-icon">🏆</div>
      <div class="init-content">
        <h3 class="init-title">Recognition Programs</h3>
        <p class="init-desc">Annual awards and recognition for top-performing women entrepreneurs, celebrating their achievements and inspiring others across the network.</p>
      </div>
    </article>
    <article class="init-card reveal reveal-d4">
      <div class="init-icon">🎯</div>
      <div class="init-content">
        <h3 class="init-title">Goal Setting & Metrics</h3>
        <p class="init-desc">Data-driven approach to track progress, set ambitious targets, and measure the real impact of our women empowerment initiatives.</p>
      </div>
    </article>
  </div>
</div>

<!-- ═══ SUCCESS STORIES ═══ -->
<section class="stories-section">
  <div class="stories-inner">
    <div class="section-header reveal">
      <div class="section-eyebrow">Success Stories</div>
      <h2 class="section-title">Women Leading the Way</h2>
      <p class="section-sub">Meet the inspiring women who are redefining logistics in India.</p>
    </div>

    <div class="stories-grid">

      <!-- Story 1 -->
      <article class="story-card reveal reveal-d1">
        <div class="story-img-wrap">
          <img
            class="story-img"
            src="/logistic/assets/images/women_story_1.png"
            alt="Lakshmi Devi"
            loading="lazy"
          />
        </div>
        <div class="story-body">
          <p class="story-role">Fleet Owner, Coimbatore</p>
          <h3 class="story-name">Lakshmi Devi</h3>
          <div class="story-location">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
            Tamil Nadu, Coimbatore
          </div>
          <div class="story-divider"></div>
          <p class="story-quote">Started with one e-rickshaw, now manages a fleet of 12 vehicles serving local businesses across the city.</p>
        </div>
      </article>

      <!-- Story 2 -->
      <article class="story-card reveal reveal-d2">
        <div class="story-img-wrap">
          <img
            class="story-img"
            src="/logistic/assets/images/women_story_2.png"
            alt="Priya Sharma"
            loading="lazy"
          />
        </div>
        <div class="story-body">
          <p class="story-role">Delivery Partner, Bengaluru</p>
          <h3 class="story-name">Priya Sharma</h3>
          <div class="story-location">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
            Karnataka, Bengaluru
          </div>
          <div class="story-divider"></div>
          <p class="story-quote">A single mother who found financial independence through Doormile's delivery network, now mentoring 30+ women.</p>
        </div>
      </article>

      <!-- Story 3 -->
      <article class="story-card reveal reveal-d3">
        <div class="story-img-wrap">
          <img
            class="story-img"
            src="/logistic/assets/images/women_story_3.png"
            alt="Fatima Khan"
            loading="lazy"
          />
        </div>
        <div class="story-body">
          <p class="story-role">Hub Manager, Hyderabad</p>
          <h3 class="story-name">Fatima Khan</h3>
          <div class="story-location">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
            Telangana, Hyderabad
          </div>
          <div class="story-divider"></div>
          <p class="story-quote">From delivery rider to managing a regional hub with 50+ partners in just 2 years through sheer determination.</p>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ═══ CTA ═══ -->
<section class="cta-section">
  <div class="cta-circle cta-circle-1"></div>
  <div class="cta-circle cta-circle-2"></div>
  <div class="cta-inner reveal">
    <p class="cta-eyebrow">Take the first step</p>
    <h2 class="cta-title">Ready to Start<br><em>Your Journey?</em></h2>
    <p class="cta-sub">Join our Women Entrepreneurship program and become part of India's fastest-growing logistics network.</p>
    <div class="cta-buttons">
      <a href="#" class="btn-primary">
        Apply Now
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
        </svg>
      </a>
      <a href="#" class="btn-outline">Learn More</a>
    </div>
  </div>
</section>

<script>
  // Intersection Observer for scroll reveals
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => io.observe(el));
</script>

</body>
</html>