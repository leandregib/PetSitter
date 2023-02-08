<?php
/* Smarty version 4.2.1, created on 2023-02-08 13:57:42
  from 'C:\wamp\www\PetSitter\views\resteDuFormulaire.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e3aa56acdca4_03075391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64b458a388e4f3cbec7c8425ed3dbb3c6cad76e9' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\resteDuFormulaire.tpl',
      1 => 1675864662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3aa56acdca4_03075391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65316897563e3aa56abe764_65502960', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_65316897563e3aa56abe764_65502960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65316897563e3aa56abe764_65502960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>
    <div>
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form action="" method="post">
                        <div class="mt-3">
                            <span>Animaux que tu veux garder: </span>
                            <div id="formDPS">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPetTypeToDisplay']->value, 'objPetType');
$_smarty_tpl->tpl_vars['objPetType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPetType']->value) {
$_smarty_tpl->tpl_vars['objPetType']->do_else = false;
?>                            
                                    <div class="form-check form-check-inline">                            
                                    <input class="form-check-input" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['objPetType']->value->checked;?>
 value='<?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getId();?>
' id='<?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getId();?>
' name ="animal[]">
                                <label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getKind();?>
</label>
                                </div> 
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                           
                                                            </div>
                        </div>
                        <div class="mt-3">
                            <span>Garde que tu souhaites: </span>
                            <div id="formDPS">
                                <div class="form-check form-check-inline">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSitterToDisplay']->value, 'objSitter');
$_smarty_tpl->tpl_vars['objSitter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objSitter']->value) {
$_smarty_tpl->tpl_vars['objSitter']->do_else = false;
?>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['objSitter']->value->checked;?>
 value='<?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getId();?>
' id='<?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getId();?>
' name ="garde[]">
                                    <label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getType();?>
</label>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
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

<?php
}
}
/* {/block "content"} */
}
