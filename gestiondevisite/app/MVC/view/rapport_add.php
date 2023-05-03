<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ajouter Rapport</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
    <div class="mt-4 border-top pt-4"></div>

<br>

<form class="form-control" action="../controller/rapport_DAO.php" method="post" name="rapport">
				<div class='form-group'>
					<label>date</label>
					<input type='date' name='date'  class='form-control'   />
				</div>
				
				<div class='form-group'>
					<label>motif:</label>
					<input type='text' name='bilan' class='form-control'   />
				</div>
				
				<div class='form-group'>
					<label>bilan</label>
					<input type='text' name='bilan' class='form-control'   />
				</div>
				
				<div class='form-group'>
					<label>Visiteur:</label>
					<select name='idVisiteur'  class='form-control'  >
						//liste visiteur
					</select>
				</div>
				
				<div class='form-group'>
					<label>Medecin</label>
					<select name='idMedecin'  class='form-control'  >
						//liste medecin
					</select>
				</div>
				<button type='submit' name='button' class='btn btn-warning form-control'>Enregistrer</button>		
</form>
</html>