<?php include('header.php'); ?>

<body class="antialiased overflow-x-hidden mx-auto">
  <main id="landMain" class="">
    <!--Show Features-->
    <section class="lg:h-screen w-full flex z-0" style="background-image: url('./Assets/landingPage/image10.png');
        background-repeat:no-repeat;background-size: cover; background-position:
        center;">
      <div class="my-auto ml-4 lg:ml-20">
        <div class="my-8">
          <h1 class="text-white font-bold lg:text-6xl uppercase">
            CREATE VIDEOS FOR
          </h1>
          <h1>
            <span class="text-gray-900 font-extrabold  uppercase typewrite lg:text-6xl">YOUR </span><a href="" class="text-gray-900 font-extrabold  uppercase typewrite lg:text-6xl" data-period="" data-type='[ "BRAND.", "PRODUCT.", "SERVICE." ]'>
              <span class="wrap"></span>
            </a>
          </h1>

        </div>
      </div>
      <!-- <div class="absolute w-full">
						<div id="outerContainer">
								<div id="container">
											<div class="item">

										<img src="./Assets/landingPage/playButton.png" />
								</div>
										<div id="circle" style="animation-delay: 0s"></div>
										<div id="circle" style="animation-delay: 1s"></div>
										<div id="circle" style="animation-delay: 2s"></div>
										<div id="circle" style="animation-delay: 3s"></div>
										<div id="circle" style="animation-delay: 4s"></div>
										<div id="circle" style="animation-delay: 5s"></div>
										<div id="circle" style="animation-delay: 6s"></div>
										<div id="circle" style="animation-delay: 7s"></div>
										<div id="circle" style="animation-delay: 0s"></div>
								</div>
						</div>
				</div> -->
    </section>

    <section class="mx-auto max-w-screenFullWidth">
      <!--Video-->
      <section class="w-full my-8 lg:my-24 ">
        <div class="mx-auto w-9/12 justify-center">
          <div id="thumbnail" class="" onclick="myFunction()">
            <img width="890" height="500" class="mx-auto justify-center shadow-crevidsShadow" src="./Assets/landingPage/showreelThumbnail.jpg" alt="video-animation" />
            <i class="fas fa-play-circle" id="thumbnail-icon"></i>
          </div>
          <div id="video">
            <iframe width="890" height="500" class="mx-auto justify-center shadow-crevidsShadow" src="https://www.youtube.com/embed/bUwpmTP2A_c" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </section>

      <!--Heres What Client-->
      <section class="w-full lg:my-24 ">
        <div class="w-full flex flex-wrap mx-auto">
          <div class="flex mx-auto pb-8 lg:pb-24">
            <h1 class="flex text-2xl lg:text-5xl font-semibold px-20 text-creavidsDarkGray capitalize">
              Here's What Clients<br>
              Love About Creavids
              <img src="./Assets/landingPage/love_lady.png" alt="Creavids_love_lady" class="h-16 lg:h-40" alt="client-testimonial">
            </h1>
          </div>
          <div class="w-full px-16 flex flex-wrap">
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/clients/dollars.png" class="mx-auto" alt="money-dollar">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-lg px-8 text-creavidsDarkGray font-bold">
                    All-inclusive fixed budget cost
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/clients/hunderd.png" class="mx-auto" alt="assurance-100%">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-lg px-4 text-creavidsDarkGray font-bold">
                    Your money is safe with us 100% money back guarantee
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/clients/orignal.png" class="mx-auto" alt="original-videos">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-lg px-4 text-creavidsDarkGray font-bold">
                    Original content for </br> every video
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/clients/laptop.png" class="mx-auto" alt="digital-laptop">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-lg px-4 text-creavidsDarkGray font-bold">
                    Multiple iteration included in the budget
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--OurWork-->
      <section class="w-full lg:my-24">
        <div class="w-full flex flex-wrap mx-auto">
          <div class="flex mx-auto py-12 lg:pb-24 lg:px-64">
            <img src="./Assets/landingPage/Landing Page-08.png" class="w-1/2 mx-auto" alt="landing-page-08" />
          </div>
          <div class="w-full px-16 flex flex-wrap">
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/ourProcess/scriptWriting.png" class="mx-auto" alt="script-writing">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-2xl text-creavidsDarkGray font-bold">
                    Script Writing
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/ourProcess/styles.png" class="mx-auto" alt="styles">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-2xl text-creavidsDarkGray font-bold">
                    Style
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/ourProcess/storyBoard.png" class="mx-auto" alt="story-boarding">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-2xl text-creavidsDarkGray font-bold">
                    Storyboard
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/ourProcess/animation.png" class="mx-auto" alt="ourprocess-animation">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-2xl text-creavidsDarkGray font-bold">
                    Animation
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--We collabrate-->
      <section class="lg:w-full my-8 lg:my-24">
        <div class="w-full flex flex-wrap mx-auto">
          <div class="mx-auto lg:pb-12">
            <h1 class="capitalize text-2xl lg:text-5xl font-bold text-creavidsDarkGray text-center">
              We Collabrate With <br />Ambitious
              Brands and People
            </h1>
          </div>
        </div>
        <!-- logo slider mobile-->
        <div class="py-10 lg:hidden">
          <div id="mobileSlider">      <!-- Give wrapper ID to target with jQuery & CSS -->
              <div class="MS-content">
                  <div class="item"> <img src="Assets/about/clients/AllianceTek.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Assertion.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Bajaj-Finserv.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Board.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/carl.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/coinfirm.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/comtex.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/cubastion.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/d3.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Dream-Factory.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/exxat.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Gharda.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/GMT_G7.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/identity.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Insly.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/insplorion.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/invaworx.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/keeano.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/main_care.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/meazon.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/MetricFire.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Moovila.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/opti.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/puro.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/qlite.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/rising_phoenix.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/safetymate.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/santex.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/sawcross.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/sciencelogic.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/scoutapm.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/sensorflow.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/sneed.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/spenn.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/Ungerboeck.png" alt=""> </div>
                  <div class="item"> <img src="Assets/about/clients/virvite.png" alt=""> </div>
              </div>
          </div>
        </div>    
        <!--Ends logo slider laptop -->
        <!-- logo slider laptop -->
        <div class="w-full hidden lg:block">
          <div id="slider-1">
            <div class="flex flex-wrap MS-content"> 
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="bajaj"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="gharda"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="spenn"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="board"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="Assertion"></div>
              </div>
            </div>
          </div>
          <div id="slider-2">
            <div class="flex flex-wrap MS-content">
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="dream-factory"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="ungerboeck"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="carl"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="moovila"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="virvite"></div>
              </div>
            </div>
          </div>
          <div id="slider-3">
            <div class="flex flex-wrap MS-content">
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="scoutapm"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="gmt_g7"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="MetricFire"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="opti"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1 item">
                <div class="h-40 mx-auto w-2/3" id="AllianceTek"></div>
              </div>
            </div>
          </div>
        </div>
        <!--Ends logo slider laptop -->
      </section>
      <!-- Testimonial -->
      <section class="w-full lg:my-16 my-4">
        <div class="w-full mx-auto">
          <h1 class="lg:pb-12 font-bold text-2xl text-creavidsDarkGray mx-auto text-center capitalize lg:text-5xl">
            Client Testimonial
          </h1>
          <div class="gallery">
            <div class="gallery-container">
              <div class=" h-64 w-64 rounded-creavidsTestimonnial bg-white gallery-item">
                <div class="p-10 pb-5">
                  <div class="flex items-center">
                    <img class="w-16 h-16 rounded-full mr-4" id="avatar" src="./Assets/testimonial/userPlaceholder.jpeg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                      <h1 class="text-lg text-creavidsDarkGray font-semibold" id="name">Joel Flaker</h1>
                      <h4 class="text-sm text-creavidsDarkGray" id="designation">CEO & Founder at Suncrest Solutions</h4>
                    </div>
                  </div>
                </div>
                <div class="px-10">
                  <p class=" text-creavidsDarkGray text-sm font-medium" id="description">
                    Final output and satisfaction were my major concerns before opting to work with Creavids. Their
                    ability to understand the purpose of the video and the use of creativity is simply amazing!!
                  </p>
                </div>
              </div>
              <div class=" h-64 w-64 rounded-creavidsTestimonnial bg-white gallery-item">
                <div class="p-10 pb-5">
                  <div class="flex items-center">
                    <img class="w-16 h-16 rounded-full mr-4" id="avatar" src="./Assets/testimonial/userPlaceholder.jpeg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                      <h1 class="text-lg text-creavidsDarkGray font-semibold" id="name">Mieke Marple</h1>
                      <h4 class="text-sm text-creavidsDarkGray" id="designation">Freelance Artist</h4>
                    </div>
                  </div>
                </div>
                <div class="px-10">
                  <p class=" text-creavidsDarkGray text-sm font-medium" id="description">
                    Process-driven approach along with professionalism stands out for Creavids. Extremely happy
                    with the way they handhold you during production, I never realised that I was producing a video
                    for the first time. They are simply awesome and I highly recommend them for all your video
                    production needs.
                  </p>
                </div>
              </div>
              <div class=" lg:h-64 w-64 rounded-creavidsTestimonnial bg-white gallery-item">
                <div class="lg:p-10 lg:pb-5 p-4">
                  <div class="flex items-center">
                    <img class="w-16 h-16 rounded-full mr-4" id="avatar" src="./Assets/testimonial/Heidi_Link.jpg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                      <h1 class="text-lg text-creavidsDarkGray font-semibold" id="name">Heidi Link</h1>
                      <h4 class="text-sm text-creavidsDarkGray" id="designation">Art Director at Ungerboeck`</h4>
                    </div>
                  </div>
                </div>
                <div class="lg:px-10 px-4 pb-4">
                  <p class=" text-creavidsDarkGray text-sm font-medium" id="description">
                    Full-service, professional animation video production company. They ace it when it comes to
                    collaboration, communication, adherence to timelines and output quality.
                  </p>
                </div>
              </div>
              <div class=" lg:h-64 w-64 rounded-creavidsTestimonnial bg-white gallery-item">
                <div class="lg:p-10 lg:pb-5 p-4">
                  <div class="flex items-center">
                    <img class="w-16 h-16 rounded-full mr-4" id="avatar" src="./Assets/testimonial/Lindsey_Rogerson.jpg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                      <h1 class="text-lg text-creavidsDarkGray font-semibold" id="name">Lindsey Rogerson</h1>
                      <h4 class="text-sm text-creavidsDarkGray" id="designation">Technical Content Developer at MetricFire</h4>
                    </div>
                  </div>
                </div>
                <div class="lg:px-10 px-4 pb-4">
                  <p class=" text-creavidsDarkGray text-sm font-medium" id="description">
                    A very responsive design team that focuses on realizing the exact image in the client's head. My request was very detailed and I requested many improvements and changes. Creavids completed every request I made and made the exact video that I wanted. Thank you!
                  </p>
                </div>
              </div>
              <div class=" lg:h-64 w-64 rounded-creavidsTestimonnial bg-white gallery-item">
                <div class="lg:p-10 lg:pb-5 p-4">
                  <div class="flex items-center">
                    <img class="w-16 h-16 rounded-full mr-4" id="avatar" src="./Assets/testimonial/Mark_Hickinbotham.jpg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                      <h1 class="text-lg text-creavidsDarkGray font-semibold" id="name">Mark Hickinbotham</h1>
                      <h4 class="text-sm text-creavidsDarkGray" id="designation">President at Sawcross, Inc</h4>
                    </div>
                  </div>
                </div>
                <div class="lg:px-10 px-4 pb-4">
                  <p class=" text-creavidsDarkGray text-sm font-medium" id="description">
                    Great people and great products. A Good company that aced all apartments during the entire production phase.
                  </p>
                </div>
              </div>
            </div>
            <div class="gallery-controls"></div>
          </div>
        </div>
      </section>
      <!--Consult Now For -->
      <section class="w-full lg:my-24 my-16">
        <div class="w-full mx-auto">
          <h1 class="pb-12 font-bold text-2xl text-creavidsDarkGray mx-auto text-center capitalize lg:text-5xl">
            Consult Now For<br />Custom Tailored Projects
          </h1>
          <div class="text-center">
            <a href="./contact" class="hover:text-creavidsGreen text-gray-500 text-xl lg:px-16 lg:py-8 px-12 py-4 font-semibold uppercase " style="background-image: url('./Assets/buttons/button.png');background-size:contain;background-repeat:no-repeat;background-position: center;">Let's Talk</a>
          </div>
        </div>
      </section>
    </section>
  </main>
</body>
<?php include('footer.php'); ?>
