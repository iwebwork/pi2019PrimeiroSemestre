<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../img/favicon.ico" />

  <title>DoeFácil</title>

  <!-- Custom styles for this template -->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>


</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg bg-white nav-pills">
    <a class="navbar-brand" href="..\index.php"><img src="..\img\logo.png" class="float-left" alt="Logo DoeFácil"></a>

    <button class="btn btn-link text-success order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fa-1x fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto btn">
      <li class="nav-item dropdown no-arrow">
        <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa-2x fas fa-user-circle fa-fw text-success"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Configurações</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper" style="background-color: #F2F2F2">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav bg-success">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-hand-holding-heart"></i>
          <span>Instituições</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="produtos.php">
          <i class="fas fa-box-open"></i>
          <span>Produtos</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="table-wrapper card-body col-md-12 bg-white">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6 text-success">
                <h2><i class="fas fa-box-open"></i>
                <span>Produtos</span></h2>
        			</div>
        			<div class="col-sm-6">
        			     <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar Novo</span></a>
        			     <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Deletar</span></a>
        					</div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
        						<th>
        							<span class="custom-checkbox">
        								<input type="checkbox" id="selectAll">
        								<label for="selectAll"></label>
        							</span>
        						</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
        						<td>
        							<span class="custom-checkbox">
        								<input type="checkbox" id="checkbox1" name="options[]" value="1">
        								<label for="checkbox1"></label>
        							</span>
        						</td>
                                <td>Produto 1</td>
                                <td>Tipo</td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Deletar">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
        						<td>
        							<span class="custom-checkbox">
        								<input type="checkbox" id="checkbox2" name="options[]" value="1">
        								<label for="checkbox2"></label>
        							</span>
        						</td>
                              <td>Produto 2</td>
                              <td>Tipo</td>
                              <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Deletar">&#xE872;</i></a>
                                </td>
                            </tr>
        					<tr>
        						<td>
        							<span class="custom-checkbox">
        								<input type="checkbox" id="checkbox3" name="options[]" value="1">
        								<label for="checkbox3"></label>
        							</span>
        						</td>
                              <td>Produto 3</td>
                              <td>Tipo</td>
                              <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Deletar">&#xE872;</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
        			<div class="clearfix">
                        <div class="hint-text">Resultado <b>3</b> de <b>3</b></div>
                        <ul class="pagination">
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link text-success">2</a></li>
                            <li class="page-item"><a href="#" class="page-link text-success">3</a></li>
                            <li class="page-item"><a href="#" class="page-link text-success">4</a></li>
                            <li class="page-item"><a href="#" class="page-link text-success">5</a></li>
                            <li class="page-item"><a href="#" class="page-link text-success">Próximo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        	<!-- Edit Modal HTML -->
        	<div id="addEmployeeModal" class="modal fade">
        		<div class="modal-dialog">
        			<div class="modal-content">
        				<form>
        					<div class="modal-header">
        						<h4 class="modal-title">Adicionar Produto</h4>
        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					</div>
        					<div class="modal-body">
        						<div class="form-group">
        							<label>Nome</label>
        							<input type="text" class="form-control" required>
        						</div>
        						<div class="form-group">
        							<label>Tipo</label>
        							<input type="email" class="form-control" required>
        						</div>
        					</div>
        					<div class="modal-footer">
        						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
        						<input type="submit" class="btn btn-success" value="Adicionar">
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        	<!-- Edit Modal HTML -->
        	<div id="editEmployeeModal" class="modal fade">
        		<div class="modal-dialog">
        			<div class="modal-content">
        				<form>
        					<div class="modal-header">
        						<h4 class="modal-title">Editar Produto</h4>
        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					</div>
        					<div class="modal-body">
        						<div class="form-group">
        							<label>Nome</label>
        							<input type="text" class="form-control" required>
        						</div>
        						<div class="form-group">
        							<label>Tipo</label>
        							<input type="email" class="form-control" required>
        						</div>
        					</div>
        					<div class="modal-footer">
        						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
        						<input type="submit" class="btn btn-success" value="Salvar">
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        	<!-- Delete Modal HTML -->
        	<div id="deleteEmployeeModal" class="modal fade">
        		<div class="modal-dialog">
        			<div class="modal-content">
        				<form>
        					<div class="modal-header">
        						<h4 class="modal-title">Deletar Produto</h4>
        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					</div>
        					<div class="modal-body">
        						<p>Tem certeza de que deseja excluir esses registros?</p>
        						<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
        					</div>
        					<div class="modal-footer">
        						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        						<input type="submit" class="btn btn-danger" value="Delete">
        					</div>
        				</form>
        			</div>
        		</div>
          </div>
        </div>


      <!-- Sticky Footer -->
      <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
          <div class="copyright text-center my-auto text-white">
            <span>Copyright &copy; DoeFácil 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Certeza que deseja sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-success" href="login.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
