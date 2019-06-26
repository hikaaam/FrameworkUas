@extends('atemplate')
@section('head')
    
<title>CKEditor</title>
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
@endsection
@section('main')


     <!--main content start-->
     <section id="main-content">
      
   
        
            <section class="wrapper site-min-height">
            <div>
                <h4><i class="fa fa-angle-right"></i> Judul Article</h4>
                <div class="row mt">
                    <div class="col-sm-6">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="judul">
                    </div>
                </div>      
            </div>
            <br>
            <div>
                <h4><i class="fa fa-angle-right"></i> Gambar Sampul</h4>
                <div class="row mt">
                    <div class="col-sm-6">
                           <input class="btn btn-success" class="form-control" type="file" name="sampul" id="sampul">
                    </div>
                </div>      
            </div>
            <br>
            <div>
                <h4><i class="fa fa-angle-right"></i> Gambar Preview</h4>
                <div class="row mt">
                    <div class="col-sm-6">
                            <input class="btn btn-info" class="form-control" type="file" name="sampul" id="sampul">
                    </div>
                </div>      
            </div>
            <br>
            <div>
                <h4><i class="fa fa-angle-right"></i> Kategori</h4>
                <div class="row mt">
                    <div class="col-sm-6">
                            <input list="category" class="form-control" placeholder="double klik to show list" id="kategori" name="kategori">
                            <datalist id="category">
                              <option value="News">
                              <option value="Tips & Trick">
                              <option value="Review">
                              <option value="Esport">
                            </datalist>
                    </div>
                </div>      
            </div>
            <br>
            <div>
                <h4><i class="fa fa-angle-right"></i> Isi Article</h4>
                <div class="row mt">
                    <div class="col-lg-12">
                            <textarea name="editor1" id="isi"></textarea>
                            <script>
                                    CKEDITOR.replace( 'editor1' );
                            </script>
                    </div>
                </div>  
            </div>       
          </section><!--/wrapper -->
        </section><!-- /MAIN CONTENT -->

    
@endsection
