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
        <div class="card">
            <div class="card-header bg-success">
                <h1 class="text-light">Kalkulator Sederhana</h1>
            </div>
            <div class="card body ps-5 pe-5 pt-2 pb-3">
                <form action="" method="post" class="form-group">
                    <label for="x" class="form-label">Bilangan 1</label>
                    <input type="number" name="x" id="x" class="form-control mb-3" required>
                    <label for="tipe" class="form-label">Opsi Hitung</label>
                    <select name="tipe" id="tipe" class="form-control mb-3"> required
                        <option value="tambah">Tambah</option>
                        <option value="kurang">Kurang</option>
                        <option value="kali">Kali</option>
                        <option value="bagi">Bagi</option>
                    </select>
                    <label for="y" class="form-label">Bilangan 2</label>
                    <input type="number" name="y" id="y" class="form-control mb-3" required>
                    <input class="btn btn-danger" type="reset" value="reset">
                    <input class="btn btn-success" type="submit" value="hitung" name="hitung">
                </form>
                    <?php
                    include 'php/kalkulator.php';
                    $hitung = new Hitung();

                    if(isset($_POST['hitung']))
                    {
                        $x = $_POST['x'];
                        $y = $_POST['y'];
                        $tipe = $_POST['tipe'];

                        if($tipe == "tambah")
                        {
                            $hasil =  $hitung->tambah($x, $y);
                        }
                        else if ($tipe == "kurang")
                        {
                            $hasil =  $hitung->kurang($x, $y);
                        }
                        else if ($tipe == "kali")
                        {
                            $hasil =  $hitung->kali($x, $y);
                        }
                        else if ($tipe == "bagi")
                        {
                            $hasil =  $hitung->bagi($x, $y);
                        }
                    echo "<h3 class='bg-info text-dark mt-3 p-2 rounded'>Hasil Dari $x di$tipe $y adalah $hasil</h3>";
                    }
                    ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>