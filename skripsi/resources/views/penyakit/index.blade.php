@extends('master.content')
@section('content')

<div class="row">
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
@if (Auth::user()->level_id=='2')
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Penyakit</h1>
            </div>
        </div>
        <div class="col-lg-2">
            <a href="{{route('tambahpenyakit')}}" class="btn btn-outline-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        @foreach ($data as $item)
<!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{$item->nama_penyakit}}</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Action</div>
                    <a class="dropdown-item" href="">Update</a>
                    <a class="dropdown-item" href="">Delete</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            {{$item->penjelasan}}
        </div>
    </div>
@endforeach 
    </div>    
@else
        <!-- DataTales Example -->
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Penyakit</h1>
            </div>
            @foreach ($data as $item)
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">{{$item->nama_penyakit}}</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        {{$item->penjelasan}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endif

 
@endsection
