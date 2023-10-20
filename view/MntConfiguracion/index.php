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

				<div class="row">
					<form method="post" id="ticket_form">

						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Titulo del Sitio</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Lema</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Dirección de WorldPress (URL)</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Dirección del sitio (URL)</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Dirección de Correo Electrónico</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Membresia</label>
							</fieldset>
						</div>
						
						<div class="col-lg-6">
							<fieldset class="form-group">
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> Cualquiera Puede Registrarse<br>
							</fieldset>
						</div>

						<div class="col-lg-12">
							<fieldset class="form-group">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Nuevo Rol Predeterminado de Usuario</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<select>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
								</select> 
							</fieldset>
						</div>

						<div class="col-lg-12">
							<fieldset class="form-group">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
							<label class="form-label semibold" for="tick_titulo">Zona Horaria</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<select>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
								</select> 
							</fieldset>
						</div>

						<div class="col-lg-12">
							<fieldset class="form-group">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Formato de Fecha</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> December 9, 2013 <br>
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 2013/12/09 <br>
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 12/09/2013 <br>
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 09/12/2013
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Formato de Tiempo</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 9:23 pm <br>
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 9:23 PM <br>
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 21:23 
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Las Semanas Comienzan</label>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<select>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
								</select>
							</fieldset>
						</div>

						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar Cambios</button>
						</div>
					</form>
				</div>
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
