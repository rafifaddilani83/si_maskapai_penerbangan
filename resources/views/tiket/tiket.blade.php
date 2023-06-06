@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tiket</h3>
                </div>


                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('tiket.create') }}">
                            <button class="btn btn-primary"> <i class="fa fa-plus"></i></button>
                        </a>
                        <a href="{{ url('print-tiket') }}">
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
                                        <th>ID Tiket</th>
                                        <th>ID Pesawat</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Rute</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiket as $pgw)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_tiket }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pesawat }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->tanggal_pesan }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->rute }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->harga }}</p>
                                            </td>
                                            <td>
                                                <form action="{{ route('tiket.destroy', $pgw->id_tiket) }}" method="POST">
                                                    <a href="{{ route('tiket.edit', $pgw->id_tiket) }}"
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
                    {{-- {!! $tiket->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
