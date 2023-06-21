<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="crsf-token" >
    <style>
        table.staticv{
            position:relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Pesanan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pesanan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>
                    ID Pesanan
                </th>
                <th>
                    Nama Produk
                </th>

                <th>
                    Nama
                </th>
                <th>
                    Nomor Telepon
                </th>
                <th>
                    Jumlah
                </th>
                <th>
                    Total Harga
                </th>
                <th>
                    Status
                </th>
            </tr>
            <tr>
                 @foreach ($datapes as $item)
                 <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $relatedUsers->name }}</td>
                    <td>{{ $relatedUsers->no_hp }}</td>
                    <td>{{ $item->jumlah_pesanan}}</td>
                    <td>{{ $item->total_harga }}</td>
                    <td>{{ $item->status_bayar}}</td>
                 </tr>

                 @endforeach
            </tr>
        </table>
    </div>
    <script type="text/javascript">
    window.print();
    </script>

</body>
</html>
