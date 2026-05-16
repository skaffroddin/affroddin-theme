document.addEventListener("DOMContentLoaded", function () {
    const progress = document.getElementById("scrollProgress");

    if (progress) {
        window.addEventListener("scroll", function () {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = (scrollTop / docHeight) * 100;

            progress.style.width = scrolled + "%";
        });
    }
    // Project Tabs Logic
    const tabs = document.querySelectorAll('.project-tab');
    const cards = document.querySelectorAll('.project-card');

    if (tabs.length > 0 && cards.length > 0) {
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active classes from all tabs
                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-[#b7fe50]', 'text-black', 'shadow-[0_0_15px_rgba(183,254,80,0.3)]');
                    t.classList.add('bg-white/5', 'text-white/70', 'border', 'border-white/10');
                });

                // Add active class to clicked tab
                tab.classList.add('active', 'bg-[#b7fe50]', 'text-black', 'shadow-[0_0_15px_rgba(183,254,80,0.3)]');
                tab.classList.remove('bg-white/5', 'text-white/70', 'border', 'border-white/10');

                const target = tab.getAttribute('data-target');

                cards.forEach(card => {
                    if (target === 'all' || card.getAttribute('data-category') === target) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            if (card.style.opacity === '0') {
                                card.style.display = 'none';
                            }
                        }, 500); // 500ms matches the tailwind duration-500 class
                    }
                });
            });
        });
    }

    // Testimonial Slider Logic
    const slider = document.getElementById('testimonialSlider');
    const prevBtn = document.getElementById('prevTestimonial');
    const nextBtn = document.getElementById('nextTestimonial');

    if (slider) {
        const scrollAmount = () => {
            const firstItem = slider.firstElementChild;
            return firstItem ? firstItem.offsetWidth + 24 : 300; // 24px is gap-6
        };

        const slideNext = () => {
            if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 10) {
                slider.classList.remove('scroll-smooth');
                slider.scrollTo({ left: 0, behavior: 'instant' });
                // Force reflow
                void slider.offsetWidth;
                slider.classList.add('scroll-smooth');
            } else {
                slider.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
            }
        };

        const slidePrev = () => {
            if (slider.scrollLeft <= 0) {
                slider.classList.remove('scroll-smooth');
                slider.scrollTo({ left: slider.scrollWidth, behavior: 'instant' });
                // Force reflow
                void slider.offsetWidth;
                slider.classList.add('scroll-smooth');
            } else {
                slider.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
            }
        };

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                slideNext();
                resetInterval();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                slidePrev();
                resetInterval();
            });
        }

        // Auto slide logic
        let autoSlideInterval;
        
        const startAutoSlide = () => {
            autoSlideInterval = setInterval(slideNext, 3000);
        };

        const resetInterval = () => {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        };

        startAutoSlide();

        // Pause auto-slide on hover/interaction
        slider.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
        slider.addEventListener('mouseleave', startAutoSlide);
        slider.addEventListener('touchstart', () => clearInterval(autoSlideInterval), { passive: true });
        slider.addEventListener('touchend', startAutoSlide);
    }
});
