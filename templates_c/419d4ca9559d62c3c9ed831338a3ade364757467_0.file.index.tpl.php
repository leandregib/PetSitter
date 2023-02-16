<?php
/* Smarty version 4.3.0, created on 2023-02-16 10:23:48
  from 'C:\wamp64\www\PetSitter\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ee0434381727_34358422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419d4ca9559d62c3c9ed831338a3ade364757467' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\index.tpl',
      1 => 1675947292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ee0434381727_34358422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135698184763ee0434380840_69330116', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/structure.tpl");
}
/* {block "content"} */
class Block_135698184763ee0434380840_69330116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135698184763ee0434380840_69330116',
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
