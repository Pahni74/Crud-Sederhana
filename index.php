<html>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<head>
        <title>Index</title>
        <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <center>
    <nav class="center navbar-light bg-warning">
  <a class="navbar-brand">DATA BIODATA</a>
</nav>
<br>    
        <a class="btn btn-primary " href="tambah.php" role="button">Tambah Data</a><br><br> 
</center>
            <table class="table">
            <tr>
            <thead class="thead-dark">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</th>
      <th scope="col">Motivasi Hidup</th>
      <th scope="col"><center>Aksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></th>
      </thead>
        </tr>
                

                <?php
                include 'database.php';
                $biodata = new Biodata();
                $no = 1;
                foreach ($biodata->index() as $data) {
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['motivasi_hidup']; ?></td>
                        <td><a class="btn btn-info" href="show.php?id=<?php echo $data['id']; ?>" role="button">Tampil</a></button>
                        <a class="btn btn-success" href="edit.php?id=<?php echo $data['id']; ?>" role="button">Ubah</a></button>
                        <a class="btn btn-danger" href="proses.php?id=<?php echo $data['id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')" role="button">Hapus</a></button> 
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</body>

</html>