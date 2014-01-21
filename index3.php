<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>	
</head>
<style type="text/css">
	body{		
		margin: 0;
		font-family: 'consolas';
	}	

	#wrapper,#header,#footer{
		text-align: center;
	}
	#wrapper{		
		//border: 1px solid black;
		//border-radius: 25px;
		//background: #A3A3A3;
		width: 1000px;		
		margin: 0 auto;				
		
	}	
	
	#header{
		margin-top: 20px;
		margin-bottom: 10px;		
	}
	#header .lines {
		background-color: rgb(247, 184, 0);
		height: 4px;
	}
	#footer{		
	
		background-color: rgb(247, 184, 0);
		height: 110px;
		
	}
	#menu {
		height: 100%;
	}

	#menu ul {
		padding: 0;		
	}
	#menu ul li{		
		//border: 1px solid black;
		border-radius: 25px;
		display: inline;
		background-color: rgb(247, 184, 0);
		padding: 10px 40px;				
	}
	#menu ul li:hover{		
		color:white;
	}
	#content{
		margin-top: 20px;
		height: 600px;
	}
	#section{
		
	}
	.button{
		cursor: pointer;
	}
	.harina {
	  background: url("images/harina.jpg") no-repeat center center;
	}
	.pastas {
	  background: url("images/pastas.jpg") no-repeat center center;
	}
	.pan {
	  background: url("images/pan.jpg") no-repeat center center;
	}
	.clientes {
	  background: url("images/clientes.jpg") no-repeat center center;
	}
	.flours {
	  background: url("images/flours.jpg") no-repeat center center;
	}
	.fideos {
	  background: url("images/fideos.jpg") no-repeat center center;
	}
	.ravioles {
	  background: url("images/ravioles.jpg") no-repeat center center;
	}
	.logoright {
		background-image: url(images/logo.png);
		width: 104px;
		height: 109px;
		position: absolute;
		top: 10px;
		right: 479px;
	}
	.logoleft {
		background-image: url(images/logo.png);
		width: 104px;
		height: 109px;
		position: absolute;
		top: 10px;
		left: 513px;
	}
	.logoleft {
		background-image: url(images/logo.png);
		width: 104px;
		height: 109px;
		position: absolute;
		top: 10px;
		left: 513px;
	}
	.logobottomleft {
		background-image: url(images/logo.png);
		width: 104px;
		height: 109px;				
		float: left;		
		
	}
	.logobottomright {
		background-image: url(images/logo.png);
		width: 104px;
		height: 109px;				
		float: right;
		//position: absolute;
		//top: 790px;
		//right: 500px;
	}
	#text{		
		margin-top: 30px;
		padding: 30px 20px;
		//text-align: left;
		//float: left;

	}
	#footercontent{
		font-weight:bold;
		width: 1000px;		
		margin: 0 auto;				
		height: 100%;
	}

</style>
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



//			$.get("ajax_content.php", string , function(data) {						
				//content = data;			

				//$('#contents').css('background-color','white');
				//$('#contents').css('opacity','1');
				$('#content').hide().html(content).fadeIn(500);
				$('#content').removeClass('pastas');
				$('#content').removeClass('pan');
				$('#content').removeClass('harina');
				$('#content').removeClass('clientes');
				$('#content').removeClass('flours');
				$('#content').removeClass('fideos');
				$('#content').removeClass('ravioles');
				
				if (id==1) {
					$('#content').addClass('pastas');
				}else if(id==2){
					$('#content').addClass('pan');				
				}else if(id==3){
					$('#content').addClass('harina');
				}else if(id==4){
					$('#content').addClass('clientes');				
				}else if(id==5){
					$('#content').addClass('flours');
				}else if(id==6){
					$('#content').addClass('fideos');
				}else if(id==7){
					$('#content').addClass('ravioles');
				}
				
				

//			}).done( function(){
				
				

//			});
		});
	});
</script>
<body>
	<div id="header">
		<div class=""> </div> 
		<div class="lines"></div>
			<h1>DAMORE HERMANOS SRL</h1>
		<div class="lines"></div>
		<div class=""> </div> 		
	</div>

	<div id="wrapper">
		<div id="menu">
			<ul>
				<li class="button" id="1">Empresa</li>
				<li class="button" id="2">Harinas</li>
				<li class="button" id="3">Productos</li>
				<li class="button" id="4">Servicios</li>
				<li class="button" id="5">Clientes</li>
				<li class="button" id="6">Contacto</li>
			</ul>
		</div>
		
		<div id="content" class="harina">
			

		</div>

		
	</div>

	<div id="footer">
		<div id="footercontent">
			<div class="logobottomleft"> </div> 
			<div id="text">
				Los Tres Hermanos | D'amore Hermanos S.R.L. | Chile 2471, Capital Federal.
				<br>
				Comunicate con Nosotros al 4942-5427 Líneas rotativas | info@harinasdamore.com.ar		
			</div>
			<div class=""> </div> 
		</div>
	</div>
</body>
</html>