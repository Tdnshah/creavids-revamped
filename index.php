<?php include('./header.php'); ?>

<body class="antialiased overflow-x-hidden mx-auto">
  <main id="landMain" class="">
    <!--Show Features-->
    <section class="lg:h-screen w-full flex z-0" style="background-image: url('./Assets/landingPage/image10.png');
        background-repeat:no-repeat;background-size: cover; background-position:
        center;">
      <div class="my-auto ml-20">
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
            <img width="890" height="500" class="mx-auto justify-center shadow-crevidsShadow" src="./Assets/landingPage/showreelThumbnail.jpg" alt="" />
            <i class="fas fa-play-circle" id="thumbnail-icon"></i>
          </div>
          <div id="video">
            <iframe width="890" height="500" class="mx-auto justify-center shadow-crevidsShadow" src="https://www.youtube.com/embed/VfzfQaPcd7U?" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </section>

      <!--Heres What Client-->
      <section class="w-full lg:my-24 ">
        <div class="w-full flex flex-wrap mx-auto">
          <div class="flex mx-auto pb-8 lg:pb-24 lg:px-64">
            <h1 class="flex text-2xl lg:text-5xl font-semibold px-20 text-creavidsDarkGray capitalize">
              Here's What Clients<br>
              Love About Creavids
              <img src="./Assets/landingPage/love_lady.png" alt="Creavids_love_lady" class="h-16 lg:h-40">
            </h1>
          </div>
          <div class="w-full px-16 flex flex-wrap">
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/clients/dollars.png" class="mx-auto" alt="">
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
                  <img src="./Assets/landingPage/clients/hunderd.png" class="mx-auto" alt="">
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
                  <img src="./Assets/landingPage/clients/orignal.png" class="mx-auto" alt="">
                </div>
                <div class="text-center">
                  <h1 class="py-1 lg:text-lg px-4 text-creavidsDarkGray font-bold">
                    Orignal content for </br> every video
                  </h1>
                </div>
              </div>
            </div>
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/clients/laptop.png" class="mx-auto" alt="">
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
          <div class="flex mx-auto pb-24 px-64">
            <img src="./Assets/landingPage/Landing Page-08.png" class="w-1/2 mx-auto" alt="" />
          </div>
          <div class="w-full px-16 flex flex-wrap">
            <div class="lg:w-1/4">
              <div>
                <div>
                  <img src="./Assets/landingPage/ourProcess/scriptWriting.png" class="mx-auto" alt="">
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
                  <img src="./Assets/landingPage/ourProcess/styles.png" class="mx-auto" alt="">
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
                  <img src="./Assets/landingPage/ourProcess/storyBoard.png" class="mx-auto" alt="">
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
                  <img src="./Assets/landingPage/ourProcess/animation.png" class="mx-auto" alt="">
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
            <h1 class="capitalize text-2xl lg:text-5xl font-bold text-creavidsDarkGray lg:px-40 text-center">
              We Collabrate With <br />Ambitious
              Brands and People
            </h1>
          </div>
        </div>
        <div class="lg:mx-20">
          <div class="px-1">
            <div class="flex flex-wrap">
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="bajaj"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="gharda"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="spenn"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="board"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="life-hub"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="dream-factory"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="ungerboeck"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="garadia"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="moovila"></div>
              </div>
              <div class="w-full lg:w-1/5 px-1 py-1">
                <div class="h-56 mx-auto w-1/2" id="virvita"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Consult Now For -->
      <section class="w-full lg:my-24 my-16">
        <div class="w-full mx-auto">
          <h1 class="pb-12 font-bold text-2xl text-creavidsDarkGray mx-auto text-center capitalize lg:px-64 lg:text-5xl">
            Consult Now For<br />Custom Tailored Projects
          </h1>
          <div class="text-center">
            <a href="/contact" class="hover:text-creavidsGreen text-gray-500 text-xl lg:px-16 lg:py-8 px-12 py-4 font-semibold uppercase " style="background-image: url('./Assets/buttons/button.png');background-size:contain;background-repeat:no-repeat;background-position: center;">Let's Talk</a>
          </div>
      </section>
    </section>
  </main>
</body>

<?php include('./footer.php'); ?>
