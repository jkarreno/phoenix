<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>AnderCode</>::Perfil</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Perfil</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Cambiar Contraseña</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<table id="usuario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 10%;">Nombre Completo</th>
							<th style="width: 10%;"><?php echo $_SESSION["usu_nom"] ?> <?php echo $_SESSION["usu_ape"] ?></th>
						</tr>
						<tr>
							<th style="width: 10%;">Email</th>
							<th style="width: 10%;"><?php echo $_SESSION["usu_nom"] ?> </th>
						</tr>
						<tr>
							<th style="width: 10%;">Telefono</th>
							<th style="width: 10%;"><?php echo $_SESSION["usu_nom"] ?></th>
						</tr>
						<tr>
							<th style="width: 10%;">Fecha de Nacimiento</th>
							<th style="width: 10%;"><?php echo $_SESSION["usu_nom"] ?></th>
						</tr>
					</thead>
				</table>
			</div>
			
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="mntperfil.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>
