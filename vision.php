
<style>
/* Vision & Mission Component Styles */
    .vm-section-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
        background: #ffffff;
        position: relative;
        font-family: 'DM Sans', sans-serif;
    }
.vm-section {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1140px;
    padding: 80px 32px 90px;
    margin: 0 auto !important;
}
.vm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    align-items: stretch;
}
.vm-card {
    position: relative;
    background: #f5f5f5;
    border: 1px solid #e0e0e0;
    border-radius: 28px;
    padding: 52px 48px 44px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(17,20,25,0.06);
    transition: transform 0.44s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.44s ease;
}
.vm-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 64px rgba(192,32,42,0.13);
}
.vm-icon-wrap {
    width: 68px; height: 68px;
    margin-bottom: 36px;
    background: rgba(192,32,42,0.08);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.vm-icon-wrap svg { width: 34px; height: 34px; }
.vm-tag {
    font-size: 0.67rem;
    font-weight: 500;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #C0202A;
    margin-bottom: 12px;
}
.vm-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 20px;
}
.vm-title em { font-style: italic; color: #C0202A; }
.vm-body {
    font-size: 1rem;
    font-weight: 300;
    color: #4d5261;
    line-height: 1.8;
}
@media (max-width: 768px) {
    .vm-grid { grid-template-columns: 1fr; }
}
</style>

<div class="vm-section-wrapper">
    <section class="vm-section">
        <div class="vm-grid">
            <article class="vm-card">
                <div class="vm-icon-wrap">
                    <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><ellipse cx="18" cy="18" rx="14" ry="9" stroke="#C0202A" stroke-width="2.1"/><circle cx="18" cy="18" r="4" stroke="#C0202A" stroke-width="2.1"/><circle cx="18" cy="18" r="1.4" fill="#C0202A"/></svg>
                </div>
                <p class="vm-tag">Vision</p>
                <h3 class="vm-title">Our <em>Vision</em></h3>
                <p class="vm-body">To become India's most trusted connected logistics platform, where every package travels on a single, transparent timeline.</p>
            </article>
            <article class="vm-card">
                <div class="vm-icon-wrap">
                    <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 28 L14 22 Q16 14 24 8 Q30 6 30 6 Q28 12 22 20 L16 26 Z" stroke="#C0202A" stroke-width="2.1" stroke-linejoin="round"/><circle cx="19" cy="17" r="2.4" fill="#C0202A" opacity="0.35"/></svg>
                </div>
                <p class="vm-tag">Mission</p>
                <h3 class="vm-title">Our <em>Mission</em></h3>
                <p class="vm-body">To eliminate the chaos of fragmented logistics by unifying first, mid, and last miles with MileTruth™ AI.</p>
            </article>
        </div>
    </section>
</div>