<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ficha de Cadastro Barbeiro</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<style>
  .esc {
  display: none;
}
    body {
        font-family: 'MedievalSharp', serif;
        margin: 0;
        display: flex;
        flex-direction: column;
        height: 100vh;
        background-size: cover;
        background-position: center;
        color: #333;
        background-image: linear-gradient(170deg, #6a3e36, #d7c297);
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

    h2, label {
        text-align: center;
        color: #6a3e36;
        font-weight: bold;
    }

    .radio-group {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn {
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: 600;
        transition: background-color 0.3s ease;
        color: #fff;
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
        text-decoration: none;
    }

    footer {
        padding: 5px;
        width: 100%;
        text-align: center;
        color: #ffd700;
        margin-top: auto;
        background-color: #6a3e36;
    }

</style>
<body>
<nav>
   <div class="container1">
   <a href="index.php"><div class="brand">Barbearia do Careca</div></a>
   <a href="index.php"><img src="imagens/logu.webp" alt="Logo"></a>
    </div>
</nav><br>
<div class="container mt-3">
  <h2>Cadastro de usuários</h2>
  <form action="DadosFormulario.php" method="POST">
    <input type="hidden" id="id_grupo" name="id_grupo" value="">

    <div class="mb-3 mt-3" id="group">
    <label class="radio-group form-check-label">Grupo do Usuário:</label>
    <div class="radio-group">
        <div>
            <input type="radio" id="grupo1" name="grupo" value="1" onclick="info()">
            <label for="grupo1">Admin</label>
        </div>
        <div>
            <input type="radio" id="grupo2" name="grupo" value="2" onclick="info()">
            <label for="grupo2">Barbeiro</label>
        </div>
        <div>
            <input type="radio" id="grupo3" name="grupo" value="3" onclick="info()">
            <label for="grupo3">Cliente</label>
        </div>
    </div>
</div>

    <div class="mb-3 mt-3">
      <label for="nome">Nome de Usuário:</label>
      <input id="nome" name="nome" class="form-control" type="text" required>
    </div>
    
    <div id="email" class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input id="email" name="email" class="form-control" type="email" required>
    </div>
    
    <div id="data_de_nascimento" class="mb-3 mt-3">
      <label for="data_de_nascimento">Data de Nascimento:</label>
      <input id="data_de_nascimento" name="data_de_nascimento" class="form-control" type="date" required>
    </div>
    
    <div id="banco" class="mb-3 mt-3">
      <label for="nome_banco">Nome do Banco:</label>
      <select id="nome_banco" name="nome_banco" class="form-control"></select>
    </div>
    
    <div id="numero_agencia" class="mb-3 mt-3">
      <label for="numero_agencia">Número da Agência:</label>
      <input id="numero_agencia" name="numero_agencia" class="form-control" type="text">
    </div>
    
    <div id="numero_conta" class="mb-3 mt-3">
      <label for="numero_conta">Número da Conta:</label>
      <input id="numero_conta" name="numero_conta" class="form-control" type="text">
    </div>
    
    <div id="chave_pix" class="mb-3 mt-3">
      <label for="chave_pix">Chave Pix:</label>
      <input id="chave_pix" name="chave_pix" class="form-control" type="text">
    </div>
    
    <div class="d-flex justify-content-between mt-3">
      <a href="index.php" class="btn btn-primary">Voltar</a>
      <a href="Cadastrar_Usuarios.php" class="btn btn-success">Recarregar</a>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    <script>

  function info() {
    // Obtém o valor do grupo selecionado
    const grupo = document.querySelector('input[name="grupo"]:checked').value;
    document.getElementById("id_grupo").value = grupo; // Atualiza o valor do campo oculto

    switch(grupo) {
        case "1":
          document.getElementById("group").className = "esc";
            document.getElementById("banco").className = "esc";
            document.getElementById("numero_conta").className = "esc";
            document.getElementById("numero_agencia").className = "esc";
            document.getElementById("chave_pix").className = "esc";

            break;
        case "2":
            document.getElementById("group").className = "esc";
           
            break;
        case "3":
          document.getElementById("group").className = "esc";
            document.getElementById("banco").className = "esc";
            document.getElementById("numero_conta").className = "esc";
            document.getElementById("numero_agencia").className = "esc";
            
            break;
        default:
            alert("Opção inválida");
    }
}



  const bancos = [
  {
    "value": "Banco do Brasil S.A.",
    "label": "💲 Banco do Brasil S.A."
  },
  {
    "value": "Banco da Amazônia S.A.",
    "label": "💲 Banco da Amazônia S.A."
  },
  {
    "value": "Banco do Nordeste do Brasil S.A.",
    "label": "💲 Banco do Nordeste do Brasil S.A."
  },
  {
    "value": "Banco Nacional de Desenvolvimento Econômico e Social BNDES",
    "label": "💲 Banco Nacional de Desenvolvimento Econômico e Social BNDES"
  },
  {
    "value": "Credicoamo Crédito Rural Cooperativa",
    "label": "💲 Credicoamo Crédito Rural Cooperativa"
  },
  {
    "value": "Credit Suisse Hedging-Griffo Corretora de Valores S.A.",
    "label": "💲 Credit Suisse Hedging-Griffo Corretora de Valores S.A."
  },
  {
    "value": "Banco Inbursa S.A.",
    "label": "💲 Banco Inbursa S.A."
  },
  {
    "value": "Natixis Brasil S.A. Banco Múltiplo",
    "label": "💲 Natixis Brasil S.A. Banco Múltiplo"
  },
  {
    "value": "UBS Brasil Corretora de Câmbio, Títulos e Valores Mobiliários S.A.",
    "label": "💲 UBS Brasil Corretora de Câmbio, Títulos e Valores Mobiliários S.A."
  },
  {
    "value": "Coop de Créd. Mútuo dos Despachantes de Trânsito de SC e Rio Grande do Sul",
    "label": "💲 Coop de Créd. Mútuo dos Despachantes de Trânsito de SC e Rio Grande do Sul"
  },
  {
    "value": "BNY Mellon Banco S.A.",
    "label": "💲 BNY Mellon Banco S.A."
  },
  {
    "value": "Banco Tricury S.A.",
    "label": "💲 Banco Tricury S.A."
  },
  {
    "value": "Banestes S.A. Banco do Estado do Espírito Santo",
    "label": "💲 Banestes S.A. Banco do Estado do Espírito Santo"
  },
  {
    "value": "Banco Bandepe S.A.",
    "label": "💲 Banco Bandepe S.A."
  },
  {
    "value": "Banco Alfa S.A.",
    "label": "💲 Banco Alfa S.A."
  },
  {
    "value": "Banco Itaú Consignado S.A.",
    "label": "💲 Banco Itaú Consignado S.A."
  },
  {
    "value": "Banco Santander (Brasil) S. A.",
    "label": "💲 Banco Santander (Brasil) S. A."
  },
  {
    "value": "Banco Bradesco BBI S.A.",
    "label": "💲 Banco Bradesco BBI S.A."
  },
  {
    "value": "Banco do Estado do Pará S.A.",
    "label": "💲 Banco do Estado do Pará S.A."
  },
  {
    "value": "Banco Cargill S.A.",
    "label": "💲 Banco Cargill S.A."
  },
  {
    "value": "Banco do Estado do Rio Grande do Sul S.A.",
    "label": "💲 Banco do Estado do Rio Grande do Sul S.A."
  },
  {
    "value": "Banco do Estado de Sergipe S.A.",
    "label": "💲 Banco do Estado de Sergipe S.A."
  },
  {
    "value": "Confidence Corretora de Câmbio S.A.",
    "label": "💲 Confidence Corretora de Câmbio S.A."
  },
  {
    "value": "Hipercard Banco Múltiplo S.A.",
    "label": "💲 Hipercard Banco Múltiplo S.A."
  },
  {
    "value": "Banco Bradescard S.A.",
    "label": "💲 Banco Bradescard S.A."
  },
  {
    "value": "Goldman Sachs do Brasil Banco Múltiplo S. A.",
    "label": "💲 Goldman Sachs do Brasil Banco Múltiplo S. A."
  },
  {
    "value": "Banco AndBank (Brasil) S.A.",
    "label": "💲 Banco AndBank (Brasil) S.A."
  },
  {
    "value": "Banco Morgan Stanley S. A.",
    "label": "💲 Banco Morgan Stanley S. A."
  },
  {
    "value": "Banco Crefisa S.A.",
    "label": "💲 Banco Crefisa S.A."
  },
  {
    "value": "Banco de Brasília S.A.",
    "label": "💲 Banco de Brasília S.A."
  },
  {
    "value": "Banco J. Safra S.A.",
    "label": "💲 Banco J. Safra S.A."
  },
  {
    "value": "Banco ABN Amro S.A.",
    "label": "💲 Banco ABN Amro S.A."
  },
  {
    "value": "Banco KDB do Brasil S.A.",
    "label": "💲 Banco KDB do Brasil S.A."
  },
  {
    "value": "Banco Inter S.A.",
    "label": "💲 Banco Inter S.A."
  },
  {
    "value": "Haitong Banco de Investimento do Brasil S.A.",
    "label": "💲 Haitong Banco de Investimento do Brasil S.A."
  },
  {
    "value": "Banco Original do Agronegócio S.A.",
    "label": "💲 Banco Original do Agronegócio S.A."
  },
  {
    "value": "BT Corretora de Câmbio Ltda.",
    "label": "💲 BT Corretora de Câmbio Ltda."
  },
  {
    "value": "BBN Banco Brasileiro de Negocios S.A.",
    "label": "💲 BBN Banco Brasileiro de Negocios S.A."
  },
  {
    "value": "Banco Topazio S.A.",
    "label": "💲 Banco Topazio S.A."
  },
  {
    "value": "Banco da China Brasil S.A.",
    "label": "💲 Banco da China Brasil S.A."
  },
  {
    "value": "Uniprime Norte do Paraná - Cooperativa de Crédito Ltda.",
    "label": "💲 Uniprime Norte do Paraná - Cooperativa de Crédito Ltda."
  },
  {
    "value": "Cooperativa Central de Crédito Urbano - Cecred",
    "label": "💲 Cooperativa Central de Crédito Urbano - Cecred"
  },
  {
    "value": "Cooperativa de Crédito Rural da Região da Mogiana",
    "label": "💲 Cooperativa de Crédito Rural da Região da Mogiana"
  },
  {
    "value": "Central de Cooperativas de Economia e Crédito Mútuo do Est RS - Unicred",
    "label": "💲 Central de Cooperativas de Economia e Crédito Mútuo do Est RS - Unicred"
  },
  {
    "value": "BRK S.A. Crédito, Financiamento e Investimento",
    "label": "💲 BRK S.A. Crédito, Financiamento e Investimento"
  },
  {
    "value": "Pólocred Sociedade de Crédito ao Microempreendedor e à Empresa de Pequeno Porte",
    "label": "💲 Pólocred Sociedade de Crédito ao Microempreendedor e à Empresa de Pequeno Porte"
  },
  {
    "value": "Banco Finaxis S.A.",
    "label": "💲 Banco Finaxis S.A."
  },
  {
    "value": "Banco Confidence de Câmbio S.A.",
    "label": "💲 Banco Confidence de Câmbio S.A."
  },
  {
    "value": "Banco BMFBovespa de Serviços de Liquidação e Custódia S/A",
    "label": "💲 Banco BMFBovespa de Serviços de Liquidação e Custódia S/A"
  },
  {
    "value": "Cooperativa Central de Crédito Noroeste Brasileiro Ltda - CentralCredi",
    "label": "💲 Cooperativa Central de Crédito Noroeste Brasileiro Ltda - CentralCredi"
  },
  {
    "value": "Credialiança Cooperativa de Crédito Rural",
    "label": "💲 Credialiança Cooperativa de Crédito Rural"
  },
  {
    "value": "Uniprime Central – Central Interestadual de Cooperativas de Crédito Ltda.",
    "label": "💲 Uniprime Central – Central Interestadual de Cooperativas de Crédito Ltda."
  },
  {
    "value": "Planner Corretora de Valores S.A.",
    "label": "💲 Planner Corretora de Valores S.A."
  },
  {
    "value": "Renascença Distribuidora de Títulos e Valores Mobiliários Ltda.",
    "label": "💲 Renascença Distribuidora de Títulos e Valores Mobiliários Ltda."
  },
  {
    "value": "XP Investimentos Corretora de Câmbio Títulos e Valores Mobiliários S.A.",
    "label": "💲 XP Investimentos Corretora de Câmbio Títulos e Valores Mobiliários S.A."
  },
  {
    "value": "Caixa Econômica Federal",
    "label": "💲 Caixa Econômica Federal"
  },
  {
    "value": "Lecca Crédito, Financiamento e Investimento S/A",
    "label": "💲 Lecca Crédito, Financiamento e Investimento S/A"
  },
  {
    "value": "Unicred do Brasil S.A.",
    "label": "💲 Unicred do Brasil S.A."
  },
  {
    "value": "Multimoney Corretora de Câmbio Ltda",
    "label": "💲 Multimoney Corretora de Câmbio Ltda"
  },
  {
    "value": "Get Money Corretora de Câmbio S.A.",
    "label": "💲 Get Money Corretora de Câmbio S.A."
  },
  {
    "value": "Intesa Sanpaolo Brasil S.A. - Banco Múltiplo",
    "label": "💲 Intesa Sanpaolo Brasil S.A. - Banco Múltiplo"
  },
  {
    "value": "Easynvest - Título Corretora de Valores SA",
    "label": "💲 Easynvest - Título Corretora de Valores SA"
  },
  {
    "value": "Broker Brasil Corretora de Câmbio Ltda.",
    "label": "💲 Broker Brasil Corretora de Câmbio Ltda."
  },
  {
    "value": "Treviso Corretora de Câmbio S.A.",
    "label": "💲 Treviso Corretora de Câmbio S.A."
  },
  {
    "value": "Bexs Banco de Câmbio S.A.",
    "label": "💲 Bexs Banco de Câmbio S.A."
  },
  {
    "value": "Levycam - Corretora de Câmbio e Valores Ltda.",
    "label": "💲 Levycam - Corretora de Câmbio e Valores Ltda."
  },
  {
    "value": "Guitta Corretora de Câmbio Ltda.",
    "label": "💲 Guitta Corretora de Câmbio Ltda."
  },
  {
    "value": "Facta Financeira S.A. - Crédito Financiamento e Investimento",
    "label": "💲 Facta Financeira S.A. - Crédito Financiamento e Investimento"
  },
  {
    "value": "ICAP do Brasil Corretora de Títulos e Valores Mobiliários Ltda.",
    "label": "💲 ICAP do Brasil Corretora de Títulos e Valores Mobiliários Ltda."
  },
  {
    "value": "Casa do Crédito S.A. Sociedade de Crédito ao Microempreendedor",
    "label": "💲 Casa do Crédito S.A. Sociedade de Crédito ao Microempreendedor"
  },
  {
    "value": "Commerzbank Brasil S.A. - Banco Múltiplo",
    "label": "💲 Commerzbank Brasil S.A. - Banco Múltiplo"
  },
  {
    "value": "Banco Olé Bonsucesso Consignado S.A.",
    "label": "💲 Banco Olé Bonsucesso Consignado S.A."
  },
  {
    "value": "Albatross Corretora de Câmbio e Valores S.A",
    "label": "💲 Albatross Corretora de Câmbio e Valores S.A"
  },
  {
    "value": "BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.",
    "label": "💲 BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A."
  },
  {
    "value": "Pernambucanas Financiadora S.A. Crédito, Financiamento e Investimento",
    "label": "💲 Pernambucanas Financiadora S.A. Crédito, Financiamento e Investimento"
  },
  {
    "value": "Guide Investimentos S.A. Corretora de Valores",
    "label": "💲 Guide Investimentos S.A. Corretora de Valores"
  },
  {
    "value": "CM Capital Markets Corretora de Câmbio, Títulos e Valores Mobiliários Ltda.",
    "label": "💲 CM Capital Markets Corretora de Câmbio, Títulos e Valores Mobiliários Ltda."
  },
  {
    "value": "Dacasa Financeira S/A - Sociedade de Crédito, Financiamento e Investimento",
    "label": "💲 Dacasa Financeira S/A - Sociedade de Crédito, Financiamento e Investimento"
  },
  {
    "value": "Socred S.A. - Sociedade de Crédito ao Microempreendedor",
    "label": "💲 Socred S.A. - Sociedade de Crédito ao Microempreendedor"
  },
  {
    "value": "Banco Itaú BBA S.A.",
    "label": "💲 Banco Itaú BBA S.A."
  },
  {
    "value": "Ativa Investimentos S.A. Corretora de Títulos Câmbio e Valores",
    "label": "💲 Ativa Investimentos S.A. Corretora de Títulos Câmbio e Valores"
  },
  {
    "value": "HS Financeira S/A Crédito, Financiamento e Investimentos",
    "label": "💲 HS Financeira S/A Crédito, Financiamento e Investimentos"
  },
  {
    "value": "Cooperativa de Economia e Crédito Mútuo dos Servidores Públicos Estaduais do Rio",
    "label": "💲 Cooperativa de Economia e Crédito Mútuo dos Servidores Públicos Estaduais do Rio"
  },
  {
    "value": "Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.",
    "label": "💲 Nova Futura Corretora de Títulos e Valores Mobiliários Ltda."
  },
  {
    "value": "Parmetal Distribuidora de Títulos e Valores Mobiliários Ltda.",
    "label": "💲 Parmetal Distribuidora de Títulos e Valores Mobiliários Ltda."
  },
  {
    "value": "Fair Corretora de Câmbio S.A.",
    "label": "💲 Fair Corretora de Câmbio S.A."
  },
  {
    "value": "Stone Pagamentos S.A.",
    "label": "💲 Stone Pagamentos S.A."
  },
  {
    "value": "Banco Bradesco Cartões S.A.",
    "label": "💲 Banco Bradesco Cartões S.A."
  },
  {
    "value": "Banco BTG Pactual S.A.",
    "label": "💲 Banco BTG Pactual S.A."
  },
  {
    "value": "Banco Original S.A.",
    "label": "💲 Banco Original S.A."
  },
  {
    "value": "Banco Arbi S.A.",
    "label": "💲 Banco Arbi S.A."
  },
  {
    "value": "Banco John Deere S.A.",
    "label": "💲 Banco John Deere S.A."
  },
  {
    "value": "Banco BS2 S.A.",
    "label": "💲 Banco BS2 S.A."
  },
  {
    "value": "Banco Credit Agrícole Brasil S.A.",
    "label": "💲 Banco Credit Agrícole Brasil S.A."
  },
  {
    "value": "Banco Fibra S.A.",
    "label": "💲 Banco Fibra S.A."
  },
  {
    "value": "Banco Cifra S.A.",
    "label": "💲 Banco Cifra S.A."
  },
  {
    "value": "Banco Bradesco S.A.",
    "label": "💲 Banco Bradesco S.A."
  },
  {
    "value": "Banco Clássico S.A.",
    "label": "💲 Banco Clássico S.A."
  },
  {
    "value": "Banco Máxima S.A.",
    "label": "💲 Banco Máxima S.A."
  },
  {
    "value": "Banco ABC Brasil S.A.",
    "label": "💲 Banco ABC Brasil S.A."
  },
  {
    "value": "Banco Investcred Unibanco S.A.",
    "label": "💲 Banco Investcred Unibanco S.A."
  },
  {
    "value": "BCV - Banco de Crédito e Varejo S/A",
    "label": "💲 BCV - Banco de Crédito e Varejo S/A"
  },
  {
    "value": "Bexs Corretora de Câmbio S/A",
    "label": "💲 Bexs Corretora de Câmbio S/A"
  },
  {
    "value": "Parana Banco S. A.",
    "label": "💲 Parana Banco S. A."
  },
  {
    "value": "Nu Pagamentos S.A.",
    "label": "💲 Nu Pagamentos S.A."
  },
  {
    "value": "Banco Fator S.A.",
    "label": "💲 Banco Fator S.A."
  },
  {
    "value": "Banco Cédula S.A.",
    "label": "💲 Banco Cédula S.A."
  },
  {
    "value": "Barigui Companhia Hipotecária",
    "label": "💲 Barigui Companhia Hipotecária"
  },
  {
    "value": "HSBC Brasil S.A. Banco de Investimento",
    "label": "💲 HSBC Brasil S.A. Banco de Investimento"
  },
  {
    "value": "IB Corretora de Câmbio, Títulos e Valores Mobiliários Ltda.",
    "label": "💲 IB Corretora de Câmbio, Títulos e Valores Mobiliários Ltda."
  },
  {
    "value": "Banco de la Nacion Argentina",
    "label": "💲 Banco de la Nacion Argentina"
  },
  {
    "value": "Banco BMG S.A.",
    "label": "💲 Banco BMG S.A."
  },
  {
    "value": "China Construction Bank (Brasil) Banco Múltiplo S/A",
    "label": "💲 China Construction Bank (Brasil) Banco Múltiplo S/A"
  },
  {
    "value": "Itaú Unibanco  S.A.",
    "label": "💲 Itaú Unibanco  S.A."
  },
  {
    "value": "Banco Société Générale Brasil S.A.",
    "label": "💲 Banco Société Générale Brasil S.A."
  },
  {
    "value": "Banco Mizuho do Brasil S.A.",
    "label": "💲 Banco Mizuho do Brasil S.A."
  },
  {
    "value": "Banco J. P. Morgan S. A.",
    "label": "💲 Banco J. P. Morgan S. A."
  },
  {
    "value": "Banco Mercantil do Brasil S.A.",
    "label": "💲 Banco Mercantil do Brasil S.A."
  },
  {
    "value": "Banco Bradesco Financiamentos S.A.",
    "label": "💲 Banco Bradesco Financiamentos S.A."
  },
  {
    "value": "Kirton Bank S.A. - Banco Múltiplo",
    "label": "💲 Kirton Bank S.A. - Banco Múltiplo"
  },
  {
    "value": "Banco Capital S. A.",
    "label": "💲 Banco Capital S. A."
  },
  {
    "value": "Banco Safra S.A.",
    "label": "💲 Banco Safra S.A."
  },
  {
    "value": "Banco MUFG Brasil S.A.",
    "label": "💲 Banco MUFG Brasil S.A."
  },
  {
    "value": "Banco Sumitomo Mitsui Brasileiro S.A.",
    "label": "💲 Banco Sumitomo Mitsui Brasileiro S.A."
  },
  {
    "value": "Banco Caixa Geral - Brasil S.A.",
    "label": "💲 Banco Caixa Geral - Brasil S.A."
  },
  {
    "value": "Citibank N.A.",
    "label": "💲 Citibank N.A."
  },
  {
    "value": "Banco ItauBank S.A.",
    "label": "💲 Banco ItauBank S.A."
  },
  {
    "value": "Deutsche Bank S.A. - Banco Alemão",
    "label": "💲 Deutsche Bank S.A. - Banco Alemão"
  },
  {
    "value": "JPMorgan Chase Bank, National Association",
    "label": "💲 JPMorgan Chase Bank, National Association"
  },
  {
    "value": "ING Bank N.V.",
    "label": "💲 ING Bank N.V."
  },
  {
    "value": "Banco de La Republica Oriental del Uruguay",
    "label": "💲 Banco de La Republica Oriental del Uruguay"
  },
  {
    "value": "Banco de La Provincia de Buenos Aires",
    "label": "💲 Banco de La Provincia de Buenos Aires"
  },
  {
    "value": "Banco Credit Suisse (Brasil) S.A.",
    "label": "💲 Banco Credit Suisse (Brasil) S.A."
  },
  {
    "value": "Senso Corretora de Câmbio e Valores Mobiliários S.A.",
    "label": "💲 Senso Corretora de Câmbio e Valores Mobiliários S.A."
  },
  {
    "value": "Banco Luso Brasileiro S.A.",
    "label": "💲 Banco Luso Brasileiro S.A."
  },
  {
    "value": "Banco Industrial do Brasil S.A.",
    "label": "💲 Banco Industrial do Brasil S.A."
  },
  {
    "value": "Banco VR S.A.",
    "label": "💲 Banco VR S.A."
  },
  {
    "value": "Banco Paulista S.A.",
    "label": "💲 Banco Paulista S.A."
  },
  {
    "value": "Banco Guanabara S.A.",
    "label": "💲 Banco Guanabara S.A."
  },
  {
    "value": "Omni Banco S.A.",
    "label": "💲 Omni Banco S.A."
  },
  {
    "value": "Banco Pan S.A.",
    "label": "💲 Banco Pan S.A."
  },
  {
    "value": "Banco Ficsa S. A.",
    "label": "💲 Banco Ficsa S. A."
  },
  {
    "value": "Banco Intercap S.A.",
    "label": "💲 Banco Intercap S.A."
  },
  {
    "value": "Banco Rendimento S.A.",
    "label": "💲 Banco Rendimento S.A."
  },
  {
    "value": "Banco Triângulo S.A.",
    "label": "💲 Banco Triângulo S.A."
  },
  {
    "value": "Banco Sofisa S. A.",
    "label": "💲 Banco Sofisa S. A."
  },
  {
    "value": "Banco Alvorada S.A.",
    "label": "💲 Banco Alvorada S.A."
  },
  {
    "value": "Banco Pine S.A.",
    "label": "💲 Banco Pine S.A."
  },
  {
    "value": "Itaú Unibanco Holding S.A.",
    "label": "💲 Itaú Unibanco Holding S.A."
  },
  {
    "value": "Banco Indusval S. A.",
    "label": "💲 Banco Indusval S. A."
  },
  {
    "value": "Banco A. J. Renner S.A.",
    "label": "💲 Banco A. J. Renner S.A."
  },
  {
    "value": "Banco Votorantim S.A.",
    "label": "💲 Banco Votorantim S.A."
  },
  {
    "value": "Banco Daycoval S.A.",
    "label": "💲 Banco Daycoval S.A."
  },
  {
    "value": "Banco Ourinvest S.A.",
    "label": "💲 Banco Ourinvest S.A."
  },
  {
    "value": "Banif - Bco Internacional do Funchal (Brasil) S.A.",
    "label": "💲 Banif - Bco Internacional do Funchal (Brasil) S.A."
  },
  {
    "value": "Banco Neon S.A.",
    "label": "💲 Banco Neon S.A."
  },
  {
    "value": "Banco Cetelem S.A.",
    "label": "💲 Banco Cetelem S.A."
  },
  {
    "value": "Banco Ribeirão Preto S.A.",
    "label": "💲 Banco Ribeirão Preto S.A."
  },
  {
    "value": "Banco Semear S.A.",
    "label": "💲 Banco Semear S.A."
  },
  {
    "value": "Banco Citibank S.A.",
    "label": "💲 Banco Citibank S.A."
  },
  {
    "value": "Banco Modal S.A.",
    "label": "💲 Banco Modal S.A."
  },
  {
    "value": "Banco Rabobank International Brasil S.A.",
    "label": "💲 Banco Rabobank International Brasil S.A."
  },
  {
    "value": "Banco Cooperativo Sicredi S. A.",
    "label": "💲 Banco Cooperativo Sicredi S. A."
  },
  {
    "value": "Scotiabank Brasil S.A. Banco Múltiplo",
    "label": "💲 Scotiabank Brasil S.A. Banco Múltiplo"
  },
  {
    "value": "Banco BNP Paribas Brasil S.A.",
    "label": "💲 Banco BNP Paribas Brasil S.A."
  },
  {
    "value": "Novo Banco Continental S.A. - Banco Múltiplo",
    "label": "💲 Novo Banco Continental S.A. - Banco Múltiplo"
  },
  {
    "value": "Banco Sistema S.A.",
    "label": "💲 Banco Sistema S.A."
  },
  {
    "value": "Bank of America Merrill Lynch Banco Múltiplo S.A.",
    "label": "💲 Bank of America Merrill Lynch Banco Múltiplo S.A."
  },
  {
    "value": "Banco Cooperativo do Brasil S/A - Bancoob",
    "label": "💲 Banco Cooperativo do Brasil S/A - Bancoob"
  },
  {
    "value": "Banco Keb Hana do Brasil S. A.",
    "label": "💲 Banco Keb Hana do Brasil S. A."
  }
];
  const selectElement = document.getElementById("nome_banco");

  bancos.forEach(banco => {
    const option = document.createElement("option");
    option.value = banco.value; // Define o valor
    option.textContent = banco.label; // Define o texto a ser exibido
    selectElement.appendChild(option); // Adiciona a opção ao select
  });
</script>
  </form>
</div>

<footer>
    &copy; 2024 Barbearia do Careca. Todos os direitos reservados.
</footer>

</body>
</html>