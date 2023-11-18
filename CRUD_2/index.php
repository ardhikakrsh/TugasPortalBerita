<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
<link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
	<title>Homepage</title>		
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark"">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SMAN 5 Surabaya</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end">
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://id.wikipedia.org/wiki/SMA_Negeri_5_Surabaya">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://maps.app.goo.gl/nef2rQ4jSYrP2Wvd6">LOCATION</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>

	<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Welcome!</h2>
        </div>
        <div class="col-md-6">
            <a href="add.php" class="btn btn-primary float-end">Add New Data</a>
        </div>
    </div>
	<table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
        while ($res = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$res['name'].'</td>';
            echo '<td>'.$res['age'].'</td>';
            echo '<td>'.$res['email'].'</td>';
            echo '<td> <a class="btn btn-warning btn-sm" href="edit.php?id='.$res['id'].'">Edit</a> <button class="btn btn-danger btn-sm "data-id='.$res['id'].'>Hapus</button> </td>';
        }
?>
            </tr>
        </tbody>
		
	</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const deleteButton = document.querySelectorAll('.btn-danger');
        deleteButton.forEach((button) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `delete.php/?id=${button.dataset.id}`;
                    }
                })
            })
        });
        
    </script>
</body>
</html>