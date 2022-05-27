<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "latihan-db";

$Database_konektor    = mysqli_connect($host, $user, $pass, $db);
if (!$Database_konektor) { //cek Database_konektor
    die("Tidak bisa terDatabase_konektor ke database");
}
$judul        = "";
$halaman       = "";
$rating     = "";
$kategori   = "";
$Berhasil     = "";
$Gagal      = "";

if (isset($_GET['Operation'])) {
    $Operation = $_GET['Operation'];
} else {
    $Operation = "";
}
if ($Operation == 'Readone') {
    $id         = $_GET['id'];
    $sql1       = "select * from buku where id = '$id'";
    $q1         = mysqli_query($Database_konektor, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $judul        = $r1['judul'];
    $halaman       = $r1['halaman'];
    $rating     = $r1['rating'];
    $kategori   = $r1['kategori'];

    if ($judul == '') {
        $Gagal = "Data tidak ditemukan";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <style>
        body,
        html {
            height: auto;
        }

        .bg {
            /* The image used */
            background-image: url("Source/img/bg-taiga.jpg");

            /* Full height */
            height: auto;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
        }

        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="bg">
        <div class="container">
            <div class="col">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img class="bi me-2" width="40" height="32" src="Source/img/Blizzard_03.png"></img>
                        <span class="fs-4">Blizzard Library</span>
                    </a>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="viewAll.php" class="nav-link">View Data</a></li>
                    </ul>
            </div>
            </header>
        </div>
        <div class="mx-auto">
            <!-- untuk memasukkan data -->

            <div class="card">
                <div class="card-header text-white bg-secondary">
                    Data buku
                </div>
                <div class="card-body">

                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="halaman" class="col-sm-2 col-form-label">Halaman</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="halaman" name="halaman" value="<?php echo $halaman ?>" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kategori" id="kategori" disabled>
                                <option value="">- Pilih kategori -</option>
                                <option value="Business" <?php if ($kategori == "Business") echo "selected" ?>>Business</option>
                                <option value="Education" <?php if ($kategori == "Education") echo "selected" ?>>Education</option>
                                <option value="Fiction" <?php if ($kategori == "Fiction") echo "selected" ?>>Fiction</option>
                                <option value="Finance" <?php if ($kategori == "Finance") echo "selected" ?>>Finance</option>
                                <option value="Self-Help" <?php if ($kategori == "Self-Help") echo "selected" ?>>Self-Help</option>
                                <option value="Programming" <?php if ($kategori == "Programming") echo "selected" ?>>Programming</option>

                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rating" name="rating" value="<?php echo $rating ?>" readonly>
                        </div>
                    </div>


                </div>
            </div>
            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float-end mb-1">
                        <a href="#">Back to top</a>
                    </p>
                </div>
                <p class="mb-0">&copy; <?= date('Y') ?> Blizzard Libary</p>

            </footer>
        </div>
</body>

</html>