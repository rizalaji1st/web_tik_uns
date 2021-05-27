@extends('layouts.admin')
@section('title','Manajemen Konten')
@section('manajemenKontenActive', 'menu-open')
@section('content-header', 'Manajemen Konten')
@section('route-first','Admin')
@section('route-second','Manajemen Konten')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-konten/create')}}" >Tambah Post</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aktif</th>
                <th scope="col">Main</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kontens as $konten)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$konten->judul}}</th>
                    <th>{{$konten->email}}</th>
                    <th>{{$konten->is_active}}</th>
                    <th>{{$konten->is_main}}</th>
                    <th>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-akun/update/'.$konten->id)}}">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$konten->id}}')">Delete</button> 
                        <form method="POST" action="{{url('/admin/manajemen-akun/delete/'.$konten->id)}}" id="delete{{$konten->id}}">
                            @csrf
                        </form>
                    </th>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        function sweetDelete(konten){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+konten).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection