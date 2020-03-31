<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Creavids</title>
  <link rel="stylesheet" href="./build/tailwind.css" />
  <link rel="stylesheet" href="./build/custom.css" />
  <link rel="stylesheet" href="./build/animation/aos.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900|Open+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123320683-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-123320683-1');
  </script>
</head>
<header class="lg:bg-white lg:fixed lg:px-16 px-6 bg-white flex flex-wrap items-center lg:w-full lg:py-0 py-2 lg:z-50 shadow-crevidsShadowHeader">
  <div class="flex-1 flex justify-between items-center">
    <div class="flex flex-wrap items-center">
      <img src="./Assets/staticLogo.png" class="p-3	w-20" alt="" />
      <a href="/index.php" class="text-3xl text-teal-300 font-hairline">Creavids</a>
    </div>
  </div>

  <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
      <title>menu</title>
      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
    </svg></label>
  <input class="hidden" type="checkbox" id="menu-toggle" />

  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
        <li>
          <a href="/process.php" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Process</a>
        </li>
        <li>
          <a href="/about.php" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">About</a>
        </li>
        <li>
          <a href="/explore.php" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Explore</a>
        </li>
        <!-- <li>
          <a href="/services.php" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Services</a>
        </li> -->
        <!-- <li>
          <a href="/blog.php" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Blog</a>
        </li> -->
        <!-- <li>
          <a href="/contact.php" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Contact</a>
        </li> -->
      </ul>
    </nav>
    <a href="/contact.php" class="lg:ml-4 flex items-center justify-start mb-4
      pointer-cursor text-white mr-2 mt-5 px-4 py-2 font-bold uppercase shadow-xl
      rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
      Request A Quote
    </a>
  </div>

</header>

<!-- <header class="bg-white h-24  lg:px-16 px-6 lg:py-0 py-2 flex items-center w-full fixed z-50 shadow-crevidsShadowHeader">
  <div class="flex flex-1 justify-between items-center">
    <div class="flex flex-wrap items-center">
      <img src="./Assets/staticLogo.png" class="p-3	w-24" alt="" />
      <a href="/index.php" class="text-3xl text-teal-300 font-hairline">Creavids</a>
    </div>
    <div class="hidden lg:inline p-4">
      <nav>
        <ul class="flex flex-1">
          <li>
            <a href="/process.php" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">Process</a>
          </li>
          <li>
            <a href="/about.php" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">About</a>
          </li>
          <li>
            <a href="/explore.php" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">Explore</a>
          </li>
          <li>
            <a href="/services.php" class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide">Services</a>
          </li>
          <li>
            <a
              href="/blog.php"
              class="text-gray-800 uppercase mr-4 text-sm font-semibold tracking-wide"
              >Blog</a
            >
          </li>
          <li>
            <a href="/contact.php" class="text-gray-800 uppercase mr-5 text-sm font-semibold tracking-wide">Contact</a>
          </li>
          <li>
            <a href="/contact.php" class="text-white mr-2 mt-5 px-4 py-2 font-bold uppercase shadow-xl rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">Request
              A Quote</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header> -->
