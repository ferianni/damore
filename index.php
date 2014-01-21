<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="title" content="Caf&eacute;" />
	<title>D'amore Hermanos</title>
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>	

</head>

<script type="text/javascript">
	$(document).ready(function(){


		// function preloadImages(sources){			
		// 	var images = [];
		// 	for (i = 0, length = sources.length; i < length; ++i) {
		// 		images[i] = new Image();
		// 		images[i].src = sources[i];
		// 	}
		// }

		// var imageURLs = [
		//     "clientes.jpg",
		//     "Flours.jpg",
		//     "pan.jpg",
		//     "pasta_orchiettes.jpg",
		//     "Fresh-Pasta.jpg"
		// ];

		//preloadImages(imageURLs);
		


		var id;
		$('body').on('click','.button', function (e) {			

			string = 'content='+this.id;
			id = this.id;

			console.log(string);


			// $('#contents').empty();
			
			// $('#contents').css('background-color','#eee');



			$.get("ajax_content.php", string , function(data) {						
				content = data;			

				//$('#contents').css('background-color','white');
				//$('#contents').css('opacity','1');
				$('#a-content').hide().html(content).fadeIn(500);
				$('#a-content').removeClass('pastas');
				$('#a-content').removeClass('pan');
				$('#a-content').removeClass('harina');
				$('#a-content').removeClass('clientes');
				$('#a-content').removeClass('flours');
				$('#a-content').removeClass('fideos');
				$('#a-content').removeClass('ravioles');
				
				if (id==1) {
					$('#a-content').addClass('pastas');
				}else if(id==2){
					$('#a-content').addClass('pan');				
				}else if(id==3){
					$('#a-content').addClass('harina');
				}else if(id==4){
					$('#a-content').addClass('clientes');				
				}else if(id==5){
					$('#a-content').addClass('flours');
				}else if(id==6){
					$('#a-content').addClass('fideos');
				}else if(id==7){
					$('#a-content').addClass('ravioles');
				}
				
				

			}).done( function(){
				
				

			});
		});
	});
</script>

<body class="col-left">
	<!-- <div id="a-global-toolbar">
		<div class="a-global-toolbar-login a-login">
			<ul class="a-login"></ul>
		</div>
	</div> -->	

	<div id="a-wrapper">
		<div id="a-header">
			<ul class="a-nav a-nav-main tabs nav-depth-0" id="a-nav-main-0">
				<li class="a-nav-item first" id="a-nav-item-main-7">
					<span class="button" id="1">empresa</span>
				</li>
				<li class="a-nav-item second" id="a-nav-item-main-12">
					<span class="button" id="2">Harinas</span>
				</li>
				<li class="a-nav-item ancestor" id="a-nav-item-main-11">
					<span class="button" id="3">Productos</span>
				</li>
				<li class="a-nav-item" id="a-nav-item-main-10">
					<span class="button" id="4">Servicios</span>
				</li>
				<li class="a-nav-item next-last" id="a-nav-item-main-9">
					<span class="button" id="5">Nuestros Clientes</span>
				</li>
				<li class="a-nav-item last" id="a-nav-item-main-8">
					<span class="button" id="6">contacto</span>
				</li>
				<li class="a-nav-item last" id="a-nav-item-main-8">
					<span class="button" id="7">home</span>
				</li>

				
				
			</ul>

<!-- 			<ul class="a-nav a-nav-sub-main tabs nav-depth-0" id="a-nav-sub-main-0">
				<li class="a-nav-item a-current-page first" id="a-nav-item-sub-main-33">
				<a href="http://www.cafe3asturiana.com.ar/productos/cafe">Caf&eacute;</a>      
				</li>
				<li class="a-nav-item second" id="a-nav-item-sub-main-34">
				<a href="http://www.cafe3asturiana.com.ar/productos/infusiones">Infusiones</a>      
				</li>
				<li class="a-nav-item next-last" id="a-nav-item-sub-main-36">
				<a href="http://www.cafe3asturiana.com.ar/productos/snack">Snack</a>      
				</li>
				<li class="a-nav-item last" id="a-nav-item-sub-main-35">
				<a href="http://www.cafe3asturiana.com.ar/productos/otros">Otros</a>      
				</li>
			</ul> -->

		</div>

		<div id="a-content" class="cafe harina">		



<!-- 			<div class="postal-wrapper">
				<div class="postal-contenedora">
					<div class="foto-postal">
						<div id="a-area-33-imagen-postal" class="a-area a-area-imagen-postal">
							<div id="a-slots-33-imagen-postal" class="a-slots">
								<div class="a-slot  aImage " id="a-slot-33-imagen-postal-1">
									<div class="a-slot-content" id="a-slot-content-33-imagen-postal-1">
										<ul class="a-media-image">
										<li class="a-image-embed">
										<img src='/images/foto_servicios1.jpg' />    </li>
										</ul>
									</div>
								</div>
							</div>  
						</div> 
					</div>              
					<div class="titulo">
						<div id="a-area-33-tit-postal" class="a-area a-area-tit-postal">
							<div id="a-slots-33-tit-postal" class="a-slots">
								<div class="a-slot  aText " id="a-slot-33-tit-postal-1">
									<div class="a-slot-content" id="a-slot-content-33-tit-postal-1">
										<p>Cafes</p>
									</div>
								</div>
							</div>  
						</div> 
					</div>
					<div class="descripcion">
						<div id="a-area-33-desc-postal" class="a-area a-area-desc-postal">
							<div id="a-slots-33-desc-postal" class="a-slots">
								<div class="a-slot  aText " id="a-slot-33-desc-postal-1">
									<div class="a-slot-content" id="a-slot-content-33-desc-postal-1">
										<p>CAFE 3 dispone de una flota comercial, dotada de telefon&iacute;a m&oacute;bil preparada para brindar un servicio &aacute;gil y cont&iacute;nuo garantizando la satisfaccion de todos sus clientes</p>
									</div>
								</div>
							</div>
						</div> 
				    </div>

					<ul class="a-nav a-nav-postal tabs nav-depth-0" id="a-nav-postal-0">
						<li class="a-nav-item first" id="a-nav-item-postal-69">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/hijo_uno">hijo_uno</a>      
						</li>
						<li class="a-nav-item second" id="a-nav-item-postal-46">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/santos-mezcla-2">Santos Mezcla</a>      
						</li>
						<li class="a-nav-item" id="a-nav-item-postal-63">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/santos-agregado">Santos agregado</a>      
						</li>
						<li class="a-nav-item" id="a-nav-item-postal-45">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/santos-en-granos-2">Santos en Granos</a>      
						</li>
						<li class="a-nav-item" id="a-nav-item-postal-42">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/express-filtro-2">Express Filtro</a>      
						</li>
						<li class="a-nav-item next-last" id="a-nav-item-postal-47">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/mezcla-2">Mezcla</a>      
						</li>
						<li class="a-nav-item last" id="a-nav-item-postal-43">
						<a href="http://www.cafe3asturiana.com.ar/productos/cafe/crudo-2">Crudo</a>      
						</li>
					</ul>
				</div>				
			</div> -->


		</div>
		<div id="a-footer">
			<div class="cinta">
				<strong>Los Tres Hermanos | D'amore Hermanos S.R.L. |  Chile 2471, Capital Federal.</strong>
				<div class="logo"> </div>        
			</div>
			<div class="comunicate">
				Comunicate con Nosotros al <strong>4942-5427</strong> Líneas rotativas | info@harinasdamore.com.ar
				<a class="logo" href="#">
				<div class="fondo_logo"> </div>  
				</a>
			</div>
		</div>
	</div>
</body>
</html>