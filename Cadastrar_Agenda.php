<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Cadastro da Agenda do Barbeiro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'MedievalSharp', serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            color: #333;
            background-color: #f5e5b1;
        }

        nav {
            background-color: #6a3e36;
            padding: 10px 0;
            border-bottom: 3px solid #9c6d4f;
        }

        nav .container1 {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        nav .brand {
            font-size: 2rem;
            font-weight: bold;
            color: #ffd700;
        }

        nav img {
            height: 60px;
            border: 2px solid #ffd700;
            border-radius: 50%;
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

        h2 {
            text-align: center;
            color: #6a3e36;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #6a3e36;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #6a3e36;
            padding: 10px;
            margin-bottom: 20px;
        }

        .form-control:focus, .form-select:focus {
            border-color: #ffd700;
            box-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
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
            border: 2px solid #6a3e36;
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

        footer {
            padding: 5px;
            width: 100%;
            text-align: center;
            color: #ffd700;
            margin-top: auto;
            background-color: #6a3e36;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<nav>
   <div class="container1">
       <a href="index.php"><div class="brand">Barbearia do Careca</div></a>
       <a href="index.php"><img src="imagens/logu.webp" alt="Logo"></a>
    </div>
</nav><br><br>
    <div class="container mt-3">
        <h2>Cadastro da Agenda do Barbeiro</h2>
        <form action="DadosAgenda.php" method="post">

            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Barbeiro
                </label>
                <select class="form-select" name="id_usuario">
                    <option>Selecione um barbeiro</option>
                    <?php
                    $sql = 'SELECT * FROM abc WHERE id_grupo = 2';
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='".$row['id_usuario']."'>🤵 ".$row['nome']."</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label class="form-check-label">
                    Dia da semana
                </label>
                <select class="form-select" name="dia_da_semana">
                    <option>Selecione o dia da semana</option>
                    <option value="0">📅 Domingo</option>
                    <option value="1">📅 Segunda-feira</option>
                    <option value="2">📅 Terça-feira</option>
                    <option value="3">📅 Quarta-feira</option>
                    <option value="4">📅 Quinta-feira</option>
                    <option value="5">📅 Sexta-feira</option>
                    <option value="6">📅 Sábado</option>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_inicio">Horário início:</label>
                <input type="time" class="form-control" name="horario_inicio">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_saida_intervalo">Horário saída intervalo:</label>
                <input type="time" class="form-control" name="horario_saida_intervalo">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_volta_intervalo">Horário volta intervalo:</label>
                <input type="time" class="form-control" name="horario_volta_intervalo">
            </div>

            <div class="mb-3 mt-3">
                <label for="horario_fim">Horário fim:</label>
                <input type="time" class="form-control" name="horario_fim">
            </div>

            <div class="botoes">
                <a href="index.php" class="btn btn-primary">Voltar</a>
                <button onclick="enviarAlerta()" type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <footer>
    &copy; 2024 Barbearia do Careca. Todos os direitos reservados.
</footer>
<script>
        function enviarAlerta() {
            localStorage.setItem('exibirAlerta', 'true');
        }
</script>
</body>
</html>