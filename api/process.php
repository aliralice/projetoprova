<!DOCTYPE html>
<html>
<head>
    <title>Dados da Reserva</title>
</head>
<body>
    <h1>Dados da Reserva</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>Nome:</strong> " . $_POST["name"] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $_POST["phone"] . "</p>";
        echo "<p><strong>Número de Convidados:</strong> " . $_POST["guests"] . "</p>";
        echo "<p><strong>Tipo de mesa:</strong> " . $_POST["mesatable"] . "</p>";
        echo "<p><strong>Pedido Especial:</strong> " . $_POST["special_requests"] . "</p>";
        echo "<p><strong>Data da Reserva:</strong> " . $_POST["reservation_date"] . "</p>";
        echo "<p><strong>Horário da Reserva:</strong> " . $_POST["reservation_time"] . "</p>";
        echo "<p><strong>Método de Pagamento:</strong> " . $_POST["payment_method"] . "</p>";
        echo "<p><strong>Receber Newsletter:</strong> " . (isset($_POST["newsletter"]) ? "Sim" : "Não") . "</p>";

        echo "<h2>Preferências de Comida</h2>";
        echo "<p><strong>Tipo de Culinária:</strong> " . $_POST["cuisine_type"] . "</p>";
        echo "<p><strong>Restrições Alimentares:</strong> " . $_POST["dietary_restrictions"] . "</p>";
        echo "<p><strong>Alergias Conhecidas:</strong> " . $_POST["allergies"] . "</p>";
    }
    ?>
</body>
</html>
