<?php
	$strTitle 	= "PetSitter - Inscription";
	include("views/header.php");

    // Pour récupérer les informations dans le formulaire
	$intCity		= $_POST['city']??'';
    $intCp		    = $_POST['cp']??'';

    // Liste des villes
	require("entities/city_entity.php"); 
    require("models/city_manager.php"); 
   $objCityManager  = new CityManager(); 
   $arrCity 	    = $objCityManager->findCity(); 

?>

<!-- Formulaire Deviens PetSitter -->
<div>
    <div class="container" id="aaaa">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <form action="" method="post">
                    <div>
                        <label for="firstNam" class="form-label">Nom</label>
                        <input type="text" class="form-control mx-auto" placeholder="Net">
                    </div>
                    <div>
                        <label for="name" class="form-label">Prénom</label>
                        <input type="text" class="form-control mx-auto" placeholder="Beans">
                    </div>
                    <div>
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control mx-auto" placeholder="vsCodeWinner@gmail.fr">
                    </div>
                    <div>
                        <label for="mail" class="form-label">Saisir un mot de passe</label>
                        <input type="text" class="form-control mx-auto" placeholder="********">
                    </div>
                    <div>
                        <label for="mail" class="form-label">Confirmer le mot de passe</label>
                        <input type="text" class="form-control mx-auto" placeholder="********">
                    </div>
                    <div>
                        <label for="phone" class="form-label">Télephone</label>
                        <input type="tel" class="form-control mx-auto" placeholder="0367300236">
                    </div>
                    <div>
                        <label for="date" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control mx-auto">
                    </div>
                    <div>
                        <label for="adress" class="form-label">Adresse</label>
                        <input type="text" class="form-control mx-auto" placeholder="32 Rue de l'Industrie">
                    </div>
                    <div>
                        <label for="city" class="form-label">Ville</label>
						<select id="city" name="city">
							<option <?php if ($intCity == ''){ echo "selected"; } ?> value=''>--</option>
						<?php
							foreach($arrCity as $arrDetCity){
								$objCity = new City;
								$objCity->hydrate($arrDetCity);
								$strSelected = ($intCity == $objCity->getId())?"selected":"";
								echo "<option ".$strSelected." value='".$objCity->getId()."'>".$objCity->getName()."</option>";
							}
						?>
						</select>
                    </div>
                    <div>
                        <label for="cp" class="form-label">Code postal</label>
                        <select id="cp" name="cp">
							<option <?php if ($intCp == ''){ echo "selected"; } ?> value=''>--</option>
						<?php
							foreach($arrCp as $arrDetCp){
								$objCp = new Cp;
								$objCp->hydrate($arrDetCp);
								$strSelected = ($intCp == $objCp->getId())?"selected":"";
								echo "<option ".$strSelected." value='".$objCp->getId()."'>".$objCp->getCp()."</option>";
							}
						?>
						</select>
                    </div>
                    
                    <div>
                        <div class="mt-3">
                            <label for="forpFile" class="form-label">Description: </label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">J' autorise ce site à conserver
                                mes données transmises via ce formulaire</label>
                        </div>
                    </div>
                    <div class="mb-5 mt-2 pb-2 text-center">
                        <button id="bouttonForm" type="submit">M'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
	include("views/footer.php");
    ?>