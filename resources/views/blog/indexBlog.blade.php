@extends('layouts.app')
<head>
    <title>Blog view</title>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>

/*=========================================================
   POST
===========================================================*/
/*----------------------------*\
   post
\*----------------------------*/
.post {
    margin-bottom: 40px;
}
.post .post-img {
    display: block;
    -webkit-transition: 0.2s opacity;
    transition: 0.2s opacity;
}
.post .post-img:hover, .post .post-img:focus {
    opacity: 0.9;
}
.post .post-img > img {
    width: 100%;
}
.post .post-meta {
    margin-top: 15px;
    margin-bottom: 15px;
}
.post-meta .post-category {
    font-size: 13px;
    text-transform: uppercase;
    padding: 3px 10px;
    font-weight: 600;
    border-radius: 2px;
    margin-right: 15px;
    color: #FFF;
    background-color: #212631;
    -webkit-transition: 0.2s opacity;
    transition: 0.2s opacity;
}
.post-meta .post-category:hover, .post-meta .post-category:focus {
    text-decoration: none;
    opacity: 0.9;
}
.post-meta .post-category.cat-1 {
    background-color: #4BB92F;
}
.post-meta .post-category.cat-2 {
    background-color: #ff8700;
}
.post-meta .post-category.cat-3 {
    background-color: #8d00ff;
}
.post-meta .post-category.cat-4 {
    background-color: #0078ff;
}
.post-meta .post-date {
    font-size: 13px;
    font-weight: 600;
}
.post .post-title {
    font-size: 18px;
    margin-bottom: 0px;
}
.post-tags li {
    display:inline-block;
    margin-right:3px;
    margin-bottom:5px;
}
.post-tags li a {
    display:block;
    color:#fff;
    background-color: #212631;
    padding:3px 10px;
    font-weight:600;
    border-radius:2px;
    -webkit-transition:0.2s opacity;
    transition:0.2s opacity;
}
    </style>
</head>
@section('content')
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-10">
					<div class="section-title">
                        <h2>Recent Post</h2>
                        <div class="header-icons">

                            <div class="form-popup" id="myForm">
                                <div  class="form-container">
                                    <input type="text" name="search" id="inputSearch">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </div>

                            </div>
					</div>
				</div>

                <!-- post -->
                @foreach ($blogs as $item)


				<div class="col-md-4">
					<div class="post">
                    <a class="post-img" href="{{ url('blog/show?id=')}}{{ $item->id }}"><img src="{{ asset('images/blog/'.$item->foto) }} " alt=""></a>
						<div class="post-body">
							<div class="post-meta">
							<span class="post-date">{{ $item->created_at }}</span>
							</div>
                        <h3 class="post-title"><a href="{{ url('blog/show?id=')}}{{ $item->id }}">{{ $item->judul }}</a></h3>
						</div>
					</div>
				</div>
				<!-- /post -->
                @endforeach
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
@endsection
