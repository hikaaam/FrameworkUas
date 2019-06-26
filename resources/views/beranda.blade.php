@extends('template')


@section('main')

{{-- slider caurosel --}}
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="     " alt="Los Angeles" width="1100" height="500">
				</div>
				<div class="item">
				  <img src="{{ asset('images/2.png') }} " alt="Chicago" width="1100" height="500">
				</div>
				<div class="item">	
				  <img src="{{ asset('images/3.png') }} " alt="New York" width="1100" height="500">
				</div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			  </a>
</div> 
</div>
<!-- section -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Recent Post</h2>
					</div>
				</div>

				<!-- post -->
				<div class="col-md-4">
					<div class="post">
						<a class="post-img" href="{{ url('/post') }}"><img src=" {{ asset('images/artikel/cyberpunk.jpg') }} " alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-2" href=" {{ url('/post') }} ">News</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="{{ url('/post') }}">CD Project Red : "Cyberpunk 2077 Akan Segara Di Luncurkan"</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="col-md-4">
					<div class="post">
						<a class="post-img" href="{{ url('/post') }}"><img src=" {{ asset('images/artikel/g403.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-3" href="{{ url('/post') }}">Review</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="{{ url('/post') }}">G403 The Best Argonomic Mouse Ever Made?</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="col-md-4">
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src=" {{ asset('images/artikel/endavour.jpg') }} " alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-1" href="category.html">E-sport Info</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="blog-post.html">RRQ Endavour Berhasil Meraih Juara Dunia PBWC</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<!-- section -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- post -->
				<div class="col-md-4">
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src=" {{ asset('images/artikel/apex.jpg') }} " alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-4" href="category.html">Tips & Trick</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="blog-post.html">6 Senjata Terbaik Di Apex Legend</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="col-md-4">
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src=" {{ asset('images/artikel/sekiro.png') }}" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-3" href="category.html">Review</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Is Sekiro Worth To Buy?</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->

				<!-- post -->
				<div class="col-md-4">
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src=" {{ asset('images/artikel/ac.jpg') }} " alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-2" href="category.html">News</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Seri Assassin's Creed Selanjutnya Akan Bertema Viking</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
					
		

			<!-- section -->
		<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12">
									<div class="section-title">
										<h2>Today's Post</h2>
									</div>
								</div>
								<!-- post -->
								<div class="col-md-12">
									<div class="post post-row">
										<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-2" href="category.html">JavaScript</a>
												<span class="post-date">March 27, 2018</span>
											</div>
											<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
										</div>
									</div>
								</div>
								<!-- /post -->
	
								<!-- post -->
								<div class="col-md-12">
									<div class="post post-row">
										<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-2" href="category.html">JavaScript</a>
												<span class="post-date">March 27, 2018</span>
											</div>
											<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
										</div>
									</div>
								</div>
								<!-- /post -->
	
								<!-- post -->
								<div class="col-md-12">
									<div class="post post-row">
										<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-4" href="category.html">Css</a>
												<span class="post-date">March 27, 2018</span>
											</div>
											<h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
										</div>
									</div>
								</div>
								<!-- /post -->
								
								<!-- post -->
								<div class="col-md-12">
									<div class="post post-row">
										<a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-3" href="category.html">Jquery</a>
												<span class="post-date">March 27, 2018</span>
											</div>
											<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
										</div>
									</div>
								</div>
								<!-- /post -->
								
								<div class="col-md-12">
									<div class="section-row">
										<button style="color:white" class="primary-button center-block">Load More</button>
									</div>
								</div>
							</div>
						</div>
	
						<div class="col-md-4">
							<!-- ad -->
							<div class="aside-widget text-center">
								<a href="#" style="display: inline-block;margin: auto;">
									<img class="img-responsive" src="./img/ad-1.jpg" alt="">
								</a>
							</div>
							<!-- /ad -->
							
							<!-- catagories -->
							<div class="aside-widget">
								<div class="section-title">
									<h2>Catagories</h2>
								</div>
								<div class="category-widget">
									<ul>
										<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
										<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
										<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
										<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
									</ul>
								</div>
							</div>
							<!-- /catagories -->
							
							<!-- tags -->
							<div class="aside-widget">
								<div class="tags-widget">
									<ul>
										<li><a href="#">Chrome</a></li>
										<li><a href="#">CSS</a></li>
										<li><a href="#">Tutorial</a></li>
										<li><a href="#">Backend</a></li>
										<li><a href="#">JQuery</a></li>
										<li><a href="#">Design</a></li>
										<li><a href="#">Development</a></li>
										<li><a href="#">JavaScript</a></li>
										<li><a href="#">Website</a></li>
									</ul>
								</div>
							</div>
							<!-- /tags -->

							<div class="col-md-12">
									<!-- post widget -->
									<div class="aside-widget">
										<div class="section-title">
											<h2>Most Read</h2>
										</div>
			
										<div class="post post-widget">
											<a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
											<div class="post-body">
												<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
											</div>
										</div>
			
										<div class="post post-widget">
											<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
											<div class="post-body">
												<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
											</div>
										</div>
			
										<div class="post post-widget">
											<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
											<div class="post-body">
												<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
											</div>
										</div>
			
										<div class="post post-widget">
											<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
											<div class="post-body">
												<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
											</div>
										</div>
									</div>
									<!-- /post widget -->
			

						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /section -->
	
	


				


@endsection
@section('footer')
     <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
@endsection