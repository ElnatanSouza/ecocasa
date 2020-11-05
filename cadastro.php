<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>EcoCasa - Cadastre-se</title>
	<link rel="icon" href="./images/iconlogo.svg" /> <!-- Icone no Title -->

	<link rel="stylesheet" href="./css/cadastro.css" />


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<!-- Menu de navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark shadow" id="menu">
		<div class="container">

			<a class="navbar-brand" href="index.php">
				<img src="./images/logopage.png" width="50%" title="Logo Eco Casa">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link text-dark" href="./login.php">Login</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link text-dark" href="./cadastro.html">Cadastre-se</a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link text-dark" href="#">Lista de Cadastro</a>
					</li> -->
				</ul>
			</div>

		</div>
	</nav>

	<div class="container formulario">

		<h1>Cadastre-se</h1> <br />

		<!--Aqui começa a parte do cadastro (lado esquerdo)-->
		<form id="form-cadastro" onsubmit="return validateForm(event)" action="./php/cadastro_usuario.php" method="post">

			<h4>Dados pessoais</h4>

			<hr />

			<div class="form-group">
				<label for="nome">Nome completo</label>
				<input class="form-control" id="nome" type="text" name="nome" placeholder="Nome completo" required />
			</div>

			<div class="form-group">

				<label>Renda mensal</label>

				<select id="salario" name="salario" class="form-control">
					<option value=""></option>
					<option value="Menos da metade de um salário minimo (R$522,50)">Menos da metade de um salário minimo (R$522,50)</option>
					<option value="Até Um salário minimo (R$1045,00)">Até Um salário minimo (R$1045,00)</option>
					<option value="Até dois salários minimos (R$2090,00)">Até dois salários minimos (R$2090,00)</option>
					<option value="Não quero Informar">Não quero Informar</option>
				</select>

			</div>

			<div class="form-group">
				<label for="profissao">Qual sua profissão</label>
				<input id="profissao" name="profissao" type="text" class="form-control" placeholder="Ex: Pedreiro">
			</div>

			<div class="form-group form-check">
				<input id="checkColaboracao" name="checkColaboracao" type="checkbox" class="form-check-input" checked>
				<label class="form-check-label" for="exampleCheck1"> Quero colaborar com a comunidade de alguma
					forma</label>
			</div>

			<div class="form-group">
				<label>Quantidade de moradores</label><br />

				<input id="qtdmoradores_1" type="radio" name="qtd-pessoas" value="1" required />
				<label for="qtd-pessoas_1">1</label>
				<input id="qtdmoradores_2" type="radio" name="qtd-pessoas" value="2" required />
				<label for="qtd-pessoas_2">2</label>
				<input id="qtdmoradores_3" type="radio" name="qtd-pessoas" value="3" required />
				<label for="qtd-pessoas_3">3</label>
				<input id="qtdmoradores_4" type="radio" name="qtd-pessoas" value="4" required />
				<label for="qtd-pessoas_4">4 ou mais</label>
			</div>

			<h4>Dados para contato</h4>

			<hr />

			<div class="form-group ">
				<label for="telefone">Telefone</label>
				<input class="form-control" id="telefone" type="tel" name="telefone" placeholder="Ex: (11) 95555-1111"
					required /> <br />
			</div>

			<div class="form-group">
				<label for="endereco">Endereço</label>
				<input class="form-control" id="endereco" type="text" name="endereco"
					placeholder="Ex: Av, Rua, etc. . ." required />
			</div>

			<div class="form-group">
				<label for="numero">N°</label>
				<input class="form-control" id="numero-rua" type="text" name="numero-rua" placeholder="Se não tiver numero digite SN"
					required />
			</div>

			<div class="form-group">
				<label for="complemento">Compl</label>
				<input class="form-control" id="complemento" type="text" name="complemento" placeholder="Ex: casa 2" />
			</div>

			<div class="form-group">
				<label for="bairro">Bairro</label>
				<input class="form-control" id="bairro" type="text" name="bairro" placeholder="Ex: Vl Anchieta"
					required />
			</div>

			<div class="form-group">
				<label for="cidade">Cidade</label>
				<input class="form-control" id="cidade" type="text" name="cidade" placeholder="Cidade" required />
			</div>

			<div class="form-group" id="cep">
				<label for="cep">CEP</label>
				<input class="form-control" type="text" name="cep" placeholder="Ex: 04531-000" required />
			</div>

			<div class="form-group">
				<select id="estado" class="form-control" name="estado">
					<option value="estado">SP</option>
				</select>
			</div>

			<h4>Dados da conta</h4>
			<hr />

			<div class="form-group">
				<label for="email">E-mail</label>
				<input class="form-control" id="email" type="email" name="email" placeholder="Digite um e-mail"
					required />
			</div>

			<div class="form-group">
				<label for="senha">Criar senha</label>
				<input class="form-control" id="senha" type="password" name="senha" placeholder="Digite uma senha"
					required />
			</div>

			<div class="form-group">
				<label for="conf-senha">Confirmar senha</label>
				<input class="form-control" id="conf-senha" type="password" name="confirmar-senha"
					placeholder="Confirme a sua senha" required />
			</div>

			<button id="botao" class="btn" type="submit">Cadastre-se </button> <br />

			<a href="./login.php"> Já possui cadastro? Realize o login. </a> <br /> <br />

		</form>
	</div>




	<script type="text/javascript" src="./js/validacao_form.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>

</body>

</html>