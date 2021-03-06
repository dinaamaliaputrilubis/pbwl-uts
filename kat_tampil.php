<?php
    require_once "session.php";
    require_once "inc/Koneksi.php";
    require_once "app/Kategori.php";

    $kat = new Kategori();
    $rows = $kat->tampil();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO GAS LPG PUTZA | CRUD</title>
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.php"></a>TOKO GAS LPG PUTZA</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="kat_tampil.php">Kategori</a></li>
                <li><a href="brg_tampil.php">Produk</a></li>
                <li><a href="pem_tampil.php">Customer</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
    </header>

        <main>
                <div class="section">
                    <div class="container">
                        <h3>Data Kategori</h3>
                        <div class="box">
                            <p><a href="kat_input.php">Tambah Data</a></p>
                            <table border="1" cellspacing="0" class="table">
                                <thead>
                                    <tr>
                                        <th width="60px">No</th>
                                        <th>NAMA</th>        
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rows as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['id_kategori'];?></td>
                                            <td><?php echo $row['kategori_nama'];?></td>
                                            <td><a href="kat_edit.php?id=<?php echo $row['id_kategori']; ?>">Edit</a></td>
                                            <td><a href="kat_delete.php?id=<?php echo $row['id_kategori']; ?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
        </main>
           
        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 | Sistem Informasi Berbasis Web By Dina Amalia Putri Lubis</small>
            </div>
        </footer>
    </div>
</body>
</html>