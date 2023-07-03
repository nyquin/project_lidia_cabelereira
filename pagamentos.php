<?php 
	
	$acao = 'recuperar';
	require_once 'servico_controller.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css_js/style2.css" />
		<link rel="stylesheet" href="css_js/font.css" />
		<script src="https://kit.fontawesome.com/a9b3abfca6.js" crossorigin="anonymous"></script>
		<title>Lidia Cabelereira</title>
	</head>
	<body>

		<header id="home-pagamentos">
				<div>
					<a href="index.php">Voltar</a>
				</div>		
				<div class="logo">
					<a href="index.php"><h1>Logo</h1></a>
				</div>

				<div class="icons">
					<a href="https://instagram.com/cabelereiralidia?igshid=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i></a>
				</div>
		</header>

		<section id="pagamentos">
			<div class="box-pagamentos">
				<h3>Cliente: ?</h3>
				<div class="pagamentos-titulo">
					<h1>Aqui está o seu carrinho com os itens desejados...</h1>
				</div>
				<div class="pagamentos-gerais">

					<? foreach($servicos as $indice => $servico) { ?>

						<div class="pagamentos-produto-servico">
							<div class="box-pagamentos-servicos-atendimento">		
								<h1>PRODUTOS e SERVIÇOS:</h1>
								<p><?= $servico->TipoServico ?></p>
								<h1 style="margin-top: 20px;">DATA E HORA DO ATENDIMENTO:</h1>
								<p>Dia <?= $servico->dia ?> as <?= $servico->hora ?></p>
							</div>
						</div>
					<? } ?>		
				</div>
				<button	type="submit" id="pagar">Agendar o Horário!</button>
			</div>
		</section>

	</body>
	<script src="css_js/app.js"></script>
</html>