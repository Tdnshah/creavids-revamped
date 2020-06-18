<?php include('header.php') ?>

<body>
  <main class="mx-auto w-2/3 pt-20 py-16">
    <div id="app">
      <section>
        <div>
          <h1 class="text-6xl font-bold font-sans py-6"> {{ blogSingleArticle.Title }}</h1>
          <h4 class="text-lg text-gray-700 font-sans py-6" v-if="blogSingleArticle.description">
            {{ blogSingleArticle.description }}
          </h4>
          <div id="blogmd" v-html="compiledMarkdown">
          </div>
          <div id="videoComponent" class="py-10" v-for="videocomponent in  blogSingleArticle.VideoSection">
            <h1 class="text-center text-4xl font-bold font-sans py-6"> {{ videocomponent.VideoTitle }}</h1>
            <iframe :src="videocomponent.VideoLink" class="my-16" width="100%" height="360" frameborder="0" allow="fullscreen" allowfullscreen></iframe>
            <div id="blogmd" v-html="compiledMarkdownVideoBody">
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue-simple-markdown@1.1.4/dist/vue-simple-markdown.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/vue@latest"></script>
  <script src="https://unpkg.com/marked@0.3.6"></script>
  <script>
    Vue.filter('truncate', function(value, limit) {
      if (value.length > limit) {
        value = value.substring(0, (limit - 3)) + '...';
      }
      return value
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
      computed: {
        compiledMarkdown: function() {
          return marked(this.blogSingleArticle.Body, {
            sanitize: true
          });
        },
        compiledMarkdownVideoBody: function() {
          return ""
        }
      },
      methods: {
        loadSingleBlogArticle: async function() {
          await axios.get(this.api_url + '/blogs/' + this.postId)
            .then(function(response) {
              this.loader = false;
              this.showAllPost = true;
              this.blogSingleArticle = response.data;
              console.log(this.blogSingleArticle)
            }.bind(this))
        },
      },
      created: async function() {
        await this.loadSingleBlogArticle();
      },
    })
  </script>
</body>
<?php include('footer.php') ?>
