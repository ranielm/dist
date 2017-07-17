<!DOCTYPE html>
<html>
<head>
<title>Cadastrar usuário</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Steppy Account Create Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font --> 
</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<h1>Cadastre um novo usuário</h1>
		<div class="main-row">
			<ul class="steps">
				<li class="is-active">Passo 1</li>
				<li>Passo 2</li>
				<li>Passo 3</li>
			</ul>
			<form class="form-wrapper" action="#" method="post">
				<fieldset class="section is-active"> 
					<h3>Credenciais únicas</h3>
					<input type="text" name="nomeusuario" id="nomeusuario" placeholder="Nome de usuário" required="">
					<input type="email" name="email" id="email" placeholder="Endereço de e-mail" required="">
					<div class="button">Próximo</div> 
				</fieldset>
				<fieldset class="section">
					<h3>Tipo de conta</h3>
					<div class="row cf">
						<div class="four w3grids-agile">
							<input type="radio" name="r1" id="r1" checked>
							<label for="r1">
								<h4>Administrador</h4>
							</label>
						</div>
						<div class="four w3grids-agile">
							<input type="radio" name="r1" id="r2">
							<label for="r2">
								<h4>Usuário comum</h4>
							</label>
						</div>
						<div class="four w3grids-agile">
							<input type="radio" name="r1" id="r3">
							<label for="r3">
								<h4>Estagiário</h4>
							</label>
						</div>
					</div>
					<div class="button">Próximo</div>
				</fieldset>
				<fieldset class="section">
					<h3>Digite a senha</h3>
					<input type="password" name="senha" id="senha" placeholder="Senha">
					<input type="password" name="senha2" id="senha2" placeholder="Digite novamente a senha">
					<input class="submit button" type="submit" value="Cadastrar">
				</fieldset>
				<fieldset class="section">
					<h3>Usuário cadastrado!</h3>
					<p>O usuário foi cadastrado com sucesso. </p>
					<div class="button">Cadastrar novo usuário</div>
				</fieldset>
			</form>
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
	</div>
	<!-- //copyright --> 
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script>
		$(document).ready(function(){
		  $(".form-wrapper .button").click(function(){
			var button = $(this);
			var currentSection = button.parents(".section");
			var currentSectionIndex = currentSection.index();
			var headerSection = $('.steps li').eq(currentSectionIndex);
			currentSection.removeClass("is-active").next().addClass("is-active");
			headerSection.removeClass("is-active").next().addClass("is-active");

			$(".form-wrapper").submit(function(e) {
			  e.preventDefault();
			});

			if(currentSectionIndex === 3){
			  $(document).find(".form-wrapper .section").first().addClass("is-active");
			  $(document).find(".steps li").first().addClass("is-active");
			}
		  });
		});
	</script> 	
	<!-- //js --> 
</body>
</html>