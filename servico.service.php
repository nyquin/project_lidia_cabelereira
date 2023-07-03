<?php 
	
	class ServicoService {

		private $conexao;
		private $servico;

		public function __construct(Conexao $conexao, Servico $servico) {
			$this->conexao = $conexao->conectar();
			$this->servico = $servico;
		}

		public function inserir() {

			$query = 'insert into tb_agenda(dia, hora, TipoServico)values(:dia, :hora, :servico)';

			$stmt = $this->conexao->prepare($query);
			
			$stmt->bindValue(':servico', $this->servico->__get('TipoServico'));
			$stmt->bindValue(':dia', $this->servico->__get('dia'));
			$stmt->bindValue(':hora', $this->servico->__get('hora'));
			$stmt->execute();
		}

		public function recuperar() {
			$query = '
			select 
				*
			from 
				tb_agenda
			';
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function atualizar() {
			
		}

		public function remover() {
			
		}
	}

 ?>