<?php include('./header.php'); ?>

<body class="antialiased bg-grey-200 overflow-x-hidden mx-auto">
  <main class="lg:py-20">
    <section class="bg-white py-10">
      <h1 class="py-2 px-2 lg:px-64 text-center text-base lg:text-3xl font-semibold text-gray-700">
        Explore videos that get you the eyeballs you deserve. <br />Every
        video tells a story and fulfills a purpose.
      </h1>
      <h1 class="py-2 px-4 lg:px-64 text-center text-base lg:text-3xl font-semibold text-teal-400">
        Find videos that suits your vision,<br />mission, product, and
        service.
      </h1>
    </section>

    <section class="mx-auto max-w-screenFullWidth">
      <div id="appexplore">
        <section>
          <div class="flex flex-wrap mx-auto p-5 lg:p-10">
            <ul class="flex flex-wrap mx-auto justify-center">
              <li class="my-3 lg:my-5" v-for="(catName , index) in this.catName">
                <a class="border-2 cursor-pointer border-teal-300 text-gray-800 mr-1 lg:mr-2 lg:mt-5 px-1 lg:px-4 py-2 text-xs lg:text-base font-semibold lg:font-bold uppercase hover:shadow-outline rounded-full" :class="{ 'active' : index == active }" v-on:click="filterVideos(catName, index)">{{ catName }}</a>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="flex flex-wrap mx-auto p-5 lg:p-10" id="videoShowCase">
            <div class="px-2 mb-5 w-full lg:w-4/12" v-if="filteredVideo.length == 0" v-for="(exploreVideo , index) in this.paginated">
              <div class="h-56 bg-teal-200">
                <iframe class="w-full h-full" :src="getId(exploreVideo.link)" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="px-2 mb-5 w-full lg:w-4/12" v-if="filteredVideo.length > 0" v-for="(exploreVideo , index) in this.filteredVideo">
              <div class="h-56 bg-teal-200">
                <iframe class="w-full h-full" :src="getId(exploreVideo.link)" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div v-if="this.filteredVideo.length == 0" class="flex p-5 justify-center">
            <!-- <a
                class="border-2 border-teal-300 text-gray-800 px-4 py-2 ml-5 font-bold uppercase hover:shadow-outline rounded-full"
                >{{ index -1 }}
              </a> -->
            <a class="border-2 border-teal-300 text-gray-800 px-4 py-2 ml-5 font-bold uppercase hover:shadow-outline rounded-full" v-on:click="letsPage(index)">Load More
            </a>

            <!-- <a
                class="border-2 border-teal-300 text-gray-800 px-4 py-2 ml-5 font-bold uppercase hover:shadow-outline rounded-full"
                >{{ index + 1 }}
              </a> -->
          </div>
        </section>
      </div>
    </section>
  </main>
  <?php include('./footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
  <script src="https://unpkg.com/vue-router"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    var app = new Vue({
      el: "#appexplore",
      data: {
        exploreVideos: [{
            link: "https://www.youtube.com/watch?v=dIgHoJrZ3jM",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/gU6Jfz2jOHA",
            catName: "Promo Video"
          },
          {
            link: "https://www.youtube.com/watch?v=twksU992k1g",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/nbWIPVE8zFE",
            catName: "Intro videos"
          },
          {
            link: "https://www.youtube.com/watch?v=dl4OzGHNaGk",
            catName: "How-to Videos"
          },
          {
            link: "https://youtu.be/s34H-yujHIg",
            catName: "Overview videos"
          },
          {
            link: "https://youtu.be/e-Wc1opgvAM",
            catName: "Teaser"
          },
          {
            link: "https://youtu.be/nILddrpL08A",
            catName: "Teaser"
          },
          {
            link: "https://youtu.be/SE-ZB_3DgXU",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/RhZ7CMYrpIw",
            catName: "Intro videos"
          },
          {
            link: "https://youtu.be/Ojq69EUJHlw",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/BmmpSu2NBc0",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/__yfks8BK2A",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/LozLbtprTxc",
            catName: "Promo Video"
          },
          {
            link: "https://youtu.be/2AWxWixGnuk",
            catName: "UI / UX Videos"
          },
          {
            link: "https://youtu.be/OndrivAxUwo",
            catName: "Intro videos"
          },
          {
            link: "https://youtu.be/zGblNqC8u7E",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/l4OSZUHIyoA",
            catName: "Intro Videos"
          },
          {
            link: "https://youtu.be/Pkit0Pa4GdI",
            catName: "How-to Videos"
          },
          {
            link: "https://youtu.be/CirxoFsdl30",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/15K0-2dX05g",
            catName: "Teaser"
          },
          {
            link: "https://youtu.be/-0e0Bz7gGPA",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/S0oNO3mbBE8",
            catName: "Intro videos"
          },
          {
            link: "https://youtu.be/Eb8xkDi_PUg",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/jduVN643Prc",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/w4nDwLfsU9k",
            catName: "How-to Videos"
          },
          {
            link: "https://youtu.be/ARDXpnMxaAk",
            catName: "How-to Videos"
          },
          {
            link: "https://youtu.be/w4nDwLfsU9k",
            catName: "How-to Videos"
          },
          {
            link: "https://youtu.be/z-ArfMqMgXM",
            catName: "Promo Video"
          },
          {
            link: "https://youtu.be/DDJILfxF5_k",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/P6ftiB5x4Zk",
            catName: "Kinetic Typography"
          },
          {
            link: "https://youtu.be/JynwiU2D_K0",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/2LPelF7nA9w",
            catName: "Intro videos"
          },
          {
            link: "https://youtu.be/MG1MvZr3XqA",
            catName: "Intro videos"
          },
          {
            link: "https://youtu.be/Ey1gijdaWb0",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/Y2UMIxm4o7Q",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/qbIP1TEX33Q",
            catName: "Overview videos"
          },
          {
            link: "https://youtu.be/sQT_J1a6ejA",
            catName: "intro videos"
          },
          {
            link: "https://youtu.be/TgRK3dAoCaY",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/qeJn8YgDIlw",
            catName: "Intro videos"
          },
          {
            link: "https://youtu.be/z1NydoKd_Q0",
            catName: "Overview Videos"
          },
          {
            link: "https://youtu.be/ixerXWJrDr0",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/g5FHjOKV1-E",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/Cf9CdFVse-w",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/sTQuGoBeKto",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/X3Gj2nQZCNM",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/2L8-lrmzeWk",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/uWbRdqdKups",
            catName: "App Videos"
          },
          {
            link: "https://youtu.be/OCeg_i782f0",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/_jxgYIyYpW0",
            catName: "Promo Video"
          },
          {
            link: "https://youtu.be/dFVlltsabVI",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/gIVskvgzG9M",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/FHOwJgubteI",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/sraSi56fPeI",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/43Q4sIwSRGA",
            catName: "Explainer Videos"
          },
          {
            link: "https://youtu.be/TQbtjsnUE3M",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=T2WdjQqGqTY",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=_AEzIqwOHI8",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=m07kbY1F0aY",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=uxAz1vPWY6Y",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=M4AhvcxlaqM&t=3s",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=qWrKEhq2OYk",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=OwjUKbi4Sws",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=p1H6onrE1ic",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=eYFOKwcv-_k",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=c9KtKP_2CYQ",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=65X3ybXCRZ0",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=WEFvkmVbSJE",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=TFsriR2Zwks",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=JTbGTG_H4oc&t=142s",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=VfzfQaPcd7U",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=PUICpG7gUHw",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=b6MSjnKHM_s&feature=youtu.be",
            catName: "Overview video"
          },
          {
            link: "https://youtu.be/NtjDcErncxc",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=fnLxFvPHdLY",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=lSlF1Dkxd8w",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=4I7lViv7cbo",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=KxjcXaz3a0I",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=qWXUVwBeFsQ",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=gZGJDWwxc1Q",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=o-MHs8AuL4A&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=H_x0MuPLrKg",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=7ufXI3PC6io",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=-YnVmFy7_aA",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=i3EPWZA2-x8",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=0RhSytysl5U",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=MxkYa9XCvBQ",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=zeg4qTnYOpw",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=X7HNWwZo51Y&feature=youtu.be",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=ny3AGHM7uJo&feature=youtu.be",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=aafweu96Zgw&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=sPURnGDDGWI",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=0lA1lanLLgk&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=Mk11bCrbHnc",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=nUBv4kqGZgI",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=DNpmNbOALuk&feature=youtu.be",
            catName: "3D Product Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=_onneAgyDNI&feature=youtu.be",
            catName: "Infographic Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=c4WPWBLPGQU",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=c0-xpHD04fE",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=IA9kNUnern8",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=GVOCygm5Aag",
            catName: "Service Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=PP6DivpvHso",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=Jz16kC1sCbg&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=r3rcjAh5qro&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=dchHehGDfkc&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=p3I886tHw6I&feature=youtu.be",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=0ZUrvFV2_R4&feature=youtu.be",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=lysDygS9eBc",
            catName: "App Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=hSfd-mEjW4I",
            catName: "Education Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=20wr6x4COmU&list=PLeDzLGmrDaawLuX21HRVSPHh851tNzhFb&index=5",
            catName: "Infographic Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=jW4Fdm5nMro&list=PLeDzLGmrDaawLuX21HRVSPHh851tNzhFb&index=6",
            catName: "Infographic Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=rSCPf2hmmc0&list=PLeDzLGmrDaawLuX21HRVSPHh851tNzhFb&index=11",
            catName: "Infographic Videos"
          },
          {
            link: "https://vimeo.com/378940655",
            catName: "Explainer Videos"
          },
          {
            link: "https://vimeo.com/378130291",
            catName: ""
          },
          {
            link: "https://vimeo.com/378096022",
            catName: ""
          },
          {
            link: "https://vimeo.com/366223181",
            catName: ""
          },
          {
            link: "https://vimeo.com/374431717",
            catName: "Kinetic Typography"
          },
          {
            link: "https://vimeo.com/373157874",
            catName: ""
          },
          {
            link: "https://player.vimeo.com/video/371347312",
            catName: ""
          },
          {
            link: "https://www.youtube.com/watch?v=q9KitWvMsQI&feature=emb_logo",
            catName: "Infographic Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=Rh_XxVvuRBQ",
            catName: "Infographic Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=HoDz6FIJXiA",
            catName: "Infographic Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=cKz_E7L-CBw",
            catName: "Explainer Videos"
          },
          {
            link: "https://www.youtube.com/watch?v=_GtVA3ThqgY",
            catName: "Education Videos"
          },
          {
            link: "https://vimeo.com/344703414",
            catName: "Education Videos"
          },
          {
            link: "https://vimeo.com/360599675",
            catName: "Education Videos"
          },
          {
            link: "https://vimeo.com/118899068",
            catName: "Education Videos"
          }
        ],
        catName: [
          "Explainer Videos",
          "Intro Videos",
          "App Videos",
          "Promo Video",
          "UI / UX Videos",
          "How-to Videos",
          "Service Videos",
          "Infographic Videos",
          "3D Product Videos",
          "Educational Videos",
          "Kinetic Typography",
          "Social Media Ads",
          "Landing Page Videos",
          "3D Walkthrough Video",
          "Teaser",
          "Whiteboard",
          "Minimalistic",
          "Overview"
        ],
        filteredVideo: [],
        paginated: [],
        loader: true,
        active: 0,
        index: 1
      },
      methods: {
        getId(url) {
          const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
          const match = url.match(regExp);
          if (match && match[2].length === 11) {
            $actualUrl = "www.youtube.com/embed/" + match[2];
            return $actualUrl;
          } else {
            return null;
          }
        },
        filterVideos($videoCatName, $index) {
          this.filteredVideo = [];
          (this.active = ""), (this.active = $index);
          this.exploreVideos.forEach(element => {
            if (element.catName == $videoCatName) {
              this.filteredVideo.push(element);
            }
          });
        },
        showAllVideos() {
          this.filteredVideo = [];
        },
        paginate(array, index, size) {
          // transform values
          index = Math.abs(parseInt(index));
          index = index > 0 ? index - 1 : index;
          size = parseInt(size);
          size = size < 1 ? 1 : size;

          // filter
          return [
            ...array.filter((value, n) => {
              return n >= index * size && n < (index + 1) * size;
            })
          ];
        },
        letsPage(index) {
          this.paginated = this.paginate(this.exploreVideos, index, 15);
          this.index++;
          var videoShowCaseDiv = document.getElementById("videoShowCase");
          videoShowCaseDiv.classList.remove("animated");
          videoShowCaseDiv.classList.remove("fadeInUpBig");
          videoShowCaseDiv.className += " animated fadeInUpBig";
        }
      },
      created() {
        this.letsPage(this.index);
      }
    });
  </script>
</body>

</html>
