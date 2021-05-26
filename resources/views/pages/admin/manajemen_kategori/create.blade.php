@extends('layouts.admin')
@section('title','Tambah Kategori')
@section('manajemenKategoriActive', 'menu-open')
@section('content-header', 'Tambah Kategori')
@section('route-first','Admin')
@section('route-second','Tambah Kategori')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Tambah Kategori</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-kategori/create/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection