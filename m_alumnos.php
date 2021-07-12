<!DOCTYPE html>
<html>
<?php
    session_start(); 
?>
<head>
	<title>ALUMNOS</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js">	
	</script> 
	<style type="text/css">
		*{
			font-family: monospace;
		    text-decoration: none;
		}
		body{
			background: #677EEE;
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
			.btn:hover,.btn2:hover,#btnacc:hover,#btncerrar:hover{
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
				width: 85%;
				padding: 10px;
				margin-top: 30px;
				background: white;
			}
			.d1{
				margin-bottom: 20px;
				font-size: 25px;
			}
			.d6{
				font-size: 22px;
				padding: 5px 35px;
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
			/* M NUEVO*/
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
					background-color: green;
					margin: auto;
					width: 40%;
					animation-name: modal;
					animation-duration: .5s;
					border: 1px solid white;
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
				#t5{
					width: 0.1px;
 					height: 0.1px;
 					opacity: 0;
 					overflow: hidden;
 					position: absolute;
 					z-index: -1;
 				}
 				#lb_t5{
 					transition: .5s;
					border-style: none;
					color: white;
					padding: 5px 10px;
					background: #C767EE;
 				}
 				#lb_t5:hover{
 					transition: .5s;
 					padding: 5px 25px 5px 25px;
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
				h1{
					color: white;
					padding: 5px 10px;
					background: #C767EE;
				}
				h2{
					color: white;
					padding: 2.5px 7px;
					background: #EE6767;
				}
				/* MA1 */
					.flex4{
						height: 100%;
						display: flex;
						align-items: center;
					}
					.modal4{
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
					.contenido-modal4{
						position: relative;
						background-color: green;
						margin: auto;
						width: 30%;
						animation-name: modal;
						animation-duration: .5s;
						border: 1px solid white;
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
					.modal-body4{
						padding: 20px 16px;
						background: white;
					}
				/* MA1 */
			/* M NUEVO*/

			/* M EDITAR*/
				.flex2{
					height: 100%;
					display: flex;
					align-items: center;
				}
				.modal2{
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
				.contenido-modal2{
					position: relative;
					margin: auto;
					width: 40%;
					animation-name: modal;
					animation-duration: .5s;
					border: 1px solid white;
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
				.modal-body2{
					padding: 20px 16px;
					background: white;
				}
				/* MA2 */
					.flex5{
						height: 100%;
						display: flex;
						align-items: center;
					}
					.modal5{
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
					.contenido-modal5{
						position: relative;
						background-color: green;
						margin: auto;
						width: 30%;
						animation-name: modal;
						animation-duration: .5s;
						border: 1px solid white;
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
					.modal-body5{
						padding: 20px 16px;
						background: white;
					}
				/* MA2 */
			/* M EDITAR*/
		/* MODALES */
	</style>	
	<?php 
		require('conn.php'); 
		if (isset($_POST['btn4'])) {
			$dni = $_POST['t1'];
			$nom = $_POST['t2'];
			$ap = $_POST['t3'];
			$car = $_POST['t4'];
			$dis = $_POST['t6'];
			$file_temp = $_FILES['t5']['tmp_name'];
			if (isset($file_temp)) {
				if(getimagesize($file_temp) == TRUE){
					$image = addslashes($_FILES['t5']['tmp_name']);
					$image = file_get_contents($image);
					$image = base64_encode($image);
					$sql = "INSERT INTO `alumno`
					(id_alumno,dni_alumno,nombre_alumno,apellido_alumno,idcarrera2,foto_alumno,id_distrito2) 
					VALUES ('$dni-AL','$dni','$nom','$ap','$car','$image','$dis')";
					$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error($con));
					echo "
						<script>
							$(document).ready(function(){
								$('#miModal4').css('display','block');
							});
						</script>";
				}
				else{
					$sql = "INSERT INTO `alumno`
					(id_alumno,dni_alumno,nombre_alumno,apellido_alumno,idcarrera2,id_distrito2) 
					VALUES ('$dni-AL','$dni','$nom','$ap','$car','$dis')";
					$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error($con));
					echo "
						<script>
							$(document).ready(function(){
								$('#miModal4').css('display','block');
							});
						</script>";
					}
			}
		}
		if (isset($_POST['btn6'])) {
			$dni = $_POST['_t1'];
			$nom = $_POST['_t2'];
			$ap = $_POST['_t3'];
			$sql = "UPDATE alumno SET 
			id_alumno='$dni-AL',dni_alumno='$dni',`nombre_alumno`='$nom',`apellido_alumno`='$ap' WHERE dni_alumno='$dni'";
					$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error($con));
			echo "
				<script>
					$(document).ready(function(){
						$('#miModal5').css('display','block');
					});
				</script>";
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
		<div class="botones">
			<input type="button" id="abrir1" class="btn" value="REGISTRAR NUEVO ALUMNO">
		</div>
		<form method="post" enctype="multipart/form-data">
			<div class="tabla_div">
				<table class="t1">
					<tr>
						<th colspan="7"><div class="d1">LISTA</div><hr></th>
					</tr>
					<tr>
						<td><center><div class="d6">DNI</div></center></td>
						<td><center><div class="d6">NOMBRE</div></center></td>
						<td><center><div class="d6">APELLIDO</div></center></td>
						<td><center><div class="d6">CARRERA</div></center></td>
						<td><center><div class="d6">FOTO</div></center></td>
						<td><center><div class="d6">OPCION</div></center></td>
					</tr>
					<?php
					$lista = mYsqli_query($con,"select * from vista_alumno1") or die("error: ".mysqli_error());
					while ($mostrar = mysqli_fetch_array($lista)) {
					?>
					<tr>
						<td><center><div class="d7" id="dni"><?php echo $mostrar['dni_alumno'] ?></div></center></td>
						<td><center><div class="d7" id="nom"><?php echo $mostrar['nombre_alumno'] ?></div></center></td>
						<td><center><div class="d7" id="app"><?php echo $mostrar['apellido_alumno'] ?></div></center></td>
						<td><center><div class="d7" id="car"><?php echo $mostrar['nombre_carrera'] ?></div></center></td>
						<td><center><div class="d7" id="ft">
						<?php echo " <img height='70' width='90' src='data:image;base64,".$mostrar['foto_alumno']." '>";?>
						</div></center></td>
						<td>
							<center>
								<div class="d7">
									<input type="button" class="btn2" value="EDITAR">
								</div>
							</center>
						</td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
			<!--MODALES-->	
				<!--M NUEVO-->
					<div id="miModal" class="modal">
    					<div class="flex" id="flex">
							<div class="contenido-modal">
								<div class="modal-body">
									<center>
										<form method="post" enctype="multipart/form-data">
											<table>
												<tr>
													<thead><h1>NUEVO ALUMNO</h1></thead>
												</tr>
												<tr>
													<td>
														<input type="text" name="t1" class="t" placeholder="&#127891;DNI" required>
		                							</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="t2" class="t" placeholder="&#128100;NOMBRES" required>
													</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="t3" class="t" placeholder="&#128100;APELLIDO" required>
													</td>
												</tr>
												<tr>
													<td>
														<label>CARRERA:</label>
														<select name="t4" class="t1">
															<?php
																$lista = mYsqli_query($con,"SELECT * FROM `carrera`") 
																or die("error: ".mysqli_error());
		                										while ($mostrar = mysqli_fetch_array($lista)) {
		                									?>
		                									<option value="<?php echo $mostrar['id_carrera']?>">
		                										<?php echo $mostrar['nombre_carrera'] ?></option>
		                									<?php 
		                										}
		                									?>
		                								</select>
													</td>
												</tr>
												<tr>
													<td>
		                								<div class="d3" class="t1">
		                									<input type="file" name="t5" id="t5">
		                									<label for="t5" id="lb_t5">AÑADIR FOTO</label>
		                								</div>
													</td>
												</tr>
												<tr>
													<td>
														<label>DISTRITO:</label>
														<select name="t6" class="t1">
															<?php
																$lista = mYsqli_query($con,"SELECT * FROM `distrito`") 
																or die("error: ".mysqli_error());
		                										while ($mostrar = mysqli_fetch_array($lista)) {
		                									?>
		                									<option value="<?php echo $mostrar['id_distrito']?>">
		                										<?php echo $mostrar['id_distrito'] ?></option>
		                									<?php 
		                										}
		                									?>
		                								</select><br><br>
													</td>
												</tr>
												<tr>
													<td>
														<center>
															<input type="submit" id="btnacc" class="btn4" name="btn4" value="REGISTRAR">
															<input type="button" id="btncerrar" class="btn5" value="CERRAR">
														</center>
													</td>
												</tr>
											</table>
										</form>
									</center>
								</div>
		    				</div>
						</div>
					</div>
					<div id="miModal4" class="modal4">
    					<div class="flex4" id="flex4">
							<div class="contenido-modal4">
								<div class="modal-body4">
									<center>
										<h2>ALUMNO REGISTRADO</h2>
										<input type="button" id="btncerrar" class="btn10" value="OK">
									</center>
								</div>
		    				</div>
						</div>
					</div>
				<!--M NUEVO-->

				<!--M EDITAR-->
					<div id="miModal2" class="modal2">
    					<div class="flex2" id="flex2">
							<div class="contenido-modal2">
								<div class="modal-body2">
									<center>
										<form method="post">
											<table>
												<tr>
													<thead><h1>ACTUALIZAR DATOS</h1></thead>
												</tr>
												<tr>
													<td>
														<input type="text" name="_t1" id="_t1" class="t" placeholder="&#127891;DNI" required>
		                							</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="_t2" id="_t2" class="t" placeholder="&#128100;NOMBRE"required>
													</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="_t3" id="_t3" class="t" placeholder="&#128100;APELLIDO"required>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<center>
															<input type="submit" id="btnacc" class="btn6" name="btn6" value="ACTUALIZAR">
															<input type="button" id="btncerrar" class="btn7" value="CERRAR">
														</center>
													</td>
												</tr>
											</table>
										</form>
									</center>
								</div>
		    				</div>
						</div>
					</div>
					<div id="miModal5" class="modal5">
    					<div class="flex5" id="flex5">
							<div class="contenido-modal5">
								<div class="modal-body5">
									<center>
										<h2>DATOS ACTUALIZADOS</h2>
										<input type="button" id="btncerrar" class="btn11" value="OK">
									</center>
								</div>
		    				</div>
						</div>
					</div>
				<!--M EDITAR-->
			<!--MODALES-->
		</form>
	</center>
	<script>
		//MODALES
			//M NUEVO
				$('#abrir1').on('click', function(){
    				$('#miModal').css("display","block");
    			});
    			$('.btn5').on('click', function(){
    				$('#miModal').css("display","none");
    			});
    			$('.btn10').on('click', function(){
    				$('#miModal4').css("display","none");
    			});
			//M NUEVO

			//M EDITAR
				$('.btn2').on('click', function(){
    				$('#miModal2').css("display","block");
    				$(this).parents("tr").find("#dni").each(function() {
    					valores1 =$(this).html();
    					v1 = $.trim(valores1);
    					$("#_t1").val(v1);
    				});
    				$(this).parents("tr").find("#nom").each(function() {
    					valores1 =$(this).html();
    					v1 = $.trim(valores1);
    					$("#_t2").val(v1);
    				});
    				$(this).parents("tr").find("#app").each(function() {
    					valores1 =$(this).html();
    					v1 = $.trim(valores1);
    					$("#_t3").val(v1);
    				});
    			});
    			$('.btn7').on('click', function(){
    				$('#miModal2').css("display","none");
    			});
    			$('.btn11').on('click', function(){
    				$('#miModal5').css("display","none");
    			});
			//M EDITAR
		//MODALES
	</script>
</body>
</html>

