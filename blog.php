<?php include('./header.php') ?>

<body class="antialiased bg-grey-200 overflow-x-hidden mx-auto">

	<main class="lg:py-20 items-center">
		<section class="lg:py-24 py-12" id="mainBlog">
			<div class="lg:mx-40">
				<h1 class="text-center my-auto lg:text-6xl text-4xl font-bold
							text-creavidsarkTeal lg:mx-40 mx-20">
					Explore How videos are being used.</h1>
			</div>
		</section>
		<section class="mx-auto max-w-screenFullWidth h-full">
			<div id="app">
				<section class="py-32" v-if="loader">
					<div class="flex flex-wrap	mx-auto">
						<!-- <img src="./Assets/logo.gif" class="mx-auto" alt="Loading-logo"> -->
					</div>
				</section>
				<section v-if="showAllPost" class="lg:pt-16 px-16" id="rowBlog">
					<div class="flex flex-wrap">
						<div class="sm:full md:1/2 lg:w-1/4 overflow-hidden my-4 px-4 h-auto" v-for="blogArticle in this.blogArticles">
							<div class="border border-creavidsTeal">
								<a :href="blogArticle.link" class="">
									<img class="w-full" :src="api_url + blogArticle.FeaturedImage.url" alt="">
								</a>
								<div class="px-6 py-4 border-t border-b border-creavidsTeal">
									<div class="mb-2"><a :href="blogArticle.id">
											<h1 class="font-semibold" :inner-html.prop="blogArticle.Title">
										</a></div>
								</div>
								<div class="px-6 py-4 bg-white text-center">
									<a :href="'http://localhost/singleBlog/' + blogArticle.id" class="mr-2 mt-5 px-4 py-1 no-underline hover:underline text-blue-500 text-base border-2 border-teal-300 hover:shadow-outline rounded-full">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section v-else-if="showFullPost">
					<h1 v-html="blogArticles[0][this.fullPostIndex].title.rendered"></h1>
					<p v-html="blogArticles[0][this.fullPostIndex].content.rendered"></p>
				</section>
			</div>
		</section>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
	<script src="https://unpkg.com/vue-router"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
				blogArticles: [],
				showAllPost: false,
				showFullPost: false,
				fullPostIndex: "",
				loader: true,
				api_url: 'http://localhost:1337'
			},
			methods: {
				loadBlogArticles() {
					axios.get('http://localhost:1337/blogs').then(function(response) {
						this.loader = false;
						this.showAllPost = true;
						this.blogArticles = (response.data)
					}.bind(this))
				},
			},
			created: function() {
				this.loadBlogArticles();
			},
		})
	</script>
</body>
<?php include('./footer.php') ?>
