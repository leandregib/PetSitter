<?php
/* Smarty version 4.2.1, created on 2023-02-08 08:26:33
  from 'C:\wamp\www\PetSitter\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e35cb93db776_50100935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc22641fc307cb8f42f82238981ca1ed6f422912' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\footer.tpl',
      1 => 1675844563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e35cb93db776_50100935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <a href="index.php?ctrl=page&action=planDuSite">Plan du site</a>
            </div>

            <div class="col-md-4">
                &#xA9; Léandre - 2022
            </div>
            <div class="col-md-4">
                <a href="index.php?ctrl=page&action=mentionsLegales">Mentions légales</a>
            </div>
        </div>
    </div>
</footer>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122703447963e35cb93da837_56880372', "JS");
?>


</body>

</html><?php }
/* {block "JS"} */
class Block_122703447963e35cb93da837_56880372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JS' => 
  array (
    0 => 'Block_122703447963e35cb93da837_56880372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="assets/scripts/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "JS"} */
}
