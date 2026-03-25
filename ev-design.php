<style>
/* ─── EV SECTION BASE ─── */
.ev-section {
  max-width: 1400px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 60px;
  padding: 80px 20px;
}

/* ─── LARGE DESKTOP (1440px+) ─── */
@media (min-width: 1440px) {
  .ev-section                          { max-width: 1560px; padding: 50px 52px; gap: 72px; }
  .ev-section .ev-badge                { font-size: 15px; padding: 9px 18px; margin-bottom: 22px; }
  .ev-section .ev-heading              { font-size: 64px; margin-bottom: 22px; }
  .ev-section .ev-subtext              { font-size: 19px; max-width: 560px; margin-bottom: 44px; }
  .ev-section .ev-grid                 { gap: 22px; max-width: 980px; }
  .ev-section .ev-card                 { padding: 24px; border-radius: 16px; }
  .ev-section .ev-card h3              { font-size: 19px; }
  .ev-section .ev-card p               { font-size: 14.5px; }
  .ev-section .right-card              { padding: 34px; border-radius: 22px; }
  .ev-section .ev-stat-val             { font-size: 1.4rem; }
  .ev-section .ev-stat-label           { font-size: 14px; }
}

/* ─── EXTRA-LARGE DESKTOP (1920px+) ─── */
@media (min-width: 1920px) {
  .ev-section                          { max-width: 1780px; padding: 112px 64px; gap: 88px; }
  .ev-section .ev-badge                { font-size: 16px; padding: 10px 20px; margin-bottom: 26px; }
  .ev-section .ev-heading              { font-size: 76px; margin-bottom: 26px; }
  .ev-section .ev-subtext              { font-size: 20px; max-width: 620px; margin-bottom: 50px; line-height: 1.65; }
  .ev-section .ev-grid                 { gap: 26px; max-width: 1060px; }
  .ev-section .ev-card                 { padding: 28px; border-radius: 18px; }
  .ev-section .ev-card h3              { font-size: 21px; }
  .ev-section .ev-card p               { font-size: 15.5px; }
  .ev-section .right-card              { padding: 40px; border-radius: 26px; }
  .ev-section .ev-stat-val             { font-size: 1.55rem; }
  .ev-section .ev-stat-label           { font-size: 15px; }
}

/* ─── ULTRA-WIDE (2560px+) ─── */
@media (min-width: 2560px) {
  .ev-section                          { max-width: 2100px; padding: 50px 80px; gap: 108px; }
  .ev-section .ev-badge                { font-size: 18px; padding: 12px 24px; margin-bottom: 30px; }
  .ev-section .ev-heading              { font-size: 92px; margin-bottom: 30px; line-height: 1.05; }
  .ev-section .ev-subtext              { font-size: 22px; max-width: 700px; margin-bottom: 58px; line-height: 1.68; }
  .ev-section .ev-grid                 { gap: 30px; max-width: 1200px; }
  .ev-section .ev-card                 { padding: 32px; border-radius: 20px; }
  .ev-section .ev-card h3              { font-size: 24px; }
  .ev-section .ev-card p               { font-size: 17px; }
  .ev-section .right-card              { padding: 48px; border-radius: 30px; }
  .ev-section .ev-stat-val             { font-size: 1.75rem; }
  .ev-section .ev-stat-label           { font-size: 16px; }
}

/* ─── RIGHT CARD OVERLAY ─── */
.right-card {
  position: relative;
  color: #111;
  overflow: hidden;
}
.right-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to right,
    rgba(255,255,255,0.9) 30%,
    rgba(255,255,255,0.6) 55%,
    rgba(255,255,255,0.2) 100%
  );
  z-index: 0;
}
.right-card > * {
  position: relative;
  z-index: 1;
}
</style>

<section class="ev-section">

<!-- LEFT CONTENT -->
<div>

<span class="ev-badge" style="background:rgb(255,235,238);color:#c01227;padding:8px 16px;border-radius:20px;font-size:14px;display:inline-block;margin-bottom:20px;">
EV-Native Design
</span>

<h1 class="ev-heading" style="font-size:56px;font-weight:700;color:#0f172a;line-height:1.1;margin-bottom:20px;">
Built for Electric.<br>
<span style="color:#c01227;">Not Adapted.</span>
</h1>

<p class="ev-subtext" style="font-size:18px;color:#5c6b6b;max-width:520px;margin-bottom:40px;line-height:1.6;">
Most logistics software treats EVs as diesel trucks with a battery. Doormile was built EV-first—understanding that electric fleets require fundamentally different intelligence.
</p>

<div class="ev-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;max-width:920px;">

<div class="ev-card" style="background:#fff;padding:20px;border-radius:14px;box-shadow:0 5px 20px rgba(0,0,0,0.05);">
<h3 style="margin:0 0 8px 0;font-size:18px;">Battery-Aware Routing</h3>
<p style="font-size:14px;color:#6b7280;margin:0;">Battery level, health, and degradation are inputs to route optimization.</p>
</div>

<div class="ev-card" style="background:#fff;padding:20px;border-radius:14px;box-shadow:0 5px 20px rgba(0,0,0,0.05);">
<h3 style="margin:0 0 8px 0;font-size:18px;">Charging Integration</h3>
<p style="font-size:14px;color:#6b7280;margin:0;">Integrate charging stops without compromising delivery windows.</p>
</div>

<div class="ev-card" style="background:#fff;padding:20px;border-radius:14px;box-shadow:0 5px 20px rgba(0,0,0,0.05);">
<h3 style="margin:0 0 8px 0;font-size:18px;">Energy-Optimized Paths</h3>
<p style="font-size:14px;color:#6b7280;margin:0;">Consider elevation, speed limits, and weather for efficiency.</p>
</div>

<div class="ev-card" style="background:#fff;padding:20px;border-radius:14px;box-shadow:0 5px 20px rgba(0,0,0,0.05);">
<h3 style="margin:0 0 8px 0;font-size:18px;">Predictable Operations</h3>
<p style="font-size:14px;color:#6b7280;margin:0;">EVs become predictable assets, not operational risks.</p>
</div>

</div>

</div>

<!-- RIGHT CARD -->
<div class="right-card" style="background:#fff;padding:30px;border-radius:20px;width:920px;box-shadow:0 20px 40px rgba(0,0,0,0.08);background-image:url('/logistic/assets/images/ev-design1.jpeg');background-size:cover;background-position:center;">

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">
<h4 style="margin:0;">Fleet Status</h4>
<span style="color:#19a463;font-size:14px;">● 12 vehicles active</span>
</div>

<div style="display:flex;justify-content:space-between;padding:14px 0;border-bottom:1px solid #eee;">
<div>
<strong>EV-001</strong>
<p style="margin:0;color:#6b7280;font-size:14px;">Route A</p>
</div>
<div style="color:#19a463;font-weight:bold;">85% <span style="margin-left:10px;color:#221f1f;">15 min</span></div>
</div>

<div style="display:flex;justify-content:space-between;padding:14px 0;border-bottom:1px solid #eee;">
<div>
<strong>EV-002</strong>
<p style="margin:0;color:#6b7280;font-size:14px;">Route B</p>
</div>
<div style="color:#19a463;font-weight:bold;">62% <span style="margin-left:10px;color:#221f1f;">42 min</span></div>
</div>

<div style="display:flex;justify-content:space-between;padding:14px 0;border-bottom:1px solid #eee;">
<div>
<strong>EV-003</strong>
<p style="margin:0;color:#6b7280;font-size:14px;">Charging</p>
</div>
<div style="color:#f59e0b;font-size:1.1rem;font-weight:bold;">28% <span style="margin-left:10px;color:#221f1f;">Charging</span></div>
</div>

<div style="display:flex;justify-content:space-between;margin-top:30px;text-align:center;">

<div>
<h4 class="ev-stat-val" style="margin:0;color:#19a463;text-align:center;font-size:1.25rem;line-height:1.75rem;font-weight:bold;">40%</h4>
<p class="ev-stat-label" style="font-size:13px;color:#6b7280;margin:0;">Lower Fuel Costs</p>
</div>

<div>
<h4 class="ev-stat-val" style="margin:0;color:#19a463;text-align:center;font-size:1.25rem;line-height:1.75rem;font-weight:bold;">Zero</h4>
<p class="ev-stat-label" style="font-size:13px;color:#6b7280;margin:0;">Tailpipe Emissions</p>
</div>

<div>
<h4 class="ev-stat-val" style="margin:0;color:#19a463;text-align:center;font-size:1.25rem;line-height:1.75rem;font-weight:bold;">98%</h4>
<p class="ev-stat-label" style="font-size:13px;color:#6b7280;margin:0;">Fleet Uptime</p>
</div>

<div>
<p class="ev-stat-val" style="margin:0;color:#19a463;text-align:center;font-size:1.25rem;line-height:1.75rem;font-weight:bold;">3x</p>
<p class="ev-stat-label" style="font-size:13px;color:#6b7280;margin:0;">Longer Asset Life</p>
</div>

</div>

</div>

</section>