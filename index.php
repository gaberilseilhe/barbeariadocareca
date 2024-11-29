<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - careca</title>
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

        nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
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

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #fff;
        }

        .card {
            background-color: rgb(153, 140, 140);
            color: white;
            max-width: 300px;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
            margin: 10px;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-header {
            background-color: #444;
            text-align: center;
            font-weight: bold;
            padding: 10px 0;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .card-title {
            color: white;
            margin-top: 1rem;
        }

        .button-container {
            margin-top: 20px;
        }

        .cards {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            flex-grow: 1;
        }

        a.btn {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
        }

        a.btn img {
            max-width: 100%;
            height: auto;
        }

        footer {
        padding: 5px;
        width: 100%;
        text-align: center;
        color: black;
        margin-top: auto;
    }
    .alert-message {
            display: none;
            position: fixed;
            top: 120px; /* Ajuste a distância do topo */
            left: 50%; /* Posiciona horizontalmente no meio */
            transform: translateX(-50%); /* Centraliza o elemento */
            background-color: #4caf50; /* Cor de fundo verde */
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            z-index: 1000;
        }
    
    </style>
</head>
<body>
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
