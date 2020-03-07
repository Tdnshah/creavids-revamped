<?php include('./header.php') ?>

<body class="antialiased bg-grey-200 overflow-x-hidden mx-auto">
  <?php include "./sendMail.php" ?>
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
            <?php

            if ($newPage) {
              echo ('<form action="" method="POST" class="p-6">
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

              <input type="text" class="py-4 px-2 my-4 w-full border-b-4 border-teal-400 font-hairline text-xl" name="form_message" placeholder="We\'re listening...." />

              <input id="send" name="submit" type="submit" value="submit" class=" w-1/2 mt-5 ml-40 uppercase text-5xl tracking-widest text-white shadow-2xl" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
              </input>
            </form>');
            } elseif (!$newPage && $messageSuccessful) {

              echo ("<p class='text-center text-xl p-4 text-creavidsGreen font-semibold'>Thank you for contacting Creavids.co. <br> You Message has been successfully send and our executive will connect with you soon.");
            } elseif (!$newPage && $messageFailed) {
              '<p class="text-center text-red-600 text-xl"> Seems Like something went wrong please try again</p>
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

              <input type="text" class="py-4 px-2 my-4 w-full border-b-4 border-teal-400 font-hairline text-xl" name="form_message" placeholder="We\'re listening...." />

              <input id="send" name="submit" type="submit" value="submit" class=" w-1/2 mt-5 ml-40 uppercase text-5xl tracking-widest text-white shadow-2xl" style="background: linear-gradient(90deg, #41e1f2 0%, #AFE776 100%)">
              </input>
            </form>';
            }
            ?>
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
</body>
<?php include('./footer.php') ?>
