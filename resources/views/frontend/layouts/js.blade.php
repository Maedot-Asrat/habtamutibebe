<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>

  document.addEventListener('DOMContentLoaded', function() {
  var topBar = document.querySelector('.topbar');
  var lastScrollTop = 0;

  window.addEventListener('scroll', function() {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    console.log('Scroll Top:', st); 
    if (st > lastScrollTop) {
      console.log('Downscroll'); 
      topBar.classList.add('scrolled');
    } else {
      console.log('Upscroll'); 
      topBar.classList.remove('scrolled');
    }
    lastScrollTop = st <= 0 ? 0 : st; 
  }, false);
});


    window.addEventListener('scroll', function() {
      var navbar = document.querySelector('.navbar');
      
      if (window.scrollY > window.innerHeight - 30) {
        navbar.classList.add('scrolled');
      
      } else {
        navbar.classList.remove('scrolled');
      
      }
    });
  
    document.addEventListener('DOMContentLoaded', function() {
      var sections = document.querySelectorAll('section');
      var navLinks = document.querySelectorAll('.nav-link');
  
      window.addEventListener('scroll', function() {
        var current = '';
  
        sections.forEach(section => {
          const sectionTop = section.offsetTop;
          if (pageYOffset >= sectionTop - 30) {
            current = section.getAttribute('class').split(' ')[1];
          }
        });
  
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href').includes(current)) {
            link.classList.add('active');
          }
        });
      });
    });
    let currentIndex = 0;
   const banners = document.querySelectorAll('.banner-img');

   function changeImage(direction) {
     banners[currentIndex].classList.remove('active');
     currentIndex = (currentIndex + direction + banners.length) % banners.length;
     banners[currentIndex].classList.add('active');
     updateBannerText();
   }

   function updateBannerText() {
     const activeBanner = banners[currentIndex];
     const header = activeBanner.getAttribute('data-header');
     const description = activeBanner.getAttribute('data-description');
     document.getElementById('banner-header').textContent = header;
     document.getElementById('banner-description').textContent = description;
   }

   document.addEventListener('DOMContentLoaded', updateBannerText);

   $(document).ready(function() {
    $('.blog-container').click(function() {
      window.location = $(this).data('url');
    });
  });
  document.addEventListener('DOMContentLoaded', function () {
  const sections = document.querySelectorAll('.section');

  function checkVisibility() {
    const windowHeight = window.innerHeight;
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      if (rect.top <= windowHeight - 100) {
        section.classList.add('visible');
      }
    });
  }

  window.addEventListener('scroll', checkVisibility);
  checkVisibility(); 
});




document.addEventListener('DOMContentLoaded', function () {
    const englishSelect = document.getElementById('english-select');
    const amharicSelect = document.getElementById('amharic-select');
    const englishContent = document.querySelectorAll('.eng');
    const amharicContent = document.querySelectorAll('.amh');
    
    // Function to switch to English
    function switchToEnglish() {
        englishSelect.classList.add('active');
        amharicSelect.classList.remove('active');
        englishContent.forEach(el => el.style.display = 'block');
        amharicContent.forEach(el => el.style.display = 'none');
    }

    // Function to switch to Amharic
    function switchToAmharic() {
        englishSelect.classList.remove('active');
        amharicSelect.classList.add('active');
        englishContent.forEach(el => el.style.display = 'none');
        amharicContent.forEach(el => el.style.display = 'block');
    }

    // Event listeners for language selection
    englishSelect.addEventListener('click', switchToEnglish);
    amharicSelect.addEventListener('click', switchToAmharic);

    // Default to English on page load
    switchToEnglish();
});
 </script>