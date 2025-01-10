document.addEventListener('DOMContentLoaded', () => {
    initializeSlideshow(); // Initialize the slideshow
    initializeScrollAnimations(); // Initialize card animations
    initializeGalleryAnimations(); // Initialize gallery animations
});

/* -------------------- Slideshow Functionality -------------------- */

// Variables for the slideshow
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Initialize the slideshow
function initializeSlideshow() {
    if (slides.length > 0) {
        addSlideshowAnimations();
        startSlideshow();
    }
}

// Automatically transition between slides
function startSlideshow() {
    if (slides.length > 1) {
        const outgoingSlide = slides[slideIndex];
        slideIndex = (slideIndex + 1) % totalSlides; // Loop back to the first slide
        const incomingSlide = slides[slideIndex];

        animateSlideTransition(outgoingSlide, incomingSlide);

        // Schedule the next slide transition every 8 seconds
        setTimeout(startSlideshow, 8000);
    }
}

// Animate the transition between slides
function animateSlideTransition(outgoing, incoming) {
    outgoing.style.animation = "slide-out-left 1s forwards";
    incoming.style.display = "block";
    incoming.style.animation = "slide-in-right 1s forwards";

    // Hide the outgoing slide after animation completes
    setTimeout(() => {
        outgoing.style.display = "none";
    }, 1000); // Match animation duration
}

// Add CSS keyframes for slideshow animations
function addSlideshowAnimations() {
    if (!document.querySelector('#slideshow-animations')) { // Prevent duplicates
        const style = document.createElement('style');
        style.id = 'slideshow-animations';
        style.textContent = `
            @keyframes slide-in-right {
                from { transform: translateX(100%); }
                to { transform: translateX(0); }
            }
            @keyframes slide-out-left {
                from { transform: translateX(0); }
                to { transform: translateX(-100%); }
            }
        `;
        document.head.appendChild(style);
    }
}

/* -------------------- Scroll Animations for Cards -------------------- */

// Initialize scroll-triggered animations for cards
function initializeScrollAnimations() {
    const cards = document.querySelectorAll('.card');
    if (cards.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active'); // Trigger the animation
                }
            });
        }, {
            threshold: 0.3 // Trigger when 30% of the card is visible
        });

        // Observe each card
        cards.forEach(card => observer.observe(card));
    }
}

/* -------------------- Gallery Animations -------------------- */

// Initialize gallery animations
function initializeGalleryAnimations() {
    const galleryItems = document.querySelectorAll('.gallery div');
    if (galleryItems.length > 0) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // Add the 'active' class with a staggered delay
                    setTimeout(() => {
                        entry.target.classList.add('active');
                    }, index * 300); // Delay each item's animation by 300ms
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the element is visible
        });

        // Observe each gallery item
        galleryItems.forEach(item => observer.observe(item));
    }
}
