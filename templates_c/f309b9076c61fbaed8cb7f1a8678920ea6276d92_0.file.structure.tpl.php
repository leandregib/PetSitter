<?php
/* Smarty version 4.2.1, created on 2023-02-09 14:43:20
  from 'C:\wamp64\www\PetSitter\views\structure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e506883b0025_46036910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f309b9076c61fbaed8cb7f1a8678920ea6276d92' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\structure.tpl',
      1 => 1675947292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.tpl' => 1,
    'file:views/footer.tpl' => 1,
  ),
),false)) {
function content_63e506883b0025_46036910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14766729363e506883ae4e2_20586467', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_14766729363e506883ae4e2_20586467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14766729363e506883ae4e2_20586467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
<?php
}
}
/* {/block "content"} */
}
