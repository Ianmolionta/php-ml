<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nilai</h1>
    <a href="{{url('example/create')}}">tambah data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>IPK</th>
            <th>Jumlah SKS</th>
            <th>Kehadiran (%)</th>
            <th>kelulusan</th>
        </tr>
        @foreach ($nilai as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->IPK }}</td>
            <td>{{ $item->Jumlah_SKS }}</td>
            <td>{{ $item->kehadiran }}</td>
            <td>{{ $item->kelulusan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>