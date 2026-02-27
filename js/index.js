// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    offset: 100
});

// Counter animation
const countEl = document.querySelector('.who-count');
const target = +countEl.getAttribute('data-count');
let current = 0;

const updateCount = () => {
    const increment = Math.ceil(target / 60);
    current += increment;
    if (current < target) {
        countEl.textContent = current;
        requestAnimationFrame(updateCount);
    } else {
        countEl.textContent = target + '+';
    }
};

updateCount();

// Enhanced faculty card animations
document.addEventListener('DOMContentLoaded', function() {
    const facultyCard = document.querySelector('.faculty-card');

    if (facultyCard) {
        // Add entrance animation
        facultyCard.style.opacity = '0';
        facultyCard.style.transform = 'translateY(50px)';

        setTimeout(() => {
            facultyCard.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            facultyCard.style.opacity = '1';
            facultyCard.style.transform = 'translateY(0)';
        }, 500);

        // Enhanced hover effects
        facultyCard.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05) translateY(-10px)';
            this.style.boxShadow = '0 20px 40px rgba(255, 215, 0, 0.3)';
        });

        facultyCard.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) translateY(0)';
            this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.2)';
        });

        // Social link animations - Fixed to not interfere with link functionality
        const socialLinks = facultyCard.querySelectorAll('.social-link');
        socialLinks.forEach((link, index) => {
            // Ensure link functionality is preserved
            link.addEventListener('click', function(e) {
                // Allow the link to work normally
                e.stopPropagation();
            });

            link.addEventListener('mouseenter', function(e) {
                // Don't prevent default to allow link functionality
                this.style.transform = 'scale(1.2) rotate(5deg)';
                this.style.background = '#FFD700';
                this.style.color = '#000';
            });

            link.addEventListener('mouseleave', function(e) {
                // Don't prevent default to allow link functionality
                this.style.transform = 'scale(1) rotate(0deg)';
                this.style.background = '#000';
                this.style.color = '#FFD700';
            });

            // Stagger animation on hover
            link.style.transitionDelay = `${index * 0.1}s`;
        });

        // Explicit click handlers for email and scholar links
        const emailLink = facultyCard.querySelector('.email-link');
        const scholarLink = facultyCard.querySelector('.scholar-link');

        if (emailLink) {
            emailLink.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Email link clicked - opening mailto...');
                window.open('mailto:tusharmc@iiserbpr.ac.in', '_blank');
            });
        }

        if (scholarLink) {
            scholarLink.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Scholar link clicked - opening Google Scholar...');
                window.open('https://scholar.google.com/citations?user=2cDSW7YAAAAJ&hl=en', '_blank');
            });
        }

        // Test function to verify links are working
        console.log('Faculty card enhanced with animations and fixed links!');
        console.log('Email link:', emailLink ? 'Found' : 'Not found');
        console.log('Scholar link:', scholarLink ? 'Found' : 'Not found');
    }
});