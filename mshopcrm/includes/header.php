<?php
	include('preset.php');
	echo '
		<header id="header" class="header fixed-top d-flex align-items-center">
	    <div class="d-flex align-items-center justify-content-between">
	      <a href="index.php" class="logo d-flex align-items-center">
	        <img src="assets/img/logo-expand.png" alt="">
	      </a>
	      <i class="bi bi-list toggle-sidebar-btn"></i>
	    </div>
	    <nav class="header-nav ms-auto">
	      <ul class="d-flex align-items-center">
	        <li class="nav-item dropdown">
	          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
	            <i class="bi bi-chat-left-text"></i>
	            <!--<span class="badge bg-dark badge-number">3</span>-->
	          </a>
	          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
	            <li class="dropdown-header">
	              You have 3 new messages
	              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
	            </li>
	            <li>
	              <hr class="dropdown-divider">
	            </li>
	            <li class="message-item">
	              <a href="#">
	                <div>
	                  <h4>Maria Hudson</h4>
	                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
	                  <p>4 hrs. ago</p>
	                </div>
	              </a>
	            </li>
	            <li>
	              <hr class="dropdown-divider">
	            </li>
	            <li class="dropdown-footer">
	              <a href="#">Show all messages</a>
	            </li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown pe-3">
	          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
	            <img src="attachments/users/'.$_SESSION['image_user'].'" alt="Profile" class="rounded-circle">
	            <span class="d-none d-md-block dropdown-toggle ps-2">'.$_SESSION['name_user'].'</span>
	          </a>
	          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
				<li class="dropdown-header">
					<h6>'.$_SESSION['name_user'].'</h6>
					<span>'.$_SESSION['level_user'].'</span>
				</li>
				<li>
					<hr class="dropdown-divider">
				</li>
				<li>
					<a class="dropdown-item d-flex align-items-center" href="components/sign-out.php">
						<i class="bi bi-box-arrow-right"></i>
						<span>Sair da conta</span>
					</a>
				</li>
	          </ul>
	        </li>
	      </ul>
	    </nav>
	  </header>
		<aside id="sidebar" class="sidebar">
	    <ul class="sidebar-nav" id="sidebar-nav">
	      <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
	          <i class="bi bi-grid-1x2-fill"></i><span>Aplicativo</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="block">
	              <i class="bi bi-circle"></i><span>Adicionar Bloco</span>
	            </a>
	          </li>
	          <li>
	            <a href="promotional-block">
	              <i class="bi bi-circle"></i><span>Adicionar Bloco Promocional</span>
	            </a>
	          </li>
	        </ul>
	      </li>
	    </ul>
	  </aside>
	';
?>