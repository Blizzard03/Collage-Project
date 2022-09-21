<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apotek Dago Farma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <link href="http://localhost/Project8/MVC/BOOTSTRAP/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/Project8/MVC/BOOTSTRAP/js/bootstrap.bundle.min.js">
    </script>
</head>

<body>
    <div class="container" style="margin-top:30px">
        <h3>Laporan Stok Obat</h3>
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th>Id Obat</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_obat as $row) {
                    echo "<tr>
<td>$row[id_obat]</td>
<td>$row[nama_obat]</td>
<td>$row[harga]</td>
<td>$row[stok]</td>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>