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
            background-image: url("Source/img/bg-forest.jpg");

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

        tbody tr:hover {
            background-color: #fdd017;
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
                        <li class="nav-item"><a href="view.php" class="nav-link">View Data</a></li>
                    </ul>
            </div>
            </header>
        </div>
        <div class="mx-auto">
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    Data buku
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from buku order by id";
                            $q2     = mysqli_query($Database_konektor, $sql2);
                            $urut   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id         = $r2['id'];
                                $judul        = $r2['judul'];
                                $kategori   = $r2['kategori'];

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $urut++ ?></th>
                                    <td scope="row"><?php echo $judul ?></td>
                                    <td scope="row"><?php echo $kategori ?></td>
                                    <td scope="row">
                                        <a href="ViewOne.php?Operation=Readone&id=<?php echo $id ?>"><button type="button" class="btn btn-primary">View</button></a>
                                        <a href="index.php?Operation=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <a href="index.php?Operation=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
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