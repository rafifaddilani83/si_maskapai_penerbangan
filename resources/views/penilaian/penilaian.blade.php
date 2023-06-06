@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Penilaian</h3>
                </div>
                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('penilaian.create') }}">
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
                                        <th>ID Penilaian</th>
                                        <th>ID Maskapai</th>
                                        <th>ID Fasilitas</th>
                                        <th>ID Harga</th>
                                        <th>ID Kualitas</th>
                                        <th>ID Pelayanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penilaian as $pgw)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_penilaian }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_maskapai }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_fasilitas }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_harga }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pelayanan }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_kualitas }}</p>
                                        </td>
                                        <td>
                                            <form action="{{ route('penilaian.destroy', $pgw->id_penilaian) }}" method="POST">
                                                <a href="{{ route('penilaian.edit', $pgw->id_penilaian) }}"
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

