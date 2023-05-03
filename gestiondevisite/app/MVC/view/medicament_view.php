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

<br>
<br>
<br>
<h3 class="page-title">Médicaments</h3>

<div class="mt-4 border-top pt-4"></div>

<form class="table-responsive" name="actionSee">
    <table class="table table-striped"
           id="table"
           data-toggle="table"
           data-side-pagination = "true"
           data-pagination="true"
           data-filter-control="true"
           data-buttons="buttons"
           data-search="true"
           data-field="true">
        <thead>
        <tr>
            <th data-sortable="true" data-field="id" data-filter-control="input"> N° </th>
            <th data-sortable="true" data-field="nom" data-filter-control="input">Nom commercial</th>
            <th data-sortable="true" data-field="prenom" data-filter-control="input">Effets</th>
            <th data-field="fonction" class="align-baseline">Fonction</th>
        </tr>
        </thead>
        <tbody>
        <br>
        <br>
        <br>
        <?php
        for($i=0; $i<count($dataMedicament);$i++){ ?>
        <tr>
            <td><?= $dataMedicament[$i]["id"] ?></td>
            <td><?= $dataMedicament[$i]["nomCommercial"] ?></td>
            <td><?= $dataMedicament[$i]["effets"] ?></td>
            <td>
                <button type="submit" class="btn-sm" name="functionSee" value="<?= $dataMedicament[$i]["id"] ?>">
                    Voir
                </button>

            </td>
            <?php } ?>
        </tbody>
    </table>
</form>







