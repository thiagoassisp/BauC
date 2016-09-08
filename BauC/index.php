<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	include_once 'email.php';
	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "bauc";
	$user = "root";
	$pass = "";
			
	// conecta ao banco de dados
	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
	
	// seleciona a base de dados 
	mysql_select_db($db, $con);
	session_start();
	if(!isset($_SESSION['login'])){
		$_SESSION['login'] = false;
	}
	echo $_SESSION['login'];
?>
<html>
	<head>
		<title>BauC</title>
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

						<!-- Logo -->
							<a href="index.php" class="image centered"><img src="images/logo.png" height="250"  alt="" /></a>
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
									<?php
										
										if($_SESSION['login']==false){
											echo "<li><a class='icon fa-sitemap' href=Login.php><span>Login</span></a></li>";
											
										}
										else if($_SESSION['login']==true){
											echo "<li><a class='icon fa-sitemap' href=index.php?id=1'><span>Log Out</span></a></li>";
											if(!isset($_GET['id']) == 1){
												$_SESSION['login']=false;
											}
										}
									?>
									<li>
												<a class="icon fa-sitemap" href="Cadastro.php"><span>Cadastro</span></a>
												<ul>
													<li><a href="#">Produto</a></li>
													<li><a href="#">Loja</a></li>
													<li><a href="usuario.php">Usuário</a></li>
													<li><a href="#">Profissional</a></li>
												</ul>
											</li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>Confira as promoções <strong> imperdíveis</strong>!</h2>
						</header>
						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
									<?php
										
										/*para alterar o produto que aparece nas promocoes basta mudar a variavel $produtoPromocao1 para
										o valor do Cod_produto que deseja*/
										$produtoPromocao1 = 1;
										$queryPromocao = mysql_query("SELECT * FROM produto WHERE Cod_Produto = ".$produtoPromocao1."");
										$promocao1 = mysql_fetch_assoc($queryPromocao);
										echo
										'<a href="#" class="image featured"><img src="'.$promocao1['Imagem'].'" width="80" height="250" alt="" /></a>										
											<header>
												<h3>'.$promocao1['Nome'].'</h3>
											</header>
										<p>'.$promocao1['Descricao'].'.</p>'
										//usar comando <strong> Aqui ficará negritado e amarelo </strong>
									?>
									</section>
									
							</div>
							
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/porcelanatos.jpg" width="80" height="250" alt="" /></a>
										<header>
											<h3>Porcelanato Eucaflor</h3>
										</header>
										<p>O <strong>melhor e mais bonito</strong> porcelanato por apenas R$ 20,00 a unidade.</p>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/tinta.jpg" width="80" height="250" alt="" /></a>
										<header>
											<h3>Tinta Suvinil</h3>
										</header>
										<p><strong>A tinta com maior rendimento do mercado</strong> por apenas R$ 70,00 a unidade. </p>
									</section>

							</div>
						</div>
						<ul class="actions">
							<li><a href="#" class="button icon fa-file">Veja mais!!!!</a></li>
						</ul>
					</section>
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
												<input name="nome" placeholder="Nome" type="text" />
											</div>
											<div class="6u 12u(mobile)">
												<input name="Email" placeholder="Email" type="text" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="Mensagem" placeholder="Mensagem"></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<button class="form-button-submit button icon fa-envelope">Enviar</button>
											</div>
										</div>
									</form>
									
									<?php
										if(!empty($_POST['nome']) || !empty($_POST['Email']) || !empty($_POST['Mensagem'])){
											enviaEmail($_POST['nome'],$_POST['Email'],$_POST['Mensagem']);
										}
									?>
									
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