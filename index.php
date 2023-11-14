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

        <div class="icon mt-2">
          <h5>
            <i class="fas fa-cart-plus ml-3 mr-3"></i>
            <i class="fas fa-envelope mr-3"></i>
            <i class="fas fa-bell mr-3"></i>
          </h5>
        </div>
      </div>
    </div>
  </nav>

    <div class="row mt-5 no-gutters">
        <!-- <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-5">
                <li class="list-group-item bg-warning"><i class="fas fa-list"></i> Categories</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Coffee Selection</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Tea Selection</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Pastries and Snacks</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Desserts</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Cold Beverages</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Milk Alternatives</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i> Beverage Add-Ons</li>
            </ul>
        </div> -->

        <div class="col-md-12 mb-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/1.png" class="d-block w-100 h-100" alt="Kofee Poster">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/2.png" class="d-block w-100 h-100" alt="Kofee Poster">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/3.png" class="d-block w-100 h-100" alt="Kofee Poster">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/4.png" class="d-block w-100 h-100" alt="Kofee Poster">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/5.png" class="d-block w-100 h-100" alt="Kofee Poster">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/6.png" class="d-block w-100 h-100" alt="Kofee Poster">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

            <h4 class="text-center font-weight-bold mr-4">Produk Terbaru</h4>
            <div class="row mx-auto">
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/coffee/forsale1.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Organic Peru</h5>
                        <p class="card-text">Directly imported from Peru</p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i>
                        <i class="far fa-star text-success"></i><br>
                        <a href="#" class="btn btn-primary" data-target="#produk1" datatoggle="modal">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/coffee/forsale2.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Platinum Blend</h5>
                        <p class="card-text">One of our specialty blend</p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i><br>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/coffee/forsale3.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Brazil Dolce</h5>
                        <p class="card-text">Directly imported from Brazil</p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                        <i class="far fa-star text-success"></i><br>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/coffee/forsale4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Costa Rica</h5>
                        <p class="card-text">Directly imported from Costa Rica</p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i>
                        <i class="far fa-star text-success"></i><br>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/coffee/forsale5.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Colombia</h5>
                        <p class="card-text">Directly imported from Colombia</p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i>
                        <i class="far fa-star text-success"></i><br>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
                <div class="card ml-2 mr-2" style="width: 16rem;">
                    <img src="assets/coffee/forsale6.png" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Gold Blend</h5>
                        <p class="card-text">One of our best blend</p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i> 
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i><br>
                        <a href="#" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <footer class="bg-dark text-white">
        <div class="row">
            <div class="col-md-3">
                <h3>LAYANAN PELANGGAN</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="col-md-3">
                <h3>TENTANG KAMI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-3">
                <h3>MITRA KERJA SAMA</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo

                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-3">
                <h3>HUBUNGI KAMI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </footer> -->

    <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
        <h3 class="d-inline-block mr-2"> DEVELOP BY: MrBeans Teams </h3><i class="far fa-copyright"></i>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#carouselExampleControls').carousel();
        });
    </script>

</body>

</html>