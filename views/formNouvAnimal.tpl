{extends file="views/structure.tpl"}

{block name="content"}
<main>
    <div>
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                {include file="views/error_display.tpl"}
                    <form name="formPet" action="index.php?ctrl=form&action=formNouvAnimal" method="post">
                        <div>
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control mx-auto" placeholder="Net" name="name" value="{if $objPet->getName() != ''}{$objPet->getName()|unescape}{/if}">
                        </div>
                        <div class="my-2">
                            <label for="birthday" class="form-label">Date de naissance</label>
                            <input name="birthday" type="date" class="form-control mx-auto" value="{if $objPet->getBirthday() != ''}{$objPet->getBirthday()|unescape}{/if}">
                        </div>
                        <div>
                            <label for="typeid">Choisissez un type d'animal</label>
                            <select name="typeid" class="form-select my-2" aria-label="Default select example" >                            
                                {foreach from=$arrPetTypeToDisplay item=objPetType} 
                                    <option value='{$objPetType->getId()} {if (in_array($objPet->getTypeid(), $arrPetTypeSelected))} selected {/if}'>{$objPetType->getKind()}</option>
                                {/foreach}
                            
                            </select>
                        </div>

                        <div>
                            <label for="sexid">Sélectionné le sexe de l'animal</label>
                            <select name="sexid" class="form-select my-2" aria-label="Default select example">
                                {foreach from=$arrSexToDisplay item=objSex} 
                                    <option value='{$objSex->getId()} {if (in_array($objPet->getSexid(), $arrSexSelected))} selected {/if}'>{$objSex->getType()}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-check form-check-inline my-2">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="personal_data" >
                            <label class="form-check-label" for="inlineCheckbox1" name="personal_data">J’autorise ce site à conserver
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
