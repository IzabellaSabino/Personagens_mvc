<h1>Catálogo de personagens</h1>

<p>
    <a href="index.php?acao=cadastrar">Cadastrar personagem</a>
</p>

<table border="1" cellpadding="8">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Universo</th>
        <th>Poder</th>
    </tr>

    <?php foreach ($personagens as $personagem) { ?>

        <tr>
            <td><?php echo $personagem["id"]; ?></td>

            <td>
                <?php echo htmlspecialchars($personagem["nome"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($personagem["universo"]); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($personagem["poder"]); ?>
            </td>
        </tr>

    <?php } ?>

</table>