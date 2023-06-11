<html lang="en">
<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/themes/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">


    <!-- Booststrap Js -->
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/themes/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

</head>

<form class="table-responsive" name="actionSee">
    <table class="table table-striped"
           id="table"
           data-toggle="table"
           data-filter-control="true"
           data-buttons="buttons"
           data-search="true">
        <thead>
        <tr>
            <th data-sortable="true" data-field="id" data-filter-control="input"> N° </th>
            <th data-sortable="true" data-field="nom" data-filter-control="input">Nom</th>
            <th data-sortable="true" data-field="prenom" data-filter-control="input">Prénom</th>
            <th data-sortable="true" data-field="email" data-filter-control="input">Email</th>
            <th data-field="fonction" class="align-baseline">Fonction</th>
        </tr>
        </thead>
        <tbody>
        <br>
        <br>
        <br>
        <?php
        for($i=0; $i<count($dataUser);$i++){ ?>
        <tr>
            <td><?= $dataUser[$i]["Id"] ?></td>
            <td><?= $dataUser[$i]["Nom"] ?></td>
            <td><?= $dataUser[$i]["Prenom"] ?></td>
            <td><?= $dataUser[$i]["email"] ?></td>
            <td>
                <a href="../controller/userDATA_controller.php?functionSee=<?= $dataUser[$i]["Id"] ?>">
                    <span class="btn-lg">Voir</span>
                </a>

                <a href="../controller/userDATA_controller.php?functionUpdate=<?= $dataUser[$i]["Id"] ?>">
                    <span class="btn-lg">Modifier</span>
                </a>

            </td>
            <?php } ?>
        </tbody>
    </table>
</form>






