<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastre-se</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand h1 mb-0" href="index.php">Personal Fitness</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="plan.php">Planos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="qsm.php">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cad.php">Cadastre-se</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="secao">
        <div class="container">
            <p>.</p>
            <h2 class="mt-5">Cadastro</h2>
            <form method="post" action="cad2.php">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="nome">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="endereco" class="form-control" id="endereço" placeholder="Enter endereço" name="endereco">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" class="form-control" id="telefone" placeholder="Enter telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>

                <button type="submit" class="btn btn-warning">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
<footer>
    <p></p>
    <center>
        <h6> 2018 academia Personal Fitness - Santa Cruz</h6>
    </center>
</footer>

</html>