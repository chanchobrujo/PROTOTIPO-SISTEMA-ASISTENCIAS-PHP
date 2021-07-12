<!DOCTYPE html>
<html>
<?php
    session_start(); 
?>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js">	</script> 
	<style type="text/css">
		*{
			font-family: monospace;
		    text-decoration: none;
		}
		body{
			background: #EE6780;
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
				overflow:scroll;
				width: 45%;
				padding: 10px;
				margin-top: 30px;
				background: white;
				height: 250px;
			}
			.tabla_div2{
				overflow:scroll;
				width: 85%;
				padding: 10px;
				margin-top: 30px;
				background: white;
				height: 300px;
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
		if (isset($_POST['btn4'])) {
			$iddoc = $_POST['txtdoc'];
			$idcur = $_POST['t_curso'];
			$idau = $_POST['t_aul'];
			$idho = $_POST['t_hor'];
			$est = $_POST['t_est'];
			$sql = "INSERT INTO `clase`( `id_docente2`, `id_curso2`, `id_aula2`, `id_horari`, `ESTADO`) 
			VALUES ('$iddoc','$idcur','$idau','$idho','$est')";
			$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error($con));
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
		<form method="POST">
			<div class="tabla_div">
				<table class="t1">
					<tr>
						<th colspan="3"><div class="d1">LISTA</div><hr></th>
					</tr>
					<tr>
						<td><center><div class="d6">DNI</div></center></td>
						<td><center><div class="d6">DOCENTE</div></center></td>
						<td><center><div class="d6">OPCION</div></center></td>
					</tr>
					<input type="hidden" id="txtdoc" name="txtdoc">
					<?php
					$lista = mYsqli_query($con,"select * from docente") or die("error: ".mysqli_error());
					while ($mostrar = mysqli_fetch_array($lista)) {
					?>
					<tr>
						<td>
							<center>
								<div class="d7" id="dni">
									<?php echo $mostrar['dni_docente'] ?>
								</div>
							</center>
						</td>
						<td>
							<center>
								<div class="d7" id="nom">
									<?php echo $mostrar['nombre_docente'].' '.$mostrar['apellidos_docente'] ?>
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
			<div class="div1">
				<table>
					<tr>
						<td>
							<label>CURSOS:</label>
							<select name="t_curso" class="t1">
								<?php
									$lista = mYsqli_query($con,"SELECT * FROM `curso`") 
									or die("error: ".mysqli_error());
			                		while ($mostrar = mysqli_fetch_array($lista)) {
			                	?>
			                	<option value="<?php echo $mostrar['id_curso']?>">
			                		<?php echo $mostrar['nombre_curso'] ?>		          		
			                	</option>
			                	<?php 
			                		}
			                	?>
			                </select>
						</td>
						<td>
							<label>AULA:</label>
							<select name="t_aul" class="t2">
								<?php
									$lista = mYsqli_query($con,"SELECT * FROM `aula`") 
									or die("error: ".mysqli_error());
			                		while ($mostrar = mysqli_fetch_array($lista)) {
			                	?>
			                	<option value="<?php echo $mostrar['id_aula']?>">
			                		<?php echo $mostrar['id_aula'] ?>		          		
			                	</option>
			                	<?php 
			                		}
			                	?>
			                </select>
						</td>
					</tr>
					<tr>
						<td>
							<label>HORARIO:</label>
							<select name="t_hor" class="t1">
								<?php
									$lista = mYsqli_query($con,"SELECT * FROM `horario`") 
									or die("error: ".mysqli_error());
			                		while ($mostrar = mysqli_fetch_array($lista)) {
			                	?>
			                	<option value="<?php echo $mostrar['id_horario']?>">
			                		<?php echo $mostrar['fecha'].' -- '.$mostrar['hora_in'].' -- '.$mostrar['hora_fn'] ?>
			                	</option>
			                	<?php 
			                		}
			                	?>
			                </select>
						</td>
						<td>
							<label>ESTADO:</label>
							<select name="t_est" class="t2">
			                	<option value="ACTIVO">ACTIVO</option>
			                	<option value="INACTIVO">INACTIVO</option>
			                </select>
			            </td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<input type="submit" id="btnacc" class="btn4" name="btn4" value="REGISTRAR">
							</center>
						</td>
					</tr>
				</table>
			</div>
		</form>
		<div class="tabla_div2">
			<table class="t1">
				<tr>
					<th colspan="6"><div class="d1">LISTA</div><hr></th>
				</tr>
				<tr>
					<td><center><div class="d6">DOCENTE</div></center></td>
					<td><center><div class="d6">CURSO</div></center></td>
					<td><center><div class="d6">AULA</div></center></td>
					<td><center><div class="d6">HORARIO</div></center></td>
					<td><center><div class="d6">ESTADO</div></center></td>
				</tr>
				<?php
				$lista = mYsqli_query($con,"select * from vista_clase1") or die("error: ".mysqli_error());
				while ($mostrar = mysqli_fetch_array($lista)) {
				?>
				<tr>
					<td>
						<center>
							<div class="d7">
								<?php echo $mostrar['nombre_docente'].' '.$mostrar['apellidos_docente']; ?>
							</div>
						</center>
					</td>
					<td>
						<center>
							<div class="d7">
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
								<?php echo $mostrar['ESTADO']; ?>
							</div>
						</center>
					</td>
				</tr>
				<?php	
				}
				?>
			</table>
		</div>
		<br><br><br><br>
		<script>
			$('.btn_2').on('click', function(){
    			$(this).parents("tr").find("#dni").each(function() {
    				valores1 =$(this).html();
    				v1 = $.trim(valores1);
    				v1 = v1+'-DOC';
    				$("#txtdoc").val(v1);
    			});
    		});
		</script>
	</center>
</body>
</html>