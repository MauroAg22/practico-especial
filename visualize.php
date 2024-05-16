<?php include "especial.php"; ?>

<link rel="stylesheet" href="css/style.css">





<h1>$arregloAsociatvoGlobal</h1>

<ul class="ul-general">

<?php foreach ($arregloAsociatvoGlobal as $key => $value) { ?>

    <li class='li-general'>"<?= $key ?>"
        <ul>
            <li>
                Cantidad: <?= $value['cantidad'] ?>
            </li>
            <li>
                Porcentaje:  <?= $value['porcentaje'] ?>
            </li>
        </ul>
    </li>

<?php } ?>

</ul>