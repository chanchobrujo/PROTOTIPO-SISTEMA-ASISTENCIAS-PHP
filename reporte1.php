<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js">	
	</script> 
	<style type="text/css">
		*{
			font-family: monospace;
		    text-decoration: none;
		}
		body{
			background: #DBB5BC;
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
			.tabla_div2{
				overflow:scroll;
				width: 35%;
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
	</style>	
	<?php
		require('conn.php'); 
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
			<table class="tabla_div2">
				<tr>
					<td><label>CURSO:</label></td>
					<td>
						<select name="t0" class="t1">
							<?php
								$lista = mYsqli_query($con,"SELECT * FROM `curso`") 
								or die("error: ".mysqli_error());
		                		while ($mostrar = mysqli_fetch_array($lista)) {
		                	?>
		                	<option value="<?php echo $mostrar['id_curso']?>">
		                		<?php echo $mostrar['nombre_curso'] ?></option>
		                	<?php 
		                		}
		                	?>
		                </select>
					</td>
				</tr>
				<tr>
					<td><label>HORARIO:</label></td>
					<td>
						<select name="t1" class="t1">
							<?php
								$lista = mYsqli_query($con,"SELECT * FROM `horario`") 
								or die("error: ".mysqli_error());
		                		while ($mostrar = mysqli_fetch_array($lista)) {
		                	?>
		                	<option value="<?php echo $mostrar['id_horario']?>">
		                		<?php echo $mostrar['fecha'].' - '.$mostrar['hora_in'].' - '.$mostrar['hora_fn'] ?></option>
		                	<?php 
		                		}
		                	?>
		                </select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
							<input type="submit" id="btnesp2" name="btn" value="VER">
						</center>
					</td>
				</tr>
			</table>
		</form>
		<?php
		if (isset($_POST['btn'])) {
			$curso = $_POST['t0'];
			$hor = $_POST['t1'];
			$lista = mYsqli_query($con,"SELECT * FROM `clase` 
				where id_curso2='$curso' and id_horari='$hor'")or die("error: ".mysqli_error($con));
		   	$mostrar = mysqli_fetch_array($lista);
		   	$id_cl = $mostrar['id_clase'];
		   	$lista = mYsqli_query($con,"SELECT * FROM vista_asistencia1 
		   		where id_clase2='$id_cl'")or die("error: ".mysqli_error($con));
		   	?>
		   	<table class="tabla_div2">
		   		<tr>
		   			<th colspan="7"><div class="d1">LISTA</div><hr></th>
		   		</tr>
				<tr>
					<td><center><div class="d6">ALUMNO</div></center></td>
					<td><center><div class="d6">ESTADO</div></center></td>
				</tr>	 
		   	<?php
		   	while ($mostrar = mysqli_fetch_array($lista)) {
		   		?>
				<tr>
					<td><center><div class="d7"><?php echo $mostrar['nombre_alumno'].' '.$mostrar['apellido_alumno']; ?></div></center></td>
					<td><center><div class="d7"><?php echo $mostrar['estad']; ?></div></center></td>
				</tr>
		   		<?php
		   	}
		   	echo("</table>");
		}
		?>
	</center>
</body>
</html>