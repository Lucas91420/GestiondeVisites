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
<h3 class="page-title">Rapports</h3>
<div class="mt-4 border-top pt-4"></div>

<form action="../controller/rapport_controller.php" name="formAdd">
    <button type="submit" class="btn-success" name="functionADD">
        Ajouter
    </button>
</form>

<form class="table-responsive" name="actionSee">
    <table class="table table-striped"
           id="table"
           data-toggle="table"
           data-filter-control="true"
           data-search="true"
           data-pagination="true">
        <thead>
        <tr>
            <th data-sortable="true" data-field="id" data-filter-control="input"> N° </th>
            <th data-sortable="true" data-field="nom" data-filter-control="input">Date</th>
            <th data-sortable="true" data-field="prenom" data-filter-control="input">motif</th>
            <th data-field="fonction" class="align-baseline">Fonction</th>
        </tr>
        </thead>
        <tbody>
        <br>
        <br>
        <br>
        <?php
        for($i=0; $i<count($dataRapport);$i++){ ?>
        <tr>
            <td><?= $dataRapport[$i]["id"] ?></td>
            <td><?= $dataRapport[$i]["dateRapport"] ?></td>
            <td><?= $dataRapport[$i]["motif"] ?></td>
            <td>
                <button type="submit" class="btn-sm" name="functionSee" value=<?= $dataRapport[$i]["id"] ?>>
                    Voir
                </button>
                <button type="submit" class="btn-sm" name="functionEdit" value=<?= $dataRapport[$i]["id"] ?>>
                    Modifier
                </button>
                <button type="submit" class="btn-danger" name="functionDelete" value=<?= $dataRapport[$i]["id"] ?>>
                    Supprimer
                </button>
            </td>
        <?php } ?>
        </tbody>
    </table>
</form>