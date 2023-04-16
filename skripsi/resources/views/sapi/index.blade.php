@extends('master.content')
@section('content')
    {{-- table --}}
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Sapi</h1>
            </div>
        <div class="col-lg-4">
            <a href="{{route ('tambahsapi')}}" class="btn btn-outline-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
            <br>
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

    </div>
    {{-- end table --}}

@endsection
