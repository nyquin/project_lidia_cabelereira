<?php 

	class Servico {
		private $dia;
		private $hora;
		private $TipoServico;

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}
	}

 ?>