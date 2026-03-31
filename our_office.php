
<style>
/* Our Office Component Styles */
.offices-section-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    background: #ffffff;
    position: relative;
    font-family: 'DM Sans', sans-serif;
}
.offices-section {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1180px;
    padding: 80px 32px;
    margin: 0 auto !important;
}
.offices-header {
    text-align: center;
    margin-bottom: 60px;
}
.offices-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 26px;
}
.office-card {
    background: #f5f5f5;
    border: 1px solid #e1e1e1;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(17,20,25,0.07);
    transition: transform 0.42s ease, box-shadow 0.42s ease;
}
.office-card:hover { transform: translateY(-10px); box-shadow: 0 28px 60px rgba(192,32,42,0.14); }
.map-container { height: 220px; overflow: hidden; }
.card-body { padding: 28px 30px 32px; }
.card-tag { font-size: 0.67rem; color: #C0202A; margin-bottom: 8px; }
.card-city { font-family: 'Playfair Display', serif; font-size: 1.7rem; font-weight: 700; margin-bottom: 10px; }
.card-desc { font-size: 0.92rem; color: #4d5261; line-height: 1.72; }

@media (max-width: 992px) {
    .offices-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 600px) {
    .offices-grid { grid-template-columns: 1fr; }
}
</style>

<div class="offices-section-wrapper">
    <section class="offices-section">
        <header class="offices-header">
            <div class="offices-eyebrow">Where We Are</div>
            <h2 class="offices-title">Our Offices</h2>
            <p class="offices-subtitle">Strategically located to serve businesses across India</p>
        </header>

        <div class="offices-grid">
            <!-- Coimbatore -->
            <article class="office-card">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62617.64038696284!2d76.92516!3d11.01680!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="card-body">
                    <p class="card-tag">Headquarters</p>
                    <h4 class="card-city">Coimbatore</h4>
                    <p class="card-desc">Our innovation hub where MileTruth™ AI was born</p>
                </div>
            </article>

            <!-- Bengaluru -->
            <article class="office-card">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124416.29!2d77.5007!3d12.9716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1700000000001" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="card-body">
                    <p class="card-tag">Technology Center</p>
                    <h4 class="card-city">Bengaluru</h4>
                    <p class="card-desc">Engineering excellence and product development</p>
                </div>
            </article>

            <!-- Hyderabad -->
            <article class="office-card">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121684.68!2d78.3674!3d17.3850!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1700000000002" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="card-body">
                    <p class="card-tag">Operations Hub</p>
                    <h4 class="card-city">Hyderabad</h4>
                    <p class="card-desc">Scaling logistics operations across India</p>
                </div>
            </article>
        </div>
    </section>
</div>