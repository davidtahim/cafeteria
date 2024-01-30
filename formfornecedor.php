<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	include 'header.php';
	?>

<body>
	<div class="wrapper">
		<?php include 'menu.php' ?>

		<div class="main">
			<?php include 'topo.php' ?>

			<main class="content">
				<form action="" method="post">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro do Fornecdor</h1>

						<div class="row">
							<form class="row g-3">
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Email</label>
									<input type="email" class="form-control" id="inputEmail4">
								</div>
								<div class="col-md-6">
									<label for="inputPassword4" class="form-label">Password</label>
									<input type="password" class="form-control" id="inputPassword4">
								</div>
								<div class="col-12">
									<label for="inputAddress" class="form-label">Address</label>
									<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
								</div>
								<div class="col-12">
									<label for="inputAddress2" class="form-label">Address 2</label>
									<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
								</div>
								<div class="col-md-6">
									<label for="inputCity" class="form-label">City</label>
									<input type="text" class="form-control" id="inputCity">
								</div>
								<div class="col-md-4">
									<label for="inputState" class="form-label">State</label>
									<select id="inputState" class="form-select">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="col-md-2">
									<label for="inputZip" class="form-label">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								</div>
								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck">
										<label class="form-check-label" for="gridCheck">
											Check me out
										</label>
									</div>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-primary">Sign in</button>
								</div>
							</form>
						</div>


					</div>
					<input type="submit" class="btn btn-primary btn-lg" value="Salvar">
				</form>
			</main>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>