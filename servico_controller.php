<?php 

	require "servico.model.php";
	require "servico.service.php";
	require "conexao.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if( $acao == 'inserir' && $_POST['dia'] != '' && $_POST['hora'] != '') {

		$servico = new Servico();
		$servico->__set('TipoServico', $_POST['servico']);
		$servico->__set('dia', $_POST['dia']);
		$servico->__set('hora', $_POST['hora']);

		$conexao = new Conexao();

		$servicoService = new ServicoService($conexao, $servico);
		$servicoService->inserir();

		header('Location: index.php?success=1');

	 } else if ( $acao == 'recuperar' ) {

		$servico = new Servico();
		$conexao = new Conexao();

		$servicoService = new ServicoService($conexao, $servico);
		$servicos = $servicoService->recuperar();
	}
 ?>