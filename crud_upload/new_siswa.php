<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pendaftaran Siswa Baru SMAN 5 Surabaya</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mt-3">
      <h1 class="text-center">Tambahkan Siswa</h1>
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card rounded-4">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="register_proses.php" method="POST" enctype="multipart/form-data">
                  <div class="input-group mb-3">
                    <input
                      type="number"
                      class="form-control"
                      placeholder="NRP"
                      aria-label="nrp"
                      name="nrp"
                      required
                    />
                  </div>
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nama"
                      aria-label="nama"
                      name="nama"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="jenis_kelamin"
                        id="laki"
                        value="Laki-Laki"
                      />
                      <label class="form-check-label" for="laki">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="jenis_kelamin"
                        id="perempuan"
                        value="Perempuan"
                      />
                      <label class="form-check-label" for="perempuan">
                        Perempuan
                      </label>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nomor Telepon"
                      aria-label="telp"
                      name="telp"
                      required
                    />
                  </div>
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Alamat Anda"
                      aria-label="alamat"
                      name="alamat"
                      required
                    />
                  </div>
                  <div class="input-group mb-3">
                    <input class="form-control" type="file" id="foto" name="foto" />
                  </div>
                  <input
                    type="submit"
                    value="Daftar"
                    class="btn btn-primary btn-block"
                    name="daftar"
                  />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>