<?php
/* Smarty version 4.2.1, created on 2023-02-03 07:31:17
  from 'C:\wamp64\www\PetSitter\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dcb845d69d44_79827141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8cc3e3e76cccbfef899fb5ecc2eab10b7072d7' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\footer.tpl',
      1 => 1675409475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dcb845d69d44_79827141 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <a href="index.php?ctrl=page&action=planDuSite">Plan du site</a>
            </div>

            <div class="col-md-4">
                &#xA9; Léandre - 2022
            </div>
            <div class="col-md-4">
                <a href="index.php?ctrl=page&action=mentions">Mentions légales</a>
            </div>
        </div>
    </div>
</footer>

<?php echo '<script'; ?>
 src="assets/scripts/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<?php if (($_smarty_tpl->tpl_vars['strTitle']->value == "PetSitter - Galerie photo")) {?>  

    <?php echo '<script'; ?>
 src="assets/scripts/script.js"><?php echo '</script'; ?>
>

<?php }?>
</body>

</html><?php }
}
