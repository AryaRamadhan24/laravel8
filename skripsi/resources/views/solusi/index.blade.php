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
                    <h1 class="h4 text-gray-900 mb-4">Daftar Solusi Penyakit</h1>
                </div>
            </div>
            <div class="col-lg-4">
                <a href="{{route ('solusi.create')}}" class="btn btn-outline-primary btn-rounded btn-fw"><i
                        class="fa fa-plus"></i> Tambah Gejala</a>
            </div>

        </div>
    </div>
</div>
<div class="row">

    <div class="col-12 mb-5">
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Penyakit</th>
                                <th>Solusi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $it)
                            <tr>
                                <td>{{$it->nama_penyakit}}</td>
                                <td>{{$it->deskripsi_solusi}}</td>
                                <td style='white-space: nowrap'>
                                    <a href="{{ url('/solusi/' . $it->id.'/edit') }}">
                                        <div class="btn btn-outline-warning btn-rounded btn-sm"><i
                                                class="fas fa-edit"></i></div>
                                    </a>
                                    <form action="{{ route('solusi.destroy', $it->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-rounded btn-sm"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                    {{-- <a href="{{ url('/solusi/' . $it->id) }}">
                                        <div class="btn btn-outline-danger btn-rounded btn-sm"><i
                                                class="fa fa-trash"></i></div>
                                    </a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    // $("#smartphone:first #remove-kriteria").hide();
        $(document).ready(function() {
            var length = $("#target").length;
            if (length == 1) {
                $("#remove-target").hide();
            }
            $("#add-target").click(function() {
                console.log("tambah");
                var clone = $("#target:first").clone();
                clone.find("input").val("");
                $(".button-add").before(clone);
                length += 1;
                if (length == 1) {
                    $("#remove-target").hide();
                } else {
                    $("#remove-target").show();
                }
            });
            $("#remove-target").click(function() {
                $("#target:last").remove();
                length -= 1;
                if (length == 1) {
                    $("#remove-target").hide();
                } else {
                    $("#remove-target").show();
                }
            });
        })
</script>
@endsection