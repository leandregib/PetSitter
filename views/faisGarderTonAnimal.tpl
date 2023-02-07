{extends file="views/structure.tpl"}

{block name="content"}
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
            <form action="" method="post">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-1">
                            <p>Filtres | </p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <p>Animaux:</p>
                        </div>
                        {foreach from=$arrPetTypeToDisplay item=objPetType}
                        <div class="form-check form-check-inline col-md-2">
                            <input class="form-check-input" type="checkbox" {$objPetType->checked} value='{$objPetType->getId()}' id='{$objPetType->getId()}' name ="animal[]">
                            <label class="form-check-label" for="{$objPetType->getId()}">{$objPetType->getKind()}</label>
                        </div>
                        {/foreach}
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <p>Type de garde:</p>
                        </div>
                        {foreach from=$arrSitterToDisplay item=objSitter}
                        <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" {$objSitter->checked} value='{$objSitter->getId()}' id='{$objSitter->getId()}' name ="garde[]">
                        <label class="form-check-label" for="{$objSitter->getId()}">{$objSitter->getType()}</label>
                        </div>
                        {/foreach}
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <p>Code postal: </p>
                        </div>
                        <div class="col-md-1 px-2">
                            <input id="searchbar" onkeyup="search_animal()" type="text" name="cp" placeholder="68000">
                        </div>
                    </div>
                    <div class="mb-5 mt-2 pb-2 text-center">
                        <button id="bouttonForm" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>
            <!-- Profil des PetSitter -->
            
            {*Affichage de la liste des petsitter*}
            {foreach from=$arrResultPetsitter item=$arrDetResultPetsitter}
                {include file="views/resultPetsitter.tpl"}
            {/foreach}



            <!--div id="blocIcon" class="container mt-4">
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
        </div-->
    </main>
{/block}