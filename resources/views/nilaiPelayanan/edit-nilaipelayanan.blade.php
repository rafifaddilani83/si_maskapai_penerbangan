@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Nilai Pelayanan</h3>
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
                            <form id="demo-form2" action="{{ route('nilaipelayanan.update', $nilaipelayanan->id_pelayanan) }}" data-parsley-validate
                                class="form-horizontal form-label-left" method="post">
                                @csrf
                                @method('put')
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                         Maskapai</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="middle-name" name="id_maskapai" value="{{ $nilaipelayanan->id_maskapai }}" class="form-control" type="text"
                                        name="middle-name">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nilai
                                        Kriteria Pelayanan</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="middle-name" name="nilai_KriteriaPelayanan" value="{{ $nilaipelayanan->nilai_KriteriaPelayanan }}" class="form-control" type="text"
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
