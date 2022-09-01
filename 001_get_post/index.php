<?php
    $codigo = $_GET['codigo'];
    $nome   = $_GET['nome'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];

    echo("O código enviado foi: {$codigo}.<br>");
    echo("O nome enviado foi: {$nome}.<br>");
    echo("A cidade enviada foi: {$cidade}.<br>");
    echo("O estado enviado foi: {$estado}.<br>");
?>

<form>
    <input type="text" name="codigo" value="<?=$codigo?>" placeholder="digite">
    <input type="text" name="nome" value="<?=$nome?>">
    <input type="text" name="cidade" value="<?=$cidade?>">
    <input type="text" name="estado" value="<?=$estado?>">
    <input type="submit">
</form>

<hr>

<?php
    if (isset($_POST['enviar'])) {
        $codigo = $_POST['codigo'];
        $nome   = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
    }
?>

<form method="post">
    <input type="text" name="codigo" value="<?=$codigo?>" placeholder="digite">
    <input type="text" name="nome" value="<?=$nome?>">
    <input type="text" name="cidade" value="<?=$cidade?>">
    <input type="text" name="estado" value="<?=$estado?>">
    <input type="submit" name="enviar">
</form>