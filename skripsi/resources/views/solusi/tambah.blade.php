@extends('master.content')
@section('content')

<body class="bg-gradient-light">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">
                <form method="POST" action="{{ url('solusi') }}">
                    @csrf
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Tambah Solusi</h1>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">Nama Penyakit
                                        <select name="penyakit_id" id="" class="form-control form-control-user">
                                            <option value="">pilih penyakit</option>
                                            @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_penyakit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row"  id="target">
                                    <label class="control-label">Solusi</label>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <textarea class="form-control form-control-user" placeholder="Solusi"
                                            name="solusi[]" value="{{ old('solusi') }}" required></textarea>


                                    </div>

                                    @error('solusi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                </div>
                                <div class="row mt-3 mb-3 button-add">
                                    <div class="col-md-2">
                                        <button id="add-target" type="button" class="btn btn-sm btn-success"><span
                                                class="fa far fa-plus"></span> Tambah Solusi</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button id="remove-target" type="button" class="btn btn-sm btn-danger"><span
                                                class="fa far fa-minus"></span> Hapus Solusi</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Tambah') }}
                                        </button>
                                    </div>
                                </div>
                </form>
                <div class="form-group">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <a href="{{ route('gejala') }}" class="btn btn-warning btn-user btn-block">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

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