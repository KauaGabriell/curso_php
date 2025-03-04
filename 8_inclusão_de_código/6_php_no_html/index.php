<?php
    include_once "backend.php";
?>

<h1>Seja Bem Vindo ao nosso Site</h1>
<p><?= $pessoa; ?> Veja as nossas ofertas</p>

<h2>Confira nossos principais produtos</h2>
<ul>
<?php foreach($produtos as $produto): ?>
    <li><?= $produto ?></li>
    <?php endforeach; ?>
</ul>