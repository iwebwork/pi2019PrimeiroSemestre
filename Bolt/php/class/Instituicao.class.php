<?php 
	include_once 'Banco.class.php';
	class Instituicao extends Banco{

		//Construtor de coneção com o banco
		//Ele herda o contrutor da class Banco
		function __construct() {
	       parent::__construct();
	   }

		//Atributos
		private $id_inst;
		private $nome_respons;
		private $rua;
		private $numero;
		private $bairro;
		private $cidade;
		private $estado;
		private $email;
		private $telefone;
		private $celular;
		private $descricao;
		private $horario_abertura;
		private $horario_fechamento;
		private $img;

		//Esta função busca todos os itens do banco, OBS: TODOS MESMO
		public function buscarTodosOsDados(){
			//Query de busca
			$sql = "SELECT * FROM instituicao";
			//Atribuição da query a coneção,
			//OBS: A variavel $sql aqui recebe a requisição, mas pode ser qualquer outro nome
			$sql = $this->pdo->prepare($sql);
			//Aqui eu executo a query, ela retorna true ou false, se for false cai no else
			if($sql->execute()){
				//Como ela não esta com valor false, $dados recebe todos os dados, por isso e fetchAll()
				$dados = $sql->fetchAll();
				//Se ela não estiver vazia, eu retorno os dados
				if(!empty($dados)){
					return $dados;
				}else{
					echo "O banco esta vazio";
				}
				
			}else{
				echo "Erro, a busca não deu certo";
			}
		}

		public function escreverOsDados($value)
		{
			//Aqui eu verifico se o parametro estavazio, se não estiver
			if(!empty($value)){
				//Eu itero todo o meu array com o foreach e atribuo os dados ao array $instituicao
				foreach ($value as $instituicao) {
					//Esta string e que será escrita na pagina
					$str = 
					/*'<div class="col-lg-4">'.
						'<a href="#">'.'<img src="img/1.jpg" alt="">'.'</a>'.
						'<p> Responsavel: '.$instituicao['nome_respons'].'</p>'.
						'<p> Cidade: '.$instituicao['cidade'].'</p>'.
						'<p> Estado: '.$instituicao['estado'].'</p>'.
					'</div>';*/
					'<div class="col-lg-4 col-sm-6 portfolio-item">'.
				        '<div class="card h-100">'.
				          '<a href="#"><img class="card-img-top" style="height: 250px; width: max" src="img/img.jpg" alt=""></a>'.
				          '<div class="card-body">'.
				            '<h4 class="card-title">'.
				              '<p> Responsavel: '.$instituicao['nome_respons'].'</p>'.
							  '<p> Cidade: '.$instituicao['cidade'].'</p>'.
							  '<p> Estado: '.$instituicao['estado'].'</p>'.
				            '</h4>
				           </div>
				        </div>
				    </div>';
					//O comando echo escreve ela na tela
					echo $str;
				}
			}else{
				echo "Os dados estão vazios";
			}
		}

		public function inserirInstituicao($value)
		{
			if(!empty($value)){
					/*
						[nome_respons] => hcdvsdk [nome_inst] => pcbwc [rua] => wbwvp [bairro] => djvbdj [cidade] => jdwpbv [estado] => jcpwb [email] => qcjpw [telefone] => cjewpb [celular] => cjew [descricao] => jdpwbe [horario_abertura] => 12:32 [horario_fechamento] => 19:02
					*/
					$dados = $value;
					$sql = "INSERT INTO instituicao (nome_inst,nome_respons,rua,numero,bairro,cidade,estado,email,telefone,celular,descricao,horario_abertura,horario_fechamento) VALUES 
					(:nome_inst,:nome_respons,:rua,:numero,:bairro,:cidade,:estado,:email,:telefone,:celular,:descricao,:horario_abertura,:horario_fechamento)";

					try {
						$sql = $this->pdo->prepare($sql);
				
						$sql->bindValue(':nome_inst',$dados['nome_inst']);
						$sql->bindValue(':nome_respons',$dados['nome_respons']);
						$sql->bindValue(':rua',$dados['rua']);
						$sql->bindValue(':numero',$dados['numero']);
						$sql->bindValue(':bairro',$dados['bairro']);
						$sql->bindValue('cidade',$dados['cidade']);
						$sql->bindValue('estado',$dados['estado']);
						$sql->bindValue(':email',$dados['email']);
						$sql->bindValue(':telefone',$dados['telefone']);
						$sql->bindValue(':celular',$dados['celular']);
						$sql->bindValue(':descricao',$dados['descricao']);
						$sql->bindValue(':horario_abertura',$dados['horario_abertura']);
						$sql->bindValue(':horario_fechamento',$dados['horario_fechamento']);
						if($sql->execute()){
							echo "Funcionou";
						}else{
							echo "Deu erro ao executar";
						}

					} catch (Exception $e) {
						echo $e->getMessage();
					}

					
					
				}else{
					
					echo "Os dados foram vazios";
				}
		}
	}