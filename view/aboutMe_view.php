
<br>
<div class="mt-4 border-top pt-4"></div>
<h5>About me :</h5>

<br>
<form class="form-control" action="../controller/user_controller.php" method="post" name="formUserData">

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label"> Nom : </label>
        <div class="col-sm-10">
            <label>
                <input name="nom" type="text" class="form-control-sm" value="<?= $user_modeleDATA["nom"]?>">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Prénom : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" value="<?= $user_modeleDATA["prenom"]?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="adresse" class="col-sm-2 form-label"> Adresse : </label>
        <div class="col-sm-10">
            <label>
                <input name="adresse" type="text" class="form-control-sm" value="<?= $user_modeleDATA["adresse"]?>" size="25">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="cp" class="col-sm-2 form-label"> Code postal : </label>
        <div class="col-sm-10">
            <label>
                <input name="cp" type="text" class="form-control-sm" value="<?= $user_modeleDATA["cp"]?>" size="25">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="metier" class="col-sm-2 form-label"> Métier : </label>
        <div class="col-sm-10">
            <label>
                <input name="metier" type="text" class="form-control-sm" value="<?= $user_modeleDATA["ville"]?>" size="25">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="metier" class="col-sm-2 form-label"> Date d'embauche : </label>
        <div class="col-sm-10">
            <label>
                <input name="metier" type="text" class="form-control-sm" value="<?= $user_modeleDATA["dateEmbauche"]?>" size="25">
            </label>
        </div>
    </div>
    <br>
</form>

<form action="../controller/user_controller.php?Menu=true" name="back">
    <button type="submit" class="btn btn-warning" name="Menu" >BACK</button>
</form>




