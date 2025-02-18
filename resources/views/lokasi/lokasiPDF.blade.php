<!DOCTYPE html>
<html>
<head>
    <title>Data Lokasi Bioskop</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Data Lokasi Bisokop</h1>
    @php 
    $ar_judul = ['No', 'Nama', 'Alamat', 'Kota', 'Provinsi', 'Link_maps', 'Kode_pos', 'Action'];
    $no = 1;
    @endphp
    <table>
        <thead>
            <tr style="text-align: center;">
                @foreach($ar_judul as $jdl)
                    <th>{{ $jdl }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
        @foreach($ar_lokasi as $lokasi)
<tr>
<td>{{ $no++ }}</td><td>{{ $lokasi->name }}</td><td>{{ $lokasi->address }}</td><td>{{ $lokasi->city }}</td>
<td>{{ $lokasi->state }}</td> <td>{{ $lokasi->link_maps }}</td> <td>{{ $lokasi->zip_code }}</td>
</tr>
@endforeach

        </tbody>
    </table>
</body>
</html>