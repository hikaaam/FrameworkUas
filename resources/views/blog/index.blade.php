@extends('layouts.app')


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

@endsection
