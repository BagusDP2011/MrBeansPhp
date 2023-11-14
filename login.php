<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mr Beans Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
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
        href="/PBL%20Alt/index.php"
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
            <a class="nav-link" href="/PBL%20Alt/index.php">BERANDA</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/PBL%20Alt/products.php">PRODUK</a>
          </li>
          <!-- <li class="nav-item active">
            <a class="nav-link" href="/reseller.php">RESELLER</a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link" href="/PBL%20Alt/contact.php">HUBUNGI KAMI</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/PBL%20Alt/help.php">BANTUAN</a>
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
            <!-- <div class="col">
              <a href="login.php">

                Login
              </a>
              /
              <a href="regist.php">
                Register
              </a>
            </div> -->
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

  <!-- Isi  -->
    <div class="wrapper">
      <form action="">
        <h1 style="font-weight: bold;">Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>
        <div class="remember-forgot d-flex justify-content-between">
          <div>
            <input type="checkbox" >Remember me </input>
          </div>
            <a href="#" class="text-right ml-5">Forgot password</a>
        </div>
        <br>
        <center>
          <button type="submit" class="btn">Login</button>
        </center>

        <div class="register-link">
          <p>Tidak punya akun? Silahkan <a href="regist.php">register!</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
