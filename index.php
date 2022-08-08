<?php
    // include('./functions/includes.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Righteous&family=Sarala:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
			<div class="main">
				<div class="main-center margin-login d-flex flex-column">
					<div id="btns-layout">
						<button id="faz-login" class="btn-active" onclick="">Faça seu Login</button>
						<button id="faz-cadastro"class="btn-desative" onclick="">Faça seu cadastro</button>
					</div>					
					<form class="" method="post" action="../dashboard/./home.php">
											
						<div class="form-group">
							<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" placeholder="Digite seu Email"/>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Senha</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" placeholder="Digite sua senha"/>
								</div>
						</div>
						
						<input type="checkbox" name="lembrar-me" id="lembrar-me"> lembrar-me <a class="float-rigth" href="#">Esqueceu sua senha?</a>
						
						<button type="submit" class="btn-login">Entrar</button>
						
					</form>
				</div><!--end-login-->
				<div class="main-center" style="">
					
				<div id="btns-layout">
						<button id="faz-login" class="btn-desative" onclick="">Faça seu Login</button>
						<button id="faz-cadastro" class="btn-active" onclick="">Faça seu cadastro</button>
					</div>					
					
					<form class="">
						
						<div class="form-group">
							<label for="user">Usuário</label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="user" id="user"  placeholder="Digite seu nome de usuário"/>
							</div>
						</div>	

						<div class="form-group">
							<label for="email">Seu Email</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="email" class="form-control" name="email" id="email" placeholder="Digite seu Email"/>
							</div>
						</div>					

						<div class="form-group">
							<label for="password">Sua senha</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Confirme sua senha</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="confirm" id="confirm" placeholder="Repita sua senha"/>
							</div>
						</div>

						<button type="button" class="btn-login" onclick="register()">Cadastrar</button>
						
					</form>
				</div><!--main-center"-->
                
			</div><!--main-->
		</div><!--container-->
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="js/loginRegister.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
</body>
</html>