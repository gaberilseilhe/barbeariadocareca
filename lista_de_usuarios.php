<?php
include "conexao.php";
$sql = "SELECT * FROM abc";
$result = $conn->query($sql);

$grupos = [1 => "Administrador", 2 => "Barbeiro", 3 => "Clientes"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Usuários</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
        body {
            background-color: #121212; /* Fundo preto */
            color: #ffffff; /* Texto branco */
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            margin: 20px 0;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            border-radius: 10px; /* Cantos arredondados na tabela */
            overflow: hidden; /* Para ocultar as bordas arredondadas */
        }

        th, td {
            border: 1px solid #444; /* Borda cinza */
            padding: 15px; /* Mais espaço interno */
            text-align: left;
            border-radius: 8px; /* Cantos arredondados nas células */
        }

        th {
            background-color: #1e1e1e; /* Cinza escuro */
        }

        tr:nth-child(even) {
            background-color: #2a2a2a; /* Cinza claro */
        }

        tr:hover {
            background-color: #333; /* Destaque ao passar o mouse */
        }

        .btn-voltar {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #444; /* Botão cinza */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-voltar:hover {
            background-color: #555; /* Destaque ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h1>Lista de Usuários</h1>           
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Grupo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row['id_usuario']."</td>
                            <td>".$row['nome']."</td>
                            <td>".(isset($grupos[$row['id_grupo']]) ? $grupos[$row['id_grupo']] : 'Grupo desconhecido')."</td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn-voltar">Voltar</a>
    </div>
</body>
</html>
