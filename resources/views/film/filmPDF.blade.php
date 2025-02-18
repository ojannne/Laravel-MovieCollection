<!DOCTYPE html>
<html>
<head>
    <title>Data Film</title>
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
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Data Film</h1>
    @php 
        $ar_judul = ['No', 'Film', 'Sutradara', 'Genre', 'Release Date', 'Rating', 'Foto'];
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
            @foreach($ar_film as $film)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $film->nama }}</td>
                <td>{{ $film->sutradara }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->release_date }}</td>
                <td>{{ $film->rating }}</td>
                <td>
                    @if(!empty($film->foto))
                        <img src="{{ public_path('images/' . $film->foto) }}" alt="Film Photo">
                    @else
                        <img src="{{ public_path('images/nophoto.jpg') }}" alt="No Photo">
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>