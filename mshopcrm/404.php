<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
    include("includes/preset.php");
  ?>

  <title>404 | <?=$app_title?></title>
</head>

<body>
  <main>
    <div class="container">
      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>A página que você procura, está indisponível ou não existe.</h2>
        <a class="btn" href="index">Voltar para o início</a>
        
        <div class="copyright mt-4">
          &copy; Copyright <strong><span><?=$app_title?></span></strong>. All Rights Reserved
        </div>
        <div class="mt-5 credits">
          Developed by <a href="https://brtoworldagency.com/">BR2World Agency</a>
        </div>
      </section>
    </div>
  </main>

  <?php
    include('includes/scripts.php')
  ?>
</body>

</html>