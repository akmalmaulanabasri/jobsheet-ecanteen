<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Kanteen</title>
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">E-Kanteen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="harga.php">Daftar Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kalkulator.php">Kalkulator Sederhana</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h1>Selamat Datang Di E-Canteen Wikrama</h1>
        </div>
        <div class="card-body">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Beli Makanan
        </button>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Makanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="pesanan.php" method="post" class="form-group">
              <label for="bakwan" class="form-label">Bakwan</label>
              <input type="number" name="bakwan" id="bakwan" class="form-control" placeholder="Jumlah Yang Dipesan">
              <label for="risol" class="form-label mt-2">Risol</label>
              <input type="number" name="risol" id="risol" class="form-control" placeholder="Jumlah Yang Dipesan">
              <label for="catatan" class="form-label mt-2">Catanan</label>
              <input type="text" name="catanan" id="catatan" class="form-control" placeholder="Catanan Untuk Kantin">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <input type="submit" class="btn btn-success" name="beli" value="Kirim Pesanan">
          </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>