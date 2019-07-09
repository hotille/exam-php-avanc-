<?php ob_start(); ?>

<!-- Contenu de la vue -->
<button class="btn btn-success float-left"><a href="<?= url('') ?>">retour</a></button>
<br><br>


    <table class="table">
        <thead>
            <tr>
                <th>id_conducteur</th>
                <th>prenom</th>
                <th>nom</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($conducteurs as $conducteur) : ?>
                <tr>
                    <td><?= $conducteur->getId(); ?></td>
                    <td><?= $conducteur->getNom(); ?></td>
                    <td><?= $conducteur->getPrenom(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form action="<?= url('conducteurs/add') ?>" method="post">
        <div class="form-group">
            <label for="conducteur">Prenom</label>
            <input type="text" name="prenom" id="conducteur" class="form-control">
        </div>

        <div class="form-group">
            <label for="conducteur">Nom </label>
            <input type="text" name="nom" id="conducteur" class="form-control">
        </div>

        <button class="btn btn-success float-right">Créer le conducteur</button>
    </form>

    <?php $content = ob_get_clean() ?>
    <?php view('template', compact('content')); ?>