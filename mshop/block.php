<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
    include("includes/preset.php");
  ?>

  <title>Blank Page | <?=$app_title?></title>
</head>

<body>
  <?php
    include('includes/header.php')
  ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Adicionar Bloco (Aplicativo)</h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="alert alert-secondary border-0 alert-dismissible fade position-fixed" role="alert" id="alert_block_tutorial">
                <a onclick="undoNotSeeAnymore(this)" class="small cursor-pointer">Deseja desfazer sua ação?</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <div class="alert alert-secondary show <?=$block_tutorial?>" role="alert" id="block_tutorial">
                <h4 class="alert-heading">Sua primeira vez?</h4>
                <p>Consulte nossos tutoriais abaixo.</p>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <b>O que são os blocos?</b>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        
                        Como demonstrado na imagem acima, os blocos são um conjunto de produtos. Você pode utilizar os blocos para diversas finalidades, como: <br><br>

                        • Reunir por tipo de poduto (Bebidas, Lanches, Marmitex, etc)<br>
                        • Reunir por corredor ou setor (Açougue, Padaria, Farmácia, etc)<br>
                        • Reunir por categorias (Básico, Premium, Gourmet, etc)<br>
                        • Reunir por condição do produto (Usado, Reembalado, Novo, etc)
                        <hr>
                        Agora é sua vez, adicione seu primeiro bloco. Neste momento, sua criatividade importa muito, por esse motivo, disponibilizamos três exemplos abaixo, para você se basear.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <b>Como inserir um produto?</b>
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <a class="btn btn-primary rounded-pill" href="product.php">Adicionar produto</a>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <a onclick="notSeeAnymore(this)" class="small cursor-pointer">Não quer ver novamente? Clique aqui.</a>
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