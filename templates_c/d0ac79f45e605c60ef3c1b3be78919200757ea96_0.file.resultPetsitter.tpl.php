<?php
/* Smarty version 4.2.1, created on 2023-02-08 08:31:28
  from 'C:\wamp\www\PetSitter\views\resultPetsitter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e35de0164892_91841326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ac79f45e605c60ef3c1b3be78919200757ea96' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\resultPetsitter.tpl',
      1 => 1675844563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e35de0164892_91841326 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
        <div class="text-center">
            <img src="assets/img/icon/iconPS.png" alt="">
        </div>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Ville: <span><?php echo $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['city_name'];?>
</span></li>
                <li class="list-group-item">Prénom: <span><?php echo $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['user_name'];?>
</span></li>
                <li class="list-group-item">Age: <span><?php echo $_smarty_tpl->tpl_vars['arrDetResultPetsitter']->value['user_birthday'];?>
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
