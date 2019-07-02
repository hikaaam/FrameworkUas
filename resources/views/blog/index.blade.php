@extends('layouts.app')
<<<<<<< HEAD


<title>Data blog</title>

@section('content')



    <!--main content start-->
    <section id="main-content">


        <div class="container">
            <section class="wrapper site-min-height">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-success">
                        {{ session('error') }}
                    </div>
                @endif
            </section>

            <a href="{{ route('blog.create') }}" class="btn btn-success">Tambah</a>
            <br><br>
            <div class="row">
                <div class="col-sm-8">
                    <input type="text" id="search" class="form-control" value="{{ !empty($key) ? $key:'' }}">
                </div>

                <div class="col-sm-4">
                    <button type="button" id="btn-search" class="btn btn-success" onclick="search()">Cari</button>
                </div>
            </div>


            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @if (!empty($blogs))
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $blog->judul }}</td>
                                <td>
                                    <img style="width: 100px;" src="{{ asset('images/blog/' . $blog->foto) }}" alt="Foto">
                                </td>
                                <td>
                                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="javascript:void(0)" onclick="deleteData({{$blog->id}})" class="btn btn-info btn-sm">Hapus</a>

                                    <form id="delete_data{{$blog->id}}" action="{{ route('blog.destroy', $blog->id) }}" method="post" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"></button>
                                    </form>
                                    <script>
                                        function deleteData(id){
                                            var y = confirm('Apakah yakin mau menghapus?');
                                            if(y){
                                                $("#delete_data"+id).submit();
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </section><!-- /MAIN CONTENT -->

    <script>
        function search(){
            let key = $("#search").val();
            let url = "{{ route('blog.index') }}" + "?search=" + key;
            location.href = url;
        }
    </script>

=======
<head>
    <title>Blog view</title>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        
        /*----------------------------*\
        post row
        \*----------------------------*/
        .post.post-row:after {
            content: '';
            display: block;
            clear: both;
        }
        .post.post-row .post-img {
            width: 40%;
            float: left;
        }
        .post.post-row .post-body {
            margin-left: calc(40% + 30px);
        }
        .post.post-row .post-meta {
            margin-top: 0px;
        }
        .post.post-row .post-title {
            margin-bottom: 15px;
        }
    </style>
</head>
@section('content')
<div class="section">
		<!-- container -->
		<div class="container">

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
                                    <div class="form-container" >
                                           
                                            <input type="text"  class="form-control" name="search" id="inputSearch">
                                            <button style="position:relative;left:40%;width:25%;margin-top:10px;" type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                                         
                                        </div>
								<div class="section-title">
									<h2>Most Read</h2>
                                </div>
							</div>
                            <!-- post -->
                            @foreach ($blogs as $item)
							<div class="col-md-12">
								<div class="post post-row">
                                <a class="post-img" href="{{ url('/blog/show?id=')}} {{$item->id}}"><img src="images/blog/{{$item->foto}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">                                          
											<span class="post-date">March 27, 2018</span>
										</div>
                                    <h3 class="post-title"><a href="{{ url('/blog/show?id=')}}{{$item->id}}">{{$item->judul}}</a></h3>
                                    {!! $item->isi_berita !!}
									</div>
								</div>
							</div>
                            <!-- /post -->                                
                            @endforeach
                           
							
							<div class="col-md-12">
								<div class="section-row">
                                    <br>
									<button class="btn btn-danger">Load More</button>
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
					
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /section -->
    </div>
    
>>>>>>> 3cc648a5f5bbdeaa9e863a183475bc6177960162
@endsection
