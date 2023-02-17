<?php
/* Smarty version 4.3.0, created on 2023-02-17 08:33:59
  from 'C:\wamp64\www\PetSitter\views\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ef3bf765e1f9_65016067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '363f8cee89e52a09511f978187a939f36248fabd' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\contact.tpl',
      1 => 1676535752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ef3bf765e1f9_65016067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191316493363ef3bf765abf5_48777910', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_191316493363ef3bf765abf5_48777910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191316493363ef3bf765abf5_48777910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <div class="container">
            <div class="row text-center">
                <!-- Google maps -->
                <div class="col-md-6 my-5">
                    <iframe class="maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.7471308683985!2d7.364816315883287!3d48.07652366338987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479165fb30b15b99%3A0x9bfe7b716880d65b!2sCCI%20Campus%20Alsace!5e0!3m2!1sfr!2sfr!4v1669984755306!5m2!1sfr!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Formulaire -->
                <div class="col-md-2"></div>
                <div class="col-md-3 my-5">
                    <form action="" method="post">
                        <div class="my-1">
                            <label for="name" class="form-label">Prénom</label>
                            <input type="text" class="form-control mx-auto" placeholder="Anatole">
                        </div>
                        <div class="my-1">
                            <label for="code" class="form-label">Code postal</label>
                            <input type="text" class="form-control mx-auto" placeholder="25000">
                        </div>
                        <div class="my-1">
                            <label for="mail" class="form-label">Email</label>
                            <input type="mail" class="form-control mx-auto" placeholder="anatole@gmail.fr">
                        </div>
                        <div class="my-1">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">J’autorise ce site à conserver mes
                                données transmises via ce formulaire</label>
                        </div>
                        <div class="mt-3">
                            <button id="bouttonForm" type="submit">Envoyer</button>
                        </div>
                        <div class="p-3">
                            <p>
                                N'hésite pas à poser tes questions, si celles ci sont pertinentes et
                                utiles pour tous, elles iront trouver leur place dans la FAQ ! &#128521;
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
}
}
/* {/block "content"} */
}
