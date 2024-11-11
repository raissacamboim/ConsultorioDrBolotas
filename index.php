<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultório Dr. Bolota</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
<h1>Bem-vindo ao Sistema de Cadastro</h1>
    </header>

<body>
    <div class="container">
        <h1>Consultório Dr. Bolota</h1>
        <form action="processa_script.php" method="POST">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" required>

            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" required>

            <label for="sexo">Sexo:</label>
            <input type="radio" id="sexo_masculino" name="sexo" value="Masculino" required>
            <label for="sexo_masculino">Masculino</label>
            <input type="radio" id="sexo_feminino" name="sexo" value="Feminino" required>
            <label for="sexo_feminino">Feminino</label>

            <div class="buttons">
                <button type="submit">Avaliar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 - Dr. Bolotas</p>
    </footer>
</body>
</html>