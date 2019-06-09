<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- Adicionando Javascript -->
    <script type="text/javascript" src="js/viacep.js"></script>
</head>
<body>
    <?php
        //print_r($_POST);
        if (!empty($_POST['id_inst'])) {
            # code...
            include_once 'php/class/Instituicao.class.php';
            $inst = new Instituicao();
            $dados = $inst->buscarInstituicao($_POST['id_inst']);
            //$id_inst = $
        }
    ?>
	<form method="POST" action="php/atualizar.php">
        <input type="hidden" name="id_inst" value="<?php echo $_POST['id_inst']?>">
        <h4>Realizar Pre-Cadastro da Instituição</h4><br>
        <label>Nome:
        <input value="<?php echo $dados['nome_inst'] ?>" name="nome_inst" class="form-control" type="text" id="nome" size="60" required/></label><br />

        <label>Responsavel:
        <input value="<?php echo $dados['nome_respons'] ?>" name="nome_respons" class="form-control" type="text" id="responsavel" size="60" required/></label><br />

        <label>Cep:
        <input value="<?php echo $dados['cep'] ?>" name="cep" class="form-control" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" required/></label>

        <label>Bairro:
        <input value="<?php echo $dados['bairro'] ?>" name="bairro" class="form-control" type="text" id="bairro" size="40" readonly="disabled"/></label><br />

        <label>Rua:
        <input value="<?php echo $dados['rua'] ?>" name="rua" class="form-control" type="text" id="rua" size="60" readonly="disabled"/></label><br />

        <label>Numero:
        <input value="<?php echo $dados['numero'] ?>" name="numero" class="form-control" type="number" id="num_rua" size="10" required/></label><br />

        <label>Cidade:
        <input value="<?php echo $dados['cidade'] ?>" name="cidade" class="form-control" type="text" id="cidade" size="40" readonly="disabled"/></label><br />

        <label>Estado:
        <input value="<?php echo $dados['estado'] ?>" name="estado" class="form-control" type="text" id="uf" size="2" readonly="disabled"/></label><br />

        <label>E-mail:
        <input value="<?php echo $dados['email'] ?>" name="email" class="form-control" type="text" id="email" size="40" required/></label><br />

        <label>Telefone Fixo:
        <input value="<?php echo $dados['telefone'] ?>" name="telefone" class="form-control" type="text" id="tel_fixo" size="40" required/></label><br />

        <label>Telefone Celular:
        <input value="<?php echo $dados['celular'] ?>" name="celular" class="form-control" type="text" id="tel_celular" size="40" /></label><br />

        <label>Descrição:
        <input value="<?php echo $dados['descricao'] ?>" name="descricao" class="form-control" type="text" id="descricao" size="40" /></label><br />

        <label>Horario de Funcionamento</label><br />
        <label>Inicio
        <input value="<?php echo $dados['horario_abertura'] ?>" name="horario_abertura" type="time" class="form-control" type="text" id="hr_inicio" size="40" required/></label>

        <label>Fim
        <input value="<?php echo $dados['horario_fechamento'] ?>" name="horario_fechamento" type="time" class="form-control" type="text" id="hr_fim" size="40" required/></label><br />

        <input type="submit" class="btn btn-success" value="Cadastrar">
        <br><br>
        </div>
      </form>
</body>
</html>