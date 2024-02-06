<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
		include 'header.php';
	?>
 <body class="align-items-center py-4">
<div class="container">
<div class="row">
		  <div class="col-6">
		  	
			<main class="form-signin w-100 m-auto">
			  <form action="login.php" method="post">
			  
			    <h1 class="h3 mb-3 fw-normal">Entrar</h1>
			
			    <div class="form-floating py-4">
			      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			      <label for="floatingInput">Endereço de e-mail</label>
			    </div>
			    <div class="form-floating py-4">
			      <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
			      <label for="floatingPassword">Senha</label>
			    </div>
				   
			    <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
			  </form>
			</main>
		  </div>
		  <div class="col-6">
		  	
			<main class="form-signin w-100 m-auto line-separator">
			  <form action="registar.php" method="post">
			  
			    <h1 class="h3 mb-3 fw-normal">Registar</h1>
			
			    <div class="form-floating py-4">
			      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			      <label for="floatingInput">Endereço de e-mail</label>
			    </div>
			    <div class="form-floating py-4">
			      <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
			      <label for="floatingPassword">Senha</label>
			    </div>
				   
			    <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
			  </form>
			</main>
		  </div>
</div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/app.js"></script>

</body>

</html>