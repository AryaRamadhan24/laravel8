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
            <a href="{{route ('tambahgejala')}}" class="btn btn-outline-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Gejala</a>
        </div>
        @foreach ($data)
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
