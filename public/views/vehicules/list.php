<?php ob_start(); ?>

<!-- Contenu de la vue -->

<button class="btn btn-success float-left"><a href="<?= url('') ?>">retour</a></button>
<br><br>


<table class="table">
    <thead>
        <tr>
            <th>id_vehicule</th>
            <th>marque</th>
            <th>modele</th>
            <th>couleur</th>
            <th>immatriculation</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($vehicules as $vehicule) : ?>
            <tr>
                <td><?= $vehicule->getId(); ?></td>
                <td><?= $vehicule->getMarque(); ?></td>
                <td><?= $vehicule->getModele(); ?></td>
                <td><?= $vehicule->getCouleur(); ?></td>
                <td><?= $vehicule->getImmatriculation(); ?></td>
                <td>1</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form action="<?= url('vehicules/add') ?>" method="post">

    <div class="form-group">
        <label for="vehicule">marque</label>
        <input type="text" name="marque" id="vehicule" class="form-control">
    </div>

    <div class="form-group">
        <label for="vehicule">modele </label>
        <input type="text" name="modele" id="vehicule" class="form-control">
    </div>

    <div class="form-group">
        <label for="vehicule">couleur</label>
        <input type="text" name="couleur" id="vehicule" class="form-control">
    </div>

    <div class="form-group">
        <label for="vehicule">immatriculation</label>
        <input type="text" name="immatriculation" id="vehicule" class="form-control">
    </div>

    <button class="btn btn-success float-right">Ajouter Vehicule</button>
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>