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
			<form action="cadastrocliente.php" method="post" enctype="multipart/form-data">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cadastro do Cliente</h1>

					<div class="row">
						<div class="mb-3 col-6">
							<label for="nome" class="form-label">Nome</label>
							<input
								type="text"
								class="form-control"
								name="nome"
								id="nome"
								
								placeholder="Digite o nome do cliente"
							/>
							
						</div>
						<div class="mb-3 col-6">
							<label for="email" class="form-label">E-mail</label>
							<input
								type="email"
								class="form-control"
								name="email"
								id="email"
								
								placeholder="coloque o e-mail no formato abc@mail.com"
							/>
							
						</div>
						
					</div>
					<div class="row">
						<div class="mb-3 col-4">
							<label for="telefone" class="form-label">Telefone</label>
							<input
								type="text"
								class="form-control"
								name="telefone"
								id="telefone"
								
								placeholder="(99)9 9999-9999"
							/>
						
						</div>
						<div class="mb-3 col-4">
							<label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
							<input
								type="text"
								class="form-control"
								name="cpfcnpj"
								id="cpfcnpj"
								
								placeholder="Somente Números"
							/>
						
						</div>
						<div class="mb-3 col-4">
							<label for="cep" class="form-label">CEP</label>
							<input
								type="text"
								class="form-control"
								name="cep"
								id="cep"
								maxlength="8"
								onkeyup="viaCEP()"								
								placeholder="Somente Números"
							/>
						
						</div>
						
						
					</div>
					<div class="row">
						<div class="mb-3 col-4">
							<label for="logradouro" class="form-label">Logradouro</label>
							<input
								type="text"
								class="form-control"
								name="logradouro"
								id="logradouro"
								
								placeholder="Digite a rua"
							/>
							
						</div>
						<div class="mb-3 col-3">
							<label for="numero" class="form-label">Nº</label>
							<input
								type="text"
								class="form-control"
								name="numero"
								id="numero"
								placeholder="Número da casa"
							/>
						</div>
						<div class="mb-3 col-2">
							<label for="complemento" class="form-label">Complemento</label>
							<input
								type="text"
								class="form-control"
								name="complemento"
								id="complemento"
								
								placeholder="Digite o complemento"
							/>
							
						</div>
						<div class="mb-3 col-3">
							<label for="bairro" class="form-label">Bairro</label>
							<input
								type="text"
								class="form-control"
								name="bairro"
								id="bairro"
								placeholder="Qual o bairro "
							/>
						</div>
						<div class="row">
						<div class="mb-3 col-4">
							<label for="cidade" class="form-label">Cidade</label>
							<input
								type="text"
								class="form-control"
								name="cidade"
								id="cidade"
								
								placeholder="Digite a cidade"
							/>
							
						</div>
						<div class="mb-3 col-4">
							<label for="uf" class="form-label">Estado</label>
							<input
								type="text"
								class="form-control"
								name="uf"
								id="uf"
								placeholder="Digite o estado"
							/>
						
						</div>
						<div class="mb-3 col-4">
							<label for="imagem" class="form-label">Logo/Imagem Pessoal</label>
							<input
								type="file"
								class="form-control"
								name="imagem"
								id="imagem"
								placeholder="Insira sua imagem"
								
							/>
							
						</div>
						
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-primary btn-lg" value="Salvar">
			</form>	
			</main>
			<div class="main">
				<div class="container">

				
					<div
						class="table-responsive"
					>
						<table
							class="table table-striped table-light"
						>
							<thead>
								<tr>
									<th scope="col">Foto</th>
									<th scope="col">Nome</th>
									<th scope="col">E-mail</th>
									<th scope="col">Telefone</th>
									<th scope="col">Estado</th>
									<th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody>
									<?php
										include 'conexao.php';
										$sql = "SELECT * FROM clientes";
										$busca =mysqli_query($conexao,$sql);
										while ($dados = mysqli_fetch_array($busca)) {
											$imagem = $dados['imagem'];
											$nome = $dados['nome'];
											$email = $dados['email'];
											$telefone = $dados['telefone'];
											$uf = $dados['uf'];
										?>
										<tr>
											<td><img src="imagens/<?php echo $imagem ?>" width="100px" height="100%" class="rounded-circle"></td>
											<td><?php echo $nome ?></td>
											<td><?php echo $email ?></td>
											<td><?php echo $telefone ?></td>
											<td><?php echo $uf ?></td>
											<td>
												<!-- Modal trigger button -->
												<button
													type="button"
													class="btn btn-warning btn-lg"
													data-bs-toggle="modal"
													data-bs-target="#modaleditar"
													
												>
												<i class="fa-solid fa-user-pen"></i>
													
												</button>
												
												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div
													class="modal fade"
													id="modaleditar"
													tabindex="-1"
													data-bs-backdrop="static"
													data-bs-keyboard="false"
													
													role="dialog"
													aria-labelledby="modalTitleId"
													aria-hidden="true"
												>
													<div
														class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
														role="document"
													>
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Modal title
																</h5>
																<button
																	type="button"
																	class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"
																></button>
															</div>
															<div class="modal-body">Body</div>
															<div class="modal-footer">
																<button
																	type="button"
																	class="btn btn-secondary"
																	data-bs-dismiss="modal"
																>
																	Fechar
																</button>
																<button type="button" class="btn btn-primary">Salvar</button>
															</div>
														</div>
													</div>
												</div>
												
												<!-- Modal trigger button -->
												<button
													type="button"
													class="btn btn-danger btn-lg"
													data-bs-toggle="modal"
													data-bs-target="#modalexcluir"
													
												>
												<i class="fa-solid fa-trash"></i>
													
												</button>
												
												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div
													class="modal fade"
													id="modalexcluir"
													tabindex="-1"
													data-bs-backdrop="static"
													data-bs-keyboard="false"
													
													role="dialog"
													aria-labelledby="modalTitleId"
													aria-hidden="true"
												>
													<div
														class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
														role="document"
													>
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Modal title
																</h5>
																<button
																	type="button"
																	class="btn-close"
																	data-bs-dismiss="modal"
																	aria-label="Close"
																></button>
															</div>
															<div class="modal-body">Deseja realmente excluir?</div>
															<div class="modal-footer">
																<button
																	type="button"
																	class="btn btn-secondary"
																	data-bs-dismiss="modal"
																>
																	Voltar
																</button>
																<button type="button" class="btn btn-danger">Excluir</button>
															</div>
														</div>
													</div>
												</div>
												
												<!-- Optional: Place to the bottom of scripts -->
												<script>
													const myModal = new bootstrap.Modal(
														document.getElementById("modalId"),
														options,
													);
												</script>
												


											
											</td>
										</tr>
										
										
										<?php } ?>

							
							</tbody>
						</table>
					</div>
					
				</div>
				
			</div>



			<footer class="footer">
            <?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
</body>

</html>

<script>
    function viaCEP() {

        var numCep = $("#cep").val();

        var url = "https://viacep.com.br/ws/" + numCep + "/json";

        $.ajax({
            url: url,
            type: "get",
            dataType: "json",

            success: function (dados) {
                console.log(dados);
                $("#uf").val(dados.uf);
                $("#cidade").val(dados.localidade);
                $("#logradouro").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
            }
        })


    }
</script>
<!-- Importação do Jquery Mask -->
<!-- include da importação da mascara dos inputs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.money').mask('000.000.000.000.000,00', { reverse: true });
    $('.money2').mask("#.##0,00", { reverse: true });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', { reverse: true });
    $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
    $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
</script>


<script type="text/javascript">
    $("#cpfcnpj").keydown(function () {
        try {
            $("#cpfcnpj").unmask();
        } catch (e) { }

        var tamanho = $("#cpfcnpj").val().length;

        if (tamanho < 11) {
            $("#cpfcnpj").mask("999.999.999-99");
        } else {
            $("#cpfcnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function () {
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
</script>
