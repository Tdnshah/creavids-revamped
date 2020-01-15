<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Creavids | Contact</title>
  <link rel="stylesheet" href="./build/tailwind.css" />
  <link rel="stylesheet" href="./build/custom.css" />
  <link rel="stylesheet" href="./build/animation/aos.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900|Open+Sans&display=swap" rel="stylesheet" />
</head>

<body class="antialiased bg-grey-200 overflow-x-hidden mx-auto">
  <header class="bg-white lg:px-16 px-6 lg:py-0 py-2 flex items-center w-full fixed z-50 shadow-crevidsShadowHeader">
    <div class="flex flex-1 justify-between items-center">
      <div class="flex flex-wrap items-center">
        <img src="./Assets/staticLogo.png" class="p-3	w-24" alt="" />
        <a href="/index.html" class="text-3xl text-teal-300 font-hairline">Creavids</a>
      </div>
      <div class="hidden lg:inline p-4">
        <nav>
          <ul class="flex flex-1">
            <li>
              <a href="/process.html" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">Process</a>
            </li>
            <li>
              <a href="/about.html" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">About</a>
            </li>
            <li>
              <a href="/explore.html" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">Explore</a>
            </li>
            <!-- <li>
            <a href="/services.html" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">Services</a>
          </li> -->
            <!-- <li>
                    <a
                      href="/blog.html"
                      class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide"
                      >Blog</a
                    >
                  </li> -->
            <!-- <li>
            <a href="/contact.html" class="text-gray-800 uppercase mr-5 text-sm font-semibold tracking-wide">Contact</a>
          </li> -->
            <li>
              <a href="/contact.html" class="text-white mr-2 mt-5 px-4 py-2 font-bold uppercase shadow-xl rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">Request
                A Quote</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="lg:pt-24">
    <section class="items-center h-full" style="background:url('./Assets/contact/Contact-bg.png'),linear-gradient(90deg, #41e1f2 0%, #AFE776 100%); background-repeat: no-repeat,no-repeat; background-size: cover,cover;background-position: center,center;">
      <section class="flex">
        <div class="bg-white w-2/3 h-full shadow-2xl mt-20 mb-32 mx-24">
          <div class="text-center mx-auto relative" id="beferAfter">
            <h1 class="text-4xl text-center font-bold pt-8" id="getAQuote">
              GET A QUOTE
            </h1>
          </div>
          <div class="m-6">
            <form action="" method="POST" class="p-6">
              <input type="text" class="py-4 px-2  my-4 w-full border-b-4 border-teal-400 font-hairline text-xl focus:outline-none" name="name" placeholder="Name" />

              <input type="text" class="py-4 px-2 my-4 w-full border-b-4 border-teal-400 font-hairline text-xl" name="emailid" placeholder="Email Address" />

              <select name="syvideostyle" class="py-4 px-2 bg-white my-4 w-full border-b-4 border-teal-400 font-hairline text-xl text-gray-500 focus:text-black ">
                <option>Select your video style.</option>
                <option value="2D">2D Animation</option>
                <option value="3D">3D Animation</option>
                <option value="notsure">Not Sure</option>
              </select>

              <select name="hlyayvideo2b" class="py-4 px-2  my-4 w-full bg-white border-b-4 border-teal-400 font-hairline text-xl text-gray-500 focus:text-black">
                <option>How long you anticipate your video to be?</option>
                <option value="60">60 Seconds</option>
                <option value="90">90 Seconds</option>
                <option value="120">120 Seconds</option>
                <option value="notsure">Not Sure</option>
              </select>

              <input type="text" class="py-4 px-2 my-4 w-full border-b-4 border-teal-400 font-hairline text-xl" name="form_message" placeholder="We're listening...." />

              <input id="send" name="submit" type="submit" value="submit" class=" w-1/2 mt-5 ml-40 uppercase text-5xl tracking-widest text-white shadow-2xl" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
              </input>
            </form>
          </div>
        </div>
        <div class="bg-white w-1/3 h-full shadow-2xl mt-20 mb-32 ml-5 mr-20">
          <h1 class="text-center text-gray-800 font-semibold text-2xl py-12 px-8">
            WE ARE AVAILABLE 24 X 7
          </h1>
          <p class="text-gray-800 text-lg text-justify py-2 px-12">
            Lane No 5,<br />
            Koregaon Park,<br />
            Pune - 411001
          </p>
          <p class="text-gray-800 text-lg text-justify py-2 px-12">
            Contact: +91 – 8600007980
          </p>
          <p class="text-gray-800 text-lg text-justify py-2 px-12">
            Email: info@creavids.co
          </p>
          <img src="./Assets/contact/Contact_illustration-01.png" class="text-center" alt="" />
        </div>
      </section>
    </section>
  </main>
  <footer>
    <div class="flex flex-wrap shadow-crevidsShadowFooter">
      <div class="flex flex-wrap w-1/2">
        <div class="w-1/2 p-12 justify-center my-auto">
          <a href="/index.html">
            <img src="./Assets/staticLogo.png" class="w-1/3 mx-auto" alt="" />
            <p class="text-sm text-center p-4 text-creavidsTeal font-semibold">
              Creavids is a boutique video</br> production company.
            </p>
          </a>
          </a>
        </div>
        <div class="w-1/4 p-8 justify-center">
          <ul>
            <p class="py-4 text-xl text-creavidsGreen font-semibold uppercase">
              Company
            </p>

            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/about.html"><img src="./Assets/footer/About.png" class="mt-1 mr-6 ml-2 h-8" alt=""> About</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/explore.html"><img src="./Assets/footer/Explore.png" class="mt-2 mr-4 w-6 h-6" alt="">Explore</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/process.html"><img src="./Assets/footer/Process.png" class="mt-2 mr-4 w-6 h-6" alt="">Process</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/services.html"><img src="./Assets/footer/Service.png" class="mt-2 mr-4 w-6 h-6" alt=""> Service</a>
              </a>
              </a></li>
          </ul>
        </div>
        <div class="w-1/4 pt-20 mt-2 pl-8 justify-center">
          <ul>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/"><img src="./Assets/footer/Agencies.png" class="mt-2 mr-4 w-6 h-6" alt=""> Agencies</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/"><img src="./Assets/footer/Learn.png" class="mt-2 mr-4 w-6 h-6" alt="">Learn</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/faq.html"><img src="./Assets/footer/FAQ.png" class="mt-2 mr-4 w-6 h-6" alt="">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="w-1/3 p-8 justify-center">
          <ul>
            <p class="py-4 text-xl text-creavidsGreen uppercase font-semibold">
              INDUSTRIES
            </p>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/health.html">Healthcare</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/manufacturing.html">Manufacturing</a></li>
            <li class="flex my-2 text-xl text-creavidsTeal font-bold"><a class="flex" href="/">Blockchain</a></li>
          </ul>
        </div>
        <div class="w-2/3 my-auto">
          <p class="text-xl p-4 tex text-creavidsTeal font-semibold">
            Lane No. 5 Koregaon Park, Pune - 411001 <br>
            Email: letstalk@creavids.co
          </p>
          <div class="flex flex-wrap">
            <ul class="w-full flex flex-wrap text-creavidsarkTeal text-4xl mx-16 justify-between">
              <li class="pl-4">
                <a href="https://www.facebook.com/creavidsvideo/"><i class="fab fa-facebook-f"></a></i>
              </li>
              <li class="pl-4">
                <a href="https://twitter.com/creavids1"><i class="fab fa-twitter"></a></i>
              </li>
              <li class="pl-4">
                <a href="https://www.instagram.com/creavidsvideo/"><i class="fab fa-instagram"></a></i>
              </li>
              <li class="pl-4">
                <a href="https://www.youtube.com/channel/UC93uHm5aHDcFFemuStgEeuA"><i class="fab fa-youtube"></a></i>
              </li>
              <li class="pl-4">
                <a href="https://in.linkedin.com/company/creavids"> <i class="fab fa-linkedin-in"></a></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php include "./sendMail.php" ?>
  </footer>
  <script src="./build/animation/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
