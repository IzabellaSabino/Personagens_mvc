<h1>Cadastrar personagem</h1>

<?php if ($mensagem != "") { ?>
    <p><?php echo htmlspecialchars($mensagem); ?></p>
<?php } ?>

<form method="POST" action="index.php?acao=cadastrar">

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Universo:</label>
    <input type="text" name="universo" required>

    <label>Poder:</label>
    <input type="text" name="poder" required>

    <button type="submit">Cadastrar</button>

</form>

<p>
    <a href="index.php">Voltar para a lista</a>
</p>