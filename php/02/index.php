<?php
    $user_data = json_decode(file_get_contents('https://randomuser.me/api/?results=5'), true);
?>

<!doctype html>
<html lang="pt-br">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praticando PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Contando de 1 a 10</h1>
        <p>Quem nunca contou até 10 né?</p>
        <hr>
        <div class="mt-3" id="saida">
            <ul class="list-group mt-3">
                <?php foreach($user_data['results'] as $user): ?>
                <li class="list-group-item">
                    <img src="<?= $user['picture']['large'] ?>" alt="Photo">
                    <h5><?= $user['name']['first'] . ' ' . $user['name']['last'] ?></h5>
                    <p class="m-0">Cidade: <?= $user['location']['city'] ?></p>
                    <p class="m-0">E-mail: <?= $user['email'] ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <style>
        .container {
            padding-top: 1rem;
            max-width: 600px;
        }
    </style>
    <script>
        console.log(<?= $response_data ?>);
    </script>
</body>

</html>