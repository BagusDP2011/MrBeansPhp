<?php
include("koneksi.php");
session_start(); // Ensure session is started

if (isset($_SESSION['fullname'])) {
  $fullname = $_SESSION['fullname'];
} else {
  $fullname = "Guest"; // Default value if fullname is not set in the session
}

// if (isset($_POST['logout'])) {
//   // Unset all session variables
//   session_unset();

//   // Destroy the session
//   session_destroy();
//   $_SESSION['fullname'] = "Guest";

//   // Redirect to the login page or any other page after logout
//   header("Location: login.php");
//   exit;
// }

?>

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
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="padding: 5px">
    <div class="container" style="max-width: 100%">
      <h3>
        <img src="./assets/old/Logo MB Transparent.png" alt="Logo" width="50px" height="50px" />
      </h3>
      <a class="navbar-brand font-weight-bold" href="/PBL-PHP/index.php" style="font-size: 20px">MrBeans CoffeeBeans Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            </div>
            <div class="col">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                Search
              </button>
            </div>
            <div class="col mt-1">
              <?php if ($fullname === "Guest") : ?>
                <!-- Show login and register links for guests -->
                <a href="login.php">Login</a> /
                <a href="regist.php">Register</a>
              <?php endif; ?>
              <?php if ($fullname !== "Guest") : ?>
                <div class="d-flex justify-content-between align-items-center mt-1">
                  Hello, <?php echo $fullname; ?>!
                  <a href="logoutForm.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </form>
        <div>
        </div>
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

  <div class="row">
    <div class="col-md-6" style="max-width: 100%; margin-left: 50px;">
      <h2>Transportasi Umum ke Politeknik Negeri Batam</h2>
      <p style="word-wrap: break-word;">
        Ingin tahu bagaimana caranya sampai ke Politeknik Negeri Batam, Indonesia? Moovit helps you membantumu menemukan cara teerbaik untuk sampai ke Politeknik Negeri Batam
        dengan petunjuk langkah demi langkah dari stasiun transportasi umum terdekat.
        Moovit menyediakan peta gratis dan panduan langsung untuk membantumu bepergian di kotamu. Melihat jadwal, rute, jadwal waktu dan mencari tahu berapa lama untuk
        sampai ke Politeknik Negeri Batam secara langsung. <br> <br>

        Mencari pemberhentian atau stasiun terdekat untuk ke Politeknik Negeri Batam? Coba lihat daftar pemberhentian terdekat dari tujuan mu. Halte Masjid Raya B. <br> <br>
        Bis:KOR 2
        Ingin melihat apakah ada rute lain yang dapat membawa mu lebih cepat ke tujuan? Moovit akan membantumu mencari rute dan waktu alternatif.
        Dapatkan arah dari dan arah ke Politeknik Negeri Batam dengan mudah melalui Moovit app atau Situs Web.
        Kami membuat perjalanan ke Politeknik Negeri Batam mudah, alasan itu lah yang membuat jutaan 1.5 pengguna, termasuk pengguna di Batam,
        percaya kepada Moovit sebagai app Transportasi Umum terbaik. Kamu tidak perlu mengunduh app untuk bis atau kereta secara terpisah, Moovit adalah app Transportasi
        Umum yang semua ada didalamnya akan membantumu mencari jadwal terbaik bis dan kereta. <br><br>

        Untuk informasi harga Bis, biaya dan tarif perjalanan ke Politeknik Negeri Batam, silakan periksa aplikasi Moovit.
        Gunakan aplikasi untuk menavigasi ke tempat-tempat populer termasuk ke bandara, rumah sakit, stadion, toko kelontong, mal, kedai kopi, sekolah, perguruan tinggi, dan universitas. </p>
    </div>
    <div class="col-md-5">
      <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0579150832177!2d104.04588161016915!3d1.1186404622714714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sen!2sid!4v1700911546748!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>
    </div>
  </div>

  <center>
    <div class="col-md-8 mt-5 mb-5">
      <p style="font-weight: bold; font-size:x-large;">Tentang Kami</p>
      <p>Selamat datang di Mr. Beans Coffee Shop! Kami adalah penyedia biji kopi berkualitas tinggi yang berkomitmen untuk memberikan pengalaman kopi terbaik kepada pelanggan kami. 
        Dengan dedikasi terhadap kualitas, keberlanjutan, dan inovasi, kami menjalani perjalanan kami untuk membawa cita rasa kopi terbaik ke setiap cangkir.

Kami bekerja erat dengan para petani kopi di seluruh dunia, memilih biji kopi secara teliti dari sumber-sumber terbaik. Setiap biji dipilih secara hati-hati, 
diproses dengan cermat, dan disempurnakan oleh para ahli roasting kami untuk menghasilkan rasa kopi yang kaya, kompleks, dan memikat.

Dengan fokus pada keberlanjutan, kami memastikan setiap langkah dalam rantai pasokan kami menghormati lingkungan dan mendukung kesejahteraan para petani lokal. 
Kami juga berkomitmen untuk memberikan kontribusi positif pada komunitas tempat kami beroperasi.

Kami percaya bahwa setiap cangkir kopi adalah cerminan dari perjalanan panjang biji kopi dari ladang hingga ke tangan Anda. Kami tidak hanya menyediakan kopi; 
kami membawa pengalaman dan cerita di setiap tegukan, mempersembahkan aroma dan rasa yang luar biasa.

Bergabunglah dengan kami di Mr. Beans Coffee Shop untuk menikmati kopi berkualitas terbaik yang menghadirkan kelezatan setiap hari. Mari kita nikmati kopi dalam 
segala kemuliaannya dan nikmati perjalanan rasa yang tak terlupakan bersama-sama!</p>
    </div>
  </center>


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
    $(document).ready(function() {
      $('#carouselExampleControls').carousel();
    });
  </script>

</body>

</html>