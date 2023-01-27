<?php
	$strTitle 	= "PetSitter - Choisis ton PetSitter";
	include("views/header.php");
    ?>

    <main>
        <div id="infoPS">
            <div class="container">
                <div class="row text-center">

                    <div class=" offset-md-3 col-md-6 px-5 my-2">
                        <h2>Choisis le PetSitter qui te convient selon tes préférences</h2>
                    </div>
                </div>
            </div>
            <!-- Filtres -->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-1">
                        <p>Filtres | </p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <p>Animaux:</p>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Chien</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Chat</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">En cage</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        <p>Type de garde:</p>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">A domicile</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">En pension</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Promenade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        <p>Code postal: </p>
                    </div>
                    <div class="col-md-1 px-2">
                        <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="68000">
                    </div>
                </div>
            </div>
            <!-- Profil des PetSitter -->
            <div id="blocIcon" class="container mt-4">
                <div class="row">
                    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Colmar</span></li>
                                <li class="list-group-item">Prénom: <span>Mario</span></li>
                                <li class="list-group-item">Age: <span>35 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS2.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Amiens</span></li>
                                <li class="list-group-item">Prénom: <span>Marlène</span></li>
                                <li class="list-group-item">Age: <span>53 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS3.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Brest</span></li>
                                <li class="list-group-item">Prénom: <span>Yann</span></li>
                                <li class="list-group-item">Age: <span>38 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS4.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Besancon</span></li>
                                <li class="list-group-item">Prénom: <span>Justine</span></li>
                                <li class="list-group-item">Age: <span>31 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blocIcon" class="container">
                <div class="row">
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS5.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Marseille</span></li>
                                <li class="list-group-item">Prénom: <span>Erick</span></li>
                                <li class="list-group-item">Age: <span>64 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS6.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Paris</span></li>
                                <li class="list-group-item">Prénom: <span>Paul</span></li>
                                <li class="list-group-item">Age: <span>25 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3  py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS7.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Lyon</span></li>
                                <li class="list-group-item">Prénom: <span>Pierre</span></li>
                                <li class="list-group-item">Age: <span>68ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS8.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Poitiers</span></li>
                                <li class="list-group-item">Prénom: <span>Delphine</span></li>
                                <li class="list-group-item">Age: <span>21 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <a class="mb-5" href="#">&#x2011; 2 &#x2011;</a>
                </div>
            </div>
        </div>
    </main>

    <?php
	include("views/footer.php");
    ?>