@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Pesawat</h3>
                </div>


                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('pesawat.create') }}">
                            <button class="btn btn-primary"> <i class="fa fa-plus"></i></button>
                        </a>
                        <a href="{{ url('print-pesawat') }}">
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
                                        <th>ID Pesawat</th>
                                        <th>ID Maskapai</th>
                                        <th>Nama Pesawat</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Tanggal Operasional</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesawat as $pgw)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pesawat }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_maskapai }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->nama_pesawat }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->tanggal_pembuatan }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->tanggal_operasional }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->status }}</p>
                                            </td>
                                            <td>
                                                <form action="{{ route('pesawat.destroy', $pgw->id_pesawat) }}" method="POST">
                                                    <a href="{{ route('pesawat.edit', $pgw->id_pesawat) }}"
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
                    {{-- {!! $pesawat->links() !!} --}}
                </div>
            </div>
        </div>
    <!-- /page content -->
@endsection
