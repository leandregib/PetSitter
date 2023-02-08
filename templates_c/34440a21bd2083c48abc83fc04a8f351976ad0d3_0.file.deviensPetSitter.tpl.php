<?php
/* Smarty version 4.2.1, created on 2023-02-08 08:26:51
  from 'C:\wamp\www\PetSitter\views\deviensPetSitter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e35ccbc39a96_13314763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34440a21bd2083c48abc83fc04a8f351976ad0d3' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\deviensPetSitter.tpl',
      1 => 1675844563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e35ccbc39a96_13314763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129470397263e35ccbc38950_19115746', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_129470397263e35ccbc38950_19115746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_129470397263e35ccbc38950_19115746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <div class="container">
            <div class="row text-center">
                <div>
                    <div>
                        <h2 class="px-5 my-2">Fais de la garde animalière</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div>
                    <p class="offset-3 col-md-6 my-2 px-4">Pour être choisi comme PetSitter, arrange toi pour ne pas être trop loin de ton
                        contact. Tu auras une note qui te sera attribué à la fin de chaque garde
                        Ca te permettra d'obtenir une moyenne sur ton profil
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class=" offset-md-2 col-md-4 text-center">
                    <img class="imgDP" src="assets/img/mainPate.jpg" alt="Main homme et patte de chien">
                </div>
                <div class="col-md-4 text-center py-5">
                    <p>Mettre la main à la patte, te permettra de boucler plus facilement tes fins de mois.
                        N'oublie pas que c'est un service pour chacun
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-4">
                <div class=" offset-md-2 col-md-4 text-center py-5">
                    <p>Le meilleur ami des animaux c'est toi, alors nous te faisons confiance pour
                        prendre soin d'eux et rester bienveillant avec tout le monde
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="imgDP" src="assets/img/photoForet.jpg" alt="Une femme et chien dans les bois">
                </div>
            </div>
        </div>
        <div class="container">
            <!-- <hr> -->
        </div>
        <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12 my-4">
                            <p>Pour faire parti de nos PetSitter, <a href="index.php?ctrl=page&action=resteDuFormulaire">Clique ici</a> </p>
                        </div>
                    </div>
                </div>
        
    </main>
<?php
}
}
/* {/block "content"} */
}
