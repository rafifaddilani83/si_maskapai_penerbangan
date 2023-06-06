@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Nilai Harga</h3>
                </div>


                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('nilaiharga.create') }}">
                            <button class="btn btn-primary"> <i class="fa fa-plus"></i></button>
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
                                        <th>ID Nilai Harga</th>
                                        <th>ID Maskapai</th>
                                        <th>Nilai Kriteria Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilaiharga as $pgw)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_harga }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_maskapai }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->nilai_KriteriaHarga }}</p>
                                        </td>
                                        <td>
                                            <form action="{{ route('nilaiharga.destroy', $pgw->id_harga) }}" method="POST">
                                                <a href="{{ route('nilaiharga.edit', $pgw->id_harga) }}"
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
                {{-- {!! $bobotnilai->links() !!} --}}
            </div>
        </div>
    </div>
<!-- /page content -->
@endsection

