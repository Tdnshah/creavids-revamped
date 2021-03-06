<?php include('header.php') ?>

<body class="antialiased bg-grey-200 overflow-x-hidden mx-auto">
  <?php include('./sendMail.php'); ?>
  <main class="lg:pt-20">
    <section class="items-center h-full" style="background:url('./Assets/contact/Contact-bg.png'),linear-gradient(90deg, #41e1f2 0%, #AFE776 100%); background-repeat: no-repeat,no-repeat; background-size: cover,cover;background-position: center,center;">
      <section class="flex">
        <div class="bg-white h-full w-full shadow-2xl m-8">
          <div class="text-center mx-auto">
            <h1 class="text-2xl text-center text-creavidsGray font-semibold pt-8 uppercase">
              Video Brief Questionnaire
            </h1>
          </div>
          <div class="m-6">
            <div class="h-1 bg-creavidsTeal relative" id="progressBar"></div>
            <?php
            if ($newPage) {
              echo ('<form action="" method="POST" class="lg:p-6 lg:my-20 lg:mx-64 bg-teal-100" id="regForm">
                    <input type="hidden" name="formName" value="questionarieForm">
                    <div class="tab">
                      <label for="name" class="font-normal text-xl">Your name, please</label>
                      <input type="text" class="py-4 px-2 my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="name" id="name" />
                    </div>
                    <div class="tab">
                      <label for="website" class="font-normal text-xl">Your Company Website</label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="website" id="webiste" />
                    </div>
                    <div class="tab">
                      <label for="purpose" class="font-normal text-xl">
                        What is the purpose of this video? (In one line why are you having this video created and what do you hope to accomplish?)
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="purpose" id="purpose" />
                    </div>
                    <div class="tab">
                      <label for="videoStyle" class="font-normal text-xl">What video style you are looking for?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="videoStyle" id="videoStyle">
                        <option value="">Choose</option>
                        <option value="2d">2D</option>
                        <option value="3d">3D</option>
                        <option value="2.5d">2.5D</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="videoSec" class="font-normal text-xl">How long do you anticipate your video to be?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="videoSec" id="videoSec">
                        <option value=""></option>
                        <option value="30sec">30 Seconds</option>
                        <option value="60sec">60 Seconds</option>
                        <option value="90sec">90 seconds</option>
                        <option value="120sec">120 seconds </option>
                        <option value="anyother">Any Other</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="product_solution" class="font-normal text-xl">Product / Solution is for...?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="product_solution" id="product_solution" />
                    </div>
                    <div class="tab">
                      <label for="brief_about_product" class="font-normal text-xl">
                        Brief about the Product / Solution / Service / Concept?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="brief_about_product" id="brief_about_product" />
                    </div>
                    <div class="tab">
                      <label for="moodOfVideo" class="font-normal text-xl">Mood of the video – Businesslike/Humorous etc (you can choose multiple Moods)</label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="moodOfVideo" id="moodOfVideo" />
                    </div>
                    <div class="tab">
                      <label for="audience" class="font-normal text-xl">Where is your audience?</label>
                      <br>

                      <input type="checkbox" name="audience" value="north_america">
                      <label for="north_america">North America</label>
                      <br>

                      <input type="checkbox" name="audience" value="south_america">
                      <label for="south_america">South America</label>
                      <br>

                      <input type="checkbox" name="audience" value="asia">
                      <label for="asia">Aisa</label>
                      <br>

                      <input type="checkbox" name="audience" value="africa">
                      <label for="asia">Africa</label>
                      <br>

                      <input type="checkbox" name="audience" value="australia">
                      <label for="australia">Australia</label>
                      <br>

                      <input type="checkbox" name="audience" value="across_globe">
                      <label for="across_globe">Across Globe</label>
                      <br>

                    </div>
                    <div class="tab">
                      <label for="sees" class="font-normal text-xl">Who sees the video?</label>
                      <br>

                      <input type="checkbox" name="sees" value="end_customer">
                      <label for="end_customer">End Customer</label>
                      <br>

                      <input type="checkbox" name="sees" value="stakeholder">
                      <label for="stakeholder">Stake Holders</label>
                      <br>

                      <input type="checkbox" name="sees" value="internal">
                      <label for="internal">internal</label>
                      <br>

                      <input type="checkbox" name="sees" value="other">
                      <label for="other">Other</label>
                    </div>
                    <div class="tab">
                      <label for="targetSegment" class="font-normal text-xl">Target segment age group?</label>
                      <br>

                      <input type="checkbox" name="targetSegment" value="below10">
                      <label for="below10">Below 10</label>
                      <br>

                      <input type="checkbox" name="targetSegment" value="10-20">
                      <label for="10-20">10-20</label>
                      <br>

                      <input type="checkbox" name="targetSegment" value="20-30">
                      <label for="20-30">20-30</label>
                      <br>

                      <input type="checkbox" name="targetSegment" value="30-50">
                      <label for="30-50">30-50</label>
                      <br>

                      <input type="checkbox" name="targetSegment" value="above50">
                      <label for="above50">Above 50</label>
                      <br>
                    </div>
                    <div class="tab">
                      <label for="whatCustomProspects" class="font-normal text-xl">What do your customers / prospects / audience want the most?</label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="whatCustomProspects" id="whatCustomProspects" />
                    </div>
                    <div class="tab">
                      <label for="voice-over" class="font-normal text-xl">Do you need a voice-over for this video?</label>
                      <br>

                      <input type="radio" name="voice-over" value="yes">
                      <label for="yes">Yes</label>
                      <br>

                      <input type="radio" name="voice-over" value="No">
                      <label for="No">No</label>
                      <br>

                      <input type="radio" name="voice-over" value="maybe">
                      <label for="maybe">Maybe</label>
                      <br>
                    </div>
                    <div class="tab">
                      <label for="voice-accent" class="font-normal text-xl">If yes, which voice accent do you prefer?</label>
                      <br>

                      <input type="radio" name="north_america" value="north_america">
                      <label for="north_america">North America</label>
                      <br>

                      <input type="radio" name="british" value="british">
                      <label for="british">British</label>
                      <br>

                      <input type="radio" name="Australian" value="australian">
                      <label for="Australian">Australian</label>
                      <br>

                      <input type="radio" name="Indian" value="indian">
                      <label for="Indian">Indian</label>
                      <br>

                      <input type="radio" name="Other" value="other">
                      <label for="Other">Other</label>
                      <br>
                    </div>
                    <div class="tab">
                      <label for="background-music" class="font-normal text-xl">Do you want background music in your video?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="background-music" id="background-music">
                        <option value="">Choose</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="terms-of-video" class="font-normal text-xl">Any “do’s and don’ts” in terms of the video?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="terms-of-video" id="terms-of-video" />
                    </div>
                    <div class="tab">
                      <label for="brand-tagline" class="font-normal text-xl">Any brand tagline or slogan that you’d like to include in the video?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="brand-tagline" id="brand-tagline" />
                    </div>
                    <div class="tab">
                      <label for="call-to-action" class="font-normal text-xl">Do you have a call-to-action that you’d like to include?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="call-to-action" id="call-to-action">
                        <option value="">Choose</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="call-to-action-if-yes" class="font-normal text-xl">If Yes, the call-to-action will be...?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="call-to-action-if-yes" id="call-to-action-if-yes" />
                    </div>
                    <div class="tab">
                      <label for="reference-video" class="font-normal text-xl">Is there any reference videos or styles that you would like us to refer for this production?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="reference-video" id="reference-video" />
                    </div>
                    <div class="tab">
                      <label for="offering-better" class="font-normal text-xl">To know your offering better please suggest any other web link we should refer to?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="offering-better" id="offering-better" />
                    </div>
                    <div class="tab">
                      <label for="competitors" class="font-normal text-xl">Name two of your direct competitors.
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="competitors" id="competitors" />
                    </div>
                    <div class="tab">
                      <label for="did_we_miss_something" class="font-normal text-xl">Did we miss something?
                      </label>
                      <br>
                      <textarea rows="4" cols="80" name="did_we_miss_something">Enter Your Message Here</textarea>
                    </div>
                    <div class="flex justify-between lg:mt-24 lg:mx-24">
                      <div class="p-2 uppercase text-3xl text-black" onclick="nextPrev(-1)">
                        <span id="prevBtn" class="lg:ml-4 mb-4 pointer-cursor text-white mr-2 mt-5 px-8 py-2 font-bold uppercase shadow-xl rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
                          < Previous
                        </span>
                      </div>
                      <div class="p-2 uppercase text-3xl text-black" onclick="nextPrev(1)" id="next_btn_main_div">
                        <span id="nextBtn" class="lg:ml-4 mb-4 pointer-cursor text-white mr-2 mt-5 px-16 py-2 font-bold uppercase shadow-xl rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
                          Next >
                        </span>
                      </div>
                    </div>
                  </form>');
            } elseif (!$newPage && $messageSuccessful) {
              echo ("<p class='text-center text-xl p-4 text-creavidsGreen font-semibold'>Thank you for contacting Creavids.co. <br> You Message has been successfully send and our executive will connect with you soon.");
            } elseif (!$newPage && $messageFailed) {
              echo ('<p class="text-center text-red-600 text-xl"> Seems Like something went wrong please try again</p>
              <form action="" method="POST" class="lg:p-6 lg:my-20 lg:mx-64 bg-teal-100" id="questionarieForm">
                  <input type="hidden" name="formName" value="questionarieForm">
                    <div class="tab">
                      <label for="name" class="font-normal text-xl">Your name, please</label>
                      <input type="text" class="py-4 px-2 my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="name" id="name" />
                    </div>
                    <div class="tab">
                      <label for="website" class="font-normal text-xl">Your Company Website</label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="website" id="webiste" />
                    </div>
                    <div class="tab">
                      <label for="purpose" class="font-normal text-xl">
                        What is the purpose of this video? (In one line why are you having this video created and what do you hope to accomplish?)
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="purpose" id="purpose" />
                    </div>
                    <div class="tab">
                      <label for="videoStyle" class="font-normal text-xl">What video style you are looking for?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="videoStyle" id="videoStyle">
                        <option value="">Choose</option>
                        <option value="2d">2D</option>
                        <option value="3d">3D</option>
                        <option value="2.5d">2.5D</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="videoSec" class="font-normal text-xl">How long do you anticipate your video to be?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="videoSec" id="videoSec">
                        <option value=""></option>
                        <option value="30sec">30 Seconds</option>
                        <option value="60sec">60 Seconds</option>
                        <option value="90sec">90 seconds</option>
                        <option value="120sec">120 seconds </option>
                        <option value="anyother">Any Other</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="product_solution" class="font-normal text-xl">Product / Solution is for...?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="product_solution" id="product_solution" />
                    </div>
                    <div class="tab">
                      <label for="brief_about_product" class="font-normal text-xl">
                        Brief about the Product / Solution / Service / Concept?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="brief_about_product" id="brief_about_product" />
                    </div>
                    <div class="tab">
                      <label for="moodOfVideo" class="font-normal text-xl">Mood of the video – Businesslike/Humorous etc (you can choose multiple Moods)</label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="moodOfVideo" id="moodOfVideo" />
                    </div>
                    <div class="tab">
                      <label for="audience" class="font-normal text-xl">Where is your audience?</label>
                      <br>

                      <input type="checkbox" name="north_america" value="north_america">
                      <label for="north_america">North America</label>
                      <br>

                      <input type="checkbox" name="south_america" value="south_america">
                      <label for="south_america">South America</label>
                      <br>

                      <input type="checkbox" name="aisa" value="asia">
                      <label for="asia">Aisa</label>
                      <br>

                      <input type="checkbox" name="africa" value="africa">
                      <label for="asia">Africa</label>
                      <br>

                      <input type="checkbox" name="australia" value="australia">
                      <label for="australia">Australia</label>
                      <br>

                      <input type="checkbox" name="across_globe" value="across_globe">
                      <label for="across_globe">Across Globe</label>
                      <br>

                    </div>
                    <div class="tab">
                      <label for="who-sees" class="font-normal text-xl">Who sees the video?</label>
                      <br>

                      <input type="checkbox" name="end_customer" value="end_customer">
                      <label for="end_customer">End Customer</label>
                      <br>

                      <input type="checkbox" name="stakeholder" value="stakeholder">
                      <label for="stakeholder">Stake Holders</label>
                      <br>

                      <input type="checkbox" name="internal" value="internal">
                      <label for="internal">internal</label>
                      <br>

                      <input type="checkbox" name="other" value="other">
                      <label for="other">Other</label>
                    </div>
                    <div class="tab">
                      <label for="targetSegment" class="font-normal text-xl">Target segment age group?</label>
                      <br>

                      <input type="checkbox" name="below10" value="below10">
                      <label for="below10">Below 10</label>
                      <br>

                      <input type="checkbox" name="10-20" value="10-20">
                      <label for="10-20">10-20</label>
                      <br>

                      <input type="checkbox" name="20-30" value="20-30">
                      <label for="20-30">20-30</label>
                      <br>

                      <input type="checkbox" name="30-50" value="30-50">
                      <label for="30-50">30-50</label>
                      <br>

                      <input type="checkbox" name="above50" value="above50">
                      <label for="above50">Above 50</label>
                      <br>
                    </div>
                    <div class="tab">
                      <label for="whatCustomProspects" class="font-normal text-xl">What do your customers / prospects / audience want the most?</label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="whatCustomProspects" id="whatCustomProspects" />
                    </div>
                    <div class="tab">
                      <label for="voice-over" class="font-normal text-xl">Do you need a voice-over for this video?</label>
                      <br>

                      <input type="radio" name="yes" value="yes">
                      <label for="yes">Yes</label>
                      <br>

                      <input type="radio" name="No" value="No">
                      <label for="No">No</label>
                      <br>

                      <input type="radio" name="maybe" value="maybe">
                      <label for="maybe">Maybe</label>
                      <br>
                    </div>
                    <div class="tab">
                      <label for="voice-accent" class="font-normal text-xl">If yes, which voice accent do you prefer?</label>
                      <br>

                      <input type="radio" name="north_america" value="north_america">
                      <label for="north_america">North America</label>
                      <br>

                      <input type="radio" name="british" value="british">
                      <label for="british">British</label>
                      <br>

                      <input type="radio" name="Australian" value="australian">
                      <label for="Australian">Australian</label>
                      <br>

                      <input type="radio" name="Indian" value="indian">
                      <label for="Indian">Indian</label>
                      <br>

                      <input type="radio" name="Other" value="other">
                      <label for="Other">Other</label>
                      <br>
                    </div>
                    <div class="tab">
                      <label for="background-music" class="font-normal text-xl">Do you want background music in your video?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="background-music" id="background-music">
                        <option value="">Choose</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="terms-of-video" class="font-normal text-xl">Any “do’s and don’ts” in terms of the video?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="terms-of-video" id="terms-of-video" />
                    </div>
                    <div class="tab">
                      <label for="brand-tagline" class="font-normal text-xl">Any brand tagline or slogan that you’d like to include in the video?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="brand-tagline" id="brand-tagline" />
                    </div>
                    <div class="tab">
                      <label for="call-to-action" class="font-normal text-xl">Do you have a call-to-action that you’d like to include?</label>
                      <select type="text" class="py-4 px-2  my-4 w-full bg-white border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="call-to-action" id="call-to-action">
                        <option value="">Choose</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                    <div class="tab">
                      <label for="call-to-action-if-yes" class="font-normal text-xl">If Yes, the call-to-action will be...?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="call-to-action-if-yes" id="call-to-action-if-yes" />
                    </div>
                    <div class="tab">
                      <label for="reference-video" class="font-normal text-xl">Is there any reference videos or styles that you would like us to refer for this production?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="reference-video" id="reference-video" />
                    </div>
                    <div class="tab">
                      <label for="offering-better" class="font-normal text-xl">To know your offering better please suggest any other web link we should refer to?
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="offering-better" id="offering-better" />
                    </div>
                    <div class="tab">
                      <label for="competitors" class="font-normal text-xl">Name two of your direct competitors.
                      </label>
                      <input type="text" class="py-4 px-2  my-4 w-full border-b-2 border-teal-400 font-hairline text-xl focus:outline-none" name="competitors" id="competitors" />
                    </div>
                    <div class="tab">
                      <label for="did_we_miss_something" class="font-normal text-xl">Did we miss something?
                      </label>
                      <br>
                      <textarea rows="4" cols="80" name="did_we_miss_something">Enter Your Message Here</textarea>
                    </div>
                    <div class="flex justify-between lg:mt-24 lg:mx-24">
                      <div class="p-2 uppercase text-3xl text-black" onclick="nextPrev(-1)">
                        <span id="prevBtn" class="lg:ml-4 mb-4 pointer-cursor text-white mr-2 mt-5 px-8 py-2 font-bold uppercase shadow-xl rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
                          < Previous
                        </span>
                      </div>
                      <div class="p-2 uppercase text-3xl text-black" onclick="nextPrev(1)" id="next_btn_main_div">
                        <span id="nextBtn" class="lg:ml-4 mb-4 pointer-cursor text-white mr-2 mt-5 px-16 py-2 font-bold uppercase shadow-xl rounded-full" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
                          Next >
                        </span>
                      </div>
                    </div>
                  </form>');
            };
            ?>
          </div>
        </div>
      </section>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = document.getElementsByClassName("tab");
      var totalSteps = x.length;
      growProgressBar(n, totalSteps);
      x[n].style.display = "block";
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == x.length - 1) {
        document.getElementById("next_btn_main_div").innerHTML =
          "<input id='send' name='submit' type='submit' value='submit' class='lg:ml-4 mb-4 pointer-cursor text-white mr-2 px-16 font-bold uppercase shadow-xl rounded-full' style='background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)'></input>";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next >";
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
      pb.style.width = eachStep + "%";
    }

    document.addEventListener('keydown', function(e) {
      switch (e.keyCode) {
        case 37:
          nextPrev(-1);
          break;
        case 38:
          alert('up');
          break;
        case 39:
          nextPrev(1);
          break;
        case 40:
          alert('down');
          break;
        case 13:
          //console.log("Enter pressed");
          //document.getElementById("regForm").submit();
          break;
      }
    });
  </script>
</body>
<?php include('footer.php') ?>
