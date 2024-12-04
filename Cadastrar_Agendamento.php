<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Tela de Agendamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
     body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        display: flex;
        flex-direction: column;
        height: 100vh;
        background-size: cover;
        background-position: center;
        color: #fff;
        background-image: linear-gradient(170deg, black, white);
    }

    nav {
            background-color: #111;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }

    nav img {
        height: 60px;
    }

    nav .brand {
        font-size: 1.5rem;
        font-weight: 700;
        margin-left: 10px;
        color: #fff;
    }

      
    .container {
        width: 100%;
        max-width: 600px;
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(30px);
    }

    nav .container1 {
        display: flex;
        align-items: center;
        justify-content: space-around;
    
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        color: #2c3e50;
    }

    .form-control, .form-select {
        border-radius: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }

    .form-control:focus, .form-select:focus {
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    .botoes {
        display: flex;
        justify-content: space-between;
    }

    .btn {
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .btn-success {
        background-color: #2ecc71;
        border: none;
    }

    .btn-primary {
        background-color: #3498db;
        border: none;
    }

    .btn-success:hover {
        background-color: #27ae60;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    .btn:focus {
        outline: none;
    }
    a {
        text-decoration: none; /* Remove sublinhado ou (traço azul) */
    }
    footer {
        padding: 5px;
        width: 100%;
        text-align: center;
        color: black;
        margin-top: auto;
    }
</style>

<body>
<nav>
   <div class="container1">
   <a  href="index.php"><div class="brand">Barbearia do Careca</div></a>
   <a  href="index.php"><img src="imagens/logu.webp" alt="Logo"></a>
    </div>
</nav><br><br><br><br><br><br>
    <div class="container mt-3">
        <h2>Criar Agendamento</h2>
        <form action="Preparando_Agendamento.php" method="post">

            <div class="mb-3">
                <label for="data">Data do Agendamento:</label>
                <input type="date" class="form-control" name="data" required>
            </div>

            <div class="mb-3">
                <label for="id_usuario">Cliente:</label>
                <select class="form-select" name="id_usuario" required>
                    <option>Selecione um Cliente</option>
                    <?php
                    $sql = 'SELECT * FROM abc WHERE id_grupo = 3';
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id_usuario']."'>👨‍💼 ".$row['nome']."</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="servico">Escolha o Serviço:</label>
                <select class="form-select" name="servico" id="servico" required>
                    <option value="1">Corte ✂</option>
                    <option value="2">Barba 🧔</option>
                    <option value="3">Corte e Barba</option>
                </select>
            </div>

            <div class="botoes">
                <a href="Cadastrar_Usuarios.php" class="btn btn-success">Novo Cliente</a>
                <a href="index.php" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>

        </form>
    </div>
    <footer>
    &copy; 2024 Barbearia do Careca. Todos os direitos reservados.
</footer>
</body>

</html>
