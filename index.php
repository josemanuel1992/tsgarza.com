<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>TS & Garza</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="topHeader">
			<div class="login float-right">
				<a href="#">Iniciar Sesión</a>
			</div>
		</div>
		<div class="bottomHeader">
			<div class="logo">
				<img src="img/logo.png" alt="TS & Garza Logo">
			</div>
			<nav>
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Nosotros</a></li>
					<li class="activo"><a href="#">Servicios</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="#">Noticias</a></li>
				</ul>
			</nav>
		</div>
		<!-- ID, estilos son únicos por página -> background
			CLASS, se utilizan cuando el estilo se repite
		-->
		<div id="slider">
			<img src="img/slide1.jpg" alt="">
		</div>
	</header>
	<div class="clearfix"></div>
	<section id="contenedorNosotros">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h2>Nosotros</h2>
					<h1>CREAMOS<br/>SOLUCIONES</h1>
					<h3>a tus necesidades</h3>
					<p>El éxito de un negocio es dar un excelente servicio o producto a todos nuestros clientes. Toda empresa con éxito va de la mano con una Asesoría Contable, Fiscal y Financiera; es por eso sometemos a su consideración nuestra propuesta de servicios proponiendo el mejor esquema diseñado para atender sus necesidades, buscando rentabilidad, legalidad y profesionalismo.</p>
					<p>Nuestro equipo de trabajo reúne el conocimiento y la experiencia de varios años de trabajo en diversas empresas que nos han permitido unir esfuerzos y desarrollar los esquemas de control contable, fiscal y legal que harán más eficiente a su empresa.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="servicios">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 offset-sm-4">
					<h2>NUESTROS SERVICIOS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="flex">
						<h4>ADMINISTRACIÓN DE NÓMINA</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex">
						<h4>SELECCIÓN Y RECLUTAMIENTO <br/> DE PERSONAL</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex">
						<h4>ESTUDIOS SOCIOECONÓMICOS</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex">
						<h4>REGISTROS CONTABLES</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex">
						<h4>ESTRATÉGIAS FISCALES</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="flex">
						<h4>GESTORÍA Y REGISTRO<br/>DE PERSONAL</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="#" method="POST" id="frmContactanos">
					<h3>CONTACTANOS</h3>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control">
							</div>
                             <div class="form-group">
								<label for="telefono">Teléfono</label>
								<input type="tel" name="telefono" id="telefono" class="form-control">
							</div>
							<div class="form-group">
								<label for="correo">Correo Electrónico</label>
								<input type="email" name="correo" id="correo" class="form-control">
							</div>
                             
                             <div class="form-group">
                                   <label for="comentario">Comentario:</label>
                                   <input type="comentario" name="comentario" id="comentario" class="form-control">
                                   
                                  </div>

								<!-- <div class="form-group">
                                   <label for="comentario">Comentario:</label>
                                   <textarea type="comentario" name="comentario"  id="comentario" class="form-control" ></textarea>
                                  </div>  -->

							<div class="form-group">
								<button type="button" id="btnGuardar" class="btn btn-primary" data-accion="guardar">Guardar</button>
							</div>	
						</div>
						
						<div class="col-sm-6">
							
						</div>
					</div>
				</div>
			</form>	
		</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			listar();
		});
		

		$("#btnGuardar").click(function(){
			let accion = $(this).data('accion');
			let objeto = {};
			let id; 
			if(accion == "guardar"){	
				objeto['accion'] = "insertar";
			}else if(accion == "editar"){
				id = $(this).data('id');
				objeto['accion'] = "editar";
				objeto['id'] = id;
			}
			let bandera = 1;
			$("#frmContactanos input").each(function(){
				$(this).removeClass('error');
				if($(this).val() == ""){
					$(this).addClass('error').focus();
					console.log($(this).attr('name'));
					bandera = 0;
					return false;
				}
				objeto[$(this).attr('name')] = $(this).val();				
			});
			if(bandera != 0){
				console.log(objeto);
				$.post( "includes/_funciones.php",objeto, function(data) {
					if(id != undefined){
						$("#btnGuardar").data('accion','guardar').text('Guardar').removeData('id');
						$("#frmContactanos input").each(function(){
							$(this).val('');
						});
					}
					listar();
				});
			}
		});
		$("#frmContactanos input").keypress(function(){
			$(this).removeClass('error');
		});
		function listar(){
			let objeto = {
				"accion" : "consultar"
			};	
			$("table tbody").html('');
			$.post( "includes/_funciones.php",objeto, function(data) {
				let datos = JSON.parse(data);
				datos.forEach(function(e){
					construyeFila(e.nombre, e.telefono, e.correo, e.comentario, e.id_nombre);
				})
			});
		}
		
	</script>

</body>
</html>












