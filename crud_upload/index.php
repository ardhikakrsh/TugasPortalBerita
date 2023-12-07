<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pendaftaran Siswa Baru SMAN 5 Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="p-5 bg-black text-white text-center">
            <h1>Halo Calon Slamane Smalane!</h1>
            <a href="new_siswa.php" class="btn btn-outline-light">Register Now</a>
    </div>

    <div class="container-fluid">
        <div class="row mt-4 ms-1">
            <div class="col-md-12">
                <h1>Data Pendaftar SMAN 5 Surabaya</h1>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">NRP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'connection.php';

    $query = 'SELECT * FROM siswa';
    $sql = mysqli_query($connect, $query);

    while ($data = mysqli_fetch_array($sql)) {
        echo '<tr>';
        echo '<td><img src="images/'.$data['foto'].'" class="img-thumbnail" width="150" height="200" alt="..."/></td>';
        echo '<td>'.$data['nrp'].'</td>';
        echo '<td>'.$data['nama'].'</td>';
        echo '<td>'.$data['jenis_kelamin'].'</td>';
        echo '<td>'.$data['telp'].'</td>';
        echo '<td>'.$data['alamat'].'</td>';
        echo '<td>
            <div class="dropdown">
                    <button
                        class="btn btn-secondary dropdown-toggle btn-sm"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    ></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="edit_siswa.php?nrp='.$data['nrp'].'"><i class="bi bi-pencil text-warning"></i> Edit</a></li>
                        <li>
                        <a class="dropdown-item" href="hapus_proses.php?nrp='.$data['nrp'].'"><i class="bi bi-trash text-danger"></i> Delete</a>
                        </li>
                    </ul>
            </div></td>';
        echo '</tr>';
    }
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>