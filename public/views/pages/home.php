<?php ob_start(); ?>

<h1>UTC_VALERE Concessionnaire</h1><br><br>

<ul>
    <li><a href="<?= url('conducteurs') ?>">Conducteur</li>
    <li><a href="<?= url('associations') ?>">Association_vehicule_conducteur</li>
    <li><a href="<?= url('vehicules') ?>">Vehicule</li>
</ul>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>