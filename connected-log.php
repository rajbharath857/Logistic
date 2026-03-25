<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Condensed:wght@700;800;900&display=swap" rel="stylesheet">

<style>
/* ══════════════════════════════════════════════
   ALL STYLES SCOPED TO .cs-section
══════════════════════════════════════════════ */
.cs-section *,
.cs-section *::before,
.cs-section *::after { box-sizing: border-box; }

.cs-section {
  --cs-red:        #c01227;
  --cs-red-light:  #fdf0f2;
  --cs-red-mid:    rgba(192,18,39,0.12);
  --cs-green:      #15a056;
  --cs-blue:       #1e6ef5;
  --cs-dark:       #111827;
  --cs-mid:        #374151;
  --cs-muted:      #9ca3af;
  --cs-border:     rgba(0,0,0,0.07);
  --cs-white:      #ffffff;

  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
  padding: 96px 40px 108px;
  position: relative;
  font-family: 'Barlow', sans-serif;
  color: var(--cs-dark);
}

/* subtle grid bg */
.cs-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(to right, rgba(0,0,0,0.03) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(0,0,0,0.03) 1px, transparent 1px);
  background-size: 72px 72px;
  pointer-events: none;
  mask-image: radial-gradient(ellipse 90% 80% at 50% 50%, black 30%, transparent 100%);
  -webkit-mask-image: radial-gradient(ellipse 90% 80% at 50% 50%, black 30%, transparent 100%);
  z-index: 0;
}

/* ── HEADER ── */
.cs-header {
  text-align: center;
  margin-bottom: 64px;
  position: relative;
  z-index: 1;
}

.cs-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: 'Manrope', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 3.5px;
  text-transform: uppercase;
  color: var(--cs-red);
  margin-bottom: 20px;
  opacity: 0;
  transform: translateY(16px);
  transition: opacity .55s ease, transform .55s ease;
}
.cs-eyebrow::before, .cs-eyebrow::after {
  content: '';
  display: block;
  width: 28px; height: 1px;
  background: var(--cs-red);
}

.cs-title {
  font-family: 'Manrope', sans-serif;
  font-size: clamp(38px, 5.5vw, 68px);
  font-weight: 900;
  line-height: 1.02;
  letter-spacing: -1.5px;
  color: var(--cs-dark);
  margin: 0 0 20px;
  opacity: 0;
  transform: translateY(28px);
  transition: opacity .65s ease .12s, transform .65s ease .12s;
}
.cs-title em {
  font-style: normal;
  color: var(--cs-red);
  position: relative;
}
.cs-title em::after {
  content: '';
  position: absolute;
  bottom: 2px; left: 0; right: 0;
  height: 3px;
  background: var(--cs-red);
  border-radius: 2px;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform .85s cubic-bezier(.16,1,.3,1) .9s;
}

.cs-subtitle {
  font-size: 16px;
  color: var(--cs-muted);
  line-height: 1.75;
  max-width: 520px;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(16px);
  transition: opacity .65s ease .26s, transform .65s ease .26s;
}

/* ── IN-VIEW TRIGGERS ── */
.cs-section.cs-live .cs-eyebrow         { opacity: 1; transform: translateY(0); }
.cs-section.cs-live .cs-title           { opacity: 1; transform: translateY(0); }
.cs-section.cs-live .cs-title em::after { transform: scaleX(1); }
.cs-section.cs-live .cs-subtitle        { opacity: 1; transform: translateY(0); }

/* ── MAIN CARD SHELL ── */
.cs-card-shell {
  position: relative;
  z-index: 1;
  background: var(--cs-white);
  border-radius: 28px;
  overflow: hidden;
  box-shadow: 0 8px 60px rgba(0,0,0,0.1);
  opacity: 0;
  transform: translateY(44px);
  transition: opacity .8s cubic-bezier(.16,1,.3,1) .3s,
              transform .8s cubic-bezier(.16,1,.3,1) .3s;
}
.cs-section.cs-live .cs-card-shell { opacity: 1; transform: translateY(0); }

/* ── MILESTONE CARDS ROW ── */
.cs-milestones {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.cs-mile {
  position: relative;
  overflow: hidden;
  cursor: default;
  opacity: 0;
  transform: translateY(20px);
  transition:
    opacity .55s ease,
    transform .55s cubic-bezier(.16,1,.3,1),
    background .3s;
}
.cs-mile:not(:last-child) { border-right: 1px solid var(--cs-border); }

.cs-section.cs-live .cs-mile:nth-child(1) { opacity:1; transform:translateY(0); transition-delay:.5s; }
.cs-section.cs-live .cs-mile:nth-child(2) { opacity:1; transform:translateY(0); transition-delay:.64s; }
.cs-section.cs-live .cs-mile:nth-child(3) { opacity:1; transform:translateY(0); transition-delay:.78s; }

/* image layer (revealed on hover) */
.cs-mile-img {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transform: scale(1.06);
  transition: opacity .5s ease, transform .6s ease;
  z-index: 0;
}
.cs-mile-img::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(253, 253, 253, 0.85) 0%, rgba(17,24,39,0.9) 100%);
}
.cs-mile:hover .cs-mile-img { opacity: 1; transform: scale(1); }

/* content */
.cs-mile-content {
  position: relative;
  z-index: 1;
  padding: 36px 32px 34px;
}

/* icon */
.cs-mile-icon {
  width: 56px; height: 56px;
  border-radius: 16px;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 22px;
  transition: transform .35s cubic-bezier(.16,1,.3,1), box-shadow .35s;
}
.cs-mile:hover .cs-mile-icon {
  transform: scale(1.1) rotate(-6deg);
  box-shadow: 0 10px 30px rgba(0,0,0,0.28);
}
.cs-mile-icon svg {
  width: 24px; height: 24px;
  stroke: #fff; fill: none;
  stroke-width: 1.9;
  stroke-linecap: round; stroke-linejoin: round;
}

/* tag */
.cs-mile-tag {
  font-family: 'Manrope', sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: color .3s;
}
.cs-mile-tag::before {
  content: '';
  display: inline-block;
  width: 20px; height: 1.5px;
  border-radius: 2px;
  background: currentColor;
  transition: width .4s cubic-bezier(.16,1,.3,1);
}
.cs-mile:hover .cs-mile-tag::before { width: 34px; }

.cs-mile-name {
  font-family: 'Manrope', sans-serif;
  font-size: 24px;
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -.4px;
  margin: 0 0 10px;
  transition: color .3s;
}
.cs-mile-desc {
  font-size: 13.5px;
  line-height: 1.65;
  color: var(--cs-muted);
  margin: 0;
  transition: color .3s;
}

/* hover → text goes white */
.cs-mile:hover .cs-mile-tag,
.cs-mile:hover .cs-mile-name  { color: rgba(255,255,255,.95); }
.cs-mile:hover .cs-mile-desc  { color: rgba(255,255,255,.72); }

/* active (first) mile */
.cs-mile.cs-active { background: var(--cs-red-light); }

/* pulsing badge */
.cs-active-badge {
  position: absolute;
  top: 20px; right: 20px;
  width: 28px; height: 28px;
  border-radius: 50%;
  background: var(--cs-red);
  display: flex; align-items: center; justify-content: center;
  animation: cs-ring 2.4s ease-out infinite;
  z-index: 2;
}
.cs-active-badge svg {
  width: 13px; height: 13px;
  stroke: #fff; fill: none;
  stroke-width: 2.5;
  stroke-linecap: round; stroke-linejoin: round;
}
@keyframes cs-ring {
  0%   { box-shadow: 0 0 0 0   rgba(192,18,39,.45); }
  65%  { box-shadow: 0 0 0 11px rgba(192,18,39,.0); }
  100% { box-shadow: 0 0 0 0   rgba(192,18,39,.0); }
}

/* arrow connector between cards */
.cs-arrow {
  position: absolute;
  top: 50%; right: 0px;
  transform: translateY(-50%);
  z-index: 10;
  width: 26px; height: 26px;
  background: var(--cs-white);
  border-radius: 50%;
  border: 1px solid var(--cs-border);
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  display: flex; align-items: center; justify-content: center;
}
.cs-arrow svg {
  width: 10px; height: 10px;
  stroke: var(--cs-red); fill: none;
  stroke-width: 2.5;
  stroke-linecap: round; stroke-linejoin: round;
}

/* ── TRACKER STRIP ── */
.cs-tracker {
  border-top: 1px solid var(--cs-border);
  padding: 26px 36px;
  display: flex;
  align-items: center;
  gap: 28px;
  background: #fafbfc;
  opacity: 0;
  transform: translateY(14px);
  transition: opacity .6s ease 1s, transform .6s ease 1s;
}
.cs-section.cs-live .cs-tracker { opacity: 1; transform: translateY(0); }

.cs-track-icon {
  width: 48px; height: 48px;
  border-radius: 14px;
  background: var(--cs-red-light);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.cs-track-icon svg {
  width: 22px; height: 22px;
  stroke: var(--cs-red); fill: none;
  stroke-width: 1.8;
  stroke-linecap: round; stroke-linejoin: round;
}

.cs-track-info { flex-shrink: 0; }
.cs-track-id {
  font-size: 11px; color: var(--cs-muted);
  letter-spacing: .4px; margin-bottom: 3px;
}
.cs-track-name {
  font-family: 'Manrope', sans-serif;
  font-size: 17px; font-weight: 700;
  color: var(--cs-dark); letter-spacing: -.3px;
}

.cs-track-progress { flex: 1; min-width: 0; }
.cs-track-labels {
  display: flex;
  justify-content: space-between;
  font-size: 10px;
  font-family: 'Manrope', sans-serif;
  font-weight: 700;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--cs-muted);
  margin-bottom: 8px;
}
.cs-bar-bg {
  width: 100%; height: 6px;
  background: #e9eaec;
  border-radius: 6px;
  overflow: visible;
  position: relative;
}
.cs-bar-fill {
  height: 100%;
  border-radius: 6px;
  background: linear-gradient(90deg, var(--cs-blue) 0%, var(--cs-red) 55%, var(--cs-green) 100%);
  width: 0%;
  transition: width 1.7s cubic-bezier(.16,1,.3,1) 1.15s;
  position: relative;
  overflow: visible;
}
.cs-section.cs-live .cs-bar-fill { width: 68%; }

.cs-bar-dot {
  position: absolute;
  top: 50%; right: -5px;
  transform: translateY(-50%);
  width: 10px; height: 10px;
  border-radius: 50%;
  background: var(--cs-red);
  animation: cs-dotpulse 1.5s ease-in-out infinite;
}
@keyframes cs-dotpulse {
  0%,100% { box-shadow: 0 0 0 3px rgba(192,18,39,.25); }
  50%      { box-shadow: 0 0 0 7px rgba(192,18,39,.0); }
}

.cs-track-status { flex-shrink: 0; text-align: right; }
.cs-status-label {
  font-family: 'Manrope', sans-serif;
  font-size: 22px; font-weight: 800;
  color: var(--cs-green); display: block;
  letter-spacing: -.3px;
}
.cs-status-eta { font-size: 12px; color: var(--cs-muted); margin-top: 2px; }


/* ─── LARGE DESKTOP (1440px+) ─── */
@media (min-width: 1440px) {

  .cs-section {
    max-width: 1560px;
    padding: 108px 52px 120px;
  }

  .cs-section::before {
    background-size: 82px 82px;
  }

  .cs-header {
    margin-bottom: 72px;
  }

  .cs-eyebrow {
    font-size: 12px;
    letter-spacing: 3.8px;
    gap: 12px;
    margin-bottom: 22px;
  }

  .cs-eyebrow::before, .cs-eyebrow::after {
    width: 32px;
  }

  .cs-title {
    font-size: clamp(42px, 5.5vw, 74px);
    letter-spacing: -1.6px;
    margin: 0 0 22px;
  }

  .cs-subtitle {
    font-size: 17px;
    max-width: 560px;
    line-height: 1.78;
  }

  .cs-card-shell {
    border-radius: 30px;
  }

  .cs-mile-content {
    padding: 40px 36px 38px;
  }

  .cs-mile-icon {
    width: 60px;
    height: 60px;
    border-radius: 18px;
    margin-bottom: 24px;
  }

  .cs-mile-icon svg {
    width: 26px;
    height: 26px;
  }

  .cs-mile-tag {
    font-size: 10.5px;
    letter-spacing: 3.2px;
    margin-bottom: 11px;
  }

  .cs-mile-name {
    font-size: 26px;
    margin: 0 0 12px;
  }

  .cs-mile-desc {
    font-size: 14px;
    line-height: 1.68;
  }

  .cs-active-badge {
    width: 30px;
    height: 30px;
    top: 22px;
    right: 22px;
  }

  .cs-active-badge svg {
    width: 14px;
    height: 14px;
  }

  .cs-arrow {
    width: 28px;
    height: 28px;
  }

  .cs-arrow svg {
    width: 11px;
    height: 11px;
  }

  .cs-tracker {
    padding: 28px 40px;
    gap: 30px;
  }

  .cs-track-icon {
    width: 52px;
    height: 52px;
    border-radius: 15px;
  }

  .cs-track-icon svg {
    width: 24px;
    height: 24px;
  }

  .cs-track-id {
    font-size: 11.5px;
  }

  .cs-track-name {
    font-size: 18px;
  }

  .cs-track-labels {
    font-size: 10.5px;
    letter-spacing: 1.6px;
  }

  .cs-bar-bg {
    height: 7px;
    border-radius: 7px;
  }

  .cs-bar-fill {
    border-radius: 7px;
  }

  .cs-status-label {
    font-size: 24px;
  }

  .cs-status-eta {
    font-size: 12.5px;
  }
}

/* ─── EXTRA-LARGE DESKTOP (1920px+) ─── */
@media (min-width: 1920px) {

  .cs-section {
    max-width: 1780px;
    padding: 120px 64px 136px;
  }

  .cs-section::before {
    background-size: 92px 92px;
  }

  .cs-header {
    margin-bottom: 80px;
  }

  .cs-eyebrow {
    font-size: 13px;
    letter-spacing: 4px;
    gap: 13px;
    margin-bottom: 24px;
  }

  .cs-eyebrow::before, .cs-eyebrow::after {
    width: 36px;
  }

  .cs-title {
    font-size: clamp(48px, 5.2vw, 80px);
    letter-spacing: -1.8px;
    margin: 0 0 24px;
  }

  .cs-subtitle {
    font-size: 18px;
    max-width: 600px;
    line-height: 1.8;
  }

  .cs-card-shell {
    border-radius: 32px;
    box-shadow: 0 10px 70px rgba(0,0,0,0.11);
  }

  .cs-mile-content {
    padding: 44px 40px 42px;
  }

  .cs-mile-icon {
    width: 64px;
    height: 64px;
    border-radius: 18px;
    margin-bottom: 26px;
  }

  .cs-mile-icon svg {
    width: 28px;
    height: 28px;
  }

  .cs-mile-tag {
    font-size: 11px;
    letter-spacing: 3.5px;
    margin-bottom: 12px;
  }

  .cs-mile-name {
    font-size: 28px;
    margin: 0 0 13px;
  }

  .cs-mile-desc {
    font-size: 14.5px;
    line-height: 1.7;
  }

  .cs-active-badge {
    width: 32px;
    height: 32px;
    top: 24px;
    right: 24px;
  }

  .cs-active-badge svg {
    width: 15px;
    height: 15px;
  }

  .cs-arrow {
    width: 30px;
    height: 30px;
  }

  .cs-arrow svg {
    width: 12px;
    height: 12px;
  }

  .cs-tracker {
    padding: 32px 44px;
    gap: 32px;
  }

  .cs-track-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
  }

  .cs-track-icon svg {
    width: 25px;
    height: 25px;
  }

  .cs-track-id {
    font-size: 12px;
  }

  .cs-track-name {
    font-size: 19px;
  }

  .cs-track-labels {
    font-size: 11px;
    letter-spacing: 1.8px;
    margin-bottom: 9px;
  }

  .cs-bar-bg {
    height: 7px;
    border-radius: 7px;
  }

  .cs-status-label {
    font-size: 26px;
  }

  .cs-status-eta {
    font-size: 13px;
  }
}

/* ─── ULTRA-WIDE (2560px+) ─── */
@media (min-width: 2560px) {

  .cs-section {
    max-width: 2060px;
    padding: 136px 80px 156px;
  }

  .cs-section::before {
    background-size: 104px 104px;
  }

  .cs-header {
    margin-bottom: 92px;
  }

  .cs-eyebrow {
    font-size: 14px;
    letter-spacing: 4.5px;
    gap: 14px;
    margin-bottom: 28px;
  }

  .cs-eyebrow::before, .cs-eyebrow::after {
    width: 42px;
  }

  .cs-title {
    font-size: clamp(54px, 5vw, 88px);
    letter-spacing: -2px;
    margin: 0 0 28px;
  }

  .cs-subtitle {
    font-size: 19.5px;
    max-width: 660px;
    line-height: 1.82;
  }

  .cs-card-shell {
    border-radius: 36px;
    box-shadow: 0 12px 80px rgba(0,0,0,0.11);
  }

  .cs-mile-content {
    padding: 50px 46px 48px;
  }

  .cs-mile-icon {
    width: 70px;
    height: 70px;
    border-radius: 20px;
    margin-bottom: 28px;
  }

  .cs-mile-icon svg {
    width: 30px;
    height: 30px;
  }

  .cs-mile-tag {
    font-size: 12px;
    letter-spacing: 3.8px;
    margin-bottom: 13px;
  }

  .cs-mile-name {
    font-size: 32px;
    letter-spacing: -.5px;
    margin: 0 0 14px;
  }

  .cs-mile-desc {
    font-size: 15.5px;
    line-height: 1.72;
  }

  .cs-active-badge {
    width: 34px;
    height: 34px;
    top: 26px;
    right: 26px;
  }

  .cs-active-badge svg {
    width: 16px;
    height: 16px;
  }

  .cs-arrow {
    width: 32px;
    height: 32px;
  }

  .cs-arrow svg {
    width: 13px;
    height: 13px;
  }

  .cs-tracker {
    padding: 36px 52px;
    gap: 36px;
  }

  .cs-track-icon {
    width: 60px;
    height: 60px;
    border-radius: 18px;
  }

  .cs-track-icon svg {
    width: 28px;
    height: 28px;
  }

  .cs-track-id {
    font-size: 13px;
    letter-spacing: .5px;
  }

  .cs-track-name {
    font-size: 21px;
  }

  .cs-track-labels {
    font-size: 11.5px;
    letter-spacing: 2px;
    margin-bottom: 10px;
  }

  .cs-bar-bg {
    height: 8px;
    border-radius: 8px;
  }

  .cs-bar-fill {
    border-radius: 8px;
  }

  .cs-bar-dot {
    width: 12px;
    height: 12px;
    right: -6px;
  }

  .cs-status-label {
    font-size: 28px;
  }

  .cs-status-eta {
    font-size: 14px;
  }
}

/* ── RESPONSIVE (MOBILE) ── */
@media (max-width: 860px) {
  .cs-section { padding: 60px 20px 70px; }
  .cs-milestones { grid-template-columns: 1fr; }
  .cs-mile:not(:last-child) { border-right: none; border-bottom: 1px solid var(--cs-border); }
  .cs-arrow { display: none; }
  .cs-tracker { flex-wrap: wrap; gap: 18px; }
  .cs-track-progress { order: 3; width: 100%; flex: none; }
}
</style>

<!-- ══ HTML ══ -->
<section class="cs-section" id="cs-connected">

  <header class="cs-header">
    <div class="cs-eyebrow">Connected System</div>
    <h2 class="cs-title">Every Mile <em>Protects</em> the Next</h2>
    <p class="cs-subtitle">Doormile doesn't hand off — it connects. Decisions in the first mile protect the last mile SLA. One delivery timeline. One connected system.</p>
  </header>

  <div class="cs-card-shell">

    <div class="cs-milestones">

      <!-- FIRST MILE -->
      <div class="cs-mile cs-active">
        <div class="cs-mile-img" style="background-image:url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=900&q=85&fit=crop')"></div>
        <div class="cs-active-badge">
          <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <div class="cs-arrow">
          <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
        <div class="cs-mile-content">
          <div class="cs-mile-icon" style="background:linear-gradient(135deg,#2563eb,#1d4ed8);">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="7" width="20" height="14" rx="2"/>
              <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
              <line x1="12" y1="12" x2="12" y2="16"/>
              <line x1="10" y1="14" x2="14" y2="14"/>
            </svg>
          </div>
          <div class="cs-mile-tag" style="color:var(--cs-red)">First Mile</div>
          <h3 class="cs-mile-name">Origin &amp; Pickup</h3>
          <p class="cs-mile-desc">Intelligent pickup scheduling that anticipates downstream requirements and SLA windows.</p>
        </div>
      </div>

      <!-- MID MILE -->
      <div class="cs-mile">
        <div class="cs-mile-img" style="background-image:url('https://images.unsplash.com/photo-1553413077-190dd305871c?w=900&q=85&fit=crop')"></div>
        <div class="cs-arrow">
          <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </div>
        <div class="cs-mile-content">
          <div class="cs-mile-icon" style="background:linear-gradient(135deg,#c01227,#8b0e1c);">
            <svg viewBox="0 0 24 24">
              <rect x="1" y="3" width="15" height="13" rx="2"/>
              <path d="M16 8h4l3 5v3h-7V8z"/>
              <circle cx="5.5" cy="18.5" r="2.5"/>
              <circle cx="18.5" cy="18.5" r="2.5"/>
            </svg>
          </div>
          <div class="cs-mile-tag" style="color:var(--cs-red)">Mid Mile</div>
          <h3 class="cs-mile-name">Transit &amp; Hubs</h3>
          <p class="cs-mile-desc">Dynamic routing through sortation centers with real-time optimization and rerouting.</p>
        </div>
      </div>

      <!-- LAST MILE -->
      <div class="cs-mile">
        <div class="cs-mile-img" style="background-image:url('https://images.unsplash.com/photo-1615460549969-36fa19521a4f?w=900&q=85&fit=crop')"></div>
        <div class="cs-mile-content">
          <div class="cs-mile-icon" style="background:linear-gradient(135deg,#15a056,#0d7a3e);">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <div class="cs-mile-tag" style="color:var(--cs-red)">Last Mile</div>
          <h3 class="cs-mile-name">Final Delivery</h3>
          <p class="cs-mile-desc">SLA-aware delivery windows protected by upstream intelligence and predictive ETA.</p>
        </div>
      </div>

    </div><!-- /cs-milestones -->

    <!-- Tracker Strip -->
    <div class="cs-tracker">

      <div class="cs-track-icon">
        <svg viewBox="0 0 24 24">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
      </div>

      <div class="cs-track-info">
        <div class="cs-track-id">Shipment #DME-2847</div>
        <div class="cs-track-name">Mumbai → Delhi Express</div>
      </div>

      <div class="cs-track-progress">
        <div class="cs-track-labels">
          <span>First Mile</span>
          <span>Mid Mile</span>
          <span>Last Mile</span>
        </div>
        <div class="cs-bar-bg">
          <div class="cs-bar-fill">
            <span class="cs-bar-dot"></span>
          </div>
        </div>
      </div>

      <div class="cs-track-status">
        <span class="cs-status-label">On Time</span>
        <div class="cs-status-eta">ETA: 4:30 PM</div>
      </div>

    </div>

  </div><!-- /cs-card-shell -->

</section>

<script>
(function () {
  var el = document.getElementById('cs-connected');
  if (!el) return;
  function activate() { el.classList.add('cs-live'); }
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { activate(); io.unobserve(e.target); } });
    }, { threshold: 0.12 });
    io.observe(el);
  }
  setTimeout(activate, 380);
})();
</script>