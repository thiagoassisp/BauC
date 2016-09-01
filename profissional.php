<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "bauc";
	$user = "root";
	$pass = "";
			
	// conecta ao banco de dados
	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
	
	// seleciona a base de dados 
	mysql_select_db($db, $con);

?>
<html>
	<head>
		<title>Cadastro Usuário</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo --><a href="index.php" class="image centered"><img src="images/logo.png" height="250"  alt="" /></a>
						
						<div class="row">
							<div class="12u 12u(mobile)">
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="12u 12u(mobile)">
												<input name="nome" placeholder="Pesquisa" type="text" />
											</div>
										</div>
									</form>
								</section>
							</div>
						</div>


						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon fa-home" href="index.php"><span>HomePage</span></a></li>
									<li>
										<a href="#" class="icon fa-bar-chart-o"><span>Serviços</span></a>
										<ul>
											<li>
											<a href="#">Lojas</a>
											<ul>
													<li><a href="#">Tio Zé Acabamentos</a></li>
													<li><a href="#">Leroy Merlin</a></li>
													<li><a href="#">CNR</a></li>
												</ul>
											</li>
											<li>
											<a href="#">Profissionais</a>
												<ul>
													<li><a href="#">Pedreiros</a></li>
													<li><a href="#">Encanadores</a></li>
													<li><a href="#">Pintores</a></li>
													<li><a href="#">Soldadores</a></li>
													<li><a href="#">Bombeiro Hidráulico</a></li>
													<li><a href="#">Jardineiro</a></li>
													<li><a href="#">Marido de Aluguel</a></li>
													<li><a href="#">Gesseiros</a></li>
													<li><a href="#">Eletricistas</a></li>
												</ul>
											</li>

											<li>
												<a href="#">Produtos</a>
												<ul>
													<li><a href="#">Telhas</a></li>
													<li><a href="#">Canos</a></li>
													<li><a href="#">Pisos</a></li>
													<li><a href="#">Tintas</a></li>
													<li><a href="#">Cozinha</a></li>
													<li><a href="#">Jardinagem</a></li>
													<li><a href="#">Material de Construção</a></li>
													<li><a href="#">Madeiras</a></li>
													<li><a href="#">Ferragens</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a class="icon fa-retweet" href="right-sidebar.php"><span>Promoções</span></a></li>
									<li><a class="icon fa-sitemap" href="no-sidebar.php"><span>Login</span></a></li>
									<li>
												<a class="icon fa-sitemap" href="Cadastro.php"><span>Cadastro</span></a>
												<ul>
													<li><a href="produtocad.php">Produto</a></li>
													<li><a href="lojacad.php">Loja</a></li>
													<li><a href="usuario.php">Usuário</a></li>
													<li><a href="profissional.php">Profissional</a></li>
												</ul>
											</li>
								</ul>
							</nav>

					</div>
				</div>


			<!-- Main -->

			<!-- Header -->
				<div id="features-wrapper">
					<div id="features" class="container">
					<h2> <strong>Cadastro de profissional</strong></h2>
						
						<div class="row" align="center">
							<div class="12u 12u(mobile)">
								<section >
									<form method="post" action="#" >
											<div class="6u 12u(mobile)" >
												<input name="nome" placeholder="Nome" type="text" />
											</div>
											<br>
											<div class="6u 12u(mobile)" >
												<input name="Telefone" placeholder="Telefone" type="text" />
											</div>
											<br>
											<div class="6u 12u(mobile)" >
												<input name="email" placeholder="Email" type="text" />
											</div>
											<br>
											<div class="6u 12u(mobile)">
												<input name="senha" placeholder="Senha" type="text" />
											</div>
											<br>
											<div class="6u 12u(mobile)" >
											<select name = "area" >
  													<option value="Pedreiro">Pedreiro</option>
  													<option value="Pintor">Pintor</option>
 													<option value="Eletricista">Eletricista</option>
												  	<option value="Gesseiro">Gesseiro</option>
												  	<option value="Encanador">Encanador</option>
												  	<option value="Marido">Marido de Aluguel</option>
												  	<option value="Jardineiro">Jardineiro</option>
												  	<option value="Bombeiro">Bombeiro Hidráulico</option>
												  	<option value="Soldador">Soldador</option>
											</select>
											</div>
											<br>
											<div class="12u">
												<button class="form-button-submit button icon fa-envelope">Enviar</button><br><br>
												
											</div>
											<?php
												if(!empty($_POST['nome']) || !empty($_POST['Telefone']) || !empty($_POST['email']) || !empty($_POST['senha'])){
													$cod_area;
													switch ($_POST['area']){
														case "Pedreiro":
															$cod_area=1;
															break;
														case "Pintor":
															$cod_area=2;
															break;
														case "Eletricista":
															$cod_area=3;
															break;
														case "Gesseiro":
															$cod_area=4;
															break;
														case "Encanador":
															$cod_area=5;
															break;
														case "Marido de Aluguel":
															$cod_area=6;
															break;
														case "Jardineiro":
															$cod_area=7;
															break;
														case "Bombeiro Hidráulico":
															$cod_area=8;
															break;															
														case "Soldador":
															$cod_area=1;
															break;																												
													}
													
													$nome = $_POST['nome'];
													$telefone = $_POST['Telefone'];
													$email = $_POST['email'];
													$senha = $_POST['senha'];
													$area = $_POST['area'];
													$query=mysql_query("SELECT email FROM profissional WHERE email = '".$email."'");
													if (mysql_num_rows($query) < 1){
														$queryCadastro=mysql_query("INSERT INTO profissional(Nome, Telefone, Email, Senha, Cod_Area) VALUES ('".$nome."', '".$telefone."', '".$email."', '".$senha."', ".$cod_area.")");
													}
													else {
														echo "E-mail já está em uso";
													}
													
												}
											?>
									</form>
								</section>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header>
							<h2><STRONG> Dúvidas e sugestões</strong></h2>
						</header>
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="nome" placeholder="nome" type="text" />
											</div>
											<div class="6u 12u(mobile)">
												<input name="email" placeholder="Email" type="text" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="menssagem" placeholder="Menssagem"></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<a href="#" class="form-button-submit button icon fa-envelope">Enviar</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<p>A BauC está compromissada com o bem estar do usuário, proporcionando uma experiencia mais fácil e agradável para a busca de produtos na área de construção civil, todas as sugestões e críticas são muito bem vindas! </p>
									<div class="row">
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-home">
													Contagem<br />
													Minas Gerais<br />
													Brasil
												</li>
												<li class="icon fa-phone">
													(31) 99999-9999
												</li>
												<li class="icon fa-envelope">
													<a href="#">tccbauc@gmail.com</a>
												</li>
											</ul>
										</div>
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-twitter">
													<a href="#">@untitled-tld</a>
												</li>
												<li class="icon fa-instagram">
													<a href="#">instagram.com/untitled-tld</a>
												</li>
												<li class="icon fa-dribbble">
													<a href="#">dribbble.com/untitled-tld</a>
												</li>
												<li class="icon fa-facebook">
													<a href="#">facebook.com/untitled-tld</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>