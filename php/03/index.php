<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praticando PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Exercício PHP 3</h1>
    <form action="" method="post">
        <div method="get" class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome completo">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="termos" id="termos">
            <label class="form-check-label" for="termos">Aceitar termos de uso</label>
        </div>

        <button name="action" type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div class="card">
        <div class="card-body">
            <?php if(isset($_POST['action'])): ?> 
                <div><strong></strong>Nome: <?= $_POST['nome']; ?></div>
                <div><strong>E-mail:</strong><?= $_POST['email']; ?></div>
                <div><strong>Senha:</strong><?= md5($_POST['senha']); ?></div>
                <div>
                    <strong>
                        Aceitou os termos?
                    </strong>
                    <?= isset($_POST['termos']) ? 'Sim' : 'Não' ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <style>
        .container {
            padding-top: 1rem;
            max-width: 600px;
        }
    </style>
    <script>
        
    </script>
</body>

</html>