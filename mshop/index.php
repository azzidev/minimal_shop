<?php
  include("includes/preset.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
  ?>

  <title>Início | <?=$app_title?></title>
</head>

<body>
  <?php
    include('includes/loading.php');
    include('includes/header.php');
  ?>

  <main id="main" class="main">
    <!-- <div class="pagetitle">
      <h1>Cardápio</h1>
    </div> -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Promoções da semana</h5>
              <p class="card-description">Todas às quartas-feiras, realizamos atualizações na lista de produtos promocionais.</p>
              <div class="card-products">
                <div class="product">
                  <div class="product-image">
                    <img src="assets/img/cheeseburger.jpg" alt="">
                  </div>
                  <div class="product-title">
                    <h5 class="h5 fw-bold text-primary">2 Cheeseburger + Coca-Cola 269ml</h5>
                  </div>
                  <div class="product-price">
                    <i class="bx bx-cart"></i>
                    <h5 class="h5 fw-bold text-success">R$ 22,69</h5>
                  </div>
                </div>
                <div class="product">
                  <div class="product-image">
                    <img src="assets/img/hamburger.jpg" alt="">
                  </div>
                  <div class="product-title">
                    <h5 class="h5 fw-bold text-primary">Combo Burger com Batata</h5>
                  </div>
                  <div class="product-price">
                    <i class="bx bx-cart"></i>
                    <h5 class="h5 fw-bold text-success">R$ 22,69</h5>
                  </div>
                </div>
                <div class="product">
                  <div class="product-image">
                    <img src="assets/img/cheeseburger.jpg" alt="">
                  </div>
                  <div class="product-title">
                    <h5 class="h5 fw-bold text-primary">2 Cheeseburger + Coca-Cola 269ml</h5>
                  </div>
                  <div class="product-price">
                    <i class="bx bx-cart"></i>
                    <h5 class="h5 fw-bold text-success">R$ 22,69</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Novidades na Minimal Shop</h5>
              <p class="card-description">Inserimos alguns lanches em nossos cardápio. Experimente, avalie e recomenda.</p>
              <div class="card-products">
                <div class="product">
                  <div class="product-image">
                    <img src="assets/img/cheeseburger.jpg" alt="">
                  </div>
                  <div class="product-title">
                    <h5 class="h5 fw-bold text-primary">2 Cheeseburger + Coca-Cola 269ml</h5>
                  </div>
                  <div class="product-price">
                    <i class="bx bx-cart"></i>
                    <h5 class="h5 fw-bold text-success">R$ 22,69</h5>
                  </div>
                </div>
                <div class="product">
                  <div class="product-image">
                    <img src="assets/img/hamburger.jpg" alt="">
                  </div>
                  <div class="product-title">
                    <h5 class="h5 fw-bold text-primary">Combo Burger com Batata</h5>
                  </div>
                  <div class="product-price">
                    <i class="bx bx-cart"></i>
                    <h5 class="h5 fw-bold text-success">R$ 22,69</h5>
                  </div>
                </div>
                <div class="product">
                  <div class="product-image">
                    <img src="assets/img/cheeseburger.jpg" alt="">
                  </div>
                  <div class="product-title">
                    <h5 class="h5 fw-bold text-primary">2 Cheeseburger + Coca-Cola 269ml</h5>
                  </div>
                  <div class="product-price">
                    <i class="bx bx-cart"></i>
                    <h5 class="h5 fw-bold text-success">R$ 22,69</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer mb-5">
    <div class="copyright">
      &copy; Copyright <strong><span><?=$app_title?></span></strong>. All Rights Reserved
    </div>
    <div class="credits mb-3">
      Developed by <a href="https://brtoworldagency.com/">BR2World Agency</a>
    </div>
  </footer>

  <?php
    include('includes/scripts.php')
  ?>
</body>

</html>