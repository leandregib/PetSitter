{extends file="views/structure.tpl"}

{block name="content"}


<div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
<div class="text-center">
    <img src="assets/img/icon/iconPS.png" alt="">
</div>
<div>
    <ul class="list-group list-group-flush">
        {* User *}
        <li class="list-group-item">Nom : <span>{$objUser->getName()}</span></li>
        <li class="list-group-item">Prénom : <span>{$objUser->getFirstName()}</span></li>
        <li class="list-group-item">Ville : <span>{$objCity->getName()}</span></li>
        <li class="list-group-item">Date de naissance : <span>{$objUser->getBirthday()|date_format:"d/m/Y"}</span></li>
        <li class="list-group-item">Email : <span>{$objUser->getMail()}</span></li>
        <li class="list-group-item">Numéro de téléphone : <span>{$objUser->getPhone()}</span></li>
        <li class="list-group-item">Description : <span>{$objUser->getDescription()}</span></li>
        
        {* Petsitter *}
        {* <li class="list-group-item">Type de logement :<span>{$objHome->getType()}</span></li>
        <li class="list-group-item">Type de garde :<span>{$objSitter->getType()}</span></li>
        <li class="list-group-item">Type d'animal :<span>{$objPetType->getKind()}</span></li> *}

        {* Pet(s) *}
        {* <li class="list-group-item">Nom :<span>{$objPet->getName()}</span></li>
        <li class="list-group-item">Date de naissance :<span>{$objPet->getBirthday()}</span></li>
        <li class="list-group-item">Type d'animal :<span>{$objPet->getTypeid()}</span></li>
        <li class="list-group-item">Sexe :<span>{$objPet->getSexid()}</span></li> *}
        
        {* Note *}
        <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
        </li>
    </ul>
</div>
</div>

    
{/block}
