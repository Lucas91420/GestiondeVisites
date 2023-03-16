<html lang="en">
<head>
    <!--Unicode transformation format -->
    <meta charset="UTF-8" /> <!-- Spécifiez l'encodage des caractères -->

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">

    <!-- Booststrap Js -->
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>



    <title>Gestion de visite</title>
</head>

<body>
<br>
<br>
<br>
<h3 class="page-title">Medecins</h3>
<div class="mt-4 border-top pt-4"></div>


<form class="table-responsive" name="FormMedecin" action="../controller/medecin_controller.php" >
    
    <table class="table table-striped"
           id="table"
           data-toggle="table"
           data-pagination="true"
           data-filter-control="true"
           data-search="true"
           data-side-pagination = "true">
        <thead>
        <tr>
            <th data-sortable="true" data-field="id" data-filter-control="input"> N° </th>
            <th data-sortable="true" data-field="nom" data-filter-control="input">Nom</th>
            <th data-sortable="true" data-field="prenom" data-filter-control="input">Prénom</th>
            <th data-field="fonction" class="align-baseline">Fonctions</th>
        </tr>
        </thead>
        <tbody>

        <?php
        for($i=0; $i<count($medecinData);$i++){ ?>
        <tr>
            <td><?= $medecinData[$i]["id"] ?></td>
            <td><?= $medecinData[$i]["nom"] ?></td>
            <td><?= $medecinData[$i]["prenom"] ?></td>
            <td>
                <button type="submit" class="btn-sm" name="functionSee" value="<?= $medecinData[$i]["id"] ?>">
                    Voir
                </button>
                <button type="submit" class="btn-sm" name="functionModif" value="<?= $medecinData[$i]["id"] ?>">
                    Modifier
                </button>
            </td>
            <?php } ?>
        </tbody>
    </table>
</form>
</body>