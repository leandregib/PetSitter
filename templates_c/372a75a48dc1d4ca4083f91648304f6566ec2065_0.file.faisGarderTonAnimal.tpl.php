<?php
/* Smarty version 4.2.1, created on 2023-02-03 09:51:19
  from 'C:\wamp64\www\PetSitter\views\faisGarderTonAnimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dcd9179a3fc0_22369013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372a75a48dc1d4ca4083f91648304f6566ec2065' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\faisGarderTonAnimal.tpl',
      1 => 1675417878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dcd9179a3fc0_22369013 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <main>
        <div id="infoPS">
            <div class="container">
                <div class="row text-center">

                    <div class=" offset-md-3 col-md-6 px-5 my-2">
                        <h2>Choisis le PetSitter qui te convient selon tes préférences</h2>
                    </div>
                </div>
            </div>
            <!-- Filtres -->
            <form action="" method="post">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-1">
                            <p>Filtres | </p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <p>Animaux:</p>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPetTypeToDisplay']->value, 'objPetType');
$_smarty_tpl->tpl_vars['objPetType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPetType']->value) {
$_smarty_tpl->tpl_vars['objPetType']->do_else = false;
?>
                        <div class="form-check form-check-inline col-md-2">
                            <input class="form-check-input" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['objPetType']->value->checked;?>
 value='<?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getId();?>
' id='<?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getId();?>
' name ="animal[]">
                            <label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['objPetType']->value->getKind();?>
</label>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <p>Type de garde:</p>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSitterToDisplay']->value, 'objSitter');
$_smarty_tpl->tpl_vars['objSitter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objSitter']->value) {
$_smarty_tpl->tpl_vars['objSitter']->do_else = false;
?>
                        <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['objSitter']->value->checked;?>
 value='<?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getId();?>
' id='<?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getId();?>
' name ="garde[]">
                        <label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['objSitter']->value->getType();?>
</label>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                            <p>Code postal: </p>
                        </div>
                        <div class="col-md-1 px-2">
                            <input id="searchbar" onkeyup="search_animal()" type="text" name="cp" placeholder="68000">
                        </div>
                    </div>
                    <div class="mb-5 mt-2 pb-2 text-center">
                        <button id="bouttonForm" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>
            <!-- Profil des PetSitter -->
            <div id="blocIcon" class="container mt-4">
                <div class="row">
                    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Colmar</span></li>
                                <li class="list-group-item">Prénom: <span>Mario</span></li>
                                <li class="list-group-item">Age: <span>35 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS2.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Amiens</span></li>
                                <li class="list-group-item">Prénom: <span>Marlène</span></li>
                                <li class="list-group-item">Age: <span>53 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2 mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS3.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Brest</span></li>
                                <li class="list-group-item">Prénom: <span>Yann</span></li>
                                <li class="list-group-item">Age: <span>38 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS4.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Besancon</span></li>
                                <li class="list-group-item">Prénom: <span>Justine</span></li>
                                <li class="list-group-item">Age: <span>31 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blocIcon" class="container">
                <div class="row">
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS5.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Marseille</span></li>
                                <li class="list-group-item">Prénom: <span>Erick</span></li>
                                <li class="list-group-item">Age: <span>64 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS6.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Paris</span></li>
                                <li class="list-group-item">Prénom: <span>Paul</span></li>
                                <li class="list-group-item">Age: <span>25 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3  py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS7.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Lyon</span></li>
                                <li class="list-group-item">Prénom: <span>Pierre</span></li>
                                <li class="list-group-item">Age: <span>68ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Maison</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="blocFA" class="col-md-2  mx-5 my-3 py-3 mx-3">
                        <div class="text-center">
                            <img src="assets/img/icon/iconPS8.png" alt="">
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ville: <span>Poitiers</span></li>
                                <li class="list-group-item">Prénom: <span>Delphine</span></li>
                                <li class="list-group-item">Age: <span>21 ans</span></li>
                                <li class="list-group-item">Type de logement:<span>Appartement</span></li>
                                <li class="list-group-item text-center">&#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <a class="mb-5" href="#">&#x2011; 2 &#x2011;</a>
                </div>
            </div>
        </div>
    </main>

    <?php }
}
