<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>

</head>

<br>
<br>

<h3 class="page-title">Ajouter un rapport : </h3>
<div class="mt-4 border-top pt-4"></div>
<br>

<form action="../controller/rapport_controller.php" method="post" name="rapport">

    <div class='form-group'>
        <label>Date:</label>
        <input type='date' name='date' class='form-control'   />
    </div>

    <br>
    <div class='form-group'>
        <label>motif:</label>
        <input type='text' name='motif' class='form-control'   />
    </div>
    <br>
    <div class='form-group'>
        <label>bilan : </label>
        <input type='text' name='bilan' class='form-control'   />
    </div>

    <br>

    <div class='form-group'>
        <label>Visiteur :</label>
        <select name="Visiteur" data-live-search="true" class="selectpicker">
            <?php for($i=0; $i<count($dataVisiteur); $i++){ ?>
                <option value=<?= $dataVisiteur[$i]["id"] ?>>
                    <?= $dataVisiteur[$i]["nom"]." ". $dataVisiteur[$i]["prenom"]?>
                </option>
            <?php } ?>
        </select>
    </div>

    <br>

    <div class='form-group'>
        <label>Medecin :</label>
        <select name="Medecin" data-live-search="true" class="selectpicker">
            <?php for($i=0; $i<count($dataMedecin); $i++){ ?>
                <option value=<?= $dataMedecin[$i]["id"] ?>>
                    <?= $dataMedecin[$i]["nom"]." ". $dataMedecin[$i]["prenom"] ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <br>
    <div class="mt-4 border-top pt-4"></div>

    <br>
    <div class='form-group'>
        <label>Medicament :</label>
        <select name="Medicament" data-live-search="true" class="selectpicker">
            <?php for($i=0; $i<count($dataMedicament); $i++){ ?>
                <option value=<?= $dataMedicament[$i]["id"] ?>>
                    <?= $dataMedicament[$i]["nomCommercial"] ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <br>

    <div class="form-group">
        <label>Quantite : </label>
        <input type="number" name="quantite" class='form-floating'>
    </div>

    <br>
    <div class="mt-4 border-top pt-4"></div>

    <button type='submit' name='confirm' class='btn btn-success'>Enregistrer</button>
    <br>
    <br>
    <button type="submit" class="btn-warning">Back</button>
</form>
</html>
