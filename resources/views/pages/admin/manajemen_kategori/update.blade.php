@extends('layouts.admin')
@section('title','Update Kategori')
@section('manajemenKategoriActive', 'menu-open')
@section('content-header', 'Update Kategori')
@section('route-first','Admin')
@section('route-second','Update Kategori')
@section('content')
    <!-- Default box -->
    <div class="card p-4 row m-4">
        <h3>Update Akun</h3>
        <hr>
        <div class="col-lg-6">
            <form method="POST" action="{{ url('/admin/manajemen-kategori/update/'.$kategori->id.'/store')}}" autocomplete="off">
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$kategori->nama}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection