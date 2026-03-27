
<style>
  /* ── ALL STYLES SCOPED UNDER .dm-compare-section ── */

  .dm-compare-section *,
  .dm-compare-section *::before,
  .dm-compare-section *::after {
    box-sizing: border-box;
  }

  .dm-compare-section {
    --dm-red:          #c01227;
    --dm-red-light:    #fdf0f2;
    --dm-red-border:   rgba(192, 18, 39, 0.12);
    --dm-red-hover:    rgba(192, 18, 39, 0.025);
    --dm-green:        #1dab6e;
    --dm-green-light:  #edfaf4;
    --dm-dark:         #1a1e2e;
    --dm-muted:        #8d93a8;
    --dm-white:        #ffffff;
    --dm-border:       rgba(0, 0, 0, 0.07);

    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    padding: 50px 40px 0px;
    position: relative;
    font-family: 'Manrope', sans-serif;
  }

  /* grid background */
  .dm-compare-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(to right, rgba(0,0,0,0.035) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(0,0,0,0.035) 1px, transparent 1px);
    background-size: 70px 70px;
    pointer-events: none;
    mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 40%, transparent 100%);
    -webkit-mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, black 40%, transparent 100%);
    z-index: 0;
    border-radius: 24px;
  }

  /* ── HEADER ── */
  .dm-compare-section .dm-section-header {
    text-align: center;
    margin-bottom: 56px;
    position: relative;
    z-index: 1;
  }

  .dm-compare-section .dm-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Manrope', sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3.5px;
    text-transform: uppercase;
    color: var(--dm-red);
    margin-bottom: 18px;
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }
  .dm-compare-section .dm-eyebrow::before,
  .dm-compare-section .dm-eyebrow::after {
    content: '';
    display: block;
    width: 28px;
    height: 1px;
    background: var(--dm-red);
  }

  .dm-compare-section .dm-section-title {
    font-family: 'Manrope', sans-serif;
    font-size: clamp(36px, 5vw, 62px);
    font-weight: 800;
    color: var(--dm-dark);
    line-height: 1.05;
    letter-spacing: -1px;
    margin: 0;
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.65s ease 0.12s, transform 0.65s ease 0.12s;
  }
  .dm-compare-section .dm-section-title em {
    font-style: normal;
    color: var(--dm-red);
    position: relative;
  }
  .dm-compare-section .dm-section-title em::after {
    content: '';
    position: absolute;
    bottom: 3px; left: 0; right: 0;
    height: 3px;
    background: var(--dm-red);
    border-radius: 2px;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.8s cubic-bezier(.16,1,.3,1) 0.85s;
  }

  .dm-compare-section .dm-section-sub {
    margin-top: 18px;
    font-size: 15.5px;
    color: var(--dm-muted);
    line-height: 1.7;
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 0.65s ease 0.26s, transform 0.65s ease 0.26s;
  }

  /* ── IN-VIEW TRIGGERS ── */
  .dm-compare-section.dm-in-view .dm-eyebrow        { opacity: 1; transform: translateY(0); }
  .dm-compare-section.dm-in-view .dm-section-title  { opacity: 1; transform: translateY(0); }
  .dm-compare-section.dm-in-view .dm-section-title em::after { transform: scaleX(1); }
  .dm-compare-section.dm-in-view .dm-section-sub    { opacity: 1; transform: translateY(0); }

  /* ── TABLE WRAPPER ── */
  .dm-compare-section .dm-compare-wrap {
    position: relative;
    z-index: 1;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 8px 50px rgba(0,0,0,0.09);
    background: var(--dm-white);
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.75s cubic-bezier(.16,1,.3,1) 0.35s,
                transform 0.75s cubic-bezier(.16,1,.3,1) 0.35s;
  }
  .dm-compare-section.dm-in-view .dm-compare-wrap { opacity: 1; transform: translateY(0); }

  /* ── COLUMN HEADERS ── */
  .dm-compare-section .dm-col-headers {
    display: grid;
    grid-template-columns: 1fr 1fr;
    position: relative;
  }
  .dm-compare-section .dm-col-headers::after {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 50%;
    width: 1px;
    background: var(--dm-border);
  }

  .dm-compare-section .dm-col-head {
    padding: 26px 40px;
    font-family: 'Manrope', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .dm-compare-section .dm-col-head.dm-traditional {
    background: #f7f8fa;
    color: var(--dm-muted);
    border-bottom: 1px solid var(--dm-border);
  }
  .dm-compare-section .dm-col-head.dm-doormile {
    background: var(--dm-red-light);
    color: var(--dm-red);
    border-bottom: 1px solid var(--dm-red-border);
    position: relative;
    overflow: hidden;
  }
  .dm-compare-section .dm-col-head.dm-doormile::after {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 60%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
    animation: dm-shimmer 3s ease-in-out infinite 1.2s;
  }
  @keyframes dm-shimmer {
    0%   { left: -100%; }
    50%  { left: 140%; }
    100% { left: 140%; }
  }

  .dm-compare-section .dm-col-head-icon {
    width: 28px; height: 28px;
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .dm-compare-section .dm-col-head.dm-traditional .dm-col-head-icon { background: #ececee; }
  .dm-compare-section .dm-col-head.dm-doormile    .dm-col-head-icon { background: rgba(192,18,39,0.15); }

  .dm-compare-section .dm-col-head-icon svg {
    width: 14px; height: 14px;
    stroke-width: 2.5;
    stroke-linecap: round; stroke-linejoin: round;
    fill: none;
  }
  .dm-compare-section .dm-col-head.dm-traditional .dm-col-head-icon svg { stroke: var(--dm-muted); }
  .dm-compare-section .dm-col-head.dm-doormile    .dm-col-head-icon svg { stroke: var(--dm-red); }

  /* ── ROWS ── */
  .dm-compare-section .dm-compare-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border-top: 1px solid var(--dm-border);
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateX(-16px);
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(.16,1,.3,1);
  }
  .dm-compare-section.dm-in-view .dm-compare-row:nth-child(1) { opacity: 1; transform: translateX(0); transition-delay: 0.55s; }
  .dm-compare-section.dm-in-view .dm-compare-row:nth-child(2) { opacity: 1; transform: translateX(0); transition-delay: 0.68s; }
  .dm-compare-section.dm-in-view .dm-compare-row:nth-child(3) { opacity: 1; transform: translateX(0); transition-delay: 0.81s; }
  .dm-compare-section.dm-in-view .dm-compare-row:nth-child(4) { opacity: 1; transform: translateX(0); transition-delay: 0.94s; }

  .dm-compare-section .dm-compare-row::before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--dm-red-hover);
    opacity: 0;
    transition: opacity 0.25s;
    pointer-events: none;
  }
  .dm-compare-section .dm-compare-row:hover::before { opacity: 1; }

  /* ── CELLS ── */
  .dm-compare-section .dm-cell {
    padding: 28px 40px;
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 15px;
    line-height: 1.5;
    position: relative;
  }
  .dm-compare-section .dm-cell.dm-right {
    border-left: 1px solid var(--dm-border);
    background: rgba(253,248,248,0.4);
  }

  /* ── ICONS ── */
  .dm-compare-section .dm-cell-icon {
    flex-shrink: 0;
    width: 32px; height: 32px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    transition: transform 0.35s cubic-bezier(.16,1,.3,1);
  }
  .dm-compare-section .dm-compare-row:hover .dm-cell-icon { transform: scale(1.18) rotate(-5deg); }
  .dm-compare-section .dm-cell-icon.dm-bad  { background: var(--dm-red-light); }
  .dm-compare-section .dm-cell-icon.dm-good { background: var(--dm-green-light); }
  .dm-compare-section .dm-cell-icon svg {
    width: 15px; height: 15px;
    stroke-width: 2.5;
    stroke-linecap: round; stroke-linejoin: round;
    fill: none;
  }
  .dm-compare-section .dm-cell-icon.dm-bad  svg { stroke: var(--dm-red); }
  .dm-compare-section .dm-cell-icon.dm-good svg { stroke: var(--dm-green); }

  .dm-compare-section .dm-cell-text {
    font-weight: 500;
    color: var(--dm-dark);
    transition: color 0.2s;
    margin: 0;
  }
  .dm-compare-section .dm-cell.dm-left .dm-cell-text { color: var(--dm-muted); }
  .dm-compare-section .dm-compare-row:hover .dm-cell.dm-right .dm-cell-text { color: var(--dm-dark); }

  /* ── FOOTER BAR ── */
  .dm-compare-section .dm-compare-footer {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border-top: 1px solid var(--dm-border);
  }
  .dm-compare-section .dm-footer-cell {
    padding: 22px 40px;
    font-size: 12px;
    font-family: 'Manrope', sans-serif;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--dm-muted);
    background: #f9fafb;
  }
  .dm-compare-section .dm-footer-cell.dm-right {
    background: var(--dm-red-light);
    color: var(--dm-red);
    border-left: 1px solid var(--dm-red-border);
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .dm-compare-section .dm-footer-cell .dm-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--dm-red);
    flex-shrink: 0;
    animation: dm-pulse 1.8s ease-in-out infinite;
  }
  @keyframes dm-pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50%       { opacity: 0.35; transform: scale(0.55); }
  }


  /* ─── LARGE DESKTOP (1440px+) ─── */
  @media (min-width: 1440px) {

    .dm-compare-section {
      max-width: 1260px;
      padding: 60px 52px 0px;
    }

    .dm-compare-section::before {
      background-size: 80px 80px;
    }

    .dm-compare-section .dm-section-header {
      margin-bottom: 64px;
    }

    .dm-compare-section .dm-eyebrow {
      font-size: 12px;
      letter-spacing: 3.8px;
      gap: 12px;
      margin-bottom: 20px;
    }

    .dm-compare-section .dm-eyebrow::before,
    .dm-compare-section .dm-eyebrow::after {
      width: 32px;
    }

    .dm-compare-section .dm-section-title {
      font-size: clamp(40px, 5vw, 68px);
      letter-spacing: -1.1px;
    }

    .dm-compare-section .dm-section-sub {
      font-size: 16px;
      margin-top: 20px;
      line-height: 1.72;
    }

    .dm-compare-section .dm-compare-wrap {
      border-radius: 24px;
    }

    .dm-compare-section .dm-col-head {
      padding: 30px 44px;
      font-size: 13.5px;
      letter-spacing: 2.8px;
      gap: 12px;
    }

    .dm-compare-section .dm-col-head-icon {
      width: 30px;
      height: 30px;
      border-radius: 9px;
    }

    .dm-compare-section .dm-col-head-icon svg {
      width: 15px;
      height: 15px;
    }

    .dm-compare-section .dm-cell {
      padding: 30px 44px;
      gap: 18px;
      font-size: 15.5px;
    }

    .dm-compare-section .dm-cell-icon {
      width: 34px;
      height: 34px;
    }

    .dm-compare-section .dm-cell-icon svg {
      width: 16px;
      height: 16px;
    }

    .dm-compare-section .dm-footer-cell {
      padding: 24px 44px;
      font-size: 12.5px;
      letter-spacing: 1.8px;
    }
  }

  /* ─── EXTRA-LARGE DESKTOP (1920px+) ─── */
  @media (min-width: 1920px) {

    .dm-compare-section {
      max-width: 1480px;
      padding: 72px 64px 0px;
    }

    .dm-compare-section::before {
      background-size: 90px 90px;
    }

    .dm-compare-section .dm-section-header {
      margin-bottom: 72px;
    }

    .dm-compare-section .dm-eyebrow {
      font-size: 13px;
      letter-spacing: 4px;
      gap: 13px;
      margin-bottom: 22px;
    }

    .dm-compare-section .dm-eyebrow::before,
    .dm-compare-section .dm-eyebrow::after {
      width: 36px;
    }

    .dm-compare-section .dm-section-title {
      font-size: clamp(46px, 5vw, 76px);
      letter-spacing: -1.3px;
    }

    .dm-compare-section .dm-section-sub {
      font-size: 17px;
      margin-top: 22px;
      line-height: 1.75;
    }

    .dm-compare-section .dm-compare-wrap {
      border-radius: 26px;
      box-shadow: 0 10px 60px rgba(0,0,0,0.1);
    }

    .dm-compare-section .dm-col-head {
      padding: 32px 52px;
      font-size: 14px;
      letter-spacing: 3px;
      gap: 13px;
    }

    .dm-compare-section .dm-col-head-icon {
      width: 32px;
      height: 32px;
      border-radius: 10px;
    }

    .dm-compare-section .dm-col-head-icon svg {
      width: 16px;
      height: 16px;
    }

    .dm-compare-section .dm-cell {
      padding: 34px 52px;
      gap: 20px;
      font-size: 16px;
    }

    .dm-compare-section .dm-cell-icon {
      width: 36px;
      height: 36px;
    }

    .dm-compare-section .dm-cell-icon svg {
      width: 17px;
      height: 17px;
    }

    .dm-compare-section .dm-footer-cell {
      padding: 26px 52px;
      font-size: 13px;
      letter-spacing: 2px;
    }
  }

  /* ─── ULTRA-WIDE (2560px+) ─── */
  @media (min-width: 2560px) {

    .dm-compare-section {
      max-width: 1760px;
      padding: 80px 72px 0px;
    }

    .dm-compare-section::before {
      background-size: 100px 100px;
    }

    .dm-compare-section .dm-section-header {
      margin-bottom: 84px;
    }

    .dm-compare-section .dm-eyebrow {
      font-size: 14px;
      letter-spacing: 4.5px;
      gap: 14px;
      margin-bottom: 26px;
    }

    .dm-compare-section .dm-eyebrow::before,
    .dm-compare-section .dm-eyebrow::after {
      width: 42px;
    }

    .dm-compare-section .dm-section-title {
      font-size: clamp(52px, 5vw, 84px);
      letter-spacing: -1.5px;
    }

    .dm-compare-section .dm-section-sub {
      font-size: 18.5px;
      margin-top: 26px;
      line-height: 1.8;
    }

    .dm-compare-section .dm-compare-wrap {
      border-radius: 28px;
      box-shadow: 0 12px 70px rgba(0,0,0,0.1);
    }

    .dm-compare-section .dm-col-head {
      padding: 36px 60px;
      font-size: 15px;
      letter-spacing: 3.5px;
      gap: 14px;
    }

    .dm-compare-section .dm-col-head-icon {
      width: 36px;
      height: 36px;
      border-radius: 11px;
    }

    .dm-compare-section .dm-col-head-icon svg {
      width: 18px;
      height: 18px;
    }

    .dm-compare-section .dm-cell {
      padding: 38px 60px;
      gap: 22px;
      font-size: 17px;
      line-height: 1.55;
    }

    .dm-compare-section .dm-cell-icon {
      width: 40px;
      height: 40px;
    }

    .dm-compare-section .dm-cell-icon svg {
      width: 19px;
      height: 19px;
    }

    .dm-compare-section .dm-footer-cell {
      padding: 28px 60px;
      font-size: 14px;
      letter-spacing: 2.2px;
    }

    .dm-compare-section .dm-footer-cell .dm-dot {
      width: 8px;
      height: 8px;
    }
  }

  /* ── RESPONSIVE (MOBILE) ── */
  @media (max-width: 680px) {
    .dm-compare-section { padding: 60px 16px 70px; }
    .dm-compare-section .dm-col-head,
    .dm-compare-section .dm-cell { padding: 20px 20px; }
    .dm-compare-section .dm-footer-cell { padding: 18px 20px; }
    .dm-compare-section .dm-col-head { font-size: 11px; letter-spacing: 1.5px; }
  }
</style>

<!-- ── SECTION HTML ── -->
<section class="dm-compare-section" id="dm-compare">

  <div class="dm-section-header">
    <div class="dm-eyebrow">Why It Matters</div>
    <h2 class="dm-section-title">Traditional Approach<br><em>The Doormile Way</em></h2>
    <p class="dm-section-sub">See how the Doormile way eliminates the friction that traditional logistics creates at every step.</p>
  </div>

  <div class="dm-compare-wrap">

    <div class="dm-col-headers">
      <div class="dm-col-head dm-traditional">
        <div class="dm-col-head-icon">
          <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </div>
        Traditional Approach
      </div>
      <div class="dm-col-head dm-doormile">
        <div class="dm-col-head-icon">
          <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        The Doormile Way
      </div>
    </div>

    <div class="dm-rows-wrap">
      <div class="dm-compare-row">
        <div class="dm-cell dm-left">
          <div class="dm-cell-icon dm-bad"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>
          <span class="dm-cell-text">3+ vendors to manage</span>
        </div>
        <div class="dm-cell dm-right">
          <div class="dm-cell-icon dm-good"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span class="dm-cell-text">Single integrated partner</span>
        </div>
      </div>

      <div class="dm-compare-row">
        <div class="dm-cell dm-left">
          <div class="dm-cell-icon dm-bad"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>
          <span class="dm-cell-text">Fragmented tracking</span>
        </div>
        <div class="dm-cell dm-right">
          <div class="dm-cell-icon dm-good"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span class="dm-cell-text">Unified timeline view</span>
        </div>
      </div>

      <div class="dm-compare-row">
        <div class="dm-cell dm-left">
          <div class="dm-cell-icon dm-bad"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>
          <span class="dm-cell-text">Blame games on delays</span>
        </div>
        <div class="dm-cell dm-right">
          <div class="dm-cell-icon dm-good"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span class="dm-cell-text">Clear accountability</span>
        </div>
      </div>

      <div class="dm-compare-row">
        <div class="dm-cell dm-left">
          <div class="dm-cell-icon dm-bad"><svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>
          <span class="dm-cell-text">Reactive problem solving</span>
        </div>
        <div class="dm-cell dm-right">
          <div class="dm-cell-icon dm-good"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
          <span class="dm-cell-text">AI-powered predictions</span>
        </div>
      </div>
    </div>

    <div class="dm-compare-footer">
      <div class="dm-footer-cell">Outdated · Fragmented · Reactive</div>
      <div class="dm-footer-cell dm-right">
        <span class="dm-dot"></span>
        Unified · Intelligent · Proactive
      </div>
    </div>

  </div>
</section>

<script>
(function () {
  var section = document.getElementById('dm-compare');
  if (!section) return;
  function activate() { section.classList.add('dm-in-view'); }
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { activate(); io.unobserve(e.target); }
      });
    }, { threshold: 0.15 });
    io.observe(section);
  } else {
    setTimeout(activate, 300);
  }
})();
</script>
