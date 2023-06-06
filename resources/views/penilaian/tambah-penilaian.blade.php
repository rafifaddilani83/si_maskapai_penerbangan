@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tambah Penilaian</h3>
                </div>

                {{-- <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <br />
                                <form id="demo-form2" action="{{ route('penilaian.store') }}" data-parsley-validate
                                class="form-horizontal form-label-left" method="post">
                                @csrf
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        Maskapai</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="id_maskapai" id="id_maskapai" required>
                                            @foreach ($maskapai as $hot)
                                            <option value="{{ $hot->id_maskapai }}">
                                                {{ $hot->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        Fasilitas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="id_fasilitas" id="id_fasilitas" required>
                                            @foreach ($fasilitas as $hot)
                                            <option value="{{ $hot->id_fasilitas }}">
                                                {{ $hot->id_fasilitas }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        Fasilitas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="id_fasilitas" id="id_fasilitas" required>
                                            @foreach ($fasilitas as $hot)
                                            <option value="{{ $hot->id_fasilitas }}">
                                                {{ $hot->id_fasilitas }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        Harga</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="id_harga" id="id_harga" required>
                                            @foreach ($harga as $hot)
                                            <option value="{{ $hot->id_harga }}">
                                                {{ $hot->id_harga }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        Pelayanan</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="id_pelayanan" id="id_pelayanan" required>
                                            @foreach ($pelayanan as $hot)
                                            <option value="{{ $hot->id_pelayanan }}">
                                                {{ $hot->id_pelayanan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        Kualitas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="id_kualitas" id="id_kualitas" required>
                                            @foreach ($kualitas as $hot)
                                            <option value="{{ $hot->id_kualitas }}">
                                                {{ $hot->id_kualitas }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        {{-- <button class="btn btn-primary" type="button">Cancel</button> --}}
                                        {{-- <button class="btn btn-primary" type="reset">Reset</button> --}}
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
