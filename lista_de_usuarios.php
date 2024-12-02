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
        font-family: 'Roboto', sans-serif;
        margin: 0;
        display: flex;
        flex-direction: column;
        height: 100vh;
        text-align:center;
        background-size: cover;
        background-position: center;
        color: #111;
        background-image: linear-gradient(170deg, black, white);
    }

       
    .container {
        width: 100%;
        max-width: 800px;
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(30px);
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<br><br><br><br><br><br>
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
                            <td>🤵".$row['nome']."</td>
                            <td>".(isset($grupos[$row['id_grupo']]) ? $grupos[$row['id_grupo']] : 'Grupo desconhecido')."</td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Voltar</a>

    </div>
</body>
</html>
