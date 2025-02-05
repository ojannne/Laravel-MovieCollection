@php 
    $no = 1;
    // Array Scalar
    $s1 = ['nama' => 'Fawwaz', 'nilai' => 90];
    $s2 = ['nama' => 'Inaya', 'nilai' => 89];
    $s3 = ['nama' => 'Bedu', 'nilai' => 59];
    $s4 = ['nama' => 'Mimin', 'nilai' => 80];
    $judul = ['No','Nama','Nilai','Keterangan'];
    // Array Associative
    $santri = [$s1,$s2,$s3,$s4];    
@endphp 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
</head>
<body>
    <h3 align="center">Daftar Nilai Santri</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <tr bgcolor="aqua">
                @foreach($judul as $jdl) 
                    <th>{{ $jdl }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($santri as $san)
                @php 
                    $ket = ($san['nilai'] >= 60) ? 'Lulus' : 'Gagal';
                    $warna = ($no % 2 == 0) ? 'greenyellow' : 'Yellow';
                @endphp     
                <tr bgcolor="{{ $warna }}">
                    <td>{{ $no++ }}</td>
                    <td>{{ $san['nama'] }}</td>
                    <td>{{ $san['nilai'] }}</td>
                    <td>{{ $ket }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>