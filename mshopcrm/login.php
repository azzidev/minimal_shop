<?php
  include("includes/preset.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
  ?>

  <title>Login | <?=$app_title?></title>
</head>

<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a class="logo-expand d-flex align-items-center w-auto">
                  <img src="assets/img/logo-expand.png" alt="">
                </a>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <form class="row g-3 needs-validation" method="GET" action="components/auth-login" novalidate>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">PIN</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="pin" class="form-control" id="pin" required>
                        <div class="invalid-feedback">Por favor, verifique seu PIN.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Senha</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Por favor, verifique sua senha.</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Entrar</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="copyright text-center mb-3">
                &copy; Copyright <strong><span><?=$app_title?></span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Developed by <a href="https://brtoworldagency.com/">BR2World Agency</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php
    include('includes/scripts.php')
  ?>
</body>
</html>