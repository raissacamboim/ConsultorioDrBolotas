<?php
function calcular_idade($data_nascimento) {
    $data_nascimento = new DateTime($data_nascimento);
    $hoje = new DateTime();
    $idade = $hoje->diff($data_nascimento);
    return $idade->y;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];

    $idade = calcular_idade($data_nascimento);

    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $resultado_imc = "Abaixo do Peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $resultado_imc = "Peso Normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $resultado_imc = "Obesidade I";
    } elseif ($imc >= 30 && $imc < 39.9) {
        $resultado_imc = "Obesidade II";
    } else {
        $resultado_imc = "Obesidade III (Mórbida)";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Avaliação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado da Avaliação</h1>
        <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
        <p><strong>Idade:</strong> <?= $idade ?> anos</p>
        <p><strong>Sexo:</strong> <?= $sexo ?></p>
        <p><strong>IMC:</strong> <?= number_format($imc, 2, ',', '.') ?></p>
        <p><strong>Resultado:</strong> <?= $resultado_imc ?></p>

        <h2>Tabela de Resultados de IMC</h2>
        <table>
            <tr>
                <th>Faixa de IMC</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>Abaixo de 18,5</td>
                <td>Abaixo do Peso</td>
            </tr>
            <tr>
                <td>18,5 - 24,9</td>
                <td>Peso Normal</td>
            </tr>
            <tr>
                <td>25,0 - 29,9</td>
                <td>Obesidade I</td>
            </tr>
            <tr>
                <td>30,0 - 39,9</td>
                <td>Obesidade II</td>
            </tr>
            <tr>
                <td>Acima de 40</td>
                <td>Obesidade III (Mórbida)</td>
            </tr>
        </table>

        <a href="index.php"><button>Voltar</button></a>
    </div>
    <footer>
        <p>&copy; 2024 - Dr. Bolotas</p>
    </footer>
</body>
</html>