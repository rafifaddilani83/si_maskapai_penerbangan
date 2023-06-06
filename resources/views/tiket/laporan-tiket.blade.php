<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Tiket</title>
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
        <h5 class="mb-2">Laporan Data Tiket</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>id Tiket</th>
                <th>Id Pesawat</th>
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
            @endforeach
        </tbody>

    </table>

</body>

</html>
