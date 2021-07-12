
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		require("conn.php");
		if (isset($_POST['btn'])) {
			$usu = $_POST['t3'];
			$pas = MD5($_POST['t4']);
			$tipo = '';
			$idx = '';
			$query = mYsqli_query($con,"SELECT * FROM `usuario` WHERE usuario = '$usu' and contraseña='$pas' ") 
			or die("error: ".mysqli_error($con));
			$nr = mysqli_num_rows($query);
			if ($nr != 0) {
				$mostrar = mysqli_fetch_array($query);
				$tipo = $mostrar['tipo'];
				$idx = $mostrar['idx'];
				unset($_SESSION);
				session_start();
				$_SESSION['tipo'] = $tipo;
				switch ($tipo) {
					case 'ADMINISTRADOR':					
					$_SESSION['usuario'] = $usu;
					$_SESSION['idx'] = $idx;
					$_SESSION['id_curso'] = array();
					$_SESSION['nombre_curso'] = array();
					$_SESSION['id_alumnos'] = array();
					$_SESSION['idm'] = array();
					$_SESSION['alumnos'] = array();
					$_SESSION['c'] = array();
					header("LOCATION:matricula.php");
						break;
					case 'ALUMNO':					
					$_SESSION['usuario'] = $usu;
					$_SESSION['idx'] = $idx;
					$_SESSION['id_curso'] = array();
					$_SESSION['nombre_curso'] = array();
					header("LOCATION:matricula1.php");
						break;
					case 'DOCENTE':					
					$_SESSION['usuario'] = $usu;
					$_SESSION['idx'] = $idx;
					$_SESSION['id_alumnos'] = array();
					$_SESSION['idm'] = array();
					$_SESSION['alumnos'] = array();
					$_SESSION['c'] = array();
					header("LOCATION:asistencias1.php");
						break;
					
					default:
						# code...
						break;
				}
			}
		}
	?>
	<style type="text/css">
		*{
			font-family: monospace;
		    text-decoration: none;
		}
		body{
			background: #4F5454;
		}

		form{
			background: #93867C;
			width: 40%;
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
			.btn:hover,.btn2:hover,.btn_2:hover,.btn3:hover,#btnacc:hover,#btncerrar:hover,#btnesp:hover{
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
				width: 95%;
				transition: .5s;
				border-style: none;
				color: white;
				padding: 5px 10px;
				margin:10px; 
				background: #93867C;
			}
			#btnesp2:hover{
				transition: .5s;
				background: #16C9E9;
				letter-spacing: 3px;			
			}
		/* BOTONES */

		/* INPUTS */
			.t,.t1{
 				padding: .5rem;
				margin-bottom: .5rem 0;
				border: none;
				border-bottom: solid #16C9E9 1.5PX;
				transition: all .5s;
				width: 300px;
				margin: 10px;
			}
			.t{
				width: 350px;
			}
			.t:focus,.t1:focus{
				border-bottom: solid #16C9E9 1.5PX;
				width: 330px;
				outline:none !important;
				outline-width: 0 !important;
				box-shadow: none;
				-moz-box-shadow: none;
				-webkit-box-shadow: none;
			}
		/* INPUTS */
	</style>	
</head>
<body>
	<center>
		<br><br><br>
		<form method="post">
			<table>
				<tr>
					<th>
						<img src="1.png" width="270px" height="300px">
					</th>
				</tr>
				<tr>
					<td>
						<center><h2>INICIE SESION</h2></center>
					</td>
				</tr>
				<tr>
					<td><input type="text" name="t3" class="t" placeholder="&#128100;USUARIO" required></td>
				</tr>
				<tr>
					<td><input type="text" name="t4" class="t" placeholder="&#128100;PASSWORD" required></td>
				</tr>
				<tr>
					<td colspan="2"><CENTER><input type="submit" id="btnesp2" name="btn" value="INGRESAR"></CENTER></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>