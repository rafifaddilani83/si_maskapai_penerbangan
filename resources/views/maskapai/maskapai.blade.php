@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Maskapai</h3>
                </div>


                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('maskapai.create') }}">
                            <button class="btn btn-primary"> <i class="fa fa-plus"></i></button>
                        </a>
                        <a href="{{ url('print-maskapai') }}">
                            <button class="btn btn-primary">CETAK</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ID
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            nama
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            kode_maskapai
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maskapai as $pgw)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_maskapai }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->nama }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->kode_maskapai }}</p>
                                            </td>
                                            <td>
                                                <form action="{{ route('maskapai.destroy', $pgw->id_maskapai) }}" method="POST">
                                                    <a href="{{ route('maskapai.edit', $pgw->id_maskapai) }}"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        <button class="btn btn-info" type="button">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </tbody>
                        </div>
                    </div>
                    {{-- {!! $maskapai->links() !!} --}}
                </div>
            </div>
        </div>
    <!-- /page content -->
@endsection
