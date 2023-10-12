document.addEventListener('DOMContentLoaded', function () {

 // Testimonial slider
 var testimonialSwiper = new Swiper('#testimonial-slider', {
    touchEventsTarget: 'wrapper',
    touchStartPreventDefault: false,
    touchStartForcePreventDefault: false,
    touchReleaseOnEdges: true,
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5000 // Auto-scroll after 5 seconds (5000 milliseconds)
    },

    speed: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });

  
   // Handle form submit
  const form = document.getElementById('mc-embedded-subscribe-form');
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      // Perform AJAX submission or let Mailchimp handle the submission
      
      // Redirect user
      window.location.href = 'https://bark-bites-7378.myshopify.com/a/subscriptions/checkout/46824550564119:1:689505468695?attributes=discount%3DFreepostage';
    });
  }

  // Get all anchor tags
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach(link => {
    link.addEventListener("click", function(event) {
      // Prevent default behavior
      event.preventDefault();

      // Get the target element's ID from the clicked link's href attribute
      const targetID = this.getAttribute("href").substring(1);

      // Get the target element
      const targetElement = document.getElementById(targetID);

      // Get the height of the header
      const header = document.querySelector("#top-bar");
      const headerHeight = header.offsetHeight;

      // Calculate the new scroll position
      const scrollToPosition = targetElement.offsetTop - headerHeight;

      // Scroll to the new position
      window.scrollTo({
        top: scrollToPosition,
        behavior: "smooth"
      });
    });
  });

}); // DOMContentLoaded end
