<?php
/* Smarty version 4.2.1, created on 2023-02-09 14:45:14
  from 'C:\wamp64\www\PetSitter\views\resultPetsitter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e506fa7d3068_49269921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4808b0edc625dca95461bca9f8e2c2cbaa7e8b53' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\resultPetsitter.tpl',
      1 => 1675953910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e506fa7d3068_49269921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\PetSitter\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
        <div class="text-center">
            <img src="assets/img/icon/iconPS.png" alt="">
        </div>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Ville: <span><?php echo $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['city_name'];?>
</span></li>
                <li class="list-group-item">Prénom: <span><?php echo $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['user_firstname'];?>
</span></li>
                <li class="list-group-item">Age: <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['user_birthday'],"d/m/Y");?>
</span></li>
                <li class="list-group-item">Type de logement:<span><?php echo $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['home_type'];?>
</span></li>
                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                </li>
            </ul>
        </div>
    </div>
                
    <?php }
}
