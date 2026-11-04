import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Global window exposure for easy access, page scripts & debugging
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Backward compatibility helpers for inline scripts
window.animate = (target, vars, options = {}) => {
    return gsap.to(target, { ...vars, ...options });
};

// Global Toast Notifications with GSAP Spring Pop-in
window.showToast = function(message, type = 'success') {
    const container = document.getElementById('toastContainer');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = `flex items-center gap-3 px-5 py-3.5 rounded-2xl border shadow-2xl backdrop-blur-xl pointer-events-auto transition-none ${
        type === 'success' 
            ? 'bg-[#0B172A] text-white border-amber-400/40 shadow-black/30' 
            : 'bg-rose-950 text-white border-rose-500/40 shadow-rose-950/40'
    }`;
    
    const iconSvg = type === 'success' 
        ? `<div class="w-6 h-6 rounded-full bg-amber-400/20 text-amber-300 flex items-center justify-center shrink-0 text-xs font-bold">✓</div>`
        : `<div class="w-6 h-6 rounded-full bg-rose-500/30 text-rose-300 flex items-center justify-center shrink-0 text-xs font-bold">✕</div>`;

    toast.innerHTML = `
        ${iconSvg}
        <div class="text-sm font-medium pr-2 text-white">${message}</div>
        <button class="ml-auto text-slate-400 hover:text-white text-xs pl-2 transition-colors" onclick="this.parentElement.remove()">✕</button>
    `;

    container.appendChild(toast);

    // GSAP elastic spring entrance
    gsap.fromTo(toast, 
        { opacity: 0, y: 30, scale: 0.8 }, 
        { opacity: 1, y: 0, scale: 1, duration: 0.45, ease: 'back.out(1.7)' }
    );

    // Auto dismiss after 3.5s with smooth slide up
    setTimeout(() => {
        gsap.to(toast, {
            opacity: 0,
            y: -15,
            scale: 0.9,
            duration: 0.35,
            ease: 'power2.in',
            onComplete: () => {
                toast.remove();
            }
        });
    }, 3500);
};

// Smooth GSAP FAQ Toggle
window.toggleFaq = function(index) {
    const content = document.getElementById(`faqContent${index}`);
    const icon = document.getElementById(`faqIcon${index}`);
    if (!content || !icon) return;

    const isHidden = content.classList.contains('hidden');
    if (isHidden) {
        content.classList.remove('hidden');
        gsap.fromTo(content,
            { height: 0, opacity: 0, paddingTop: 0 },
            { height: 'auto', opacity: 1, paddingTop: '0.75rem', duration: 0.4, ease: 'power2.out' }
        );
        gsap.to(icon, { rotate: 45, duration: 0.3, ease: 'power2.out' });
    } else {
        gsap.to(content, {
            height: 0,
            opacity: 0,
            paddingTop: 0,
            duration: 0.3,
            ease: 'power2.in',
            onComplete: () => {
                content.classList.add('hidden');
            }
        });
        gsap.to(icon, { rotate: 0, duration: 0.3, ease: 'power2.out' });
    }
};

// Fleet Category Filter with GSAP
window.filterCabs = function(category) {
    const buttons = {
        all: document.getElementById('btnFilterAll'),
        sedan: document.getElementById('btnFilterSedan'),
        suv: document.getElementById('btnFilterSuv'),
        electric: document.getElementById('btnFilterElectric'),
        van: document.getElementById('btnFilterVan'),
    };

    Object.keys(buttons).forEach(k => {
        if (buttons[k]) {
            buttons[k].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white border border-[#C7E0FA] text-[#1E3A5F] hover:bg-[#E1EFFD]';
        }
    });

    if (buttons[category]) {
        buttons[category].className = 'px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#004E92] text-white shadow-md';
        gsap.fromTo(buttons[category], { scale: 0.9 }, { scale: 1, duration: 0.35, ease: 'back.out(2)' });
    }

    const cards = document.querySelectorAll('.cab-card');
    const visibleCards = [];
    cards.forEach(c => {
        if (category === 'all' || c.classList.contains(category)) {
            c.style.display = 'flex';
            visibleCards.push(c);
        } else {
            c.style.display = 'none';
        }
    });

    if (visibleCards.length > 0) {
        gsap.fromTo(visibleCards, 
            { opacity: 0, scale: 0.92, y: 25 },
            { opacity: 1, scale: 1, y: 0, duration: 0.45, stagger: 0.06, ease: 'power2.out' }
        );
    }

    if (window.showToast) {
        window.showToast(`Showing: ${category.toUpperCase()}`);
    }
};

// Fleet Modal Details with GSAP
window.openDetailsModal = function(type) {
    const modal = document.getElementById('detailsModal');
    if (!modal) return;

    const title = document.getElementById('modalTitle');
    const img = document.getElementById('modalImage');
    const pax = document.getElementById('modalPax');
    const bags = document.getElementById('modalBags');
    const fare = document.getElementById('modalFare');
    const link = document.getElementById('modalBookLink');

    const cabSpecs = {
        sedan: {
            title: 'Maruti Suzuki Dzire',
            img: '/images/car_dzire.jpg',
            pax: '4 Persons',
            bags: '3 Bags',
            fare: '₹899 Base (₹11/KM)'
        },
        suv: {
            title: 'Mahindra Scorpio Classic',
            img: '/images/car_scorpio.jpg',
            pax: '7 Persons',
            bags: '5 Bags',
            fare: '₹1,499 Base (₹16/KM)'
        },
        van: {
            title: 'Maruti Suzuki Brezza',
            img: '/images/car_brezza.jpg',
            pax: '5 Persons',
            bags: '4 Bags',
            fare: '₹1,199 Base (₹13/KM)'
        },
        innova: {
            title: 'Mahindra Thar 4x4 VIP',
            img: '/images/car_thar.jpg',
            pax: '4 Persons',
            bags: '3 Bags',
            fare: '₹1,699 Base (₹18/KM)'
        },
        electric: {
            title: 'Maruti Swift Special',
            img: '/images/car_swift_red.jpg',
            pax: '4 Persons',
            bags: '2 Bags',
            fare: '₹799 Base (₹10/KM)'
        },
        traveler: {
            title: 'Patna Transport Group Fleet',
            img: '/images/patna_transport_fleet.jpg',
            pax: '2 to 20 Cabs',
            bags: '50+ Bags',
            fare: 'Custom Group Tour'
        }
    };

    const details = cabSpecs[type] || cabSpecs.sedan;
    if (title) title.innerText = details.title;
    if (img) img.src = details.img;
    if (pax) pax.innerText = details.pax;
    if (bags) bags.innerText = details.bags;
    if (fare) fare.innerText = details.fare;
    if (link) link.href = 'tel:8877177161';

    modal.classList.remove('hidden');
    const modalContent = modal.querySelector('div');
    gsap.fromTo(modal, { opacity: 0 }, { opacity: 1, duration: 0.25 });
    if (modalContent) {
        gsap.fromTo(modalContent, 
            { scale: 0.85, opacity: 0, y: 25 },
            { scale: 1, opacity: 1, y: 0, duration: 0.4, ease: 'back.out(1.6)' }
        );
    }
};

window.closeDetailsModal = function() {
    const modal = document.getElementById('detailsModal');
    if (!modal) return;
    const modalContent = modal.querySelector('div');
    if (modalContent) {
        gsap.to(modalContent, { scale: 0.9, opacity: 0, duration: 0.2, ease: 'power2.in' });
    }
    gsap.to(modal, {
        opacity: 0,
        duration: 0.25,
        ease: 'power2.in',
        onComplete: () => {
            modal.classList.add('hidden');
        }
    });
};

// Main GSAP & ScrollTrigger Initialization
function initGSAP() {
    console.log('%c🚀 [GSAP + ScrollTrigger] Initialized successfully on Patna Transport', 'color: #0284c7; font-weight: bold; font-size: 13px;');

    // 1. Hardware-Accelerated Scroll Progress Bar (GSAP ScrollTrigger scrub)
    const progressBar = document.getElementById('scrollProgress');
    if (progressBar) {
        gsap.to(progressBar, {
            width: '100%',
            ease: 'none',
            scrollTrigger: {
                trigger: document.documentElement,
                start: 'top top',
                end: 'bottom bottom',
                scrub: 0.25
            }
        });
    }

    // 2. Floating Navbar Entrance & ScrollTrigger Pin / Morph
    const floatingNav = document.getElementById('floatingNav');
    const navContainer = document.getElementById('navContainer');
    const mobileMenu = document.getElementById('mobileMenu');

    if (floatingNav && navContainer) {
        // Dramatic smooth entrance from above
        gsap.fromTo(floatingNav, 
            { y: -35, opacity: 0, scale: 0.96 },
            { y: 0, opacity: 1, scale: 1, duration: 0.8, ease: 'power3.out', delay: 0.1 }
        );

        // Staggered reveal of nav links & buttons
        const navElements = floatingNav.querySelectorAll('.nav-link-underline, .btn-blue, .btn-gold');
        if (navElements.length > 0) {
            gsap.fromTo(navElements,
                { opacity: 0, y: -10 },
                { opacity: 1, y: 0, duration: 0.5, stagger: 0.05, ease: 'back.out(1.5)', delay: 0.3 }
            );
        }

        // Airplane icon gentle interactive hover in logo
        const brandLogo = floatingNav.querySelector('a.group');
        const planeSvg = brandLogo?.querySelector('svg');
        if (brandLogo && planeSvg) {
            brandLogo.addEventListener('mouseenter', () => {
                gsap.fromTo(planeSvg,
                    { rotate: -45, scale: 1 },
                    { rotate: -15, scale: 1.25, duration: 0.35, yoyo: true, repeat: 1, ease: 'back.out(2)' }
                );
            });
        }

        // Smooth navbar morphing on scroll
        ScrollTrigger.create({
            start: 'top -35px',
            onUpdate: (self) => {
                if (self.progress > 0) {
                    gsap.to(navContainer, { y: -24, duration: 0.3, ease: 'power2.out', overwrite: 'auto' });
                    gsap.to(floatingNav, {
                        scale: 0.985,
                        paddingTop: '9px',
                        paddingBottom: '9px',
                        boxShadow: '0 25px 50px -12px rgba(2, 44, 90, 0.22), 0 0 0 1px rgba(199, 224, 250, 0.5)',
                        duration: 0.3,
                        overwrite: 'auto'
                    });
                    if (mobileMenu) {
                        gsap.to(mobileMenu, { y: -24, duration: 0.3, overwrite: 'auto' });
                    }
                } else {
                    gsap.to(navContainer, { y: 0, duration: 0.3, ease: 'power2.out', overwrite: 'auto' });
                    gsap.to(floatingNav, {
                        scale: 1,
                        paddingTop: '12px',
                        paddingBottom: '12px',
                        boxShadow: '0 20px 30px -10px rgba(2, 44, 90, 0.12), 0 0 0 1px rgba(255, 255, 255, 0.6)',
                        duration: 0.3,
                        overwrite: 'auto'
                    });
                    if (mobileMenu) {
                        gsap.to(mobileMenu, { y: 0, duration: 0.3, overwrite: 'auto' });
                    }
                }
            }
        });
    }

    // 3. Mobile Menu Toggle with GSAP
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    if (mobileMenuBtn && mobileMenu) {
        let isMenuOpen = false;
        mobileMenuBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                gsap.fromTo(mobileMenu,
                    { opacity: 0, y: -20, scale: 0.94 },
                    { opacity: 1, y: 0, scale: 1, duration: 0.35, ease: 'back.out(1.5)' }
                );
                const menuLinks = mobileMenu.querySelectorAll('a');
                if (menuLinks.length > 0) {
                    gsap.fromTo(menuLinks,
                        { opacity: 0, x: -15 },
                        { opacity: 1, x: 0, duration: 0.3, stagger: 0.05, ease: 'power2.out', delay: 0.08 }
                    );
                }
            } else {
                gsap.to(mobileMenu, {
                    opacity: 0,
                    y: -12,
                    scale: 0.95,
                    duration: 0.25,
                    ease: 'power2.in',
                    onComplete: () => {
                        mobileMenu.classList.add('hidden');
                    }
                });
            }
        });
    }

    // 4. Hero Parallax & Master Timeline Entrance
    const heroSection = document.querySelector('section');
    if (heroSection) {
        // Hero Background Subtle Parallax (GSAP ScrollTrigger scrub)
        const heroBgImg = heroSection.querySelector('img');
        if (heroBgImg) {
            gsap.to(heroBgImg, {
                yPercent: 18,
                scale: 1.05,
                ease: 'none',
                scrollTrigger: {
                    trigger: heroSection,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: true
                }
            });
        }

        // Ambient Background Glow Pulses (GSAP Continuous Keyframe Loop)
        const ambientGlows = document.querySelectorAll('.motion-glow');
        ambientGlows.forEach((glow, idx) => {
            gsap.to(glow, {
                scale: 1.3,
                opacity: 0.35,
                duration: 4.5 + idx * 1.5,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut'
            });
        });

        // Hero Master Entrance Timeline
        const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        // Tag Pill Badge with continuous gentle levitation
        const heroPill = heroSection.querySelector('.motion-float-badge') || heroSection.querySelector('.inline-flex');
        if (heroPill) {
            heroTl.fromTo(heroPill,
                { opacity: 0, y: -25, scale: 0.85 },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.65,
                    ease: 'back.out(1.7)',
                    onComplete: () => {
                        gsap.to(heroPill, {
                            y: -6,
                            duration: 2.2,
                            repeat: -1,
                            yoyo: true,
                            ease: 'sine.inOut'
                        });
                    }
                },
                0.05
            );
        }

        // Big Headline
        const heroTitle = heroSection.querySelector('h1');
        if (heroTitle) {
            heroTl.fromTo(heroTitle,
                { opacity: 0, y: 40 },
                { opacity: 1, y: 0, duration: 0.8 },
                0.2
            );
        }

        // Subtitle
        const heroSubtitle = heroSection.querySelector('p');
        if (heroSubtitle) {
            heroTl.fromTo(heroSubtitle,
                { opacity: 0, y: 25 },
                { opacity: 1, y: 0, duration: 0.7 },
                0.35
            );
        }

        // Action CTA buttons
        const heroButtons = heroSection.querySelectorAll('.flex.flex-wrap.items-center.justify-center a, .flex.flex-wrap.items-center.justify-center button');
        if (heroButtons.length > 0) {
            heroTl.fromTo(heroButtons,
                { opacity: 0, y: 25, scale: 0.9 },
                { opacity: 1, y: 0, scale: 1, duration: 0.55, stagger: 0.08, ease: 'back.out(1.5)' },
                0.45
            );
        }

        // 3 Highlights Cards Grid
        const heroCardsContainer = heroSection.querySelector('.grid');
        if (heroCardsContainer && heroCardsContainer.children.length > 0) {
            heroTl.fromTo(heroCardsContainer.children,
                { opacity: 0, y: 35, scale: 0.92 },
                { opacity: 1, y: 0, scale: 1, duration: 0.65, stagger: 0.1, ease: 'back.out(1.4)' },
                0.55
            );
        }

        // Social Proof Bar
        const socialProof = heroSection.querySelector('.flex.flex-wrap.items-center.justify-center.gap-6');
        if (socialProof) {
            heroTl.fromTo(socialProof,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.6 },
                0.7
            );
        }
    }

    // 5. ScrollTrigger Entrances for All Subsequent Sections
    document.querySelectorAll('section').forEach((section, index) => {
        if (index === 0) return; // Skip hero section (already handled)

        // Title and Section Header
        const headingBlock = section.querySelector('.text-center, .sm\\:items-end');
        if (headingBlock) {
            gsap.fromTo(headingBlock,
                { opacity: 0, y: 35 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.75,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: headingBlock,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // Grids (Services cards, Cab cards, Testimonial cards, Safety pillars)
        const grid = section.querySelector('.grid');
        if (grid && grid.children.length > 0) {
            gsap.fromTo(Array.from(grid.children),
                { opacity: 0, y: 40, scale: 0.94 },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.65,
                    stagger: 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: grid,
                        start: 'top 82%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // CTA Banner Box
        const ctaBox = section.querySelector('.bg-gradient-to-r');
        if (ctaBox) {
            gsap.fromTo(ctaBox,
                { opacity: 0, scale: 0.94, y: 30 },
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: ctaBox,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // FAQ Items Stagger
        const faqContainer = section.querySelector('.space-y-4');
        if (faqContainer && section.querySelector('#faqContent1')) {
            gsap.fromTo(Array.from(faqContainer.children),
                { opacity: 0, y: 25 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.55,
                    stagger: 0.08,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: faqContainer,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // Comparison Table / Cards
        const comparisonTable = section.querySelector('table');
        if (comparisonTable) {
            const wrapper = comparisonTable.closest('.rounded-\\[2rem\\]') || comparisonTable;
            gsap.fromTo(wrapper,
                { opacity: 0, y: 35, scale: 0.96 },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.7,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: wrapper,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }
    });

    // 6. Interactive Button Spring Micro-Interactions
    document.querySelectorAll('.btn-gold, .btn-blue, .btn-outline-blue, .btn-primary').forEach((btn) => {
        btn.addEventListener('mouseenter', () => {
            gsap.to(btn, { scale: 1.04, duration: 0.25, ease: 'power2.out', overwrite: 'auto' });
        });
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, { scale: 1, duration: 0.25, ease: 'power2.out', overwrite: 'auto' });
        });
        btn.addEventListener('mousedown', () => {
            gsap.to(btn, { scale: 0.95, duration: 0.1, overwrite: 'auto' });
        });
        btn.addEventListener('mouseup', () => {
            gsap.to(btn, { scale: 1.04, duration: 0.15, overwrite: 'auto' });
        });
    });

    // 7. Interactive Vehicle Cards & Highlights Spring Micro-Interactions
    document.querySelectorAll('.card-clean, .cab-card').forEach((card) => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, { y: -8, scale: 1.015, duration: 0.35, ease: 'power2.out', overwrite: 'auto' });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, { y: 0, scale: 1, duration: 0.35, ease: 'power2.out', overwrite: 'auto' });
        });
    });
}

// Guarantee execution whether DOM is loading or already loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initGSAP);
} else {
    initGSAP();
}
