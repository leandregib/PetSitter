<?php
/* Smarty version 4.2.1, created on 2023-02-08 15:24:54
  from 'C:\wamp\www\PetSitter\views\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e3bec6be4b02_86968971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e8221cf5795d1305bf01871e20f06fb761c083' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\inscription.tpl',
      1 => 1675869879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3bec6be4b02_86968971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111530987363e3bec6bda829_79816766', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_111530987363e3bec6bda829_79816766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_111530987363e3bec6bda829_79816766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Formulaire Deviens PetSitter -->
<div>
    <div class="container" id="aaaa">
        <div class="row mt-5">
            <div class="offset-md-4 col-md-4 mt-5">
                <form action="" method="post">
                    <div class="mt-5">
                        <label for="name" class="form-label" >Nom</label>
                        <input type="text" class="form-control mx-auto" name ="name" id="name" placeholder="Net">
                    </div>
                    <div>
                        <label for="firstname" class="form-label" >Prénom</label>
                        <input type="text" class="form-control mx-auto" name="firstname" id="firstname" placeholder="Beans">
                    </div>
                    <div>
                        <label for="mail" class="form-label" >Email</label>
                        <input type="email" class="form-control mx-auto" name="mail" id="mail" placeholder="vsCodeWinner@gmail.fr">
                    </div>
                    <div>
                        <label for="password" class="form-label" >Saisir un mot de passe</label>
                        <input type="password" class="form-control mx-auto" name="password" id ="password" placeholder="********">
                    </div>
                    <div>
                        <label for="confirmpassword" class="form-label" >Confirmer le mot de passe</label>
                        <input type="password" class="form-control mx-auto" name="confirmpassword" id="confirmpassword" placeholder="********">
                    </div>
                    <div>
                        <label for="phone" class="form-label" >Télephone</label>
                        <input type="tel" class="form-control mx-auto" name="phone" id="phone" placeholder="0367300236">
                    </div>
                    <div>
                        <label for="date" class="form-label" >Date de naissance</label>
                        <input type="date" class="form-control mx-auto" name="birthday" id="birthday">
                    </div>
                    <div>
                        <label for="adress" class="form-label" >Adresse</label>
                        <input type="text" class="form-control mx-auto" name="adress" id="adress" placeholder="32 Rue de l'Industrie">
                    </div>
                    <div>
                        <label for="cityid" class="form-label" >Ville</label>
						<select id="cityid" name="cityid">
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
                            <label for="forpFile" class="form-label" name="description">Description:</label>
                            <textarea class="form-control" rows="6" name="description"></textarea>
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
</div>
<?php
}
}
/* {/block "content"} */
}
