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
    <div class="container">
    <h2>Inventory Management</h2>
        <form action="{{URL::to('/insertOrEditProduct')}}" method = "post">
        {{csrf_field()}}
        <div class="form-group">
                <input type="hidden" class="form-control" id="id" placeholder="Masukan nama barang" name="id" value ='-1'>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama barang:</label>
                <input type="text" class="form-control" id="nama_barang" placeholder="Masukan nama barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode barang:</label>
                <input type="text" class="form-control" id="kode_barang" placeholder="Masukan kode barang" name="kode_barang">
            </div>
            <div class="form-group">
                <label for="jumlah_barang">Jumlah barang:</label>
                <input type="text" class="form-control" id="jumlah_barang" placeholder="Masukan jumlah barang" name="jumlah_barang">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <br><br><br>

         
        </form>
    
        <label for="cars">Search by:</label>
     

        <form action="{{URL::to('/search')}}" method ="post">
        {{csrf_field()}}
            <select id="product" name="product">
                <option value="Name">Name</option>
                <option value="Code">Code</option>
            </select>
            <div class="form-group">
                    <label for="search">Search:</label>
                    <input type="text" class="form-control" id="search" placeholder="Masukan jumlah barang" name="search">
                    <button type="submit">Search</button>
            </div>
     
        </form>
     

        <table>
            <tr>
                <th>Nama barang</th>
                <th>Kode barang</th>
                <th>Jumlah barang</th>
                <th>Tanggal input</th>
                <th>Action</th>
            </tr>
            @foreach($productData as $d)
            <tr>
                <td>{{$d->Nama_barang}}</td>
                <td>{{$d->Kode_barang}}</td>
                <td>{{$d->Jumlah_barang}}</td>
                <td>{{$d->Tanggal}}</td>
                <td>
                    <button onclick = "fillForm('{{$d->id}}','{{$d->Nama_barang}}','{{$d->Kode_barang}}','{{$d->Jumlah_barang}}')">Edit</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    
</body>
</html>

<script>
    $nama_barang = $('#nama_barang');
    $kode_barang = $('#kode_barang');
    $jumlah_barang = $('#jumlah_barang');
    $id = $('#id');

    function fillForm(id,namaBarang,kodeBarang,jumlahBarang)
    {
        $id.val(id);
        $nama_barang.val(namaBarang);
        $kode_barang.val(kodeBarang);
        $jumlah_barang.val(jumlahBarang)
    }

</script>