<?php
include "conexao.php";
echo "<pre>";
print_r($_POST);

$dia_da_semana = $_POST['dia_da_semana'];
$id_usuario = $_POST['id_usuario'];
$horario_inicio = strtotime($_POST['horario_inicio']);
$horario_saida_intervalo = strtotime($_POST['horario_saida_intervalo']);
$mins = ($horario_inicio - $horario_saida_intervalo) / 60;

if($mins < 0)
    $mins = $mins*(-1);
//echo $mins;

$qnt_de_agendamento = $mins/30;

//echo "<br> qnt: $qnt_de_agendamento";
$acumulado = $horario_inicio;

echo "<h1>Geração de agendamentos do primeiro horário!</h1>";
for($i = 0; $i < $qnt_de_agendamento; $i++){

    echo "\n Criado agendamento no horario para: " . date('H:i', $acumulado);
    $horario_inicio = date('H:i', $acumulado);
    $acumulado = $acumulado + 1800;
    $sql = "INSERT INTO agenda (id_usuario, dia_da_semana, horario_inicio)
    VALUES ('$id_usuario', '$dia_da_semana', '$horario_inicio')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = 'select * from agenda';
$result = $conn->query($sql);
}

$horario_inicio = strtotime($_POST['horario_volta_intervalo']);
$horario_saida_intervalo = strtotime($_POST['horario_fim']);
$mins = ($horario_saida_intervalo - $horario_inicio) / 60;

if($mins < 0)
    $mins = $mins*(-1);

$qnt_de_agendamentos = $mins/30;

$acumulado = $horario_inicio;
echo "<h1>Geração de agendamentos do segundo horário!</h1>";
for($i = 0; $i < $qnt_de_agendamentos; $i++){
  echo "\n Criando agendamento no horário " . date('H:i', $acumulado);
  $horario_inicio = date('H:i', $acumulado);
  $acumulado = $acumulado + 1800;
$sql = "INSERT INTO agenda (id_usuario, dia_da_semana, horario_inicio)
    VALUES ('$id_usuario', '$dia_da_semana', '$horario_inicio')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = 'select * from agenda';
$result = $conn->query($sql);
}

?>