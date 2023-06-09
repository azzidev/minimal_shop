<?php
	echo '
		<header class="header" id="header">
      <nav class="nav container">
          <img src="assets/img/logo-expand.png" class="nav__logo">

          <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                  <li class="nav__item">
                      <a href="index.php" class="nav__link active-link">
                          <i class="bx bx-food-menu nav__icon"></i>
                          <span class="nav__name">Cardápio</span>
                      </a>
                  </li>

                  <li class="nav__item">
                      <a href="search.php" class="nav__link">
                          <i class="bx bx-search nav__icon"></i>
                          <span class="nav__name">Buscar</span>
                      </a>
                  </li>

                  <li class="nav__item">
                      <a href="orders.php" class="nav__link">
                          <i class="bx bx-notepad nav__icon"></i>
                          <span class="nav__name">Pedidos</span>
                      </a>
                  </li>
                  
                  <li class="nav__item">
                      <a href="profile.php" class="nav__link">
                          <i class="bx bx-user nav__icon"></i>
                          <span class="nav__name">Perfil</span>
                      </a>
                  </li>
              </ul>
          </div>
      </nav>
  </header>

  <main>
      <section class="container section section__height d-none" id="home">
          <h2 class="section__title">Home</h2>
      </section>

      <section class="container section section__height d-none" id="about">
          <h2 class="section__title">About</h2>
      </section>

      <section class="container section section__height d-none" id="skills">
          <h2 class="section__title">Skills</h2>
      </section>

      <section class="container section section__height d-none" id="portfolio">
          <h2 class="section__title">Portfolio</h2>
      </section>

      <section class="container section section__height d-none" id="contactme">
          <h2 class="section__title">Contactme</h2>
      </section>
  </main>
	';
?>