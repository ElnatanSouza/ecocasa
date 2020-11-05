<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>EcoCasa - Login</title>
    <link rel="icon" href="./images/iconlogo.svg" />



    <link rel="stylesheet" href="./css/login.css" />

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
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="./cadastro.php">Cadastre-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- painel de login -->
    <main>
        <div class="container painel-login">
            <div class="card">
                <h1>Entre ou cadastre-se</h1>

                <form action="acessologin.php" method="POST">
                    <input name="email" type="email" placeholder="E-mail" required />
                    <input name="password" type="password" placeholder="Senha" required />
                    <button class="btn">Entrar</button>
                    <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui</a>
                </form>
            </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>