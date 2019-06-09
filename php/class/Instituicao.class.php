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
		private $cep;
		private $email;
		private $telefone;
		private $celular;
		private $descricao;
		private $horario_abertura;
		private $horario_fechamento;
		private $img;
		private $status;//0 esta pendente, 1 esta liberada

		//Esta função busca todos os itens do banco, OBS: TODOS MESMO
		public function buscarTodosOsDados(){
			//Query de busca
			$sql = "SELECT * FROM instituicao ";
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

		public function buscarTodosOsDadosComVistoriaOK(){
			//Query de busca
			$sql = "SELECT * FROM instituicao WHERE vistoria = 1";
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


		public function inserirInstituicao($value)
		{
			//Array ( [nome] => teste [responsavel] => testerest [cep] => 32071-156 [bairro] => Sapucaia II [rua] => Rua Esmeraldas [num_rua] => 144 [cidade] => Contagem [uf] => MG [email] => teste@teste.com [tel_fixo] => 31 23446765 [tel_celular] => 21 23454367 [descricao] => jvfvnspivsivsisv [hr_inicio] => 08:00 [hr_fim] => 23:00 )
			if(!empty($value)){
					$dados = $value;
					$sql = "INSERT INTO instituicao(nome_inst, nome_respons,rua
					, numero, bairro, cidade,estado,email,telefone,celular,descricao,
					horario_abertura, horario_fechamento, cep, vistoria) VALUES
					(:nome_inst, :nome_respons, :rua,:numero, :bairro, :cidade, :estado, :email,
					:telefone,:celular, :descricao, :horario_abertura, :horario_fechamento, :cep,
					:vistoria)";
					echo $sql."<br>";
					$status = 0;
					$teste = "teste";
					//print_r($dados);	
					$sql = $this->pdo->prepare($sql);
					$sql->bindValue(':nome_inst',$dados['nome']);
					$sql->bindValue(':nome_respons',$dados['responsavel']);
					$sql->bindValue(':rua',$dados['rua']);
					$sql->bindValue(':numero',$dados['num_rua']);
					$sql->bindValue(':bairro',$dados['bairro']);
					$sql->bindValue(':cidade',$dados['cidade']);
					$sql->bindValue(':estado',$dados['uf']);
					$sql->bindValue(':email',$dados['email']);
					$sql->bindValue(':telefone',$dados['tel_fixo']);
					$sql->bindValue(':celular',$dados['tel_celular']);
					$sql->bindValue(':descricao',$dados['descricao']);
					$sql->bindValue(':horario_abertura',$dados['hr_inicio']);
					$sql->bindValue(':horario_fechamento',$dados['hr_fim']);
					$sql->bindValue(':cep',$dados['cep']);
					$sql->bindValue(':vistoria',$status);
					//Ele retorna true caso tenha funcionado, ou false se der erro
					if($sql->execute()){
						echo "Funcionou";
					}else{
						echo "Deu erro ao executar";
					}	
					
			}else{				
				echo "Os dados foram vazios";
			}
		}

		public function deletarInst($value)
		{	
			if (!empty($value)) {
				$sql = "DELETE FROM instituicao WHERE id_inst = :id_inst";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':id_inst',$value);
				if ($sql->execute()) {
					# code...
					echo "excluido";
				}		
			}else{
				echo "O valor veio vazio";
			}
					
		}

		public function liberarInstituicao($id_inst)
		{
			if (!empty($id_inst)) {
				$sql = "UPDATE instituicao SET vistoria = :vistoria WHERE id_inst = :id_inst";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':vistoria',1);
				$sql->bindValue(':id_inst',$id_inst);
				//echo "Vai pro executar";
				if($sql->execute()){
					echo "Funcionou";
				}else{
					echo "Deu erro";
				}
			}

		}

		public function atualizar($value)
		{	
			//print_r($value);
			if (!empty($value['id_inst'])) {
				# code...
			
				$sql = "UPDATE instituicao SET nome_inst = :nome_inst, nome_respons = :nome_respons, rua = :rua, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, email = :email, telefone = :telefone, celular = :celular, descricao = :descricao, horario_abertura = :horario_abertura, horario_fechamento = :horario_fechamento, cep = :cep WHERE id_inst = :id_inst";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome_inst',$value['nome_inst']);
				$sql->bindValue(':nome_respons',$value['nome_respons']);
				$sql->bindValue(':rua',$value['rua']);
				$sql->bindValue(':numero',$value['numero']);
				$sql->bindValue(':bairro',$value['bairro']);
				$sql->bindValue(':cidade',$value['cidade']);
				$sql->bindValue(':estado',$value['estado']);
				$sql->bindValue(':email',$value['email']);
				$sql->bindValue(':telefone',$value['telefone']);
				$sql->bindValue(':celular',$value['celular']);
				$sql->bindValue(':descricao',$value['descricao']);
				$sql->bindValue(':horario_abertura',$value['horario_abertura']);
				$sql->bindValue(':horario_fechamento',$value['horario_fechamento']);
				$sql->bindValue(':cep',$value['cep']);
				$sql->bindValue(':id_inst',$value['id_inst']);
				if ($sql->execute()) {
					header("Location: ../index.php");
				}else{
					echo "Falha ao atualizar";
				}
			}
		}

		public function buscarInstituicao($id){
			//Query de busca
			$sql = "SELECT * FROM instituicao WHERE id_inst = :id_inst";
			//Atribuição da query a coneção,
			//OBS: A variavel $sql aqui recebe a requisição, mas pode ser qualquer outro nome
			if (!empty($id)) {
				# code...
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue('id_inst',$id);
				//Aqui eu executo a query, ela retorna true ou false, se for false cai no else
				if($sql->execute()){
					//Como ela não esta com valor false, $dados recebe  os dados da instituicao, por isso e fetch()
					$dados = $sql->fetch();
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
		}

		//------------------------------Funções para escrever na tela---------------------------------

		public function strVistotia($value)
		{
			# code...
			if ($value == 0) {
				# code...
				return '<button type="submit" class="btn btn-success edit">Liberar</button>';
			}else{
				return '<button type="submit" class="btn btn-success edit" disabled >Liberado</button>';
			}
		}

		public function escreverOdDadosParaOadim($value)
		{
			if (!empty($value)) {
				# code...
				foreach ($value as $dados) {
					# code...
					$str =
					'<tr>
                        <td>'.$dados['nome_inst'].'</td>
                        <td>'.$dados['nome_respons'].'</td>
        				<td>'.$dados['telefone'].'</td>
        				<td>'.
        					'<form method = "POST" action="../php/vistoria.php">
        						<input type="hidden" name="id_inst" value="'.$dados['id_inst'].'">'.
                        		$this->strVistotia($dados['vistoria'])
		                    .'</form>'.
        				'</td>
                        <td>
                        	<form method = "POST" action="../atualizarInstituicao.php">
                        		<input type="hidden" name = "id_inst" value="'.$dados['id_inst'].'">
		                        <button type="submit" class="btn btn-success btn-sm edit"><i class="material-icons"  title="Editar">&#xE254;</i></button>
		                    </form>
		                    </td>
		                    <td>
		                    <form method = "POST" action="../php/deletar.php">
		                    	<input type="hidden" name = "id_inst" value="'.$dados['id_inst'].'">
		                        <button type="submit" class="btn btn-success btn-sm delete"><i class="material-icons" title="Deletar">&#xE872;</i></button>
		                    </form>
                        </td>
                    </tr>';
                    echo $str;
				}
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
					'<div class="col-lg-4 col-sm-6 portfolio-item">'.
				        '<div class="card h-100">'.
				          '<a href="#"><img class="card-img-top" style="height: 250px; width: max" src="img/img.jpg" alt=""></a>'.
				          '<div class="card-body">'.
				            '<h4 class="card-title">'.
				              '<p> Responsavel: '.$instituicao['nome_respons'].'</p>'.
							  '<p> Cidade: '.$instituicao['cidade'].'</p>'.
							  '<p> Rua: '.$instituicao['rua'].'</p>'.
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

	}