<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>

<html>
<head>	
<link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
	<title>Edit Data</title>
</head>

<body>
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

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6">
                <h2>Edit Data</h2>
            </div>
            <div class="col-md-6">
                <a href="index.php" class="btn btn-primary float-end">Go Back</a>
            </div>
        </div>
        <div class="w-50">
        <form action="editAction.php" method="post" name="edit">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="Masukkan nama" class="form-control" id="name" name="name" value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label for="age" class="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" value=<?php echo $age; ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value=<?php echo $email; ?>>
            </div>
            <td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
            <input type="submit" name="update" class="btn btn-primary" value="Update Data">
        </form>
    </div>
    </div>  
</body>
</html>