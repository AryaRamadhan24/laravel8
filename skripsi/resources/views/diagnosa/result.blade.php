@extends('master.content')
@section('content')

<body class="bg-gradient-light">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Hasil Diagnosa</h1>
                            </div>

                            <div class="form-group row">
                                @foreach ($inputan as $item)
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h5>{{$item['atribut']}}</h5>
                                    <ul>
                                        @foreach ($item['kondisi'] as $it)
                                        <li>{{$it}}</li>
                                        @endforeach
                                    </ul>

                                </div>

                                @endforeach
                            </div>
                            <div class="form-group row">
                                
                                    <div class="col-md-12">
                                        <h4>Diagnosa Penyakit</h4>
                                        <h3>{{$response['penyakit']->nama_penyakit}}</h3>
                                        <p>{{$response['penyakit']->penjelasan}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Solusi</h4>
                                        <ul>
                                            @foreach ($response['solusi'] as $item)
                                            <li>{{$item->deskripsi_solusi}}</li>
                                            <p></p>
                                            @endforeach
                                        </ul>
                
                                       
                                    </div>
                                
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <a href="{{ route('diagnosa') }}" class="btn btn-warning btn-user btn-block">
                                        Kembali
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