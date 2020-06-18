<?php include('header.php') ?>

<body>
  <main class="mx-auto w-2/3 pt-20 py-16">
    <div id="app">
      <section>
        <div>
          <h1 class="text-6xl font-bold font-sans py-6"> {{ blogSingleArticle.Title }}</h1>
          <h4 class="text-lg text-gray-700 font-sans py-2" v-if="blogSingleArticle.description">
            {{ blogSingleArticle.description }}
          </h4>
          <div id="blogmd" v-html="$options.filters.marked(blogSingleArticle.Body)">
          </div>
          <div id="videoComponent" class="py-2" v-for="videocomponent in  blogSingleArticle.VideoSection">
            <h1 class="text-center text-4xl font-bold font-sans"> {{ videocomponent.VideoTitle }}</h1>
            <iframe :src="videocomponent.VideoLink" class="my-4" width="100%" height="360" frameborder="0" allow="fullscreen" allowfullscreen></iframe>
            <div id="blogmd" v-html="$options.filters.marked(videocomponent.VideoBody)">
            </div>
          </div>
        </div>
      </section>
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
      if(input){
        return marked(input)
      }
    })
    var app = new Vue({
      el: '#app',
      data: {
        blogSingleArticle: [],
        showAllPost: false,
        showFullPost: false,
        fullPostIndex: "",
        loader: true,
        postId: <?php echo $_REQUEST['param1'] ?>,
        api_url: 'https://blog.creavids.co'
      },
      methods: {
        loadSingleBlogArticle: async function() {
          await axios.get(this.api_url + '/blogs/' + this.postId)
            .then(function(response) {
              this.loader = false;
              this.showAllPost = true;
              this.blogSingleArticle = response.data;
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
