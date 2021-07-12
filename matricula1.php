<!DOCTYPE html>
<html>
<?php
    session_start(); 
?>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  
	<style type="text/css">
		*{
			font-family: monospace;
		    text-decoration: none;
		}
		body{
			background: #EEC767;
		}

		/* DIV */
			.div_tab1{
				margin: 20px;
				overflow:scroll;
     			width:95%;
     			height: 200px;
			}
		/* DIV */

		/* BOTONES */
			.btn{
				transition: .5s;
				background-color: white;
				border-style: none;
				padding: 5px 10px;
			}
			.btn2{
				transition: .5s;
				border-style: none;
				background: #EE8C67;
				color: white;
				padding: 5px 10px;
			}
			.btn_2{
				transition: .5s;
				border-style: none;
				background: #EE8C67;
				color: white;
				padding: 5px 10px;
			}
			.btn3{
				transition: .5s;
				border-style: none;
				background: #67A6EE;
				color: white;
				padding: 5px 10px;
			}
			.btn:focus,.btn2:focus,.btn_2:focus,.btn3:focus,#btnacc:focus,#btncerrar:focus{
				background: white;
				color: black;
				outline:none !important;
				outline-width: 0 !important;
				box-shadow: none;
				-moz-box-shadow: none;
				-webkit-box-shadow: none;
			}
			.btn:hover,.btn2:hover,.btn_2:hover,.btn3:hover,#btnacc:hover,#btncerrar:hover{
				transition: .5s;
				letter-spacing: 1px;

			}
			#btnacc{
				transition: .5s;
				border-style: none;
				color: white;
				padding: 5px 10px;
				background: #C767EE;
			}
			#btncerrar{
				transition: .5s;
				border-style: none;
				color: white;
				padding: 5px 10px;
				background: #EE6767;
			}
		/* BOTONES */

		/* TABLA */
			.tabla_div{
				width: 65%;
				padding: 10px;
				margin-top: 30px;
				background: white;
			}
			.d1{
				margin-bottom: 20px;
				font-size: 25px;
			}
			.d6{
				font-size: 20px;
				padding: 5px 10px;
				margin: 2.5px 5px;
				margin-bottom: 20px;
				background: #C767EE;
				color: white;
			}
			.d7{
				font-size: 17.5px;
				padding: 2.5px 10px;
			}
		/* TABLA */

		/* MODALES */
			.flex{
				height: 100%;
				display: flex;
				align-items: center;
			}
			.modal{
				display: none;
				position: fixed;
				z-index: 1;
				overflow: auto;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				background-color: rgba(0,0,0,0.5);
			}
			.contenido-modal{
				position: relative;
				background-color: white;
				margin: auto;
				width: 70%;
				animation-name: modal;
				animation-duration: .5s;
				border: 1px solid white;
				padding: 20px;
			}
			.contenido-modal2{
				position: relative;
				background-color: white;
				margin: auto;
				width: 30%;
				animation-name: modal;
				animation-duration: .5s;
				border: 1px solid white;
				padding: 20px;
			}
			@keyframes modal{
				from{
					top: -330px;
					opacity: 0;
				}
				to{
					top: 0;
					opacity: 1;
				}
			}
			.modal-body{
				padding: 20px 16px;
				background: white;
			}

 			.t,.t1{
 				padding: .5rem;
				margin-bottom: .5rem 0;
				border: none;
				border-bottom: solid #C767EE .5PX;
				transition: all .5s;
				width: 300px;
				margin: 10px;

			}
			.t{
				width: 350px;
			}
			.t:focus,.t1:focus{
				border-bottom: solid #C767EE .5PX;
				width: 330px;
				outline:none !important;
				outline-width: 0 !important;
				box-shadow: none;
				-moz-box-shadow: none;
				-webkit-box-shadow: none;
			}
		/* MODALES */
	</style>
	<?php
		require('conn.php'); 
		$tot = count($_SESSION['id_curso']);
		if (isset($_POST['btn1'])) {
			$idcurso = $_POST['btn1'];
			$lista = mYsqli_query($con,"select * from curso where id_curso = '$idcurso'") 
			or die("error: ".mysqli_error());
			$mostrar = mysqli_fetch_array($lista);			
			for ($i=0; $i < $tot+1; $i++) { 
				if ($idcurso == $_SESSION['id_curso'][$i]) {
					$pos = $i;
				}
			}if (!isset($pos)){
				array_push($_SESSION['id_curso'], $idcurso);
				array_push($_SESSION['nombre_curso'], $mostrar['nombre_curso']);
			}
		}
		if (isset($_POST['btn2'])) {
			$op = $_POST['btn2'];
			if ($op == 0) {
				array_shift($_SESSION['id_curso']);
				array_shift($_SESSION['nombre_curso']);
				$tot = count($_SESSION['id_curso']);
			}
			else{
				if ($op == $tot - 1) {
					array_splice($_SESSION['id_curso'], $op);
					array_splice($_SESSION['nombre_curso'], $op);
					$tot = count($_SESSION['id_curso']);
				}else{
					$tot = count($_SESSION['id_curso']);
					for ($i=$op+1; $i < $tot; $i++) { 
						$_SESSION['id_curso'][$i-1] = $_SESSION['id_curso'][$i];
						$_SESSION['nombre_curso'][$i-1] = $_SESSION['nombre_curso'][$i];
					}
					array_splice($_SESSION['id_curso'], $tot - 1);
					array_splice($_SESSION['nombre_curso'], $tot - 1);
				}
			}
		}
		if (isset($_POST['btnbt'])) {
			array_splice($_SESSION['id_curso'],0);
			array_splice($_SESSION['nombre_curso'],0);
		}
		if (isset($_POST['btnmm'])) {
			$ida = $_SESSION['idx'];
			$idsem = $_POST['sem'];
			$idm = $ida.' - '.$idsem;
			$sql = "INSERT INTO `matricula`(`id_matricula`, `id_alumno2`, `id_semestre2`) VALUES ('$idm','$ida','$idsem')";
			$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error());
			for ($i=0; $i < $tot; $i++) {
				$idcur = $_SESSION['id_curso'][$i];
				$iddm = $_SESSION['id_curso'][$i].'-'.$idm;
				$sql = "INSERT INTO `detallematricula`( `id_deM`, `id_mat`, `id_cur`) VALUES ('$iddm','$idm','$idcur')";
				$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error($con));
			}
			array_splice($_SESSION['id_curso'],0);
			array_splice($_SESSION['id_curso'],0);
		}
	?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php require("menu1.html"); ?>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br>
	<center>
		<form method="post">
			<div class="div_btn">
				<center>
					<?php 
						$tot = count($_SESSION['id_curso']);
						if ($tot > 0) {
					?>
					<input type="submit" class="btn2" name="btnbt" value="ANULAR MATRICULA">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="button" class="btn3" id="btny" value="CONFIRMAR MATRICULA">
					<?php 
						}
					?>
				</center>
			</div>
			<br>
			<table class="tabla_div">
				<tr>
					<th colspan="4"><div class="d1">LISTA</div><hr></th>
				</tr>
				<tr>
					<td><center><div class="d6">NOMBRE</div></center></td>
					<td><center><div class="d6">CREDITO</div></center></td>
					<td><center><div class="d6">CICLO</div></center></td>
					<td><center><div class="d6">OPCION</div></center></td>
				</tr>
				<?php
				$idf = $_SESSION['idx'];
				$lista = mYsqli_query($con,"select * from alumno where id_alumno='$idf'") or die("error: ".mysqli_error($con));
				$mostrar = mysqli_fetch_array($lista);
				$carr = $mostrar['idcarrera2'];
				$lista = mYsqli_query($con,"select * from curso where id_carrera2='$carr'") or die("error: ".mysqli_error($con));
				while ($mostrar = mysqli_fetch_array($lista)) {
				?>
				<tr>
					<td>
						<center>
							<div class="d7" id="nom">
								<?php echo $mostrar['nombre_curso'] ?>
							</div>
						</center>
					</td>
					<td>
						<center>
							<div class="d7" id="cre">
								<?php echo $mostrar['creditos_curso'] ?>
							</div>
						</center>
					</td>
					<td>
						<center>
							<div class="d7" id="cic">
								<?php echo $mostrar['ciclo'] ?>								
							</div>
						</center>
					</td>
					<td>
						<center>
							<div class="d7" id="cic">
								<button type="submit" ID="btnacc" name="btn1" value="<?php echo $mostrar['id_curso'] ?>">
									ELEJIR
								</button>				
							</div>
						</center>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</form>
		<form method="post">
			<?php 
			$tot = count($_SESSION['id_curso']);
			if ($tot > 0) {
				?>
					<table class='tabla_div'>
						<tr>
							<th colspan='2'><div class='d1'>LISTA DE CURSOS ELEJIDOS</div><hr></th>
						</tr>
						<tr>
							<td><center><div class="d6">NOMBRE</div></center></td>
							<td><center><div class="d6">OPCION</div></center></td>
						</tr>
				<?php 
				for ($i=0; $i < $tot; $i++) { 
					?>
						<tr>
							<td>
								<center>
									<div class="d7" id="nom">
										<?php echo $_SESSION['nombre_curso'][$i] ?>
									</div>
								</center>
							</td>
							<td>
								<center>
									<div class="d7" id="nom">
										<button type="submit" ID="btncerrar" name="btn2" 
										value="<?php echo $_SESSION['id_curso'][$i] ?>">
											ELIMINAR
										</button>	
									</div>
								</center>
							</td>
						</tr>
					<?php 
				}
				echo "</table>";
			}
			 ?>
		</form>

		<!--MODALES-->
			<!--M MATRICULAR-->
				<div id="miModal" class="modal">
	    			<div class="flex" id="flex">
						<div class="contenido-modal">
							<center>
								<form method="post">
									<table>
										<tr>
											<thead>
												<center>
													<h1>NUEVO MATRICULA</h1>
												</center>
											</thead>
										</tr>
										<tr>
											<td>
												<label>SEMESTRE:</label>
												<select class="t1" name="sem">
													<?php
														$lista = mYsqli_query($con,"SELECT * FROM `semestre`") 
														or die("error: ".mysqli_error());
		                								while ($mostrar = mysqli_fetch_array($lista)) {
		                							?>
		                							<option value="<?php echo $mostrar['id_semestre']?>">
		                								<?php echo $mostrar['id_semestre'] ?>
		                							</option>
		                							<?php 
		                								}
		                							?>
		                						</select>
											</td>
										</tr>
										<tr>
											<td>
												<center>
													<input type="submit" id="btnacc" name="btnmm" value="REGISTRAR">
													<input type="button" id="btncerrar" class="CRRA" value="CERRAR">
												</center>
											</td>
										</tr>
									</table>
								</form>
							</center>
			    		</div>
					</div>
				</div>
			<!--M MATRICULAR-->
		<!--MODALES-->
	</center>
	<script>
		//MODALES
			//M MATRICULAR
				$('#btny').on('click', function(){
    				$('#miModal').css("display","block");
    			});
				$('.CRRA').on('click', function(){
    				$('#miModal').css("display","none");
    			});
			//M MATRICULAR
		//MODALES
		$('.btn_2').on('click', function(){	
    		$(this).parents("tr").find("#dni").each(function() {
    			valores1 =$(this).html();
    			v1 = $.trim(valores1);
    			$("#d").val(v1);
    		});    	
    	});
	</script>
</body>
</html>