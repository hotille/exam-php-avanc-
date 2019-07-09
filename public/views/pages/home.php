<?php ob_start(); ?>

<h1>UTC_VALERE Concessionnaire</h1>

<ul>
    <li><a href="<?= url('') ?>">Conducteur</li>
    <li><a href="<?= url('') ?>">Association_vehicule_conducteur</li>
    <li><a href="<?= url('') ?>">Vehicule</li>
</ul>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>