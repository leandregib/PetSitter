<?php
/* Smarty version 4.3.0, created on 2023-02-10 15:00:19
  from 'C:\wamp64\www\PetSitter\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e65c03dcbe10_89571467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8cc3e3e76cccbfef899fb5ecc2eab10b7072d7' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\footer.tpl',
      1 => 1675947292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e65c03dcbe10_89571467 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3279964863e65c03dcaea8_25835411', "JS");
?>


</body>

</html><?php }
/* {block "JS"} */
class Block_3279964863e65c03dcaea8_25835411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'JS' => 
  array (
    0 => 'Block_3279964863e65c03dcaea8_25835411',
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
