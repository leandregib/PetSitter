<?php
/* Smarty version 4.2.1, created on 2023-02-02 15:10:33
  from 'C:\wamp64\www\PetSitter\views\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dbd269650d90_07398238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b87a8fc3494ba1b37c3f86eadaac71c35dd26a' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\inscription.tpl',
      1 => 1675350629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dbd269650d90_07398238 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <option <?php if (($_smarty_tpl->tpl_vars['intCity']->value == '')) {?> selected <?php }?> value=''>--</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrCityToDisplay']->value, 'objCity');
$_smarty_tpl->tpl_vars['objCity']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objCity']->value) {
$_smarty_tpl->tpl_vars['objCity']->do_else = false;
?>
								<option <?php echo $_smarty_tpl->tpl_vars['objCity']->value->selected;?>
 value='<?php echo $_smarty_tpl->tpl_vars['objCity']->value->getId();?>
'><?php echo $_smarty_tpl->tpl_vars['objCity']->value->getCp();?>
 <?php echo $_smarty_tpl->tpl_vars['objCity']->value->getName();?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
</div><?php }
}
