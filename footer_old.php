  <footer>
    <div class="flex flex-wrap shadow-crevidsShadowFooter">
      <div class="flex flex-wrap lg:w-1/2">
        <div class="lg:w-1/2 p-12 justify-center my-auto sm:mx-auto">
          <a href="">
            <img src="../Assets/staticLogo.png" class="w-1/3 mx-auto" alt="creavids-logo" />
            <p class="text-sm text-center p-4 text-creavidsDarkGray font-semibold">
              Creavids is a boutique video</br> production company.
            </p>
          </a>
          </a>
        </div>
        <div class="lg:w-1/2 p-8 lg:px-0 lg:py-8 justify-center sm:mx-auto">
          <p class="py-4 text-xl text-creavidsGreen font-semibold uppercase">
            Company
          </p>
          <div class="flex">
            <ul class="">
              <li class="my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/about"><img src="../Assets/footer/About.svg" class="mr-2 -ml-2 -mt-2 h-10" alt="about-icon"> About</a></li>
              <li class="my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/process"><img src="../Assets/footer/Process.svg" class="mr-4  -mt-1 -ml-2 w-8 h-10" alt="process-icon">Process</a></li>
              <li class="my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/explore"><img src="../Assets/footer/Explore.svg" class="mr-4  -mt-2 -ml-2 w-8 h-10" alt="explore-icon">Explore</a></li>
              <li class="my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/services"><img src="../Assets/footer/Service.svg" class="mr-4 -mt-2 -ml-3 w-8 h-10" alt="service-icon"> Service</a></li>
            </ul>
            <ul class="lg:ml-8">
              <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/partnership"><img src="../Assets/footer/Agencies.svg" class="mt-2 mr-4 w-6 h-6" alt="agencies-icon">Partnership</a></li>
              <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href=""><img src="../Assets/footer/Learn.svg" class="mt-2 mr-4 w-6 h-6" alt="learn-icon">Learn</a></li>
              <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/faq"><img src="../Assets/footer/FAQ.svg" class="mt-2 mr-4 w-6 h-6" alt="FAQ-icon">FAQ</a></li>
              <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/blog"><img src="../Assets/footer/Learn.svg" class="mt-2 mr-4 w-6 h-6" alt="blog-icon">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap lg:w-1/2 mx-auto">
        <div class="lg:w-1/3 p-8 lg:py-8 justify-center hidden lg:block">
          <ul>
            <p class="py-4 text-xl text-creavidsGreen uppercase font-semibold">
              INDUSTRIES
            </p>
            <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/healthcare">Healthcare</a></li>
            <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/manufacturing">Manufacturing</a></li>
            <li class="flex my-2 text-xl text-creavidsDarkGray font-semibold"><a class="flex" href="/blockchain">Blockchain</a></li>
          </ul>
        </div>
        <div class="lg:w-2/3 p-8">
          <p class="py-4 text-xl text-creavidsGreen uppercase font-semibold">
            Contact Us
          </p>
          <p class="text-xl tex text-creavidsDarkGray font-semibold">
            Address: Lane No. 5 Koregaon Park, Pune - 411001 <br>
            Email: info@creavids.co
          </p>
          <div class="pt-4 flex flex-wrap">
            <ul class="w-full flex flex-wrap text-creavidsDarkGray text-2xl mx-16 justify-between">
              <li class="">
                <a href="https://www.facebook.com/creavidsvideo/" target="_blank"><i class="fab fa-facebook-f"></a></i>
              </li>
              <li class="">
                <a href="https://twitter.com/creavids1" target="_blank"><i class="fab fa-twitter"></a></i>
              </li>
              <li class="">
                <a href="https://www.instagram.com/creavidsvideo/" target="_blank"><i class="fab fa-instagram"></a></i>
              </li>
              <li class="">
                <a href="https://www.youtube.com/channel/UC93uHm5aHDcFFemuStgEeuA" target="_blank"><i class="fab fa-youtube"></a></i>
              </li>
              <li class="">
                <a href="https://in.linkedin.com/company/creavids" target="_blank"> <i class="fab fa-linkedin-in"></a></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap w-full">
        <div class="mx-auto pt-4 lg:pt-0 text-base text-creavidsDarkGray font-thin">
          <a href="/sitemap.xml">Sitemap</a> | <a href="/privacypolicy">Privacy Policy</a> | <a href="termsofuse">Terms Of Use</a>
        </div>
      </div>
      <div class="flex flex-wrap w-full">
        <div class="mx-auto pt-4 lg:pt-0 text-base text-creavidsDarkGray font-thin">
          ©️ 2020 Creavids. All rights reserved.
        </div>
      </div>

    </div>
    <script type="text/javascript" src="../build/animation/aos.js"></script>
    <script  script type="text/javascript" src="../build/customScript.js"></script>
    
    <?php
      if ($currentPage == 'index' || $currentPage == '' || $currentPage == 'Home') {
        echo '<script type="text/javascript" src="../build/testimonial/carousel.js"></script>';
      }
     ?>
    
    <!-- Include jQuery -->
    <script src="../build/multislider/js/jquery-2.2.4.min.js"></script>

    <!-- Include Multislider -->
    <script src="../build/multislider/js/multislider.min.js"></script>

    <!-- Initialize element with Multislider -->
    <script>
    $('#slider-1').multislider({
      continuous:true,
      duration:5000,
      hoverPause:false,
    });
    $('#slider-1-mobile').multislider({
      continuous:true,
      duration:3000,
      hoverPause:false,
    });
    $('#slider-2').multislider({
        duration: 5000,
        continuous: true,
        hoverPause:false,
    });
    $('#slider-3').multislider({
        duration: 5000,
        continuous: true,
        hoverPause: false,
    });
<!-- Initialize the plugin -->
$('#exampleSlider').multislider();

<!-- Initialize with options, if needed -->
$('#mobileSlider').multislider({
    continuous: true,
    interval:2000,
    duration:5000,
    slideAll:true
});

    </script>
  </footer>

  </html>
