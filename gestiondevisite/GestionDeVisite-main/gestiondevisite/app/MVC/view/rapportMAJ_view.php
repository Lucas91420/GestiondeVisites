<html>

<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->
    <title>Gestion de visite</title>
</head>

<div class="mt-4 border-top pt-4"></div>

<br>

<form class="form-control" action="../controller/rapport_controller.php" method="post" name="formUserData">

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Motif : </label>
        <div class="col-sm-10">
            <label>
                <input name="motif" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataRapport[0]["motif"]?>">
            </label>
        </div>
    </div>

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Bilan : </label>
        <div class="col-sm-10">
            <label>
                <input name="bilan" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataRapport[0]["bilan"]?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Date : </label>
        <div class="col-sm-10">
            <label>
                <input name="date" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataRapport[0]["dateRapport"]?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Médecin : </label>
        <div class="col-sm-10">
            <label>
                <input name="nomMedecin" type="text" class="form-control-sm" readonly value="<?= $dataRapport[0]["medecinnom"]?> <?= $dataRapport[0]["medecinprenom"];?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Visiteur : </label>
        <div class="col-sm-10">
            <label>
                <input name="nomVisiteur" type="text" class="form-control-sm" readonly value="<?= $dataRapport[0]["visiteurnom"]?>, <?= $dataRapport[0]["visiteurprenom"];?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>
    <br>
    <br>
    <?php
    if(!$view){ ?>
        <button type="submit" class="btn-success" name="confirmInfo" value="<?= $dataRapport[0]["rapportID"] ?>">
            Enregistrer
        </button>
    <?php } ?>
    <br>
    <br>

    <button type="submit" class="btn btn-warning" name="back" >BACK</button>

</form>
</html>