{extends file="views/structure.tpl"}

{block name="content"}
<main>
    <div>
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form action="" method="post">
                        <div class="mt-3">
                            <span>Animaux que tu veux garder: </span>
                            <div id="formDPS">
                            {foreach from=$arrPetTypeToDisplay item=objPetType}                            
                                    <div class="form-check form-check-inline">                            
                                    <input class="form-check-input" type="checkbox" {$objPetType->checked} value='{$objPetType->getId()}' id='{$objPetType->getId()}' name ="animal[]">
                                <label class="form-check-label" for="{$objPetType->getId()}">{$objPetType->getKind()}</label>
                                </div> 
                            {/foreach}
                                                           
                                {* <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Chat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Cage</label>
                                </div> *}
                            </div>
                        </div>
                        <div class="mt-3">
                            <span>Garde que tu souhaites: </span>
                            <div id="formDPS">
                                <div class="form-check form-check-inline">
                                {foreach from=$arrSitterToDisplay item=objSitter}
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" {$objSitter->checked} value='{$objSitter->getId()}' id='{$objSitter->getId()}' name ="garde[]">
                                    <label class="form-check-label" for="{$objSitter->getId()}">{$objSitter->getType()}</label>
                                    </div>
                                {/foreach}
                                </div>
                                {* <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">En pension</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Promenade</label>
                                </div> *}
                            </div>
                        </div>
                        <div class="mt-3">
                            <span>Ton logement actuel: </span>
                            <div id="formDPS">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Maison</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Appartement</label>
                                </div>
                            </div>
                        </div>
                        {* <div class="mt-5">
                            <p>- Nous te proposons de déposer une lettre de motivation pour en savoir plus
                                sur toi:
                            <ul class="text-left">
                                <li>Votre diplôme actuel ou métier</li>
                                <li>Vos passions</li>
                                <li>Si vous avez des animaux</li>
                                <li>Ceux que vous avez déjà gardé</li>
                            </ul>
                            </p>
                            <div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label"></label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div> *}
                        <div>
                            <div class="mt-5">
                                <p>- Ici tu vas devoir télécharger une photo de toi et te décrire.
                                    Permettant aux utilisateurs de mieux choisir leur PetSitter
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mt-3">
                                <label for="forpFile" class="form-label">Description: </label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-check form-check-inline">
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

{/block}