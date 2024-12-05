<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #111;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 500px;
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin: 10px 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s ease;
            margin: 5px;
        }

        .btn-primary {
            background-color: #3498db;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .alert {
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .alert-success {
            background-color: #dff0d8;
            color: #3c763d;
        }

        .alert-danger {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_GET['status'] == 1) {
            echo '
                <div class="alert alert-success">
                    <h1>Agendamento Concluído!</h1>
                    <p>Seu agendamento foi realizado com sucesso.</p>
                </div>
                <a href="index.php" class="btn btn-primary">Voltar à Página Inicial</a>
            ';
        } else {
            echo '
                <div class="alert alert-danger">
                    <h1>Ops! Algo deu errado.</h1>
                    <p>Houve um problema ao realizar seu agendamento. Por favor, tente novamente.</p>
                </div>
                <a href="index.php" class="btn btn-primary">Voltar à Página Inicial</a>
                <a href="Cadastrar_Agendamento.php" class="btn btn-danger">Tentar Novamente</a>
            ';
        }
        ?>
    </div>
</body>
</html>
