@extends('master.content')
@section('content')

<body class="bg-gradient-light">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">
                
                <form method="POST" action="{{ url('/updategejala/' . $data['id_gejala']) }}">
                    @csrf
                    @method('PUT')
                
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Gejala</h1>
                            </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">Nama Atribut
                                        <p>{{ $data->nama_atribut}}</p>
                                        {{-- <select name="atribut" id="" class="form-control form-control-user">
                                            @foreach ($data as $item)
                                            <option value="{{$item['atribut']->first()}}">{{$item['atribut']->nama_atribut}}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        Gejala
                                        <input id="name" type="text" class="form-control form-control-user" placeholder="Nama" name="nama_gejala" value="{{$data->nama_gejala}}" required autocomplete="name">
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
@endsection