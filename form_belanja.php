<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <title>Form Belanja Rere</title>
</head>
<body>

<!-- navbar -->
<nav style="background-color: lightgrey;" class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Belanja Online</a>
  </div>
</nav>

<!-- konten -->
<div class="container mt-5">
    <div class="row justify-content-between">
    <div class="col-7">
<form method="post" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text" name="jumlah"  placehorder="Jumlah Barang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
<br>

<!-- PHP -->
<?php
    $nama_customer = $_POST['customer'];
    $produk_pilihan = $_POST['produk'];
    $jumlah_beli = $_POST['jumlah'];
    
    if ($produk_pilihan == "TV") {
        $total_belanja = $jumlah_beli * 4200000;
    }elseif ($produk_pilihan == "Kulkas") {
        $total_belanja = $jumlah_beli * 3100000;
    }elseif ($produk_pilihan == "Mesin Cuci") {
        $total_belanja = $jumlah_beli * 3800000;
    }

    echo '<hr>';
    echo '<br/>Nama Customer: '.$nama_customer;
    echo '<br/>Produk Pilihan: '.$produk_pilihan;
    echo '<br/>Jumlah Beli: '.$jumlah_beli;
    echo '<br/>Total Belanja: Rp '.$total_belanja;
?>
</div>

<div class="col-4">
<div class="card " style="width: 18rem;">
  <div class="card-header bg-primary text-white">
    Daftar Harga
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">TV : 4.200.000</li>
    <li class="list-group-item">Kulkas : 3.200.000</li>
    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
  </ul>
  <div class="card-footer bg-primary text-white">
    Harga Dapat Brubah Setiap Saat
  </div>
</div>

    </div>
    </div>
</div>

<!-- footer -->
<footer style="background-color: lightgrey;" class="fixed-bottom">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-black fw-bold" href="https://api.whatsapp.com/send?phone=6285275029356&text=udah liat semuanya, kerenn 😚">Adzimatinur Azzahra</a></p>
    </footer>
    
</body>
</html>