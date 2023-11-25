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

    <div class="row mt-5 no-gutters justify-content-center">
        <div class="col-md-11 m-5">
            <h1 class="mb-4">Help Center</h1>

            <!-- Vision and Mission Section -->
            <section>
                <h2>Vision</h2>
                <p>Our vision at BagusDP Shop is to provide the finest coffee beans to coffee enthusiasts around the
                    world.
                    We strive to source the best beans, roast them to perfection, and deliver an exceptional coffee
                    experience.</p>

                <h2>Mission</h2>
                <p>Our mission is to share our passion for coffee by offering high-quality coffee beans and related
                    products.
                    We are committed to providing excellent customer service, supporting sustainable coffee practices,
                    and
                    promoting the joy of brewing and savoring great coffee.</p>
            </section>

            <!-- How to Checkout Section -->
            <section class="mt-5">
                <h2>How to Checkout</h2>

                <ol>
                    <li><strong>Add Products to Your Cart:</strong> Browse our selection of coffee beans and products.
                        Click the "Add to Cart" button next to the items you want to purchase.</li>
                    <li><strong>Review Your Cart:</strong> Click the shopping cart icon at the top of the page to review
                        the items in your cart. Make sure you've selected the right products and quantities.</li>
                    <li><strong>Proceed to Checkout:</strong> Click the "Proceed to Checkout" button. You may be asked
                        to
                        log in or provide shipping information if you haven't already.</li>
                    <li><strong>Choose Shipping Method:</strong> Select your preferred shipping method. Review the
                        shipping
                        cost and estimated delivery date.</li>
                    <li><strong>Payment Information:</strong> Enter your payment information securely. We accept various
                        payment methods, including credit cards and online payment services.</li>
                    <li><strong>Review Your Order:</strong> Double-check your order details, shipping address, and
                        payment
                        information. Make any necessary adjustments.</li>
                    <li><strong>Place Your Order:</strong> Click the "Place Order" or "Complete Purchase" button to
                        finalize
                        your order. You will receive an order confirmation email shortly.</li>
                </ol>

                <p>If you encounter any issues during the checkout process or have questions about your order, please
                    don't hesitate to <a href="/contact.php">contact us</a>. Our customer support team is
                    here to assist
                    you.</p>
            </section>
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
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- <script src="js/bootstrap.js"></script> -->
        <script>
            $(document).ready(function () {
                $('#carouselExampleControls').carousel();
            });
        </script>

</body>

</html>