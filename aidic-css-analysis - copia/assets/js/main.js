document.addEventListener('DOMContentLoaded', function() {

  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isMobile = window.matchMedia('(max-width: 768px)').matches;
  
  const splash = document.querySelector('[data-intro-splash]');
  const splashLogo = splash?.querySelector('.intro-splash__logo');
  const siteLogo = document.getElementById('siteLogo');

  const hideSplash = () => {
    if (!splash) return;
    splash.classList.add('is-hidden');
    setTimeout(() => splash.remove(), 280);
  };

  const waitImg = (img) => {
    if (!img) return Promise.resolve();
    if (img.complete && img.naturalWidth > 0) return Promise.resolve();
    return new Promise((resolve) => {
      img.addEventListener('load', resolve, { once: true });
      img.addEventListener('error', resolve, { once: true });
    });
  };

  if (splash && splashLogo && siteLogo) {
    if (prefersReduced) {
      hideSplash();
    } else {
      Promise.all([waitImg(splashLogo), waitImg(siteLogo)]).then(() => {
        const flying = splashLogo.cloneNode(true);
        flying.removeAttribute('width');
        flying.removeAttribute('height');
        flying.style.position = 'fixed';
        flying.style.left = '50%';
        flying.style.top = '35%';
        flying.style.transform = 'translate(-50%, -50%) scale(1)';
        flying.style.width = 'min(640px, 86vw)';
        flying.style.height = 'auto';
        flying.style.zIndex = '2001';
        flying.style.pointerEvents = 'none';
        flying.style.filter = 'blur(18px)';
        flying.style.opacity = '0';
        flying.style.willChange = 'filter, transform';

        splash.innerHTML = '';
        splash.appendChild(flying);

        const animation1 = flying.animate(
          [
            { opacity: 0, filter: 'blur(18px)', transform: 'translate(-50%, -50%) scale(1.06)' },
            { opacity: 1, filter: 'blur(0px)', transform: 'translate(-50%, -50%) scale(1)' }
          ],
          { duration: 520, easing: 'ease-out', fill: 'forwards' }
        );

        setTimeout(() => {
          const end = siteLogo.getBoundingClientRect();
          const start = flying.getBoundingClientRect();

          if (start.width <= 0 || start.height <= 0 || end.width <= 0 || end.height <= 0) {
            hideSplash();
            return;
          }

          const dx = (end.left + end.width / 2) - (start.left + start.width / 2);
          const dy = (end.top + end.height / 2) - (start.top + start.height / 2);
          const sx = end.width / start.width;
          const sy = end.height / start.height;

          const animation2 = flying.animate(
            [
              { transform: 'translate(-50%, -50%) scale(1)', opacity: 1 },
              { transform: `translate(calc(-50% + ${dx}px), calc(-50% + ${dy}px)) scale(${sx}, ${sy})`, opacity: 0.96 }
            ],
            { duration: 720, easing: 'cubic-bezier(0.22, 1, 0.36, 1)', fill: 'forwards' }
          );

          animation2.onfinish = () => hideSplash();
        }, 2300);

        setTimeout(() => hideSplash(), 4200);
      });
    }
  }

  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains('content-card') || 
            entry.target.classList.contains('info-card') ||
            entry.target.classList.contains('person-card') ||
            entry.target.classList.contains('tile-card') ||
     entry.target.classList.contains('product-card') ||
            entry.target.classList.contains('project-card')) {
          
          entry.target.classList.add('animate-fade-up');
          entry.target.style.willChange = 'opacity, transform';
          
          setTimeout(() => {
            entry.target.style.willChange = 'auto';
          }, 500);
        }
        
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll(
    '.content-card, .info-card, .person-card, .tile-card, .product-card, .project-card'
  ).forEach(card => {
    observer.observe(card);
  });

  class HeroSlider {
    constructor() {
      this.viewport = document.querySelector('[data-slider]');
      this.track = document.querySelector('[data-slider-track]');
      this.slides = document.querySelectorAll('[data-slide]');
      this.prevBtn = document.querySelector('[data-slider-prev]');
      this.nextBtn = document.querySelector('[data-slider-next]');
      this.currentIndex = 0;
      this.autoPlayInterval = null;
      this.isAnimating = false;
      this.touchStartX = 0;
      this.touchEndX = 0;

      this.init();
    }

    init() {
      this.prevBtn?.addEventListener('click', (e) => {
        e.preventDefault();
        this.prev();
      });
      this.nextBtn?.addEventListener('click', (e) => {
        e.preventDefault();
        this.next();
      });
      this.viewport?.addEventListener('mouseenter', () => this.stopAutoPlay());
      this.viewport?.addEventListener('mouseleave', () => this.startAutoPlay());
      
      this.viewport?.addEventListener('touchstart', (e) => this.handleTouchStart(e), { passive: true });
      this.viewport?.addEventListener('touchend', (e) => this.handleTouchEnd(e), { passive: true });
      
      this.startAutoPlay();
      this.createDots();
      this.updateSlider();
    }

    handleTouchStart(e) {
      this.touchStartX = e.changedTouches[0].screenX;
    }

    handleTouchEnd(e) {
      this.touchEndX = e.changedTouches[0].screenX;
      this.handleSwipe();
    }

    handleSwipe() {
      const diff = this.touchStartX - this.touchEndX;
      if (Math.abs(diff) > 50) {
        if (diff > 0) {
          this.next();
        } else {
          this.prev();
        }
      }
    }

    createDots() {
      const dotsContainer = document.createElement('div');
      dotsContainer.className = 'hero-slider__dots';
      
      this.slides.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.className = `hero-slider__dot ${index === 0 ? 'is-active' : ''}`;
        dot.setAttribute('type', 'button');
        dot.setAttribute('aria-label', `Slide ${index + 1}`);
        dot.addEventListener('click', () => {
          this.stopAutoPlay();
          this.goTo(index);
          this.startAutoPlay();
        });
        dotsContainer.appendChild(dot);
      });
      
      this.viewport?.appendChild(dotsContainer);
    }

    next() {
      if (this.isAnimating) return;
      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
      this.updateSlider();
    }

    prev() {
      if (this.isAnimating) return;
      this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
      this.updateSlider();
    }

    goTo(index) {
      if (this.isAnimating) return;
      this.currentIndex = index;
      this.updateSlider();
    }

    updateSlider() {
      this.isAnimating = true;

      this.slides.forEach(slide => {
        slide.classList.remove('is-active');
        const content = slide.querySelector('.hero-slide__content');
        if (content) {
          content.style.animation = 'none';
        }
      });
      document.querySelectorAll('.hero-slider__dot').forEach(dot => dot.classList.remove('is-active'));

      const activeSlide = this.slides[this.currentIndex];
      activeSlide.classList.add('is-active');
      document.querySelectorAll('.hero-slider__dot')[this.currentIndex]?.classList.add('is-active');

      const contentElements = activeSlide.querySelectorAll('.hero-slide__kicker, .hero-slide__title, .hero-slide__text, .hero-slide__content .d-flex');
      contentElements.forEach((el, idx) => {
        if (!prefersReduced) {
          el.style.animation = `fadeInUp 500ms ${250 + idx * 100}ms ease-out forwards`;
          el.style.opacity = '0';
        }
      });

      if (this.track) {
        this.track.style.transform = `translateX(${-this.currentIndex * 100}%)`;
        if (!prefersReduced) {
          this.track.style.transition = 'transform 600ms cubic-bezier(0.34, 1.56, 0.64, 1)';
        }
      }

      setTimeout(() => {
        this.isAnimating = false;
      }, 600);
    }

    startAutoPlay() {
      this.stopAutoPlay();
      this.autoPlayInterval = setInterval(() => this.next(), 6500);
    }

    stopAutoPlay() {
      clearInterval(this.autoPlayInterval);
      this.autoPlayInterval = null;
    }
  }

  new HeroSlider();

  const navLinks = Array.from(document.querySelectorAll('.navbar .nav-link'));
  const observed = navLinks
    .map((a) => {
      const href = a.getAttribute('href');
      if (!href || !href.startsWith('#')) return null;
      const el = document.querySelector(href);
      if (!el) return null;
      return { a, el };
    })
    .filter(Boolean);

  if (observed.length > 0) {
    const obs = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          const match = observed.find((x) => x.el === entry.target);
          if (!match) return;
          navLinks.forEach((l) => l.classList.remove('active'));
          match.a.classList.add('active');
        });
      },
      { rootMargin: '-45% 0px -50% 0px', threshold: 0.01 }
    );
    observed.forEach((x) => obs.observe(x.el));
  }

  const contactFloat = document.querySelector('.contact-float');
  const contactClose = document.querySelector('[data-contact-close]');
  const toggles = Array.from(document.querySelectorAll('[data-contact-toggle], a[href="#contacto"]'));

  const setContactOpen = (open) => {
    if (!contactFloat) return;
    if (open) contactFloat.classList.remove('hide');
    else contactFloat.classList.add('hide');
    toggles.forEach((t) => t.setAttribute('aria-expanded', open ? 'true' : 'false'));
  };

  toggles.forEach((t) => {
    t.addEventListener('click', (e) => {
      e.preventDefault();
      const isOpen = contactFloat && !contactFloat.classList.contains('hide');
      setContactOpen(!isOpen);
    });
  });

  contactClose?.addEventListener('click', () => setContactOpen(false));

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') setContactOpen(false);
  });

  document.addEventListener('click', (e) => {
    const target = e.target;
    if (!contactFloat || contactFloat.classList.contains('hide')) return;
    if (!(target instanceof Node)) return;
    const withinToggle = toggles.some((t) => t.contains(target));
    const withinPanel = contactFloat.contains(target);
    if (!withinToggle && !withinPanel) setContactOpen(false);
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      
      e.preventDefault();
      const target = document.querySelector(href);
      
      if (target) {
        target.scrollIntoView({
          behavior: prefersReduced ? 'auto' : 'smooth',
          block: 'start'
        });

        const navCollapse = document.querySelector('.navbar-collapse');
        if (navCollapse?.classList.contains('show')) {
          const toggler = document.querySelector('.navbar-toggler');
          toggler?.click();
        }
      }
    });
  });

  const updateViewport = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  };

  updateViewport();
  window.addEventListener('resize', updateViewport);

});