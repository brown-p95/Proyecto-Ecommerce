<?php
include("header.html");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">TOGUs</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">mi cuenta</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="user-dashboard page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="list-inline dashboard-menu text-center">
          <li><a class="active"  href="#">Detalles del perfil</a></li>
        </ul>
        <div class="dashboard-wrapper dashboard-user-profile">
          <div class="media">
            <div class="pull-left text-center" href="#!">
              <img class="media-object user-img" src="images/avater.jpg" alt="Image">
              <a href="#x" class="btn btn-transparent mt-20">Cambiar Imagen</a>
            </div>
            <div class="media-body">
              <ul class="user-profile-list">
                <li><span>Nombre Completo:</span>Johanna Doe</li>
                <li><span>Estado:</span>Aguascalientes</li>
				<li><span>Municipio:</span>Aguascalientes</li>
                <li><span>Email:</span>mail@gmail.com</li>
                <li><span>Telefono:</span>+4490123123</li>
				<li><span>Dirección</span></li>
				<li><span>Calle:</span>Santa Magallanes</li>
				<li><span>Fracc:</span>Santa Anita</li>
				<li><span>Num:</span>121</li>
                <li><span>Fecha de nacimieto:</span>Enero , 22 ,1991</li>
              </ul>
            </div>
			<button type="button" class="btn btn-main text-center" id="logout">Editar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">Contacto</a>
					</li>
					<li>
						<a href="shop.html">Compra</a>
					</li>
					<li>
						<a href="pricing.html">Precios</a>
					</li>
					<li>
						<a href="contact.html">Politica de privacidad</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by TOGU</a></p>
			</div>
		</div>
	</div>
</footer>
</body>
</html>