<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Maskapai</title>
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
        <h5 class="mb-2">Laporan Data Maskapai</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>id maskapai</th>
                <th>nama maskapai</th>
                <th>kode maskapai</th>
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
            @endforeach
        </tbody>

    </table>

</body>

</html>
