@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Bobot Nilai</h3>
                </div>


                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('bobotnilai.create') }}">
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
                                        <th>ID Bobot Nilai</th>
                                        <th>ID Maskapai</th>
                                        <th>Bobot Nilai Fasilitas</th>
                                        <th>Bobot Nilai Harga</th>
                                        <th>Bobot Nilai Pelayanan</th>
                                        <th>Bobot Nilai Kualitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bobotnilai as $pgw)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_bobotNilai }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_maskapai }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->bobot_NilaiFasilitas }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->bobot_NilaiHarga }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->bobot_NilaiPelayanan }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $pgw->bobot_NilaiKualitas }}</p>
                                            </td>
                                            <td>
                                                <form action="{{ route('bobotnilai.destroy', $pgw->id_bobotNilai) }}" method="POST">
                                                    <a href="{{ route('bobotnilai.edit', $pgw->id_bobotNilai) }}"
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
