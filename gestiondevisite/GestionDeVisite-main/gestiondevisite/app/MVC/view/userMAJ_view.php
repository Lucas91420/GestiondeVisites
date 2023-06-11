
<div class="mt-4 border-top pt-4"></div>

<br>


<form class="form-control" action="../controller/userDATA_controller.php" method="post" name="formUserData">

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label"> Nom : </label>
        <div class="col-sm-10">
            <label>
                <input name="nom" type="text" class="form-control-sm" value="<?= $dataUser[0]["Nom"]?>">
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Prénom : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" value="<?= $dataUser[0]["Prenom"]?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 form-label"> Email : </label>
        <div class="col-sm-10">
            <label>
                <input name="email" type="text" class="form-control-sm" value="<?= $dataUser[0]["email"]?>" size="25">
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label for="tel" class="col-sm-2 form-label"> Téléphone : </label>
        <div class="col-sm-10">
            <label>
                <input name="telephone" type="text" class="form-control-sm" value="<?= $dataUser[0]["telephone"]?>" size="25">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="adresse" class="col-sm-2 form-label"> Adresse : </label>
        <div class="col-sm-10">
            <label>
                <input name="adresse" type="text" class="form-control-sm" value="<?= $dataUser[0]["adresse"]?>" size="25">
            </label>
        </div>
    </div>
    <div class="form-group row">
        <label for="cp" class="col-sm-2 form-label"> Code postal : </label>
        <div class="col-sm-10">
            <label>
                <input name="cp" type="text" class="form-control-sm" value="<?= $dataUser[0]["code postal"]?>" size="25">
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label for="metier" class="col-sm-2 form-label"> Métier : </label>
        <div class="col-sm-10">
            <label>
                <input name="metier" type="text" class="form-control-sm" value="<?= $dataUser[0]["metier"]?>" size="25">
            </label>
        </div>
    </div>
    <br>
    <div class="mt-4 border-top pt-4"></div>

    <input type="submit" value="Enregistrer" class="btn btn-primary" name="save">
</form>

<form action="../controller/userDATA_controller.php" name="back">
    <button type="submit" class="btn btn-warning" name="back" >BACK</button>
</form>



