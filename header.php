<?php
include('env.php');
$currentPage = $_SERVER['REQUEST_URI'];
$currentPage = str_replace('/', '', $currentPage);
if ($currentPage == 'index' || $currentPage == '') {
  $currentPage = 'Home';
}
$metaDescription = 'Creavids is the best animated advertising, explainer video makling company exprtised in character animations, whiteboard animations trusted by industries leaders.';
$keywords = ['Animated Videos', 'Explainer Videos', 'Educational Videos', 'Commercial Videos', 'Increase Business', 'Marketing Material'];

function echoKeyword($keywords)
{
  foreach ($keywords as $keyword) {
    echo $keyword . ',';
  }
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo getenv('CREAVIDS_SERVER_ENV') ?>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="<?php echo $metaDescription ?>">
  <meta name="keywords" content="<?php echoKeyword($keywords) ?>">
  <meta property="og:url" content="https://creavids.co" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Creavids An Animated Video making Company" />
  <meta property="og:description" content="| Marketing | Media | Animation | Video Making Company |" />
  <meta property="og:image" content="Assets/creavids_screenshot.png" />

  <title>Creavids | <?php echo ucfirst($currentPage) ?> </title>
  <link rel="stylesheet" href="build/tailwind.css" />
  <link rel="stylesheet" href="build/custom.css" />
  <link rel="stylesheet" href="build/animation/aos.css" />
  <link rel="stylesheet" href="build/testimonial/carousel.css" />
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
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "Creavids",
      "url": "https://creavids.co"
    }
  </script>
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
</head>
<header class="lg:bg-white lg:fixed lg:px-16 px-6 bg-white flex flex-wrap items-center lg:w-full lg:py-0 py-2 lg:z-50 shadow-crevidsShadowHeader">
  <div class="flex-1 flex justify-between items-center">
    <div class="flex flex-wrap items-center">
      <img src="Assets/staticLogo.png" class="p-3	w-20" alt="creavids-logo" />
      <a href="/" class="text-3xl text-teal-300 font-hairline">Creavids</a>
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
          <a href="process" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Process</a>
        </li>
        <li>
          <a href="about" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">About</a>
        </li>
        <li>
          <a href="explore" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Explore</a>
        </li>
        <!-- <li>
          <a href="/services" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Services</a>
        </li> -->
        <!-- <li>
          <a href="/blog" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Blog</a>
        </li> -->
        <!-- <li>
          <a href="/contact" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-creavidsTeal text-gray-800 uppercase text-sm font-semibold ">Contact</a>
        </li> -->
      </ul>
    </nav>
    <a href="contact" class="lg:ml-4 flex items-center justify-start mb-4
      pointer-cursor text-white mr-2 mt-5 px-4 py-2 font-bold uppercase shadow-xl
      rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
      Request A Quote
    </a>
  </div>
</header>
