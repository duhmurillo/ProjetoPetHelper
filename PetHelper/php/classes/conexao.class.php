<?php
	class conexao
	{

		private $hostname = "";
		private $user = "";
		private $password = "";
		private $database = "";
		
		public function getConexao()
		{
			
			$root = $_SERVER['DOCUMENT_ROOT'];
			$arquivo = ($root . '/ProjetoSiteFacens/PetHelper/php/classes/config.txt');
			$linhas = file($arquivo);
			
			
			$this->hostname = substr($linhas[0], 0, -2);
			$this->user = substr($linhas [1], 0, -2);
			$this->password = substr($linhas[2], 0, -2);
			$this->database = substr($linhas[3], 0, -2);

			$conexao = mysqli_connect($this->hostname, $this->user, $this->password, $this->database);
			
			if(!$conexao)
			{
				die("Problemas com a conexão");
			}else{
				mysqli_query($conexao,"SET NAMES 'utf8'");
				mysqli_query($conexao,'SET character_set_connection=utf8');
				mysqli_query($conexao,'SET character_set_client=utf8');
				mysqli_query($conexao,'SET character_set_results=utf8');
				return $conexao;
			}
		}
	}
?>