// Simple fade-in animation for all elements
document.addEventListener('DOMContentLoaded', function() {
    // This is handled by CSS animations
});

// Auth state management (placeholder for Firebase/SQL integration)
let isLoggedIn = false; // This will be set by your auth system

function updateAuthUI() {
    const authButtons = document.querySelector('.auth-buttons');
    const profileDropdown = document.querySelector('.profile-dropdown');
    
    if (isLoggedIn) {
        authButtons.style.display = 'none';
        profileDropdown.style.display = 'block';
    } else {
        authButtons.style.display = 'flex';
        profileDropdown.style.display = 'none';
    }
}

// Example login function (connect to your auth system)
function login() {
    // Your authentication logic here
    isLoggedIn = true;
    updateAuthUI();
}

// Example logout function
function logout() {
    isLoggedIn = false;
    updateAuthUI();
}

// Button event listeners
document.querySelector('.btn-login')?.addEventListener('click', login);
document.querySelector('.btn-register')?.addEventListener('click', function() {
    // Your registration logic
});

// Initialize
updateAuthUI();

// ===== STATS SECTION JS =====
// Counter Animation (Optional)
document.addEventListener('DOMContentLoaded', function() {
  const animateCounters = () => {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    counters.forEach(counter => {
      const target = +counter.innerText.replace(/[^0-9]/g, '');
      const suffix = counter.innerText.replace(/[0-9+]/g, '');
      let count = 0;
      
      const updateCount = () => {
        const increment = target / speed;
        count = Math.min(count + increment, target);
        counter.innerText = Math.floor(count) + suffix;
        
        if (count < target) {
          requestAnimationFrame(updateCount);
        }
      };
      
      updateCount();
    });
  };

  // Initialize when section is in view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounters();
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  const statsSection = document.querySelector('.stats-section');
  if (statsSection) {
    observer.observe(statsSection);
  }
});


// ===== FEATURES SECTION JS =====
// Animation trigger when section comes into view
document.addEventListener('DOMContentLoaded', function() {
  const featureCards = document.querySelectorAll('.feature-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  featureCards.forEach(card => {
    card.style.animationPlayState = 'paused';
    observer.observe(card);
  });
});



// ===== FAQ SECTION JS =====
document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    
    question.addEventListener('click', () => {
      // Close all other items
      faqItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
          otherItem.classList.remove('active');
        }
      });
      
      // Toggle current item
      item.classList.toggle('active');
    });
  });
  
  // Animation when section comes into view
  const faqObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
        faqObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.faq-item').forEach(item => {
    item.style.animation = 'fadeInUp 0.5s ease-out forwards';
    item.style.animationPlayState = 'paused';
    faqObserver.observe(item);
  });
});


// ===== CTA SECTION JS =====
document.addEventListener('DOMContentLoaded', function() {
  const ctaButton = document.querySelector('.cta-button');
  
  // Button hover effect
  ctaButton.addEventListener('mouseenter', function() {
    this.style.animation = 'none';
    void this.offsetWidth; // Trigger reflow
    this.style.animation = 'pulse 1.5s infinite';
  });
  
  // Animation when section comes into view
  const ctaObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = 'translateY(0)';
        ctaObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  const ctaContent = document.querySelector('.cta-content');
  ctaContent.style.opacity = 0;
  ctaContent.style.transform = 'translateY(20px)';
  ctaContent.style.transition = 'all 0.8s ease-out';
  ctaObserver.observe(ctaContent);
});