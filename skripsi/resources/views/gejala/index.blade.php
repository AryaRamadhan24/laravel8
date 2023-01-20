@extends('master.content')
@section('content')
   
<div class="row">
@if (Auth::user()->level_id=='2')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Gejala</h1>
            </div>
        </div>
        <div class="col-lg-4">
            <a href="" class="btn btn-outline-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Gejala</a>
        </div>
    </div>    
@else
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Gejala</h1>
            </div>
        </div>
        </div> 
@endif

@endsection
