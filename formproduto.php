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
			<form action="cadastroproduto.php" method="post">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cadastro de Produtos</h1>

					<div class="row">
					<div class="mb-3 col-6">
						<label for="produto" class="form-label">Produto</label>
						<input type="text" class="form-control" id="produto" name="produto" placeholder="Digite o nome do produto">
					</div>
					<div class="mb-3 col-6">
						<label for="descricao" class="form-label">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
					</div>
					<div class="mb-3">
						<label for="categoria" class="form-label">Categoria de Produto</label>
						<select
							class="form-select form-select-sm"
							name="categoria"
							id="categoria"
						>
							<option value="bebidaquente">Bebida quente</option>
							<option value="bebidagelada">Bebida Gelada</option>
							<option value="boloesobremesa">Bolo e Sobremesa</option>
							<option value="sanduicheesalgado">Sanduiche e Salgado</option>
						</select>
					</div>
					<div class="mb-3 col-6">
						<label for="estoque" class="form-label">Estoque</label>
						<input type="number" class="form-control" name="estoque" id="estoque" min="0" max="200" step="1">
					</div>
					<div class="mb-3 col-6">
						<label for="preco" class="form-label">Preço</label>
						<input type="number" class="form-control" name="preco" id="preco" min="0" max="200" step="1">
					</div>
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