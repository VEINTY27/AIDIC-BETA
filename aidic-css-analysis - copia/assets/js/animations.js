document.addEventListener('DOMContentLoaded', function() {

  const isMobile = window.matchMedia('(max-width: 768px)').matches;
  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (prefersReduced) return;

  document.querySelectorAll('.service-hover, .product-hover, .project-hover').forEach(card => {
    card.addEventListener('click', function(e) {
      if (isMobile) return;

      const ripple = document.createElement('div');
      ripple.style.position = 'absolute';
      ripple.style.borderRadius = '50%';
      ripple.style.background = 'rgba(255,255,255,0.5)';
      ripple.style.width = '20px';
      ripple.style.height = '20px';
      ripple.style.pointerEvents = 'none';
      ripple.style.animation = 'rippleEffect 0.6s ease-out forwards';
      
      const rect = this.getBoundingClientRect();
      const parentRect = this.parentElement.getBoundingClientRect();
      
      ripple.style.left = (e.clientX - parentRect.left) + 'px';
      ripple.style.top = (e.clientY - parentRect.top) + 'px';
      ripple.style.transform = 'translate(-50%, -50%)';
      
      if (this.style.position === 'static') {
        this.style.position = 'relative';
      }
      
      this.appendChild(ripple);
      
      setTimeout(() => ripple.remove(), 600);
    });

    card.style.cursor = 'pointer';
  });

  document.querySelectorAll('.person-hover').forEach(card => {
    if (!isMobile) {
      card.addEventListener('mouseenter', function() {
        const overlay = this.querySelector('.person-card__overlay');
        if (overlay) {
          overlay.style.animation = 'none';
          setTimeout(() => {
            overlay.style.animation = '';
          }, 50);
        }
      });

      card.addEventListener('mouseleave', function() {
        const overlay = this.querySelector('.person-card__overlay');
        if (overlay) {
          overlay.style.animation = 'none';
        }
      });
    }
  });

  if (!isMobile) {
    const style = document.createElement('style');
    style.textContent = `
      @keyframes rippleEffect {
        from {
          width: 20px;
          height: 20px;
          opacity: 1;
        }
        to {
          width: 500px;
          height: 500px;
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);
  }

});