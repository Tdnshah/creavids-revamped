<?php include('./header.php')?>
  <body class="antialiased bg-grey-200 overflow-x-hidden mx-auto">
    <main class="lg:pt-20">
      <section
        class="items-center h-full"
        style="background:url('./Assets/contact/Contact-bg.png'),linear-gradient(90deg, #41e1f2 0%, #AFE776 100%); background-repeat: no-repeat,no-repeat; background-size: cover,cover;background-position: center,center;"
      >
        <section class="flex">
          <div class="bg-white h-full w-full shadow-2xl m-8">
            <div class="text-center mx-auto">
              <h1
                class="text-2xl text-center text-creavidsGray font-semibold pt-8 uppercase"
              >
                Video Brief Questionnaire
              </h1>
            </div>
            <div class="m-6">
              <div class="h-1 bg-creavidsTeal relative" id="progressBar"></div>
              <form action="" class="p-6 my-8 mx-64" id="regForm">
                <div class="tab">
                  <label for="name" class="font-normal text-xl"
                    >Your name, please</label
                  >
                  <input
                    type="text"
                    class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none"
                    name="name"
                    id="name"
                  />
                </div>
                <div class="tab">
                  <label for="location" class="font-normal text-xl"
                    >Your Company email</label
                  >
                  <input
                    type="text"
                    class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none"
                    name="location"
                    id="location"
                  />
                </div>
                <div class="tab">
                  <label for="title" class="font-normal text-xl"
                    >Working title of the video</label
                  >
                  <input
                    type="text"
                    class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none"
                    name="title"
                    id="title"
                  />
                </div>
                <div class="tab">
                  <label for="endUse" class="font-normal text-xl"
                    >What is the End - Use of the video</label
                  >
                  <select
                    id="endUse"
                    name="syvideostyle"
                    class="py-4 px-2 my-4 w-full bg-white border-b-4 border-teal-400 font-hairline text-xl focus:text-black "
                  >
                    <option></option>
                    <option>Explain a product / Service</option>
                    <option>Explain a concept / Idea</option>
                    <option>Showcase Features</option>
                    <option>Explain Pricing</option>
                    <option>Product/service / Brand Advertisement</option>
                    <option>Company Introduction</option>
                    <option>Promote a product / Service</option>
                    <option>Present a report / Case</option>
                    <option>For YouTube Advertising</option>
                    <option>For Social Media marketing</option>
                    <option>Employee On-boarding</option>
                    <option>Customer On-boarding</option>
                    <option>Employee / Customer Training</option>
                    <option>Process Walkthrough</option>
                    <option>Sales Collateral</option>
                    <option>Explain Pricing</option>
                    <option>Marketing Collateral</option>
                    <option>Any Other</option>
                  </select>
                </div>
                <div class="tab">
                  <label for="videoSec" class="font-normal text-xl"
                    >How long do you anticipate your video to be?</label
                  >
                  <select
                    type="text"
                    class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none"
                    name="sex"
                    id="videoSec"
                  >
                    <option></option>
                    <option>Under 10 Seconds</option>
                    <option>10 to 30 Seconds</option>
                    <option>30 to 60 Seconds</option>
                    <option>60 to 120 seconds</option>
                    <option>2 to 3 minutes </option>
                    <option>3 to 5 minutes</option>
                    <option>5 to 10 minutes</option>
                    <option>Series of shorts</option>
                    <option>I&#39;m not sure - Let&#39;s talk </option>
                    <option>Any Other</option>
                  </select>
                </div>
                <div class="tab">
                  <label for="videoSec" class="font-normal text-xl"
                    >Where is your audience?</label
                  >
                  <select
                    type="text"
                    class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none"
                    name="sex"
                    id="videoSec"
                  >
                    <option></option>
                    <option>Whole World</option>
                    <option>North America</option>
                    <option>South America</option>
                    <option>European Region</option>
                    <option>Southeast Asia</option>
                    <option>North Asia</option>
                    <option>North-East Asia</option>
                    <option>Middle Eastern Region</option>
                    <option>Indian Region</option>
                    <option>Russian Region</option>
                    <option>Australia &amp; NZ</option>
                    <option>North Africa Region</option>
                    <option>Russian Region</option>
                    <option>Middle Africa Region</option>
                    <option>South Africa Region</option>
                  </select>
                </div>
                <div class="tab">
                  <label for="videoSec" class="font-normal text-xl"
                    >Do you want this video to be created in more than 1
                    language?</label
                  >
                  <select
                    type="text"
                    class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none"
                    name="sex"
                    id="videoSec"
                  >
                    <option></option>
                    <option>If Yes, Space for typing</option>
                    <option>If No, then the next question</option>
                  </select>
                </div>
                <div class="flex justify-between mx-64">
                  <div
                    class="p-2 uppercase text-5xl text-black"
                    onclick="nextPrev(-1)"
                  >
                    <span id="prevBtn">
                      <
                    </span>
                  </div>
                  <div
                    class="p-2 uppercase text-5xl text-black"
                    onclick="nextPrev(1)"
                  >
                    <span id="nextBtn">
                      >
                    </span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </section>
    </main>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
      crossorigin="anonymous"
    ></script>
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        var totalSteps = x.length;
        console.log(n);
        growProgressBar(n, totalSteps);
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == x.length - 1) {
          document.getElementById("nextBtn").innerHTML =
            "<img src='./Assets/icons/send.svg' class='my-6' width='30px' height='30px'>";
        } else {
          document.getElementById("nextBtn").innerHTML = ">";
        }
        // ... and run a function that displays the correct step indicator:
        // fixStepIndicator(n);
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        var totalSteps = x.length;
        growProgressBar(n, totalSteps);
        // Hide the current tab:
        x[currentTab].style.display = "none";

        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
          //...the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function growProgressBar(currentStep, totalSteps) {
        var pb = document.getElementById("progressBar");
        eachStep = (100 / totalSteps) * (currentStep + 1);
        console.log(eachStep);
        pb.style.width = eachStep + "%";
      }
    </script>
  </body>
<?php include('./footer.php')?>
