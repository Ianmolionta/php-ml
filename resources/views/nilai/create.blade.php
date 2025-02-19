<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url ('example/store')}}" method="POST">
        @csrf
        <label for="IPK">IPK</label>
        <input type="text" name="IPK" id="IPK">
        <br>
        <label for="Jumlah_SKS">Jumlah SKS</label>
        <input type="text" name="Jumlah_SKS" id="Jumlah_SKS">
        <br>
        <label for="kehadiran">Kehadiran</label>
        <input type="text" name="kehadiran" id="kehadiran">
        <br>
        <label for="kelulusan">kelulusan</label>
        <input type="text" name="kelulusan" id="kelulusan">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>