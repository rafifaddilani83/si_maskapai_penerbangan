<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5 class="mb-2">Laporan Data Admin</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>id Admin</th>
                <th>username</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $pgw)
                <tr>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_admin }}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $pgw->username }}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $pgw->password }}</p>
                    </td>
            @endforeach
        </tbody>

    </table>

</body>

</html>
