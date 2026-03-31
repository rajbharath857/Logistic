
<style>
/* Our Values Component Styles */
.values-section-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    background: #ffffff;
    position: relative;
    font-family: 'DM Sans', sans-serif;
}
.values-section {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1180px;
    padding: 80px 32px;
    margin: 0 auto !important;
}
.values-header {
    text-align: center;
    margin-bottom: 60px;
}
.values-eyebrow {
    font-size: 0.72rem;
    font-weight: 500;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: #C0202A;
    margin-bottom: 12px;
}
.values-title {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 16px;
}
.values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
.value-card {
    background: #f5f5f5;
    border: 1px solid #e0e0e0;
    border-radius: 24px;
    padding: 48px 36px;
    box-shadow: 0 2px 12px rgba(17,20,25,0.06);
    transition: transform 0.42s cubic-bezier(0.34,1.56,0.64,1);
}
.value-card:hover { transform: translateY(-10px); }
.card-icon-wrap { width: 72px; height: 72px; margin-bottom: 32px; background: rgba(192, 32, 42, 0.08); border-radius: 50%; }
.card-icon-wrap svg { width: 36px; height: 36px; margin: 18px; }
.card-label { font-size: 0.68rem; color: #C0202A; margin-bottom: 10px; }
.card-title { font-family: 'Playfair Display', serif; font-size: 1.5rem; margin-bottom: 14px; }
.card-desc { font-size: 0.95rem; line-height: 1.75; color: #4a4f5a; }

@media (max-width: 992px) {
    .values-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 600px) {
    .values-grid { grid-template-columns: 1fr; }
}
</style>

<div class="values-section-wrapper">
    <section class="values-section">
        <header class="values-header">
            <div class="values-eyebrow">Who We Are</div>
            <h2 class="values-title">Our Values</h2>
            <p class="values-subtitle">The principles that drive everything we do</p>
        </header>

        <div class="values-grid">
            <article class="value-card">
                <div class="card-icon-wrap"><svg viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="10" stroke="#C0202A" stroke-width="2.2"/><circle cx="18" cy="18" r="5.5"  stroke="#C0202A" stroke-width="2.2"/></svg></div>
                <p class="card-label">01 / Purpose</p>
                <h4 class="card-title">Mission-Driven</h4>
                <p class="card-desc">Transforming logistics with transparency and accountability at every mile.</p>
            </article>
            <article class="value-card">
                <div class="card-icon-wrap"><svg viewBox="0 0 36 36" fill="none"><circle cx="13" cy="13" r="4.5" stroke="#C0202A" stroke-width="2.2"/><circle cx="24" cy="13" r="4.5" stroke="#C0202A" stroke-width="2.2"/></svg></div>
                <p class="card-label">02 / Culture</p>
                <h4 class="card-title">People First</h4>
                <p class="card-desc">Empowering delivery partners and supporting women entrepreneurs.</p>
            </article>
            <article class="value-card">
                <div class="card-icon-wrap"><svg viewBox="0 0 36 36" fill="none"><path d="M18 4l2.5 7.7H28l-6.5 4.7 2.5 7.7L18 20l-6 4.4 2.5-7.7L8 12.7h7.5z" stroke="#C0202A" stroke-width="2.1" stroke-linejoin="round"/></svg></div>
                <p class="card-label">03 / Standards</p>
                <h4 class="card-title">Excellence</h4>
                <p class="card-desc">Setting new standards in logistics technology and service delivery.</p>
            </article>
        </div>
    </section>
</div>