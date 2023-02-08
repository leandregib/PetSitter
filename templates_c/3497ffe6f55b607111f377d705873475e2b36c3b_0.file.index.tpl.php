<?php
/* Smarty version 4.2.1, created on 2023-02-08 08:26:33
  from 'C:\wamp\www\PetSitter\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e35cb938c043_72474562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3497ffe6f55b607111f377d705873475e2b36c3b' => 
    array (
      0 => 'C:\\wamp\\www\\PetSitter\\views\\index.tpl',
      1 => 1675844563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e35cb938c043_72474562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18612067363e35cb938b3c6_32371142', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_18612067363e35cb938b3c6_32371142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18612067363e35cb938b3c6_32371142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="container-img col-md-6 mt-2">
                    <img class="imgDP" alt="Chien" src="assets/img/chienPA.jpg">
                    <div class="infos-hover">
                        <p class="text-center my-3">Soucieux de laisser ton compagon lors de tes absences <br>
                            Ne culpabilise plus ..</p>
                        <p>Clique m'en cinq !</p>
                        <a href="faisGarderTonAnimal.php"><img src="assets/img/pateChien.png" alt=""></a>
                    </div>
                </div>
                <div class="container-img col-md-6 mt-2">
                    <img class="imgDP" alt="Chat" src="assets/img/chatPA.jpg">
                    <div class="infos-hover">
                        <p class="text-center my-3">Amoureux des animaux, <br> Passe un peu plus de
                            temps avec eux en t'en occupant</p>
                        <p>Clique m'en cinq !</p>
                        <a href="deviensPetSitter.php"><img src="assets/img/pateChat.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div id="textPA" class=" offset-md-3 col-md-6 mt-3">
                    <p>Concerné par le bien être de tes animaux de compagnie,
                        nous te proposons de les garder,
                        alors pars rassuré ! PetSitter, la platforme de garde d'animaux pour faciliter ta
                        vie
                        quotidienne et tes vacances. Elle te permet d'avoir l'esprit tranquille quant
                        à ton/tes cher(s) petit(s) compagnon(s) qui mérite(nt) toute notre attention
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <img class="pb-5" src="assets/img/photoPAChien.png" alt="">
            </div>
        </div>
    </main>
<?php
}
}
/* {/block "content"} */
}
