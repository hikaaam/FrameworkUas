@extends('layouts.app')


<title>Create blog</title>
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

@section('content')



     <!--main content start-->
     <section id="main-content">


        <div class="container">
            <section class="wrapper site-min-height">
            <div>
                <h4><i class="fa fa-angle-right"></i> Judul Article</h4>
                <div class="row mt">
                    <div class="col-sm-6">
                        {!! Form::open(array('url' =>  url('createblog', [])   ,'method' => 'POST')) !!}


                            {{Form::text("judul",
                                old("judul") ? old("judul") : (!empty($user) ? $user->judul : null),
                                [
                                    "class" => "form-control",
                                    "placeholder" => "judul",
                                ])
                            }}
                    </div>
                </div>
            </div>
            <br>
            <div>
                <h4><i class="fa fa-angle-right"></i> Gambar Sampul</h4>
                <div class="row mt">
                    <div class="col-sm-6">
                           {{Form::file("foto",
                                [
                                    "class" => "btn btn-success"
                                ])
                            }}
                    </div>
                </div>
            </div>

            <br>

            <div>
                <h4><i class="fa fa-angle-right"></i> Isi Article</h4>
                <div class="row mt">
                    <div class="col-lg-12">

                            {{Form::textarea("editor1", old("editor1") ? old("editor1") : (!empty($user) ? $user->editor1 : null),
                                [

                                ])
                            }}
                            <script>
                                    CKEDITOR.replace( 'editor1' );
                            </script>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt">
                <div class="col-lg-12">
                        {{Form::submit('Submit Form',
                        [
                            "class" => "btn btn-success"
                        ])
                    }}
                </div>
            </div>
            {!! Form::close() !!}
          </section><!--/wrapper -->
        </section><!-- /MAIN CONTENT -->
    </div>

@endsection
