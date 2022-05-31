<?php
    session_start();
    if(isset($_SESSION['Admin123'])) {

    
?>

<html>
	<div id="contenedor_logos">
        <div id="contenedor_logo_gob">
            <img id="logo_gob" src="imagenes\FInicio_Sesion\logo gob queretaro.jpeg" alt="">
        </div>
        <img id="logo_gob2" src="imagenes\FInicio_Sesion\logo2 gob.jpeg" alt="">

    </div>
    <head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:100vw;
				display:flex;
				font-family:Arial, Helvetica, sans-serif;
				justify-content: center;
				flex-direction: column;
				align-items: center;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}

			#logo_gob {
				overflow:hidden;
				margin-top: -50px;
			}

			#contenedor_logo_gob {
				align-self: flex-start;
				overflow:hidden;
				height: 130px;
				width: 300px;
			}

			#contenedor_logos {
				display: flex;
				width: 100vw;
				justify-content: space-between;
			}

			#contenedor_logo_gob2 {
				align-self: flex-start;
				height: 130px;
				width: 300px;
			}

			#logo_gob2 {
				height: 130px;
				width: 100px;
			}

			button {
				margin-top: 100px;
				height:100px;
				width: 200px;
				font-size: 30px;
			}

			button:hover{
				cursor:pointer;
			}


			
		</style>
	</head>
	<body>
		<div id="header">
			<ul class="nav">
				<li><a href="">Multas</a>
                    <ul>
						<li><a href="FMultas.php">Insertar</a></li>
						<li><a href="CMultas.php">Consultar</a></li>
					</ul>
                </li>

				<li><a href="">Propietarios</a>
					<ul>
                        <li><a href="FPropietarios.php">Insertar</a></li>
						<li><a href="CPropietarios.php">Consultar</a></li>
					</ul>
				</li>
				<li><a href="">Licencias</a>
					<ul>
                        <li><a href="FLicencias.php">Insertar</a></li>
						<li><a href="CLicencias.php">Consultar</a></li>
					</ul>
				</li>
				<li><a href="">Conductores</a>
                    <ul>
                        <li><a href="FConductores.php">Insertar</a></li>
						<li><a href="CConductores.php">Consultar</a></li>
					</ul>

					<li><a href="">Tarjetas de Circulacion</a>
                    <ul>
						<li><a href="FTarjetasCirculacion.php">Insertar</a></li>
						<li><a href="CTarjetasCirculacion.php">Consultar</a></li>
					</ul>
                </li>

				<li><a href="">Tarjetas de Verificacion</a>
                    <ul>
						<li><a href="FTarjetasVerificacion.php">Insertar</a></li>
						<li><a href="CTarjetasVerificacion.php">Consultar</a></li>
					</ul>
                </li>

				<li><a href="">Vehiculos</a>
                    <ul>
						<li><a href="FVehiculos.php">Insertar</a></li>
						<li><a href="CVehiculos.php">Consultar</a></li>
					</ul>
                </li>

                </li>
			</ul>

			<form method="get" action="CerrarSesion.php">
 				<button type="submit">Cerrar Sesión
			</form>
		</div>

	</body>
</html>
<?php
    } else {
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1; URL=Facceso.html">');
    }
?>