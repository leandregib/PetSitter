<?php
/* Smarty version 4.2.1, created on 2023-02-09 14:43:29
  from 'C:\wamp64\www\PetSitter\views\faisGarderTonAnimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e506912b89a1_03345677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372a75a48dc1d4ca4083f91648304f6566ec2065' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\faisGarderTonAnimal.tpl',
      1 => 1675947292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/resultPetsitter.tpl' => 1,
  ),
),false)) {
function content_63e506912b89a1_03345677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65649420963e5069121a905_59080484', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_65649420963e5069121a905_59080484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65649420963e5069121a905_59080484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPetTypeToDisplay']->value, 'objPetType');
$_smarty_tpl->tpl_vars['objPetType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPetType']->value) {
$_smarty_tpl->tpl_vars['objPetType']->do_else = false;
?>
                            <div class="form-check form-check-inline col-md-2">
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
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <p>Type de garde:</p>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSitterToDisplay']->value, 'objSitter');
$_smarty_tpl->tpl_vars['objSitter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objSitter']->value) {
$_smarty_tpl->tpl_vars['objSitter']->do_else = false;
?>
                            <div class="form-check form-check-inline col-md-2">
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
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <p>Code postal: </p>
                        </div>
                        <div class="col-md-1 px-2">
                            <input id="searchbar" onkeyup="search_animal()" type="text" name="cp" placeholder="68000" value="<?php echo $_smarty_tpl->tpl_vars['intCP']->value;?>
">
                        </div>
                    </div>
                    <div class="mb-5 mt-2 pb-2 text-center">
                        <button id="bouttonForm" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>
            <!-- Profil des PetSitter -->
            
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrResultPetsitter']->value, 'arrDetResultPetsitter');
$_smarty_tpl->tpl_vars['arrDetResultPetsitter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value) {
$_smarty_tpl->tpl_vars['arrDetResultPetsitter']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("file:views/resultPetsitter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </main>
<?php
}
}
/* {/block "content"} */
}
