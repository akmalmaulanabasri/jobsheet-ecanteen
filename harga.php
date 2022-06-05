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
            <h1>Daftar Harga Makanan Kantin Wikrama</h1>
        </div>
        <div class="card-body">
            <h5>
            <?php
            include 'php/app.php';

            $harga = new Makanan();
            echo "Bakwan : Rp.". $harga->bakwan;
            echo "<br>";
            echo "Risol : ". $harga->risol;
            ?>
            </h5>

            <a href="index.php" class="btn btn-success">Pesan Makanan</a>

        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>