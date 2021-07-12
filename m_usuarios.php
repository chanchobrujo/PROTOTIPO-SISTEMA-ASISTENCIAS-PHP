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
			background: #A4A2A8;
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
				width: 40%;
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
		/* MODALES */
	</style>
	<?php 
		require("conn.php");
		if (isset($_POST['btn4'])) {
			$id = $_POST['t1'];
			$usuario = $_POST['t2'];
			$contraseña = MD5($_POST['t3']);
			$tipo = $_POST['t4'];
			$sql = "INSERT INTO `usuario`(`idx`, `usuario`, `contraseña`, `tipo`) VALUES ('$id','$usuario','$contraseña','$tipo')";
			$insertar = mYsqli_query($con,$sql)or die("error: ".mysqli_error($con));
					echo "
						<script>
							$(document).ready(function(){
								$('#miModal4').css('display','block');
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
			<input type="button" id="abrir1" class="btn" value="REGISTRAR NUEVO USUARIO">
		</div>
		<form method="post">			
			<div class="tabla_div">
				<table class="t1">
					<tr>
						<th colspan="7"><div class="d1">LISTA</div><hr></th>
					</tr>
					<tr>
						<td><center><div class="d6">USUARIO</div></center></td>
						<td><center><div class="d6">TIPO</div></center></td>
					</tr>
					<?php
					$lista = mYsqli_query($con,"select * from usuario") or die("error: ".mysqli_error());
					while ($mostrar = mysqli_fetch_array($lista)) {
					?>
					<tr>
						<td><center><div class="d7"><?php echo $mostrar['usuario'] ?></div></center></td>
						<td><center><div class="d7"><?php echo $mostrar['tipo'] ?></div></center></td>		
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
													<thead><h1>NUEVO USUARIO</h1></thead>
												</tr>
												<tr>
													<td>
														<input type="text" name="t1" class="t" placeholder="&#127891;ID" required>
		                							</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="t2" class="t" placeholder="&#128100;USUARIO" required>
													</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="t3" class="t" placeholder="&#128100;CONTRASEÑA" required>
													</td>
												</tr>
												<tr>
													<td>
														<label>TIPO:</label>
														<select name="t4" class="t1">
															<option value="AMINISTRADOR">
		                										AMINISTRADOR
		                									</option>
															<option value="DOCENTE">
		                										DOCENTE
		                									</option>
															<option value="ALUMNO">
		                										ALUMNO
		                									</option>
		                								</select>
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
										<h2>USUARIO REGISTRADO</h2>
										<input type="button" id="btncerrar" class="btn10" value="OK">
									</center>
								</div>
		    				</div>
						</div>
					</div>
				<!--M NUEVO-->
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
		//MODALES
	</script>
</body>
</html>