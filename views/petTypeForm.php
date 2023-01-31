<?php
$strTitle     = "#";
include("views/header.php");
?>

<main>
    <div>
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form action="" method="post">
                        <div>
                            <label for="firstNam" class="form-label">Nom</label>
                            <input type="text" class="form-control mx-auto" placeholder="Net">
                        </div>
                        <div class="my-2">
                            <label for="date" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control mx-auto">
                        </div>
                        <div>
                            <label for="type">Choisissez un type de garde</label>
                            <select class="form-select my-2" aria-label="Default select example">
                                <option selected>Type de garde</option>
                                <option value="1">A domicile</option>
                                <option value="2">En pension</option>
                                <option value="3">Promenade</option>
                            </select>
                        </div>

                        <div>
                            <label for="sexe">Sélectionné le sexe de l'animal</label>
                            <select class="form-select my-2" aria-label="Default select example">
                                <option selected>Sexe</option>
                                <option value="1">Femelle</option>
                                <option value="2">Mâle</option>
                            </select>
                        </div>
                        <div class="form-check form-check-inline my-2">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">J’autorise ce site à conserver
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
</main>

<?php
include("views/footer.php");
?>