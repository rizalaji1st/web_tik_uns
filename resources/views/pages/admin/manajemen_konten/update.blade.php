@extends('layouts.admin')
@section('title','Manajemen Konten')
@section('manajemenKontenActive', 'menu-open')
@section('content-header', 'Manajemen Konten')
@section('route-first','Admin')
@section('route-second','Manajemen Konten')
@section('content')
    <!-- Default box -->
    <form method="POST" action="{{ url('/admin/manajemen-konten/update/'.$konten->id.'/store')}}" autocomplete="off" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card bg-light">
                <div class="card-header">
                    <h4><i class="fas fa-file-alt"></i> Edit Post</h4>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="{{$konten->judul}}">
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">Isi Konten</label>
                        <textarea name="konten" class="form-control" id="konten">{{$konten->konten}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">-- Select Kategori --</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{$kategori->id}}" @if($kategori->id == $konten->id_kategori) selected @endif>{{$kategori->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="isActive" class="form-label">Apakah Aktif</label>
                        <select name="isActive" id="isActive" class="form-control">
                            <option value="1" selected>Ya</option>
                            <option value="0" @if($konten->is_active == 0) selected @endif>Tidak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="isMain" class="form-label">Apakah Tampil Di Carousel</label>
                        <select name="isMain" id="isMain" class="form-control">
                            <option value="1" selected>Ya</option>
                            <option value="0" @if($konten->is_main == 0) selected @endif>Tidak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Gambar Post (Jika tidak ingin ganti, tidak perlu upload)</label>
                        <input type="file" class="form-control" name="file" id="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('js')
    <script>
    tinymce.init({
      selector: 'textarea',
   });
  </script>
@endsection