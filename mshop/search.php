<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
    include("includes/preset.php");
  ?>

  <title>Início | <?=$app_title?></title>
</head>

<body>
  <?php
    include('includes/header.php')
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
              <hr>
              <div class="d-flex flex-direction-column">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span><?=$app_title?></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Developed by <a href="https://brtoworldagency.com/">BR2World Agency</a>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php
    include('includes/scripts.php')
  ?>
</body>

</html>