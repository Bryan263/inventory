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
<body>
    <div class="container">
    <h2>Inventory Management</h2>
        <form action="{{URL::to('/insertOrEditProduct')}}" method = "post">
        {{csrf_field()}}
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
        </form>
    </div>
</body>
</html>