<?php
$pessoas = [
    'Peixe' => 20,
    'Mari' => 20,
    'Davi' => 18
];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach ($pessoas as $nome => $idade): ?>
        <tr>
            <td>
                <?= $nome ?>
            </td>
            <td>
                <?= $idade ?>
            </td>
        </tr>

        <?php endforeach ?>;


        <tr>
            <td>Ana</td>
            <td>30</td>
        </tr>

</table>