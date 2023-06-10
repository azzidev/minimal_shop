<?php
  include("components/auth-session.php");
  include("includes/preset.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("includes/head.php");
  ?>

  <title>Adicionar bloco | <?=$app_title?></title>
</head>

<body>
  <?php
    include("includes/loading.php");
    include('includes/header.php');
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
              <div class="row">
                <div class="col-12">
                  <div class="alert alert-secondary border-0 alert-dismissible fade position-fixed" role="alert" id="alert_block_tutorial">
                    <a onclick="undoNotSeeAnymore(this)" class="small cursor-pointer">Deseja desfazer sua ação?</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <div class="alert alert-secondary show <?=$block_tutorial?>" role="alert" id="block_tutorial">
                    <h4 class="alert-heading">Sua primeira vez? Pequenos passos.</h4>
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
                            <div class="row">
                              <div class="col-lg-8 col-md-12">
                                <img src="assets/img/example-block.jpg" class="w-100 rounded-3 mb-3" alt="">
                              </div>
                              <div class="col-lg-4 col-md-12">
                                Como demonstrado na imagem, os blocos são um conjunto de produtos. Você pode utilizar os blocos para diversas finalidades, como: <br><br>

                                • Reunir por tipo de poduto (Bebidas, Lanches, Marmitex, etc)<br>
                                • Reunir por corredor ou setor (Açougue, Padaria, Farmácia, etc)<br>
                                • Reunir por categorias (Básico, Premium, Gourmet, etc)<br>
                                • Reunir por condição do produto (Usado, Reembalado, Novo, etc)<br>
                                • Reunir por custo do produto (Promoção, Cupons, Eventos, etc)
                              </div>
                              <div class="col-12 mt-1">
                                Agora é sua vez, adicione seu primeiro bloco. A partir deste momento, sua criatividade importa muito, por esse motivo, disponibilizamos três exemplos abaixo, para você se basear.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <b>Exemplos</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="row">
                              <div class="col-md-4">
                                <h5 class="fw-bold">
                                  Coleção Exclusiva de Produtos: Descubra a Melhor Seleção
                                </h5>
                                <p>
                                  Descubra uma seleção requintada de produtos que combinam qualidade, sabor e custo-benefício.  
                                </p>
                              </div>
                              <div class="col-md-4">
                                <h5 class="fw-bold">
                                  Liberte Sua Criatividade: Inspiração Artística
                                </h5>
                                <p>
                                  Nossa coleção foi selecionada para ajudar você a explorar sua expressão artística e mergulhar em projetos criativos emocionantes. 
                              </div>
                              <div class="col-md-4">
                                <h5 class="fw-bold">
                                  Eleve Sua Rotina de Bem-Estar
                                </h5>
                                <p>
                                  Descubra uma ampla gama de itens projetados para melhorar sua saúde física e mental. De produtos de skincare e aromaterapia a acessórios de meditação e bem-estar.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <b>Relacionados</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <a class="btn btn-primary rounded-pill" href="product">Adicionar produto</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <a onclick="notSeeAnymore(this)" class="small cursor-pointer">Não quer ver novamente? Clique aqui.</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-sm-12">
                  <div class="row">
                    <div class="col-12">
                      <h5 class="h5 text-primary">Seus blocos</h5>
                      <ul class="blocks">
                        <button class="btn btn-primary rounded-pill w-100" onclick="newBlock('start')">Adicionar bloco</button>
                        <li class="block">
                          <div class="block-id">#001</div>
                          <div class="block-title">Promoções</div>
                          <div class="block-description">Venha economizar com o Mininal Shop. Promoções válidas de 01/07 à 10/07. </div>
                          <div class="block-tools">
                            <button type="button" data-bs-toggle="tooltip" title="Editar bloco" data-bs-placement="right" class="btn btn-primary rounded-circle" onclick="editBlock('start')"><i class="bi bi-pencil"></i></button>
                            <button type="button" data-bs-toggle="tooltip" title="Apagar bloco" data-bs-placement="right" class="btn btn-primary rounded-circle" onclick="excludeBlock('start')"><i class="bi bi-trash"></i></button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12">
                      <h5 class="h5 text-primary">Ordene seus blocos</h5>
                      <ul id="block-ordination">
                        <li>
                          <div class="d-flex align-items-center fw-light small">
                            #001 |
                          </div>
                          <div class="ms-1">Promoções</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="modal" id="newBlock" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title mb-5">
            <span>Adicionar um novo bloco</span>
          </div>
          <div class="modal-form">
            <form id="newBlockForm">
              <div class="form-group">
                <label for="titleBlockInput">Título do bloco</label>
                <input type="text" class="form-control border-0 fs-2 text-primary fw-bold" id="titleBlockInput">
              </div>
              <div class="form-group">
                <label for="titleBlockInput">Descrição do bloco</label>
                <textarea class="form-control border-0 fs-5 text-primary w-100" id="descriptionBlockInput"></textarea>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-6 m-0 px-1">
            <button type="button" class="btn btn-secondary m-0 w-100" onclick="newBlock('cancel')">Cancelar</button>
          </div>
          <div class="col-md-6 m-0 px-1">
            <button type="button" class="btn btn-primary m-0 w-100" onclick="newBlock('save')">Adicionar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="editBlock" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title mb-5">
            <span>Editar bloco <span id="block-id"></span></span>
          </div>
          <div class="modal-form">
            <div class="form-group">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="activeBlock" checked="">
                <label class="form-check-label" for="activeBlock">Bloco visível no cardápio?</label>
              </div>
            </div>
            <form id="editBlockForm">
              <div class="form-group">
                <label for="titleBlockInput">Título do bloco</label>
                <input type="text" class="form-control border-0 fs-2 text-primary fw-bold" id="titleBlockInput">
              </div>
              <div class="form-group">
                <label for="titleBlockInput">Descrição do bloco</label>
                <textarea class="form-control border-0 fs-5 text-primary w-100" id="descriptionBlockInput" resize="none"></textarea>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-6 m-0 px-1">
            <button type="button" class="btn btn-secondary m-0 w-100" onclick="editBlock('cancel')" data-bs-dismiss="modal">Cancelar</button>
          </div>
          <div class="col-md-6 m-0 px-1">
            <button type="button" class="btn btn-primary m-0 w-100">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="excludeBlock" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-title mb-5">
            <span>Apagar bloco <span id="block-id"></span></span>
          </div>
          <div class="modal-form">
            <p class="fs-4 text-center">O agrupamento de produtos, título e descrição, serão perdidos. Você não poderá recuperar o bloco após esta ação. <br><br> Deseja continuar?</p>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-6 m-0 px-1">
            <button type="button" class="btn btn-secondary m-0 w-100" onclick="excludeBlock('cancel')" data-bs-dismiss="modal">Cancelar</button>
          </div>
          <div class="col-md-6 m-0 px-1">
            <button type="button" class="btn btn-primary m-0 w-100">Continuar e apagar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

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