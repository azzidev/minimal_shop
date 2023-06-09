<?php
    include("includes/preset.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
  ?>

  <title>Cadastrar Usuário | <?=$app_title?></title>
</head>

<body>
  <?php
    include("includes/loading.php");
    include('includes/header.php')
  ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Cadastrar Usuário</h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <form id="newUserForm">
                    <div class="row mb-3 px-2">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nome-usuario">Nome do usuário</label>
                          <input type="text" class="form-control" name="nome-usuario" id="nome-usuario" oninput="$('#previewUserName').text(this.value)">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="pin-usuario">PIN do usuário</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">#</span>
                            <input type="text" class="form-control" name="pin-usuario" id="pin-usuario">
                            <div class="invalid-feedback">Por favor, verifique seu PIN.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3 px-2">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="senha-usuario">Senha do usuário</label>
                          <input type="password" class="form-control" name="senha-usuario" id="senha-usuario">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="imagem-usuario">Imagem do usuário</label>
                          <input type="file" class="form-control" name="imagem-usuario" id="imagem-usuario" accept="image/png, image/jpeg, image/gif" onchange="changePhotoUser(this)">
                          <input type="text" id="imagem-usuario-64" name="imagem-usuario-64" class="d-none">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row mb-3 px-2">
                      <div class="col-md-12">
                        <label for="level-usuario">Nível de acesso do usuário</label>
                        <select name="level-usuario" id="level-usuario" class="form-control" onchange="$('#previewAccessLevel').text(this.value)">
                          <option value="" selected disabled>Escolha uma opção</option>
                          <option value="ADM">Administrador</option>
                        </select>
                      </div>
                    </div>
                  </form>
                  <div class="row px-2">
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="button" class="btn btn-primary w-100" onclick="registerUser()">Verificar dados e cadastrar</button>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center flec">
                  <img id="previewUserImage" src="assets/img/user-default.jpg" class="rounded-circle" width="100" height="100" alt="">
                  <p id="previewUserName" class="m-0 fs-4 fw-bold text-center"></p>
                  <p id="previewAccessLevel" class="m-0 text-center"></p>
                </div>
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