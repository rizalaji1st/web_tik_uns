@extends('layouts.admin')
@section('title','Manajemen Kategori')
@section('manajemenKategoriActive', 'menu-open')
@section('content-header', 'Manajemen Kategori')
@section('route-first','Admin')
@section('route-second','Manajemen Kategori')
@section('content')
    <!-- Default box -->
    <div class="container-fluid card p-4">
        <div>
            <a class="btn btn-success" href="{{url('/admin/manajemen-kategori/create')}}" >Tambah Akun</a>
        </div>
        <hr>
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategoris as $kategori)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$kategori->nama}}</th>
                    <th>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/manajemen-kategori/update/'.$kategori->id)}}">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="sweetDelete('{{$kategori->id}}')">Delete</button> 
                        <form method="POST" action="{{url('/admin/manajemen-kategori/delete/'.$kategori->id)}}" id="delete{{$kategori->id}}">
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

        function sweetDelete(kategori){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete"+kategori).submit();
                } else {
                    swal("Ok");
                }
            });
        }
    </script>
@endsection