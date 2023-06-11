<html>

<head>
    <!--Unicode transformation format -->
    <meta charset="utf-8" /> <!-- Spécifiez l'encodage des caractères -->
    <title>Gestion de visite</title>

    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/themes/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">

</head>

<div class="mt-4 border-top pt-4"></div>

<br>

<form class="form-control" action="../controller/medecin_controller.php" method="post" name="formUserData" >
    <h6> Informations du médecin :</h6>
    <br>

    <br>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 form-label" > Nom : </label>
        <div class="col-sm-10">
            <label>
                <input name="nom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $medecinData[0]["nom"]?>">
            </label>
        </div>
    </div>

    <br>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 form-label"> Prénom : </label>
        <div class="col-sm-10">
            <label>
                <input name="prenom" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $medecinData[0]["prenom"]?>">
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="tel" class="col-sm-2 form-label"> Téléphone : </label>
        <div class="col-sm-10">
            <label>
                <input name="telephone" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $medecinData[0]["tel"]?>" size="25">

                <!-- Button appeler médecin modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Appeler
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Appel en cours vers <?= $medecinData[0]["nom"]. " ".$medecinData[0]["prenom"] ?> ...</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <div class="mt-4 border-top pt-4"></div>

    <div class="form-group row">
        <label for="adresse" class="col-sm-2 form-label"> Adresse : </label>
        <div class="col-sm-10">
            <label>
                <input name="adresse" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $medecinData[0]["adresse"]?>" size="46">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="cp" class="col-sm-2 form-label"> Département : </label>
        <div class="col-sm-10">
            <label>
                <input name="departement" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $medecinData[0]["departement"]?>" size="25">
            </label>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="metier" class="col-sm-2 form-label"> Specialité complementaire : </label>
        <div class="col-sm-10">
            <label>
                <input name="speComplementaire" type="text" class="form-control-sm" <?php if($view){ print "readonly"; } ?> value="<?= $medecinData[0]["specialitecomplementaire"]?>" size="30">
            </label>
        </div>
    </div>
    <br>
    <div class="mt-4 border-top pt-4"></div>
    <!-- Button appeler médecin modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RapportMedecin">
        Voir ses rapports
    </button>

    <br>
    <br>

    <?php
    if(!$view){ ?>
        <button type="submit" class="btn-success" name="confirmInfo" value="<?= $medecinData[0]["id"] ?>">
            Enregistrer
        </button>
    <?php } ?>
    <br>
    <br>


    <!-- Modal -->
    <div class="modal fade" id="RapportMedecin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-dialog modal-lg" id="voirRapportNedecin">
                    <h5 class="title" >Rapport(s) du médecin :</h5>

                    <?php
                    for($i=0; $i<count($rapportMedecin); $i++)
                    { ?>
                        <div class="mt-4 border-top pt-4"></div>

                        <h6> Rapport N° <?= $i+1 ?> </h6>
                        <br>
                        <div class="form-group row">
                            <label for="metier" class="col-sm-2 form-label"> Date</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="date" type="text" class="form-control-sm color" value="<?= $rapportMedecin[$i]["dateRapport"]?>" size="25" readonly="readonly" style="background-color: #e1e1e1">
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="metier" class="col-sm-2 form-label"> Motif</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="motif" type="text" class="form-control-sm " value="<?= $rapportMedecin[$i]["motif"]?>" size="25" readonly="readonly" style="background-color: #e1e1e1" >
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="metier" class="col-sm-2 form-label"> Bilan</label>
                            <div class="col-sm-10">
                                <label>
                                    <input name="bilan" type="text" class="form-control-sm" value="<?= $rapportMedecin[$i]["bilan"]?>" size="34" readonly="readonly" style="background-color: #e1e1e1">
                                </label>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered scrollable modal -->
    <div class="modal-dialog modal-lg" id="voirRapportNedecin"></div>

</form>

<form action="../controller/medecin_controller.php" name="back">
    <button type="submit" class="btn btn-warning" name="back" >BACK</button>
</form>

</html>



