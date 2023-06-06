@extends('template')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User</h3>
                </div>


                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <a href="{{ route('user1.create') }}">
                            <button class="btn btn-primary"> <i class="fa fa-plus"></i></button>
                        </a>
                        <a href="{{ url('print-user1') }}">
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
                                        <th>ID User</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user1 as $pgw)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_user }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->username }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->email }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pgw->password }}</p>
                                        </td>
                                        <td>
                                            <form action="{{ route('user1.destroy', $pgw->id_user) }}" method="POST">
                                                <a href="{{ route('user1.edit', $pgw->id_user) }}"
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
                {{-- {!! $user1->links() !!} --}}
            </div>
        </div>
    </div>
<!-- /page content -->
@endsection
