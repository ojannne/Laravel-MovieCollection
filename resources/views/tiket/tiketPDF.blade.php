<!DOCTYPE html>
<html>
<head>
    <title>Data Tiket</title>
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
    <h1>Data Tiket</h1>
    @php 
        $ar_judul = ['No','Nama','Film','Tanggal Tayang','Jumlah','harga'];
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
        @foreach($ar_tiket as $tiket)
<tr>
<td>{{ $no++ }}</td><td>{{ $tiket->name }}</td><td>{{ $tiket->event }}</td><td>{{ $tiket->event_date }}</td>
<td>{{ $tiket->quantity }}</td><td>{{ $tiket->price }}</td>
</tr>
@endforeach

        </tbody>
    </table>
</body>
</html>