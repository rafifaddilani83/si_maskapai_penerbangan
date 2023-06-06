@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Bobot Nilai</h3>
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
                            <form id="demo-form2" action="{{ route('bobotnilai.update', $bobotnilai->id_bobotNilai) }}" data-parsley-validate
                                class="form-horizontal form-label-left" method="post">
                                @csrf
                                @method('PUT')
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bobot Nilai
                                        Fasilitas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="middle-name" name="bobot_nilaiFasilitas" value="{{ $bobotnilai->bobot_NilaiFasilitas }}"class="form-control" type="int"
                                            name="middle-name">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bobot Nilai
                                        Harga</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="middle-name" name="bobot_nilaiHarga"value="{{ $bobotnilai->bobot_NilaiHarga }}"class="form-control" type="int"
                                        name="middle-name">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bobot Nilai
                                        Pelayanan</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="middle-name" name="bobot_nilaiPelayanan" value="{{ $bobotnilai->bobot_NilaiPelayanan }}"class="form-control" type="int"
                                        name="middle-name">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bobot Nilai
                                        Kualitas</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="middle-name" name="bobot_nilaiKualitas" value="{{ $bobotnilai->bobot_NilaiKualitas }}"class="form-control" type="int"
                                        name="middle-name">
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
