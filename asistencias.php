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
			background: #9067EE;
		}
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
			.btn:focus,.btn2:focus,.btn_2:focus,.btn3:focus,#btnacc:focus,#btncerrar:focus,#btnesp:focus,#btnesp2:focus{
				background: white;
				color: black;
				outline:none !important;
				outline-width: 0 !important;
				box-shadow: none;
				-moz-box-shadow: none;
				-webkit-box-shadow: none;
			}
			.btn:hover,.btn2:hover,.btn_2:hover,.btn3:hover,#btnacc:hover,#btncerrar:hover,#btnesp:hover,#btnesp2:hover{
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
			#btnesp{
				width: 80%;
				transition: .5s;
				border-style: none;
				color: black;
				padding: 5px 10px;
				margin:10px; 
				background: white;
			}
			#btnesp2{
				width: 50%;
				transition: .5s;
				border-style: none;
				color: white;
				padding: 5px 10px;
				margin:10px; 
				background: #9067EE;
			}
		/* BOTONES */

		/* TABLA */
			.tabla_div{
				overflow:scroll;
				width: 75%;
				padding: 10px;
				margin-top: 30px;
				background: white;
				height: 400px;
			}
			.tabla_div2{
				overflow:scroll;
				width: 85%;
				padding: 10px;
				margin-top: 30px;
				background: white;
				height: 200px;
			}
			.d1{
				margin-bottom: 20px;
				font-size: 25px;
			}
			.d6{
				font-size: 22px;
				padding: 5px 29px;
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

		/* INPUTS */
			.t,.t1{
 				padding: .5rem;
				margin-bottom: .5rem 0;
				border: none;
				border-bottom: solid #C767EE .5PX;
				transition: all .5s;
				width: 300px;
				margin: 10px;
			}
			.t2{
 				padding: .5rem;
				margin-bottom: .5rem 0;
				border: none;
				border-bottom: solid #C767EE .5PX;
				transition: all .5s;
				width: 100px;
				margin: 10px;
			}
			.t:focus,.t1:focus,.t2:focus{
				border-bottom: solid #C767EE .5PX;
				outline:none !important;
				outline-width: 0 !important;
				box-shadow: none;
				-moz-box-shadow: none;
				-webkit-box-shadow: none;
			}
		/* INPUTS */

		/* DIV */
			.div1{
				width: 60%;
				padding: 10px;
				margin-top: 30px;
				background: white;
				height: 200px;
			}
		/* DIV */
	</style>
	<?php
		require('conn.php'); 
		if (isset($_POST['btnas'])) {
			array_splice($_SESSION['id_alumnos'],0);
			array_splice($_SESSION['alumnos'],0);
			array_splice($_SESSION['idm'],0);
			array_splice($_SESSION['c'],0);
			$tot = count($_SESSION['id_alumnos']);
			$curso = $_POST['id_curso'];
			$lista = mYsqli_query($con,"select * from curso where nombre_curso = '$curso' ") 
			or die("error: ".mysqli_error($con));
			$mostrar = mysqli_fetch_array($lista);
			$id_clase = $_POST['id_clase'];
			$id_curso = $mostrar['id_curso'];
			$_SESSION['c'] = $id_clase;
			$lista2 = mYsqli_query($con,"select * from vista_matricula1 where id_cur = '$id_curso' ") 
			or die("error: ".mysqli_error($con));
			$nr = mysqli_num_rows($lista2);
			while ($mostrar2 = mysqli_fetch_array($lista2)) {
				array_push($_SESSION['id_alumnos'],$mostrar2['id_alumno']);
				array_push($_SESSION['idm'],$mostrar2['id_deM']);
				array_push($_SESSION['alumnos'],$mostrar2['nombre_alumno'].' '.$mostrar2['apellido_alumno']);
			}
			for ($i=0; $i < $tot ; $i++) { 
				echo $_SESSION['alumnos'][$i];
			}
			$tot = count($_SESSION['id_alumnos']);
		}
		if (isset($_POST['bbb'])) {
			$tot = count($_SESSION['id_alumnos']);
			
			for ($i=0; $i < $tot ; $i++) { 
				$name = 'asis'.$i;
				$cc=$_SESSION['c'];
				$idmmm = $_SESSION['idm'][$i];
				$estt = $_POST[$name];
				$sql = "INSERT INTO `asistencia`(`id_clase2`, `id_dtllmatricula2`, `estado`) 
				VALUES ('$cc','$idmmm','$estt')";
				$lista2 = mYsqli_query($con,$sql) or die("error: ".mysqli_error($con));
			}
			array_splice($_SESSION['id_alumnos'],0);
			array_splice($_SESSION['alumnos'],0);
			array_splice($_SESSION['idm'],0);
			$_SESSION['c'] = 0;
		}
	?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php require("menu.html"); ?>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br>
	<center>
		<form method="post">
			<div class="tabla_div2">
				<table class="t1">
					<input type="hidden" name="id_clase" id="id_clase">
					<input type="hidden" name="id_curso" id="id_curso">
					<tr>
						<th colspan="6"><div class="d1">LISTA</div><hr></th>
					</tr>
					<tr>
						<td><center><div class="d6">ID</div></center></td>
						<td><center><div class="d6">DOCENTE</div></center></td>
						<td><center><div class="d6">CURSO</div></center></td>
						<td><center><div class="d6">AULA</div></center></td>
						<td><center><div class="d6">HORARIO</div></center></td>
						<td><center><div class="d6">OPCION</div></center></td>
					</tr>
					<?php
					$lista = mYsqli_query($con,"select * from vista_clase1 where ESTADO ='ACTIVO'") or die("error: ".mysqli_error());
					while ($mostrar = mysqli_fetch_array($lista)) {
					?>				
					<tr>
						<td>
							<center>
								<div class="d7" id="idcla">
									<?php echo $mostrar['id_clase'] ?>
								</div>
							</center>
						</td>
						<td>
							<center>
								<div class="d7">
									<?php echo $mostrar['nombre_docente'].' '.$mostrar['apellidos_docente']; ?>
								</div>
							</center>
						</td>
						<td>
							<center>
								<div class="d7" id="idcur">
									<?php echo $mostrar['nombre_curso'] ?>
								</div>
							</center>
						</td>
						<td>
							<center>
								<div class="d7">
									<?php echo $mostrar['id_aula']; ?>
								</div>
							</center>
						</td>
						<td>
							<center>
								<div class="d7">
									<?php echo $mostrar['fecha'].' '.$mostrar['hora_in'].' '.$mostrar['hora_fn']; ?>
								</div>
							</center>
						</td>
						<td>
							<center>
								<div class="d7">
									<input type="button" id="abrir2" class="btn_2" value="ELEJIR">
								</div>
							</center>
						</td>
					</tr>
					<?php	
					}
					?>
				</table>
			</div>
			<input type="submit" name="btnas" id="btnesp" class="btnu">
		</form>
		<?php
		if (isset($nr) && $nr >= 1) {
			?>
			<form method="post">
				<div class="tabla_div">
					<table class="t1">
						<tr>
							<th colspan="5"><div class="d1">LISTA</div><hr></th>
						</tr>
						<tr>
							<td><center><div class="d6">ID</div></center></td>
							<td><center><div class="d6">ALUMNO</div></center></td>
							<td><center><div class="d6">ASITIÓ</div></center></td>
							<td><center><div class="d6">NO ASITIÓ</div></center></td>
							<td><center><div class="d6">TARDANZA</div></center></td>
						</tr>
						<?php
							for ($i=0; $i < $tot ; $i++) {
								?>
								<tr>
									<td><center><div class="d7"><?php echo $_SESSION['id_alumnos'][$i]; ?></div></center></td>
									<td><center><div class="d7"><?php echo $_SESSION['alumnos'][$i]; ?></div></center></td>
									<td>
										<center>
											<div class="d7">
												<input type="radio" name="asis<?php echo $i; ?>" value="asistio">
											</div>
										</center>
									</td>
									<td>
										<center>
											<div class="d7">
												<input type="radio" name="asis<?php echo $i; ?>" value="no asistio">
											</div>
										</center>
									</td>
									<td>
										<center>
											<div class="d7">
												<input type="radio" name="asis<?php echo $i; ?>" value="tardanza">
											</div>
										</center>
									</td>
								</tr>			
								<?php
							}
						?>
						<tr>
							<td colspan="5">
								<center>
									<div class="d7">
										<input type="submit" name="bbb" id="btnesp2" value="TOMAR ASISTENCIA">
									</div>
								</center>
							</td>
						</tr>
					</table>
				</div>	
			</form>
			<?php
		}
		?>
		<br><br><br><br>
		<script>

			$('.btn_2').on('click', function(){
    			$(this).parents("tr").find("#idcla").each(function() {
    				valores1 =$(this).html();
    				v1 = $.trim(valores1);
    				$("#id_clase").val(v1);
    			});
    			$(this).parents("tr").find("#idcur").each(function() {
    				valores1 =$(this).html();
    				v1 = $.trim(valores1);
    				$("#id_curso").val(v1);
    			});
    		});
		</script>
	</center>
</body>
</html>