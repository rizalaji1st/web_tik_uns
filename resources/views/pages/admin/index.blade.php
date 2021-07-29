@extends('layouts.admin')
@section('title','Beranda admin')
@section('content-header', 'Beranda admin')
@section('route-first','Admin')
@section('route-second','Beranda')
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Selamat datang {{$user->name}}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Selamat datang di dashboard admin web TIK UNS
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection