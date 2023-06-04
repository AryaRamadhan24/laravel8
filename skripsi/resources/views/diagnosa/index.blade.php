@extends('master.content')
@section('content')

<body class="bg-gradient-light">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">
                <form method="POST" action="">
                    @csrf
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Diagnosa</h1>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">Nama Sapi
                                        <input id="name" type="text" class="form-control form-control-user"
                                            placeholder="Nama" name="nama Sapi" value="{{ old('name') }}" required
                                            autocomplete="name">

                                    </div>
                                </div>
                                @foreach ($data as $item)
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Atribut
                                        <input class="form-control form-control-user" type="text" readonly
                                            value="{{$item['atrribut']->nama_atribut}}">
                                        <input type="hidden" name="id_atribut[]"
                                            value="{{$item['atrribut']->id_atribut}}" id="">

                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Kondisi
                                        <select name="gejala[{{$item['atrribut']->id_atribut}}][]"
                                            id="multiple-select-field" required class="form-select" multiple="multiple">
                                            <option value="" selected>Pilih Gejala</option>
                                            @foreach ($item['gejala'] as $it)

                                            <option value="{{$it->id_gejala}}">{{$it->nama_gejala}}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                                @endforeach
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#multiple-select-fields').multiselect({
          includeSelectAllOption: true,
        });
    });
    </script>
    @endsection