<?php
include "conexao.php";

$dias_da_semana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

$data_agendamento = $_POST['data'];  // Data do agendamento enviada pelo formulário
$servico = $_POST['servico'];

$dayofweek = date('w', strtotime($data_agendamento));
$sql = "
SELECT 
abc.nome, agenda.dia_da_semana, agenda.horario_inicio, agenda.id_agenda, abc.id_usuario 
FROM agenda
INNER JOIN abc ON abc.id_usuario = agenda.id_usuario
WHERE agenda.dia_da_semana = $dayofweek
AND agenda.id_agenda NOT IN (
    SELECT agenda.id_agenda 
    FROM agendamentos 
    INNER JOIN agenda ON agendamentos.id_agenda = agenda.id_agenda
    WHERE agendamentos.data = '$data_agendamento'
)
ORDER BY agenda.horario_inicio
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Lista de Agendamentos</title>
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
            background: linear-gradient(135deg, #f5e5b1, #f9f4e8);
            color: #333;
        }
        
        nav {
            background-color: #6a3e36;
            padding: 15px 0;
            border-bottom: 3px solid #9c6d4f;
        }

        nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .brand {
            font-size: 2rem;
            font-weight: bold;
            color: #ffd700;
        }

        nav img {
            height: 60px;
            border-radius: 50%;
            border: 2px solid #ffd700;
        }

        h1 {
            color: #6a3e36;
            text-align: center;
            margin-top: 30px;
            font-size: 2.5rem;
        }

        table {
            margin-top: 30px;
            width: 100%;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        th {
            background-color: #6a3e36;
            color: white;
            font-size: 1.2rem;
            text-align: center;
            padding: 15px;
        }

        td {
            font-size: 1rem;
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }

        .btn {
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            border: 2px solid #6a3e36;
            background-color: #3498db;
            color: white;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .no-data {
            font-style: italic;
            color: #6c757d;
            text-align: center;
        }

        footer {
            padding: 15px;
            width: 100%;
            text-align: center;
            color: #ffd700;
            background-color: #6a3e36;
            margin-top: auto;
        }

        footer a {
            color: #ffd700;
        }

        .table-hover tbody tr:hover {
            background-color: #f1e6d7;
            cursor: pointer;
        }

        .table-responsive {
            overflow-x: auto;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav>
    <div class="container">
        <a href="index.php"><div class="brand">Barbearia do Careca</div></a>
        <a href="index.php"><img src="imagens/logoo.jpg" alt="Logo"></a>
    </div>
</nav>

<div class="container">
    <h1><i class="fas fa-calendar-alt"></i> Lista de Agendamentos</h1>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Barbeiro</th>
                    <th>Dia da Semana</th>
                    <th>Horários</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>".$row['nome']."</td>
                            <td>".$dias_da_semana[$row['dia_da_semana']]."</td>
                            <td>".$row['horario_inicio']."</td>
                            <td>
                                <input type='hidden' name='id_usuario' value='".$row['id_usuario']."'>
                                <input type='hidden' name='id_agenda' value='".$row['id_agenda']."'>
                                <input type='hidden' name='data' value='$data_agendamento'>
                                <a href='insert_agendamento.php?id_agenda=".$row['id_agenda']."&data=".$data_agendamento."&id_usuario=".$row['id_usuario']."&id_servico=".$servico."'>
                                    <button type='button' class='btn'>Agendar</button>
                                </a>
                            </td>
                        </tr>
                        ";
                    }
                } else {
                    echo "<tr><td colspan='4' class='no-data'>Não há agendamentos disponíveis para essa data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<footer>
    &copy; 2024 Barbearia do Careca. Todos os direitos reservados.
</footer>

</body>
</html>
