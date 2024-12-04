<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Barbearia do Careca</title>
    <style>
        body {
            font-family: 'MedievalSharp', serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            color: #333;
        }

        .imagem {
            filter: blur(10px);
            height: 100vh;
            z-index: -2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        nav {
            background-color: #6a3e36;
            padding: 10px 0;
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
            border: 2px solid #ffd700;
            border-radius: 50%;
        }

        .card {
            background-color: #d7c297;
            color: #6a3e36;
            max-width: 300px;
            border: 3px solid #6a3e36;
            border-radius: 10px;
            overflow: hidden;
            margin: 10px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-header {
            background-color: #6a3e36;
            color: #ffd700;
            text-align: center;
            font-weight: bold;
            padding: 10px 0;
            border-bottom: 3px solid #9c6d4f;
        }

        .card-body img {
            max-width: 80%;
            border: 2px solid #6a3e36;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .card-title {
            margin-top: 1rem;
            font-size: 1.25rem;
            text-align: center;
            color: #6a3e36;
        }

        .cards {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            flex-grow: 1;
        }
        footer {
    padding: 5px;
    width: 100%;
    text-align: center;
    color: #ffd700;
    margin-top: auto;
    background-color: #6a3e36;
}

        .alert-message {
            display: none;
            position: fixed;
            top: 120px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #ffd700;
            color: #6a3e36;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            font-family: 'MedievalSharp', serif;
            z-index: 1000;
        }
    </style>
</head>
<body>
<img class="imagem" src="imagens/barbeariafoto.jpeg" alt="Logo">
<div id="alertMessage" class="alert-message">Formulário enviado com sucesso!</div>
<nav>
    <div class="container">
        <div class="brand">Barbearia do Careca</div>
        <img src="imagens/logu.webp" alt="Logo">
    </div>
</nav>
<br><br><br><br><br><br>
<div class="container">
    <div class="cards">
        <div class="card">
            <div class="card-header">Crie uma conta</div>
            <a href="Cadastrar_Usuarios.php" class="btn">
                <div class="card-body">
                    <img src="imagens/registro.png" alt="Registro">
                    <h5 class="card-title">Registre-se</h5>
                </div>
            </a>
        </div>
        <div class="card">
            <div class="card-header">Agendar</div>
            <a href="Cadastrar_Agenda.php" class="btn">
                <div class="card-body">
                    <img src="imagens/agenda.png" alt="Agenda">
                    <h5 class="card-title">Nossos barbeiros são de qualidade!</h5>
                </div>
            </a>
        </div>
        <div class="card">
            <div class="card-header">Criar agendamento</div>
            <a href="Cadastrar_Agendamento.php" class="btn">
                <div class="card-body">
                    <img src="imagens/R.png" alt="Admin">
                    <h5 class="card-title">(Somente para admins)</h5>
                </div>
            </a>
        </div>
    </div>
</div>
<br><br><br>
<footer>
    &copy; 2024 Barbearia do Careca. Todos os direitos reservados.
</footer>
<script>
if (localStorage.getItem('exibirAlerta') === 'true') {
    var alertMessage = document.getElementById('alertMessage');
    alertMessage.style.display = 'block';
    setTimeout(function() {
        alertMessage.style.display = 'none';
    }, 2000);
    localStorage.removeItem('exibirAlerta');
}
</script>

</body>

</html>