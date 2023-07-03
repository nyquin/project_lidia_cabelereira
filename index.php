

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css_js/style.css" />
		<link rel="stylesheet" href="css_js/font.css" />
		<script src="https://kit.fontawesome.com/a9b3abfca6.js" crossorigin="anonymous"></script>
		<title>Lidia Cabelereira</title>
	</head>

	<body>
	<!-- INICIO CABECALHO -->
		<header id="home">		
				<div class="logo">
					<a href="index.php"><img style="width: 70px; height: 70px;" src="fotosClientes/lidia-logo.jpeg" />
				</div>

				<div class="menu">
					<nav class="nav-menu">
						<ul>
							<li class="nav-item"><a href="#introducao">Home</a></li>
							<li class="nav-item"><a href="#carreira">Carreira e Trabalhos</a></li>
							<li class="nav-item"><a href="#horario">Marque seu Horário</a></li>
							<li class="nav-item"><a href="#sugestao-e-contato">Contato</a></li>	
						</ul>
					</nav>
				</div>

				<div class="icons">
					<a href="https://instagram.com/cabelereiralidia?igshid=MzRlODBiNWFlZA=="><i id="instagram" class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i></a>
					<a href="pagamentos.php"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #000000;"></i></a>
				</div>

				<div class="icon-mobile">
					<button onclick="menuShow()"><img src="fotosClientes/botao_menu_mobile.svg"></button>
				</div>

				
		</header>
				<div class="mobile-menu" style="">
					<ul>
						<li><a href="#introducao">Home</a></li>
						<li><a href="#carreira">Carreira e Trabalhos</a></li>
						<li><a href="#horario">Marque seu Horário</a></li>
						<li><a href="#sugestao-e-contato">Contato</a></li>	
					</ul>
				</div>
	<!-- FIM CABEÇALHO -->

		<main>
	<!-- INICIO INTRODUCAO -->
			<section id="introducao">		
				<div class="home">
					<div class="homeIntroducao">
						<div class="titulo">
							<h1>Bem vindos ao <span>Espaço Lidia Cabelereira!</span></h1>
						
						<br />
							<p>Espaço onde você pode ser QUEM QUISER!</p>
						</div>
					</div>
				</div>
			</section>
	<!-- FIM INTRODUCAO -->

		<!-- INICIO TRABALHOS E CARREIRA -->
			<section id="carreira">
				<article>
					<div class="TrabalhosCarreira">
						<div class="tituloTrabalhosCarreira">
							<h1>Minha Carreira e Trabalhos</h1>
						</div>	
							<br />
						<div class="conteudoTrabalhosCarreira">
							
							<p>A minha história como cabeleleira começou quando...</p>
							<br />
							<p>Desde então venho fazendo...</p>
							<br/>
						</div>

						<div class="trabalhos"> <!-- Engloba as imagens e os depoimentos -->
							<div class="trabalhos-fotos">
								
							<h2>Alguns dos <span>MEUS TRABALHOS...</span></h2>
								<div class="box-slider">
									<div class="slider">
										<div class="slides">
											<input type="radio" name="radio-btn" id="radio1" checked>
											<input type="radio" name="radio-btn" id="radio2">
											<input type="radio" name="radio-btn" id="radio3">
											<input type="radio" name="radio-btn" id="radio4">

											<div class="slide first">
												<img  src="fotosClientes/1.jpg" alt="cliente-1">	
											</div>

											<div class="slide"> 
												<img  src="fotosClientes/2.jpg" alt="cliente-2">
											</div>

											<div class="slide">	
												<img  src="fotosClientes/3.jpg" alt="cliente-3">
											</div>
											<div class="slide">	
												<img  src="fotosClientes/1.png" alt="cliente-4">
											</div>

											<div class="navigation-auto">
												<div class="auto-btn1"></div>
												<div class="auto-btn2"></div>
												<div class="auto-btn3"></div>
												<div class="auto-btn4"></div>
											</div>
										</div>

										<div class="manual-navigation">
											<label for="radio1" class="manual-btn"></label>
											<label for="radio2" class="manual-btn"></label>
											<label for="radio3" class="manual-btn"></label>
											<label for="radio4" class="manual-btn"></label>
										</div>
									</div>
								</div>
							</div>

							<div class="depoimentos">
								<div class="depoimentos-titulo">
									<h1><span>Depoimentos dos nossos clientes:</span></h1>
									<br />
									<div class="depoimentos-conteudo">
										<div id="depoimento1">				
											<p>Amei os cuidados que a Lidia teve comigo, me senti muito especial. Fora que a produção de tudo
											foi espetacular, tudo com um capricho enorme com o meu cabelo.</p>
											<span>Barbara de Oliveira, 19 anos.</span>
										</div>

										<div class="depoimentos-botao">
										<p><span>Tá esperando o quê?...</span></p>
										<button><a href="#horario">MARQUE JÁ O SEU HORÁRIO</a></button>
										</div>
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</article>
			</section>
		<!-- FIM TRABALHOS E CARREIRA -->

		</main>
	<!-- INICIO MARQUE SEU HORARIO -->
		<section id="horario" class="marque-horario">
			<div class="marque-horario-titulo">
				<h1>Marque já o <span>SEU HORÁRIO!</span></h1>
				<p>Não fique de fora, marque já o que deseja fazer e escolha os horários disponíveis! Te aguardo hein ;)!</p>
			</div>
				<div class="box-marque-horario">		
					<div class="servico">
							
						<form method="post" action="servico_controller.php?acao=inserir">
							<select name="servico">
								<option value="">Selecione o serviço</option>
									<option value="Prancha">Prancha</option>	
									<option value="Escova">Escova</option>	
									<option value="Dia De Noiva">Dia de Noiva</option>	
									<option value="Tingir o Cabelo">Tingir o Cabelo</option>	
									<option value="Sobrancelha">Sobrancelha</option>	
									<option value="Manicure">Manicure</option>	
									<option value="Pedicure">Pedicure</option>	
							</select>

							<select name="dia">
								<option value="">Selecione o Dia</option>
								<option value="1">Dia 1</option>
								<option value="2">Dia 2</option>
								<option value="3">Dia 3</option>
								<option value="4">Dia 4</option>
								<option value="5">Dia 5</option>
								<option value="6">Dia 6</option>
								<option value="7">Dia 7</option>
								<option value="8">Dia 8</option>
								<option value="9">Dia 9</option>
								<option value="10">Dia 10</option>
								<option value="11">Dia 11</option>
								<option value="12">Dia 12</option>
								<option value="13">Dia 13</option>
								<option value="14">Dia 14</option>
								<option value="15">Dia 15</option>
								<option value="16">Dia 16</option>
								<option value="16">Dia 17</option>
								<option value="18">Dia 18</option>
								<option value="19">Dia 19</option>
								<option value="20">Dia 20</option>
								<option value="21">Dia 21</option>
								<option value="22">Dia 22</option>
								<option value="23">Dia 23</option>
								<option value="24">Dia 24</option>
								<option value="25">Dia 25</option>
								<option value="26">Dia 26</option>
								<option value="27">Dia 27</option>
								<option value="28">Dia 28</option>
								<option value="29">Dia 29</option>
								<option value="30">Dia 30</option>
								<option value="31">Dia 31</option>
							</select>

							<select name="hora">
								<option value="">Selecione o Horário</option>
								<option value="08:00">08:00</option>
								<option value="09:00">09:00</option>
								<option value="10:00">10:00</option>
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
								<option value="13:00">13:00</option>
								<option value="14:00">14:00</option>
								<option value="15:00">15:00</option>
								<option value="16:00">16:00</option>
								<option value="17:00">17:00</option>
								<option value="18:00">18:00</option>
								<option value="19:00">19:00</option>
							</select>
							<input type="submit" value="Adicionar ao Carrinho!"></input>
						</form>
					</div>
				</div>
			<? if( isset($_GET['success']) && $_GET['success'] == 1 ) { ?>
			<div class="inserção-sucesso">
				<h1>Adicionado com sucesso!</h1>
			</div>
			<? } ?>
			<?	if ( isset($_GET['error']) ) { ?>
				<div>
					<h1>Algo deu Errado. Verifique e tente novamente!</h1>
				</div>
			<? } ?>	
		</section>
	<!-- FIM MARQUE SEU HORARIO -->

	<!-- INICIO SUGESTOES E CONTATO -->
		<section id="sugestao-e-contato" class="sugestaoContato">
			<div class="sugestao">
				<div class="sugestao-titulo">
					<h1>Deixe aqui sua <span>Sugestão!</span></h1>
					<p>Sua opinião é muito importante para nós, E queremos te ouvir!</p> 

					<p>Deixe aqui sua sugestão do que pode ser melhorado,
					ou alguma reclamação que nos faça melhorar para aumentar satisfação dos nossos queridos clientes, VOCÊ!</p>
				</div>
				<div class="form-sugestao">
					<form method="post" action="sugestoes_controller.php">
								
						<label for="nome">Seu Nome:</label>
						<br />
						<input type="text" name="nome" placeholder="Seu nome" required>
						<br />

						<label for="email">E-mail para contato:</label>
						<br />
						<input type="text" name="email" placeholder="Seu email para contato" required>
						<br />		
						
						<label for="sugestao">Selecione alguma das opções:</label>
						<br />
						<select name="assunto" required>
							<option value=""></option>
							<option value="sugestao">Sugestão</option>
							<option value="reclamacao">Reclamação</option>
							<option value="depoimento">Depoimento</option>
						</select>
						<br />

						<label>Nos conte mais detalhes:</label>
						<br />
						<textarea name="texto" required style="width: 500px; height: 175px;">
							
						</textarea>
						<input type="submit" value="Enviar" />
					</form>
				</div>
			</div>
			</section>

			<section class="contatos">
			<div class="contato">
				<h1>Contatos:</h1>
				<div class="numero-e-email">
					<div class="numero">	
						<i class="fa-solid fa-phone" style="color: #000000;"></i>
						<span>Telefone: (27) 9 9999-8888</span>
						<i class="fa-solid fa-phone" style="color: #000000;"></i>
						<span>Celular:(27) 9 9999-8888</span>
					</div>
					<br />
					<div class="email">	
						<i class="fa-solid fa-envelope" style="color: #000000;"></i>
						<span>E-Mail: lidia@gmail.com</span>
					</div>
				</div>

			</div>
			</section>
	<!-- FIM SUGESTOES E CONTATO -->

	<!-- INICIO FOOTER -->
		<footer id="footer">
			<h1>Feito por</h1>
			<h3>Nycolas Andrey  2023 &copy;</h3>
		</footer>
	<!-- FIM FOOTER -->
	</body>
	<script src="css_js/app.js"></script>
</html>