<?php
	echo '
	  <script rel="preload" src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/chart.js/chart.min.js"></script>
	  <script src="assets/vendor/echarts/echarts.min.js"></script>
	  <script src="assets/vendor/quill/quill.min.js"></script>
	  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
	  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
	  <script src="assets/vendor/php-email-form/validate.js"></script>
	  <script src="assets/js/main.js"></script>
	  <script>
	  	$(document).ready(function(){
			  var location = window.location.href.split("/")
			  location = location[4]
			  
			  if(location == "index.php"){
			    $(".nav__list .nav__item")[0].classList.add("active")
			  }else if(location == "search.php"){
			    $(".nav__list .nav__item")[1].classList.add("active")
			  }else if(location == "orders.php"){
			    $(".nav__list .nav__item")[2].classList.add("active")
			  }else if(location == "profile.php"){
			    $(".nav__list .nav__item")[3].classList.add("active")
			  }
			})
	  </script>
	';
?>