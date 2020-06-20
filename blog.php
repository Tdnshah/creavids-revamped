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
				<div class="flex items-center justify-center lg:pt-16 px-16" v-if="loader">
					<svg>
						<g>
							<path d="M 50,100 A 1,1 0 0 1 50,0" />
						</g>
						<g>
							<path d="M 50,75 A 1,1 0 0 0 50,-25" />
						</g>
						<defs>
							<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
								<stop offset="0%" style="stop-color:#41E1F2 ;stop-opacity:1" />
								<stop offset="100%" style="stop-color:#AFE776;stop-opacity:1" />
							</linearGradient>
						</defs>
					</svg>
				</div>
				<div v-else>
					<section class="lg:pt-16 px-16" id="rowBlog">
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
										<a :href="'/singleBlog/' + blogArticle.id" class="mr-2 mt-5 px-4 py-1 no-underline hover:underline text-blue-500 text-base border-2 border-teal-300 hover:shadow-outline rounded-full">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
		</section>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
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
				loader: true,
				api_url: '<?php echo getenv('CREAVIDS_API_URI') ?>'
			},
			methods: {
				loadBlogArticles() {
					axios.get(this.api_url + '/blogs').then(function(response) {
						this.loader = false;
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
