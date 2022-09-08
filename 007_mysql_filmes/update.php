<?php
    $sql_filmes = "SELECT * FROM filmes where codigo = :codigo";
    $filmes_prepare = $conexao->prepare($sql_filmes);
    $filmes_prepare->execute(["codigo" => $_GET['codigo']]);

    $filme = $filmes_prepare->fetch();
    print_r($filme);
?>

<input type="text" name="nome" value="<?php echo $filme['nome']; ?>">