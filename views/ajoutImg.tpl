{extends file="views/structure.tpl"}

{block name="content"}
	{if $strPage == "ajoutImg"}
		<h2>Ajouter une image</h2>
		<p>Formulaire permettant d'ajouter une image</p>
	{else}
		<h2>Modifier une image</h2>
		<p>Formulaire permettant de modifier une image</p>
	{/if}
	<form name="formAdd" method="POST" action="index.php?ctrl=article&action={$strPage}" enctype="multipart/form-data">
		<fieldset>
			<p>
				<label for="description">Description</label>
				<textarea id="description" name="description" >{$objPicture->getDescription()}</textarea>
			</p>
			<p>
				{if $objPicture->getName() != ''}
				<img src="assets/img-users/{$objPicture->getName()}" />
				<input type="hidden" name="name" value="{$objPicture->getName()}" />
				{/if}
				<label for="image">Image</label>
				<input id="image" type="file" name="image" />
			</p>
			<p><input type="submit" value="{if $strPage == 'ajoutImg'}Ajouter{else}Modifier{/if}" />
		</fieldset>
	</form>	
{/block}
