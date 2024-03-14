<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv1</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="nome"> Nome:
            <input type="text" name="nome">
        </label>
        <br>
        <label for="telefone"> Telefone:
            <input type="text" name="telefone">
        </label>
        <br>
        <label for="mail">E-mail:
            <input type="email" name="mail">
        </label>
        <br>
        <label for="texto">Digite seu texto:
            <br>
            <textarea name="texto" cols="30" rows="10"></textarea>
        </label>
        <br>
        <input type="submit" name="Enviar">
    </form>
    <?php
    if (isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['mail'];
        $texto = $_POST['texto'];

        echo "<br>";

        echo "Seus dados Nome:".$nome." telefone: ".$telefone." Email: ".$email." <br>";
        echo " Seu texto: ".$texto;
        echo "<br>";
        echo " Sua requisição: ".$_SERVER["REQUEST_METHOD"];
        echo "<br>";

        $cabecario = apache_request_headers();

        foreach ($cabecario as $inf => $valor) {
            echo "$inf: $valor <br>";
        }
        echo "<br>";
    }
    
?>
</body>
</html>