<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login | KlikPajak</title>
  </head>
  <body>
    <div class="wrapper">
      <form action="login_proces.php" method="post">
        <h1><u>LOGIN</u></h1>
        <div class="input-box1">
          <input
            type="text"
            placeholder="Masukan Nomor Induk NIK/NPWP"
            name="username"
            id="username"
            required
          />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input
            type="password"
            placeholder="Masukan Kata Sandi"
            name="password"
            id="password"
            required
          />

          <span class="toggle-show" onclick="togglePasswordVisibility()">
            <i class="bx bx-hide"></i
          ></span>
        </div>
        <div class="remember-forgot">
          <a href="forgot.php">Lupa Kata Sandi ?</a>
        </div>
        <button type="submit" name="login" class="btn">Login</button>

        <!-- Register -->
        <div class="register-link">
          <p>
            Pengguna Baru?
            <a href="" data-toggle="modal" data-target="#popupregister">
              Register</a
            >
          </p>
          <!-- Penutup register -->
        </div>
      </form>
    </div>
    <!-- Pop Up Register  -->
    <div
      class="modal fade"
      id="popupregister"
      role="dialog"
      arialabelledby="modalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Register</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-header">
            <div class="card">
              <div class="card-body">
                <p>
                  1. Nomor Pokok Wajib Pajak (NPWP) yang dimasukkan hanya angka,
                  tanpa tanda titik (.) dan strip (-).
                </p>
                <p>
                  2. Dapatkan EFIN (Electronic Filing Identification Number) di
                  Kantor Pelayanan Pajak (KPP) terdekat bagi Wajib Pajak Orang
                  Pribadi atau di KPP terdaftar bagi Wajib Pajak Badan.
                </p>
                <p>
                  3. Untuk melakukan registrasi akun masukkan NPWP, EFIN, dan
                  Kode Keamanan dengan benar, kemudian klik tombol Submit untuk
                  ke tahap selanjutnya.
                </p>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <!-- <label for="popupregister-email">Masukan Email</label> -->
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Masukan Email"
                />
              </div>
              <div class="form-group">
                <!-- <label for="exampleInputPassword1">Password</label> -->
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Masukan Nomor Induk NIK/NPWP"
                />
              </div>
              <div class="form-group">
                <!-- <label for="exampleInputPassword1">Password</label> -->
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Masukan Nomor EIFN Anda"
                />
              </div>
              <div class="form-group form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Check me out</label
                >
              </div>
            </form>
            <div class="modal-footer">
              <button type="submit" id="btn" class="btn btn-success">
                Submit
              </button>
              <button type="submit" id="btn" class="btn btn-danger">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Pop Up -->
    <header class="header">
      <h2>Klik<i>|Pajak</i></h2>
      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="#">Profile</a>
        <a href="#">Product</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
      </nav>
    </header>

    <script src="js/main.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"
    ></script>
  </body>
</html>