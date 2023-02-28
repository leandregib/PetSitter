{extends file="views/structure.tpl"}

{block name="content"}


<div id="blocFA" class="col-md-10 mx-5 my-3 py-3 mx-3">
<div class="text-center">
    <img src="assets/img/icon/iconPS.png" alt="">
</div>
<div>
    <ul class="list-group list-group-flush">
        {* User *}
        <h5>Informations sur l'utilisateur :</h5>
        <li class="list-group-item">Nom : {$objUser->getName()|unescape}</li>
        <li class="list-group-item">Prénom : {$objUser->getFirstName()|unescape}</li>
        <li class="list-group-item">Ville : {$objCity->getName()|unescape}</li>
        <li class="list-group-item">Date de naissance : {$objUser->getBirthday()|date_format:"d/m/Y"|unescape}</li>
        <li class="list-group-item">Email : {$objUser->getMail()|unescape}</li>
        <li class="list-group-item">Numéro de téléphone : {$objUser->getPhone()|unescape}</li>
        <li class="list-group-item">Description : {$objUser->getDescription()|unescape}</li>
        {* Role *}
        <li class="list-group-item">Rôle : {$objRole->getName()|unescape}</li>
        
        {* Petsitter *}
        {if isset($objSitter->getType()) && isset($objPetTypeSitter->getKind())}
            <h5>Services Petsitter:</h5>
            <li class="list-group-item">Type de logement : {$objHome->getType()}</li>
            <li class="list-group-item">Type de garde : {$objSitter->getType()}</li>
            <li class="list-group-item">Type d'animal : {$objPetTypeSitter->getKind()}  </li>
        {/if} 

        {* Pet(s) *}
        {if isset($objPet->getName())}
            <h5>Animaux :</h5>
            <li class="list-group-item">Nom : {$objPet->getName()|unescape}</li>
            {if $objPet->getBirthday() != null}
                <li class="list-group-item">Date de naissance : {$objPet->getBirthday()|date_format:"d/m/Y"}</li>
            {/if}        
            <li class="list-group-item">Type d'animal : {$objPetType->getKind()}</li>
            <li class="list-group-item">Sexe : {$objSex->getType()}</li>
        {/if} 

        {* Image(s) *}
        {if $arrPictureToDisplay != array()}
            <h5>Images :</h5>
        
            {foreach from=$arrPictureToDisplay item=objPicture}
                <img src="assets/imgUsers/{$objPicture->getName()}" class="img-thumbnail" alt="{$objPicture->getDescription()}"/></a>
            {/foreach}
        {/if} 
        
        {* Note *}
        <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
        </li>
    </ul>
</div>
</div>

    
{/block}
