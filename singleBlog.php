<?php include('header.php') ?>

<body>
  <main class="">
    <div id="app">
      <div class="flex items-center justify-center h-screen" v-if="loader">
        <svg>
          <g>
            <path d="M 50,100 A 1,1 0 0 1 50,0" />
          </g>
          <g>
            <path d="M 50,75 A 1,1 0 0 0 50,-25" />
          </g>
          <defs>
            <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" style="stop-color:#18E8E1;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#AFE776;stop-opacity:1" />
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div v-else>
        <section class="mx-auto w-2/3 pt-20 py-16">
          <div class="w-full">
            <h1 class="text-5xl text-gray-800 font-bold font-sans py-6"> {{ blogSingleArticle.Title }}</h1>
            <div class="flex flex-wrap justify-between">
              <div class="p-4 pl-0">
                <p class="text-gray-800">
                  <strong> Published On </strong> <br>{{ getCreatedDate }}
                </p>
              </div>
              <div class="p-4 pr-0">
                <p class="text-gray-800">
                  <strong>Share</strong>
                </p>
                <div class="flex flex-wrap">
                  <ul class="w-full flex flex-wrap text-creavidsDarkGray justify-between">
                    <li class="pr-2 hover:text-creavidsGreen">
                      <a href="https://www.facebook.com/creavidsvideo/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="pr-2 hover:text-creavidsGreen">
                      <a href="https://twitter.com/creavids1" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="pr-2 hover:text-creavidsGreen">
                      <a href="https://www.instagram.com/creavidsvideo/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="pr-2 hover:text-creavidsGreen">
                      <a href="https://www.youtube.com/channel/UC93uHm5aHDcFFemuStgEeuA" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="pr-2 hover:text-creavidsGreen">
                      <a href="https://in.linkedin.com/company/creavids" target="_blank"> <i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class="text-lg text-gray-700 font-sans py-2" v-if="blogSingleArticle.description">
              {{ blogSingleArticle.description }}
            </h4>
            <div id="blogmd" v-html="$options.filters.marked(blogSingleArticle.Body)">
            </div>
            <div id="videoComponent" class="py-2" v-for="videocomponent in  blogSingleArticle.VideoSection">
              <h1 class="text-center text-creavidsDarkGray text-4xl font-bold font-sans"> {{ videocomponent.VideoTitle }}</h1>
              <iframe :src="videocomponent.VideoLink" class="my-4" width="100%" height="360" frameborder="0" allow="fullscreen" allowfullscreen></iframe>
              <div id="blogmd" v-html="$options.filters.marked(videocomponent.VideoBody)">
              </div>
            </div>
          </div>
        </section>
        <section class="mx-auto w-3/4">
          <h3 class="text-xl font-semibold text-gray-800">More From Creavids</h3>
          <hr class="border-gray-400">
          <div class="flex flex-wrap">
            <div class="sm:full md:1/2 lg:w-2/6 overflow-hidden my-4 px-2 h-auto" v-for="relatedPost in relatedBlogArticle">
              <p class="py-2">Related reads</p>
              <div>
                <a :href="'/singleBlog/' + relatedPost.id" class="">
                  <img class="w-full h-56" :src="api_url + relatedPost.FeaturedImage.url" alt="">
                </a>
                <div class="py-4">
                  <div class="mb-2">
                    <a :href="'/singleBlog/' + relatedPost.id">
                      <h1 class="text-xl" :inner-html.prop="relatedPost.Title"></h1>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.19/marked.min.js"></script>
  <script>
    Vue.filter('truncate', function(value, limit) {
      if (value.length > limit) {
        value = value.substring(0, (limit - 3)) + '...';
      }
      return value
    })
    Vue.filter('marked', function(input) {
      if (input) {
        return marked(input)
      }
    })
    var app = new Vue({
      el: '#app',
      data: {
        relatedBlogArticle: [],
        blogSingleArticle: [],
        showAllPost: false,
        showFullPost: false,
        fullPostIndex: "",
        loader: true,
        postId: <?php echo $_REQUEST['param1'] ?>,
        api_url: '<?php echo getenv('CREAVIDS_API_URI') ?>'
      },
      computed: {
        getCreatedDate: function() {
          if (this.blogSingleArticle) {
            var publishedDate = new Date(this.blogSingleArticle.created_at);
            return publishedDate.toDateString()
          }
        }
      },
      methods: {
        loadSingleBlogArticle: async function() {
          await axios.get(this.api_url + '/blogs/' + this.postId)
            .then(function(response) {
              this.loader = false;
              this.showAllPost = true;
              this.blogSingleArticle = response.data;
              document.title = "Creavids | " + this.blogSingleArticle.Title;
              this.loadRelatedBlogArticle();
            }.bind(this))
        },
        loadRelatedBlogArticle: async function() {
          await axios.get(this.api_url + '/blogs/?categories.categoryname_eq=' + this.blogSingleArticle.categories[0].categoryname)
            .then(function(response) {
              this.loader = false;
              this.showAllPost = true;
              var relatedPostExcludingSelf = response.data.filter(
                function(relatedPosts) {
                  return relatedPosts.id != <?php echo $_REQUEST['param1'] ?>;
                }
              )
              this.relatedBlogArticle = relatedPostExcludingSelf;
            }.bind(this))
        },

      },
      beforeMount: function() {
        this.loadSingleBlogArticle();
      },
    })
  </script>
</body>
<?php include('footer.php') ?>
