<?php
include "conexao.php";
$sql = "SELECT * FROM abc";
$result = $conn->query($sql);

$grupos = [1 => "Administrador", 2 => "Barbeiro", 3 => "Clientes"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Lista de Usuários</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
  <style>
        body {
            font-family: 'MedievalSharp', serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f5e5b1;
            color: #333;
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

        h1 {
            text-align: center;
            color: #6a3e36;
            font-size: 2.5rem;
            margin: 20px 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        td {
            padding: 15px;
            text-align: left;
            border: 1px solid #9c6d4f;
        }

        th {
            background-color: #6a3e36;
            color: #ffd700;
            text-transform: uppercase;
            padding: 15px;
            text-align: left;
            border: 1px solid #9c6d4f;
        }

        tr:nth-child(even) {
            background-color: #f5e5b1;
        }

        tr:nth-child(odd) {
            background-color: #ffe9c6;
        }

        tr:hover {
            background-color: #ffd700;
            color: #6a3e36;
        }

        .btn-excluir {
            background-color: #c0392b; /* Vermelho */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-excluir:hover {
            background-color: #a93226;
        }

        .btn-voltar {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #6a3e36;
            color: #ffd700;
            text-decoration: none;
            border-radius: 15px;
            border: 2px solid #9c6d4f;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-voltar:hover {
            background-color: #9c6d4f;
        }

        footer {
            padding: 10px;
            width: 100%;
            text-align: center;
            color: #ffd700;
            background-color: #6a3e36;
            margin-top: auto;
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
</nav>
<div class="container mt-3">
    <h1>Lista de Usuários</h1>           
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Grupo</th>
                <th>Ação</th>
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
                        <td>
                            <form action='excluir.php' method='post' style='display: inline;'>
                                <input type='hidden' name='id_usuario' value='".$row['id_usuario']."'>
                                <button type='submit' class='btn-excluir'>Excluir</button>
                            </form>
                        </td>
                    </tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <a href="index.php" class="btn-voltar">Voltar</a>
</div>
<footer>
    &copy; 2024 Barbearia do Careca. Todos os direitos reservados.
</footer>
</body>
</html>
