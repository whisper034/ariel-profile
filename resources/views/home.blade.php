<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariel's Blog | Home</title>
    <link rel="stylesheet" href="{{URL::asset('css/home.css')}}">
</head>
<body>
<h1 style="text-align: center;">Tabel Mahasiswa</h1>
<table style="width: 100%;">
    <colgroup>
        <col style="width: 40%;">
        <col style="width: 7%;">
    </colgroup>
    <tbody>
    <tr>
        <td style="font-weight: bold; text-align: center;">Nama Mahasiswa</td>
        <td style="font-weight: bold; text-align: center;">IPK</td>
        <td style="font-weight: bold; text-align: center;">Mata Kuliah</td>
    </tr>
    @foreach($students as $studentKey => $studentValue)
        <tr>
            <td>{{ $studentValue->nama }}</td>
            <td style="text-align: center;">{{ $studentValue->Ipk->ipk }}</td>
            <td>
                <ul>
                    @php($index = 1)
                    @foreach($studentValue->MataKuliah as $mataKuliahKey => $mataKuliahValue)
                        @if($index == sizeof($studentValue->MataKuliah))
                            <li>{{ $mataKuliahValue->mata_kuliah }}</li>
                        @else
                            <li>{{ $mataKuliahValue->mata_kuliah }}</li>
                            <br>
                        @endif

                        @php($index++)
                    @endforeach
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
