@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tambah Nilai Kualitas</h3>
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
                            <form id="demo-form2" action="{{ route('nilaikualitas.store') }}" data-parsley-validate
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
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nilai
                                    Kriteria Kualitas</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="middle-name" name="nilai_KriteriaKualitas" class="form-control" type="int"
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
