<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento feito</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 10%;
        background-color: #f0f0f0;
        color: #333;
    }

    h1 {
        color: #4CAF50;
        margin-bottom: 20px;
    }

    a {
        display: inline-block;
        text-decoration: none;
    }

    .btn {
        border-radius: 25px;
        padding: 12px 30px;
        font-weight: 600;
        font-size: 16px;
        transition: background-color 0.3s ease, transform 0.2s;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #3498db;
        border: none;
        color: white;
    }

    .btn-primary:hover {
        background-color: #2980b9;
        transform: scale(1.05);
    }

    .alert {
        display: inline-block;
        padding: 15px 30px;
        background-color: #28a745;
        color: white;
        border-radius: 8px;
        margin-top: 20px;
        font-size: 16px;
    }

    .alert .btn-close {
        background: transparent;
        border: none;
        font-size: 18px;
        color: white;
        position: absolute;
        top: 20px;
        right: 10px;
    }

    .alert .btn-close:hover {
        color: #f1f1f1;
    }

    div {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
    .alert-danger{
        background-color:red;
    }

</style>

</head>
<body>
    <?php
    if($_GET['status'] == 1){
        echo '
        <br><br><br><br><br><br><br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sucesso!</strong> Seu agendamento foi realizado com sucesso.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <div class="mt-3">
        <a href="index.php" class="btn btn-primary">Voltar à página inicial</a>
    </div>
</div>
  ';
    } else {
        echo '
       <br><br><br><br><br><br><br>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Atenção!</strong> Erro no agendamento.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <div class="mt-3">
        <a href="index.php" class="btn btn-primary">Voltar à página inicial</a>
        <a href="Cadastrar_Agendamento.php" class="btn btn-primary">Tentar novamente</a>

    </div>
</div>
  ';
    }

    ?>
</div>
</body>
</html>