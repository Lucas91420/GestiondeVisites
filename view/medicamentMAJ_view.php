<html>

<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->
    <title>Gestion de visite</title>

</head>

<div class="mt-4 border-top pt-4"></div>

<br>

<form class="form-control" action="../controller/medicament_controller.php" method="post" name="formUserData" >
    <h6> Informations du médicament :</h6>
    <br>
    <br>

    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Nom commercial : </label>
        <div class="col-sm-10">
            <label>
                <input name="nom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataMedicament[0]["nomCommercial"]?>">
            </label>
        </div>
    </div>
    <div class="mt-4 border-top pt-4"></div>
    <br>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Composition : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataMedicament[0]["composition"]?>" size="75">
            </label>
        </div>
    </div>
    <div class="mt-4 border-top pt-4"></div>
    <br>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Effets : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataMedicament[0]["effets"]?>" size="88">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>
    <br>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Contre Indications : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $dataMedicament[0]["contreIndications"]?>" size="85">
            </label>
        </div>
    </div>

    <?php
    if(!$view){ ?>
        <button type="submit" class="btn-success" name="confirmInfo" value="<?= $dataMedicament[0]["id"] ?>">
            Enregistrer
        </button>
    <?php } ?>
    <br>
    <br>

</form>

<form action="../controller/medicament_controller.php" name="back">
    <button type="submit" class="btn btn-warning" name="back" >BACK</button>
</form>
</html>




