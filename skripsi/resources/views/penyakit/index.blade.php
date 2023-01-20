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
                <h1 class="h4 text-gray-900 mb-4">Daftar Penyakit</h1>
            </div>
        </div>
        <div class="col-lg-4">
            <a href="{{route('tambahpenyakit')}}" class="btn btn-outline-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    </div>    
@else
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Penyakit</h1>
            </div>
        </div>
        </div> 
@endif

@foreach ($data as $item)
<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
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
@endsection
