<!-- Contact -->
<section id="contact" class="tm-section-pad-top tm-parallax-2">
    
    <div class="container tm-container-contact">
      
      <div class="row">
          
          <div class="text-center col-12">
              <h2 class="tm-section-title mb-4">Contact Us</h2>
              <p class="mb-5">
                Proin enim orci, tincidunt quis suscipit in, placerat nec est. Vestibulum posuere faucibus posuere. Quisque aliquam velit eget leo blandit egestas. Nulla id posuere felis, quis tristique nulla.
              </p><br>
          </div>
          
          <div class="col-sm-12 col-md-6">
            <form action="" method="get">
              <input id="name" name="name" type="text" placeholder="Your Name" class="tm-input" required />
              <input id="email" name="email" type="email" placeholder="Your Email" class="tm-input" required />
              <textarea id="message" name="message" rows="8" placeholder="Message" class="tm-input" required></textarea>
              <button type="submit" class="btn tm-btn-submit">Submit</button>
            </form>
          </div>
          
          <div class="col-sm-12 col-md-6">

              <div class="contact-item">
                <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link">
                    <i class="far fa-2x fa-comment mr-4"></i>
                    <span class="mb-0">Chat Online</span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                    <i class="far fa-2x fa-envelope mr-4"></i>
                    <span class="mb-0">mail@company.com</span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="https://www.google.com/maps" class="item-link">
                    <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                    <span class="mb-0">Our Location</span>
                </a>              
              </div>
              
              <div class="contact-item">
                <a rel="nofollow" href="tel:0100200340" class="item-link">
                    <i class="fas fa-2x fa-phone-square mr-4"></i>
                    <span class="mb-0">255-662-5566</span>
                </a>              
              </div>
              
              <div class="contact-item">&nbsp;</div>
          
          </div>
          
          
      </div><!-- row ending -->
      
    </div>

        <footer class="text-center small tm-footer">
        <p class="mb-0">
        Copyright &copy; 2020 Company Name 
        
        . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by TOOPLATE</a></p>
      </footer>

  </section>
  
  <script src="js/jquery-1.9.1.min.js"></script>     
  <script src="slick/slick.min.js"></script>
  <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/jquery.singlePageNav.min.js"></script>     
  <script src="js/bootstrap.min.js"></script> 
  <script>

    function getOffSet(){
      var _offset = 450;
      var windowHeight = window.innerHeight;

      if(windowHeight > 500) {
        _offset = 400;
      } 
      if(windowHeight > 680) {
        _offset = 300
      }
      if(windowHeight > 830) {
        _offset = 210;
      }

      return _offset;
    }

    function setParallaxPosition($doc, multiplier, $object){
      var offset = getOffSet();
      var from_top = $doc.scrollTop(),
        bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
      $object.css({"background-position" : bg_css });
    }

    // Parallax function
    // Adapted based on https://codepen.io/roborich/pen/wpAsm        
    var background_image_parallax = function($object, multiplier, forceSet){
      multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
      multiplier = 1 - multiplier;
      var $doc = $(document);
      // $object.css({"background-attatchment" : "fixed"});

      if(forceSet) {
        setParallaxPosition($doc, multiplier, $object);
      } else {
        $(window).scroll(function(){          
          setParallaxPosition($doc, multiplier, $object);
        });
      }
    };

    var background_image_parallax_2 = function($object, multiplier){
      multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
      multiplier = 1 - multiplier;
      var $doc = $(document);
      $object.css({"background-attachment" : "fixed"});
      
      $(window).scroll(function(){
        if($(window).width() > 768) {
          var firstTop = $object.offset().top,
              pos = $(window).scrollTop(),
              yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

          var bg_css = 'center ' + yPos + 'px';

          $object.css({"background-position" : bg_css });
        } else {
          $object.css({"background-position" : "center" });
        }
      });
    };
    
    $(function(){
      // Hero Section - Background Parallax
      background_image_parallax($(".tm-parallax"), 0.30, false);
      background_image_parallax_2($("#contact"), 0.80);   
      background_image_parallax_2($("#testimonials"), 0.80);   
      
      // Handle window resize
      window.addEventListener('resize', function(){
        background_image_parallax($(".tm-parallax"), 0.30, true);
      }, true);

      // Detect window scroll and update navbar
      $(window).scroll(function(e){          
        if($(document).scrollTop() > 120) {
          $('.tm-navbar').addClass("scroll");
        } else {
          $('.tm-navbar').removeClass("scroll");
        }
      });
      
      // Close mobile menu after click 
      $('#tmNav a').on('click', function(){
        $('.navbar-collapse').removeClass('show'); 
      })

      // Scroll to corresponding section with animation
      $('#tmNav').singlePageNav({
        'easing': 'easeInOutExpo',
        'speed': 600
      });        
      
      // Add smooth scrolling to all links
      // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 600, 'easeInOutExpo', function(){
            window.location.hash = hash;
          });
        } // End if
      });

      // Pop up
      $('.tm-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: { enabled: true }
      });

      $('.tm-testimonials-carousel').slick({
        dots: true,
        prevArrow: false,
        nextArrow: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2
            }
          }, 
          {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }                 
          }
        ]
      });

      // Gallery
      $('.tm-gallery').slick({
        dots: true,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
      });
    });
  </script>
</body>
</html>