@extends('master.content')
@section('content')
@if (Auth::user()->level_id=='2')
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-12">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Daftar Gejala</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="{{route ('tambahgejala')}}" class="btn btn-outline-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Gejala</a>
                </div>
                
            </div>    
        </div>
    </div>
    <div class="row">
    @foreach ($datas as $items)
        <div class="col-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">{{$items['atribut']->nama_atribut}}</h6>
                </div>  
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Gejala</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                               @foreach ($items['gejala'] as $it)
                               <tr>
                                    <td>{{$it->nama_gejala}}</td>       
                                    <td>
                                        <a href="{{ url('/editgejala/' . $it->id_gejala) }}"><div class="btn btn-outline-warning btn-rounded btn-sm"><i class="fas fa-edit"></i></div></a>
                                        <a href="{{ url('/deletegejala/' . $it->id_gejala) }}"><div class="btn btn-outline-danger btn-rounded btn-sm"><i class="fa fa-trash"></i></div></a>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card-header py-2">
            <h6 class="m-0 font-weight-bold text-primary">{{$items->nama_atribut}}</h6>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Sapi</th>
                        <th>Kondisi sapi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href=""><div class="btn btn-outline-warning btn-rounded btn-sm"><i class="fas fa-edit"></i></div></a>
                            <a href=""><div class="btn btn-outline-danger btn-rounded btn-sm"><i class="fa fa-trash"></i></div></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
        @endforeach
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
