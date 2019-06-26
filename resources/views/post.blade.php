@extends('template')



        @section('main')
        <div style="background:rgb(51, 51, 51);
         color: #888888;"  >
         

	<!-- Header -->
    <header id="header">

			<!-- Page Header -->
			<div id="post-header" class="page-header">
                <div class="background-img" style="background-image: url('images/logo.png');  ">
                  
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="category.html">Review</a>
								<span class="post-date">March 27, 2018</span>
							</div>
							<h1>Ask HN: Does Anybody Still Use Lorem Ipsum?</h1>
						</div>
					</div>
				</div>
            </div>
        </div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section"  >
			<!-- container -->

				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h3>Lorem Ipsum: when, and when not to use it</h3>
								<p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? That's what is Lorem Ipsum to many—it rubs them the wrong way, all the way. It's unreal, uncanny, makes you wonder if something is wrong, it seems to seek your attention for all the wrong reasons. Usually, we prefer the real thing, wine without sulfur based preservatives, real butter, not margarine, and so we'd like our layouts and designs to be filled with real words, with thoughts that count, information that has value. </p>
								<p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the paint you may slap on your face to impress the new boss is your business. But what about your daily bread? Design comps, layouts, wireframes—will your clients accept that you go about things the facile way? Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no no to forswear forever. Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is merely the symptom of a worse problem to take into consideration.</p>
								<figure class="figure-img">
									<img class="responsive" width="600" height="400" src=" {{ asset('images/post-4.jpg') }} " alt="">
									<figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
								</figure>
								<p>You begin with a text, you sculpt information, you chisel away what's not needed, you come to the point, make things clear, add value, you're a content person, you like words. Design is no afterthought, far from it, but it comes in a deserved second. Anyway, you still use Lorem Ipsum and rightly so, as it will always have a place in the web workers toolbox, as things happen, not always the way you like it, not always in the preferred order. Even if your less into design and more into content strategy you may find some redeeming value with, wait for it, dummy copy, no less.</p>
								<p>There's lot of hate out there for a text that amounts to little more than garbled words in an old language. The villagers are out there with a vengeance to get that Frankenstein, wielding torches and pitchforks, wanting to tar and feather it at the least, running it out of town in shame.</p>
								<p>One of the villagers, Kristina Halvorson from Adaptive Path, holds steadfastly to the notion that design can’t be tested without real content:</p>
								<blockquote class="blockquote">
									I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we’re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.
								</blockquote>
								<p>If that's what you think how bout the other way around? How can you evaluate content without design? No typography, no colors, no layout, no styles, all those things that convey the important signals that go beyond the mere textual, hierarchies of information, weight, emphasis, oblique stresses, priorities, all those subtle cues that also have visual and emotional appeal to the reader. Rigid proponents of content strategy may shun the use of dummy copy but then designers might want to ask them to provide style sheets with the copy decks they supply that are in tune with the design direction they require.</p>
								<h3>Summing up, if the copy is diverting attention from the design it’s because it’s not up to task.</h3>
								<p>Typographers of yore didn't come up with the concept of dummy copy because people thought that content is inconsequential window dressing, only there to be used by designers who can’t be bothered to read. Lorem Ipsum is needed because words matter, a lot. Just fill up a page with draft copy about the client’s business and they will actually read it and comment on it. They will be drawn to it, fiercely. Do it the wrong way and draft copy can derail your design review.</p>
							</div>
							<div class="post-shares sticky-shares">
								<a href="#" onclick="openFormShare()" id="shareIcon" class="share-facebook"><i class="fas fa-share-alt"></i></a>
								<div id="share" style="display: none;">
								<a href="#" onclick="closeFormShare()" class="share-facebook"><i class="fas fa-times"></i></a>
								<a href="#" class="share-twitter"><i class="fab fa-facebook"></i></a>
								<a href="#" class="share-google-plus"><i class="fab fa-twitter"></i></a>
								<a href="#" class="share-pinterest"><i class="fab fa-whatsapp"></i></a>
								</div>
								
							</div>
						</div>

						<!-- ad -->

						<!-- ad -->
						
						<!-- comment -->

								
									<!------ Include the above in your HEAD tag ---------->
	
	<div class="row" style="left:4%; position: relative;">
	<div class="col-sm-12"  id="logout">
		
		<div class="comment-tabs"
		style="width:100%">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
				<li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
				</ul>            
			<div class="tab-content">
				<div class="tab-pane active" id="comments-logout">                
					<ul class="media-list">
						<li class="media">
			
						<div class="media-body">
						
							<div class="well well-lg">
									<div class="pp">	
											<a class="pull-left" href="#">
														<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" 
													 height="50px">
													</a>
													<h4 class="media-uName text-uppercase reviews">Marco </h4>
												</div>
								
								<ul class="media-date text-uppercase reviews list-inline">
								<li class="dd">22</li>
								<li class="mm">09</li>
								<li class="aaaa">2014</li>
								</ul>
								<p class="media-comment">
								Great snippet! Thanks for sharing.
								</p>
								<div class="baten">
								<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
								<a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 1 comments</a>
							</div>
							</div>     
							<div class="collapse" id="replyOne">
									<ul class="media-list">
										<li class="media media-replied">
											<div class="media-body">
								
													<div class="well-reply well-lg">
															<div class="pp">	
																	<a class="pull-left" href="#">
																				<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" 
																			 height="50px">
																			</a>
																			<h4 class="media-uName text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span>Marco </h4>
																		</div>
														
														<ul class="media-date text-uppercase reviews list-inline">
														<li class="dd">22</li>
														<li class="mm">09</li>
														<li class="aaaa">2014</li>
														</ul>
														<p class="media-comment">
														Great snippet! Thanks for sharing.
														</p>
														<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
														</div>  
										</li>
									</ul>  
								</div>
						</div>
						
						</li>          
						
					</ul> 
				</div>
				<div class="tab-pane" id="add-comment">
					<form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Comment</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
							<div class="col-sm-10">                    
								<div class="input-group">
									<div class="input-group-addon">http://</div>
									<input type="text" class="form-control" name="uploadMedia" id="uploadMedia">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">                    
								<button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
							</div>
						</div>            
					</form>
				</div>
				<div class="tab-pane" id="account-settings">
					<form action="#" method="post" class="form-horizontal" id="accountSetForm" role="form">
						<div class="form-group">
							<label for="avatar" class="col-sm-2 control-label">Avatar</label>
							<div class="col-sm-10">                                
								<div class="custom-input-file">
									<label class="uploadPhoto">
										Edit
										<input type="file" class="change-avatar" name="avatar" id="avatar">
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="name" id="name" placeholder="Vilma palma">
							</div>
						</div>
						<div class="form-group">
							<label for="nickName" class="col-sm-2 control-label">Nick name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nickName" id="nickName" placeholder="Vilma">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email" id="email" placeholder="vilma@mail.com">
							</div>
						</div>  
						<div class="form-group">
							<label for="newPassword" class="col-sm-2 control-label">New password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="newPassword" id="newPassword">
							</div>
						</div> 
						<div class="form-group">
							<label for="confirmPassword" class="col-sm-2 control-label">Confirm password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">                    
								<button class="btn btn-primary btn-circle text-uppercase" type="submit" id="submit">Save changes</button>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-10 col-sm-offset-1" id="login">
		<div class="page-header">
			<h3 class="reviews">Leave your comment</h3>
			<div class="logout">
				<button class="btn btn-default btn-circle text-uppercase" type="button" onclick="$('#login').hide(); $('#logout').show()">
					<span class="glyphicon glyphicon-off"></span> Login                    
				</button>                
			</div>
		</div>
		<div class="comment-tabs">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#comments-login" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
				<li><a href="#add-comment-disabled" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
				<li><a href="#new-account" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Create an account</h4></a></li>
			</ul>            
			<div class="tab-content">
				<div class="tab-pane active" id="comments-login">                
					<ul class="media-list">
						<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
						</a>
						<div class="media-body">
							<div class="well well-lg">
								<h4 class="media-heading text-uppercase reviews">Marco</h4>
								<ul class="media-date text-uppercase reviews list-inline">
								<li class="dd">22</li>
								<li class="mm">09</li>
								<li class="aaaa">2014</li>
								</ul>
								<p class="media-comment">
								Great snippet! Thanks for sharing.
								</p>
								<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
								<a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyThree"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
							</div>              
						</div>
						<div class="collapse" id="replyThree">
							<ul class="media-list">
								<li class="media media-replied">
									<a class="pull-left" href="#">
										<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
									</a>
									<div class="media-body">
										<div class="well well-lg">
											<h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h4>
											<ul class="media-date text-uppercase reviews list-inline">
											<li class="dd">22</li>
											<li class="mm">09</li>
											<li class="aaaa">2014</li>
											</ul>
											<p class="media-comment">
											Nice job Maria.
											</p>
											<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
										</div>              
									</div>
								</li>
								<li class="media media-replied" id="replied">
									<a class="pull-left" href="#">
										<img class="media-object img-circle" src="https://pbs.twimg.com/profile_images/442656111636668417/Q_9oP8iZ.jpeg" alt="profile">
									</a>
									<div class="media-body">
										<div class="well well-lg">
											<h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Mary</h4></h4>
											<ul class="media-date text-uppercase reviews list-inline">
											<li class="dd">22</li>
											<li class="mm">09</li>
											<li class="aaaa">2014</li>
											</ul>
											<p class="media-comment">
											Thank you Guys!
											</p>
											<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
										</div>              
									</div>
								</li>
							</ul>  
						</div>
						</li>          
						<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kurafire/128.jpg" alt="profile">
						</a>
						<div class="media-body">
							<div class="well well-lg">
								<h4 class="media-heading text-uppercase reviews">Nico</h4>
								<ul class="media-date text-uppercase reviews list-inline">
								<li class="dd">22</li>
								<li class="mm">09</li>
								<li class="aaaa">2014</li>
								</ul>
								<p class="media-comment">
								I'm looking for that. Thanks!
								</p>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="//www.youtube.com/embed/80lNjkcp6gI" allowfullscreen></iframe>
								</div>
								<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
							</div>              
						</div>
						</li>
						<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lady_katherine/128.jpg" alt="profile">
						</a>
						<div class="media-body">
							<div class="well well-lg">
								<h4 class="media-heading text-uppercase reviews">Kriztine</h4>
								<ul class="media-date text-uppercase reviews list-inline">
								<li class="dd">22</li>
								<li class="mm">09</li>
								<li class="aaaa">2014</li>
								</ul>
								<p class="media-comment">
								Yehhhh... Thanks for sharing.
								</p>
								<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
								<a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 comment</a>
							</div>              
						</div>
						<div class="collapse" id="replyFour">
							<ul class="media-list">
								<li class="media media-replied">
									<a class="pull-left" href="#">
										<img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jackiesaik/128.jpg" alt="profile">
									</a>
									<div class="media-body">
										<div class="well well-lg">
											<h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Lizz</h4>
											<ul class="media-date text-uppercase reviews list-inline">
											<li class="dd">22</li>
											<li class="mm">09</li>
											<li class="aaaa">2014</li>
											</ul>
											<p class="media-comment">
											Classy!
											</p>
											<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
										</div>              
									</div>
								</li>
							</ul>  
						</div>
						</li>
					</ul> 
				</div>
				<div class="tab-pane" id="add-comment-disabled">
					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">×</span><span class="sr-only">Close</span>                        
						</button>
						<strong>Hey!</strong> If you already have an account <a href="#" class="alert-link">Login</a> now to make the comments you want. If you do not have an account yet you're welcome to <a href="#" class="alert-link"> create an account.</a>
					</div>
					<form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Comment</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="addComment" id="addComment" rows="5" disabled></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
							<div class="col-sm-10">                    
								<div class="input-group">
									<div class="input-group-addon">http://</div>
									<input type="text" class="form-control" name="uploadMedia" id="uploadMedia" disabled>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">                    
								<button class="btn btn-success btn-circle text-uppercase disabled" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
							</div>
						</div>            
					</form>
				</div>
			
			</div>
		</div>
	</div>
	</div>


							  

						
	

<!-- comments -->
						
					
						
					</div>
					<!-- /Post content -->

					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" >
								<img class="responsive" width="600" height="400" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('images/lorem.jpg') }}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('images/lorem.jpg') }}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('images/lorem.jpg') }}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('images/lorem.jpg') }}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
								</div>
							</div>
						</div>
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<div class="post post-thumb">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('images/lorem.jpg') }}" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="#">Jquery</a>
										<span class="post-date">March 27, 2018</span>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
								</div>
							</div>

							<div class="post post-thumb">
								<a class="post-img" href="blog-post.html"><img src="{{ asset('images/lorem.jpg') }}" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-2" href="#">JavaScript</a>
										<span class="post-date">March 27, 2018</span>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
								</div>
							</div>
						</div>
						<!-- /post widget -->
						
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
						
						
					</div>
					<!-- /aside -->
					
				</div>
				<!-- /row -->

		</div>
		<!-- /section -->

	
</div>       
@endsection
@section('footer')
<p>&copy; 2019 | Framework Programming Poltek Tegal </p>
@endsection
