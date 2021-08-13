<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<table>
            <tr>
                <th>Nama barang</th>
                <th>Kode barang</th>
                <th>Jumlah barang</th>
                <th>Tanggal input</th>
            </tr>
            @foreach($result as $d)
            <tr>
                <td>{{$d->Nama_barang}}</td>
                <td>{{$d->Kode_barang}}</td>
                <td>{{$d->Jumlah_barang}}</td>
                <td>{{$d->Tanggal}}</td>
            </tr>
            @endforeach
        </table>
        <br><br>
        <a href="/product">
            <button type="button" class="btn btn-default">HOME</button>
        </a>
     
</body>
</html>