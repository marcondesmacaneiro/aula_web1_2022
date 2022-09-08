<?php
    $sql_insert_filme = "
        INSERT into filmes
        (nome,resumo,ano,imagem,complementos)
        values
        (:nome,:resumo,:ano,:imagem,:complementos)
    ";
    $sql_insert_filme = $conexao->prepare($sql_insert_filme);
    // $sql_insert_filme->execute([
    //     "nome" => $_POST['nome'],
    //     "resumo" => $_POST['resumo'],
    //     "ano" => $_POST['ano'],
    //     "imagem" => $_POST['ano'],
    //     ":complementos" => $_POST['complmentos']
    // ]);

    $sql_insert_filme->execute([
        "nome" => 'teste',
        "resumo" => 'teste',
        "ano" => 2022,
        "imagem" => 'teste',
        ":complementos" => 'teste'
    ]);


?>