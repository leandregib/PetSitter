<?php
/* Smarty version 4.2.1, created on 2023-02-08 10:23:05
  from 'C:\wamp\www\PetSitter\views\galerie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e378091b8aa7_07577600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea9a199132ae242995d170588140c7ed8cef385e' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\galerie.tpl',
      1 => 1675844563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e378091b8aa7_07577600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150579046663e378091b6693_35954590', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197456169863e378091b7f63_37311908', "JS");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_150579046663e378091b6693_35954590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_150579046663e378091b6693_35954590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <div class="gallery-container">
            <div class="gallery-item" data-index="1">
                <img src="assets/img/imageGalerie1.jpg" alt="Photo de chat">
            </div>
            <div class="gallery-item" data-index="2">
                <img src="assets/img/imageGalerie2.jpg" alt="Photo de chat">
            </div>
            <div class="gallery-item" data-index="3">
                <img src="assets/img/imageGalerie3.jpg" alt="Photo de chat">
            </div>
            <div class="gallery-item" data-index="4">
                <img src="assets/img/imageGalerie4.jpg" alt="Photo de chat">
            </div>
            <div class="gallery-item" data-index="5">
                <img src="assets/img/imageGalerie5.jpg" alt="Photo de chat">
            </div>
            <div class="gallery-item" data-index="6">
                <img src="assets/img/imageGalerie6.jpg" alt="Photo de chat">
            </div>
        </div>
    </main>
<?php
}
}
/* {/block "content"} */
/* {block "JS"} */
class Block_197456169863e378091b7f63_37311908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JS' => 
  array (
    0 => 'Block_197456169863e378091b7f63_37311908',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="assets/scripts/script.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "JS"} */
}
