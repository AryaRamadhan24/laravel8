@extends('master.content')
@section('content')

<body class="bg-gradient-light">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">
                <form method="POST" action="{{ url('/updatepenyakit/' . $data->id) }}">
                    @csrf
                    @method('PUT')
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Penyakit</h1>
                            </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">Nama Penyakit
                                        <input id="namapenyakit" type="text" class="form-control form-control-user" placeholder="Nama Penyakit" name="nama_penyakit" value="{{ $data->nama_penyakit }}" required autocomplete="name">
                                           
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        Penjelasan Penyakit
                                        <input id="name" type="text" class="form-control form-control-user" placeholder="Nama" name="penjelasan" value="{{ old('name') }}" required autocomplete="name">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <a href="{{ route('penyakit') }}" class="btn btn-warning btn-user btn-block">
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
@endsection