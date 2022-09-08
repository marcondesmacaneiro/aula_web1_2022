<h1>Listagem de filmes</h1>

<?php
    $sql_filmes = "SELECT * FROM filmes";
    $filmes_prepare = $conexao->prepare($sql_filmes);
    $filmes_prepare->execute();
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Ano</th>
            <th scope="col">Imagem</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($filme = $filmes_prepare->fetch()) {
        ?>
        <tr>
            <th scope="row"><?php echo $filme['codigo']; ?></th>
            <td><?php echo $filme['nome']; ?></td>
            <td><?php echo $filme['ano']; ?></td>
            <td>
                <img src="<?php echo $filme['imagem']; ?>" class="img-thumbnail" width="150px"
                    alt="<?php echo $filme['resumo']; ?>">
            </td>
            <td>
                <a href="#" class="btn btn-primary">Atualizar</a>
                <a href="#" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>