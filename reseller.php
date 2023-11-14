<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MrBeans CoffeeBeans Shop</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="/PBL%20Alt/reseller.php">RESELLER</a>
          </li>
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
            <div class="col mt-1">
              <a href="login.php">

                Login
              </a>
              /
              <a href="regist.php">
                Register
              </a>
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

    <div class="row mt-5 no-gutters justify-content-center">
        <div class="col-md-11 m-5">
            <h1>List of Resellers and Sponsors</h1>
            <div class="row text-center">
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/bni.jpg" class="card-img-top" alt="BNI Logo">
                        <div class="card-body">
                            <h5 class="card-title">BNI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/garuda.jpg" class="card-img-top" alt="Garuda Logo">
                        <div class="card-body">
                            <h5 class="card-title">Garuda</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/gojek.jpg" class="card-img-top" alt="Gojek Logo">
                        <div class="card-body">
                            <h5 class="card-title">Gojek</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/indomie.jpg" class="card-img-top" alt="Indomie Logo">
                        <div class="card-body">
                            <h5 class="card-title">Indomie</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/kai.jpg" class="card-img-top" alt="KAI Logo">
                        <div class="card-body">
                            <h5 class="card-title">KAI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/pertamina.jpg" class="card-img-top" alt="Pertamina Logo">
                        <div class="card-body">
                            <h5 class="card-title">Pertamina</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/pln.jpg" class="card-img-top" alt="PLN Logo">
                        <div class="card-body">
                            <h5 class="card-title">PLN</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/rcti.jpg" class="card-img-top" alt="RCTI Logo">
                        <div class="card-body">
                            <h5 class="card-title">RCTI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/sctv.jpg" class="card-img-top" alt="SCTV Logo">
                        <div class="card-body">
                            <h5 class="card-title">SCTV</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/telkom.jpg" class="card-img-top" alt="Telkom Logo">
                        <div class="card-body">
                            <h5 class="card-title">Telkom</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/tiket.jpg" class="card-img-top" alt="Tiket.com Logo">
                        <div class="card-body">
                            <h5 class="card-title">Tiket.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="card mt-2">
                        <img src="assets/logo/tokopedia.jpg" class="card-img-top" alt="Tokopedia Logo">
                        <div class="card-body">
                            <h5 class="card-title">Tokopedia</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            <!-- <footer class="bg-dark text-white">
                <div class="row">
                    <div class="col-md-3">
                        <h3>LAYANAN PELANGGAN</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <div class="col-md-3">
                        <h3>TENTANG KAMI</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>MITRA KERJA SAMA</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo

                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>HUBUNGI KAMI</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.</p>
                    </div>
                </div>
            </footer> -->

            <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
                <h3 class="d-inline-block mr-2"> DEVELOP BY: MrBeans Teams </h3><i class="far fa-copyright"></i>
            </div>


            <!-- <script src="js/jquery.min.js"></script> -->
            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#carouselExampleControls').carousel();
                });
            </script>

</body>

</html>