{extends file="views/structure.tpl"}

{block name="content"}


<div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
<div class="text-center">
    <img src="assets/img/icon/iconPS.png" alt="">
</div>
<div>
    <ul class="list-group list-group-flush">
        {* User *}
        <h5>Informations sur l'utilisateur :</h5>
        <li class="list-group-item">Nom : <span>{$objUser->getName()|unescape}</span></li>
        <li class="list-group-item">Prénom : <span>{$objUser->getFirstName()|unescape}</span></li>
        <li class="list-group-item">Ville : <span>{$objCity->getName()|unescape}</span></li>
        <li class="list-group-item">Date de naissance : <span>{$objUser->getBirthday()|date_format:"d/m/Y"}</span></li>
        <li class="list-group-item">Email : <span>{$objUser->getMail()|unescape}</span></li>
        <li class="list-group-item">Numéro de téléphone : <span>{$objUser->getPhone()|unescape}</span></li>
        <li class="list-group-item">Description : <span>{$objUser->getDescription()|unescape}</span></li>
        
        {* Petsitter *}
        {if $objSitter->getType() && $objPetTypeSitter->getKind()}
            <h5>Services Petsitter:</h5>
            <li class="list-group-item">Type de logement :<span>{$objHome->getType()}</span></li>
            <li class="list-group-item">Type de garde :<span>{$objSitter->getType()}</span></li>
            <li class="list-group-item">Type d'animal :<span> {$objPetTypeSitter->getKind()}  </span></li>
        {/if} 

        {* Pet(s) *}
        {if $objPet->getName()}
            <h5>Animaux :</h5>
            <li class="list-group-item">Nom :<span>{$objPet->getName()|unescape}</span></li>
            {if $objPet->getBirthday() != null}
                <li class="list-group-item">Date de naissance :<span>{$objPet->getBirthday()|date_format:"d/m/Y"}</span></li>
            {/if}        
            <li class="list-group-item">Type d'animal :<span>{$objPetType->getKind()}</span></li>
            <li class="list-group-item">Sexe :<span>{$objSex->getType()}</span></li>
        {/if} 
        
        {* Note *}
        <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
        </li>
    </ul>
</div>
</div>

    
{/block}
