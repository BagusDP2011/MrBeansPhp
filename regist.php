<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mr Beans Registration</title>

    <link rel="stylesheet" type="text/css" href="css/regist.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top"
      style="padding: 5px"
    >
      <div class="container" style="max-width: 100%">
        <h3>
          <img
            src="./assets/old/Logo MB Transparent.png"
            alt="Logo"
            width="50px"
            height="50px"
          />
        </h3>
        <a
          class="navbar-brand font-weight-bold"
          href="/PBL-PHP/index.php"
          style="font-size: 20px"
          >MrBeans CoffeeBeans Shop</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
          <img src="" alt="" />
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 16px">
            <li class="nav-item active">
              <a class="nav-link" href="/PBL-PHP/index.php">BERANDA</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/PBL-PHP/products.php">PRODUK</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/PBL-PHP/reseller.php">RESELLER</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/PBL-PHP/contact.php">HUBUNGI KAMI</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/PBL-PHP/help.php">BANTUAN</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" style="font-size: 16px">
            <div class="row">
              <div class="col">
                <input
                  class="form-control mr-sm-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
              </div>
              <div class="col">
                <button
                  class="btn btn-outline-success my-2 my-sm-0"
                  type="submit"
                >
                  Search
                </button>
              </div>
            </div>
          </form>

          <!-- <div class="icon mt-2">
            <h5>
              <i class="fas fa-cart-plus ml-3 mr-3"></i>
              <i class="fas fa-envelope mr-3"></i>
              <i class="fas fa-bell mr-3"></i>
            </h5>
          </div> -->
        </div>
      </div>
    </nav>
    <div class="wrap">
      <form action="registerForm.php" id="form" method="post">
        <h1 style="font-weight: bold;">Registrasi</h1>
        <div class="input-box d-flex justify-content-between">
          <input type="text" placeholder="Username" id="username" name="username"/>
          <input type="text" placeholder="Full Name" id="fullName" name="fullName"/>
        </div>

        <div class="input-box d-flex justify-content-between">
          <input type="password" placeholder="Password" id="password" name="password"/>
          <input type="email" placeholder="Email" id="email" name="email"/>
        </div>

        <div class="input-box d-flex justify-content-between">
          <input type="textarea" placeholder="Alamat" id="alamat" name="alamat"/>
          <input type="number" placeholder="No Phone" id="noHp" name="noHp"/>
        </div>

        <button type="submit" class="btn" onclick="cek_data(); return false">
          SUBMIT
        </button>

        <center>
          <p>
            Mempunyai akun? Silahkan <a href="login.php"> login disini!</a>
          </p>
        </center>
      </form>
    </div>

    <script type="text/javascript">
      function cek_data() {
        if (document.getElementById("username").value == "") {
          //   alert("nama tidak boleh kososng!");
          event.preventDefault();
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Username tidak boleh kosong!",
            showConfirmButton: false,
            timer: 2000,
          });
          documen.getElementById("username").focus();
          return false;
        }
        if (document.getElementById("fullname").value == "") {
          event.preventDefault();
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Full Name tidak boleh kosong!",
            showConfirmButton: false,
            timer: 2000,
          });
          documen.getElementById("fullname").focus();
          return false;
        }
        if (document.getElementById("password").value == "") {
          event.preventDefault();
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Password tidak boleh kosong!",
            showConfirmButton: false,
            timer: 2000,
          });
          documen.getElementById("password").focus();
          return false;
        }
        if (document.getElementById("email").value == "") {
          event.preventDefault();
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Email tidak boleh kosong!",
            showConfirmButton: false,
            timer: 2000,
          });
          documen.getElementById("email").focus();
          return false;
        }
        if (document.getElementById("alamat").value == "") {
          event.preventDefault();
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Alamat tidak boleh kosong!",
            showConfirmButton: false,
            timer: 2000,
          });
          documen.getElementById("nama").focus();
          return false;
        }
        
        if (document.getElementById("nomor").value == "") {
          event.preventDefault();
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Nomor HP tidak boleh kosong!",
            showConfirmButton: false,
            timer: 2000,
          });
          documen.getElementById("nomor").focus();
          return false;
        }
        
        
        document.getElementById("form").submit();
      }
    </script>

    <script src="js/sweetalert2.all.min.js"></script>
  </body>
</html>
