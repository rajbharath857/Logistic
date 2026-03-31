
<!-- Animated Title Component -->
<style>
    /* Scoped Styles for Animated Title */
    .title-widget-wrapper {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        text-align: left;
        padding-bottom: 10px;
        padding-top: 50px;
    }

    .logico-animated-title {
        font-family: 'DM Sans', sans-serif;
        font-size: 2.8rem;
        font-weight: 800;
        line-height: 1.15;
        color: #111419;
        display: inline-block;
        overflow: hidden;
        margin: 0;
        text-transform: uppercase;
        max-width: 650px; /* Constrain width to force multi-line like the example */
    }

    /* Animation States */
    .animated-ready .word {
        opacity: 0;
        transform: translateY(40px);
        display: inline-block;
        transition: all 0.8s cubic-bezier(0.2, 0.6, 0.4, 1);
    }

    .animated-ready.is-animated .word {
        opacity: 1;
        transform: translateY(0);
    }

    /* Staggering words */
    .animated-ready.is-animated .word:nth-child(1) { transition-delay: 0.1s; }
    .animated-ready.is-animated .word:nth-child(2) { transition-delay: 0.2s; }
    .animated-ready.is-animated .word:nth-child(3) { transition-delay: 0.3s; }
    .animated-ready.is-animated .word:nth-child(4) { transition-delay: 0.4s; }
    .animated-ready.is-animated .word:nth-child(5) { transition-delay: 0.5s; }

    @media (max-width: 768px) {
        .logico-animated-title {
            font-size: 2.2rem;
        }
    }
</style>

<div class="title-widget-wrapper">
    <div class="elementor-widget-container">
        <h3 id="animated-title-main" class="logico-title animated-ready logico-animated-title">
            <!-- Text will be split by JS -->
            Why MileTruth™ is Different
        </h3>
    </div>
</div>

<script>
    (function() {
        document.addEventListener('DOMContentLoaded', function() {
            const titleEl = document.getElementById('animated-title-main');
            if (!titleEl) return;

            // Split title into words for staggering
            const text = titleEl.innerText;
            const words = text.split(' ');
            titleEl.innerHTML = ''; // Clear original text

            words.forEach(word => {
                const wordSpan = document.createElement('span');
                wordSpan.className = 'word';
                wordSpan.style.marginRight = '12px'; // Re-add space
                wordSpan.innerText = word;
                titleEl.appendChild(wordSpan);
            });

            // Trigger animation after a slight delay
            setTimeout(() => {
                titleEl.classList.add('is-animated');
            }, 300);

            // Re-trigger if scrolled into view (basic Intersection Observer)
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-animated');
                        }
                    });
                }, { threshold: 0.5 });
                observer.observe(titleEl);
            }
        });
    })();
</script>
