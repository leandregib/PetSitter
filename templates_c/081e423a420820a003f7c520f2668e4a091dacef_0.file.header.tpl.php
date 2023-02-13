<?php
/* Smarty version 4.3.0, created on 2023-02-13 14:41:51
  from 'C:\wamp64\www\PetSitter\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ea4c2f8d2bd7_71441671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '081e423a420820a003f7c520f2668e4a091dacef' => 
    array (
      0 => 'C:\\wamp64\\www\\PetSitter\\views\\header.tpl',
      1 => 1676299310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ea4c2f8d2bd7_71441671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['strTitle']->value;?>
</title>
    <meta name="description" content="Un acceuil pour vous permettre la garde de vos animaux plus facilement">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124983016263ea4c2f8c8233_89175513', "CSS");
?>


</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-xl">
                    <div class="logoNav" class="container">
                        <a href="index.php"><img src="assets/img/logo.png" alt="Logo du site"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto mx-5">
                            <li class="nav-item mx-5 text-center py-4">
                                <a class="nav-link" href="index.php?ctrl=page&action=faisGarderTonAnimal">Fais garder
                                    ton animal</a>
                            </li>
                            <li class="nav-item mx-sm-5 text-center py-4">
                                <a class="nav-link" href="index.php?ctrl=page&action=deviensPetSitter">Deviens
                                    PetSitter</a>
                            </li>
                            <li class="nav-item mx-sm-5 text-center py-4">
                                <a class="nav-link" href="index.php?ctrl=page&action=galerie">Galerie</a>
                            </li>
                            <li class="nav-item mx-sm-5 text-center py-4">
                                <a class="nav-link" href="index.php?ctrl=page&action=contact">Contact</a>
                            </li>
                            
                            <?php if ((isset($_SESSION['user']['id'])) && $_SESSION['user']['id'] != '') {?>
                                
                                <li class="nav-link mx-sm-5 text-center py-4 my-1">
                                    Bonjour <?php echo $_SESSION['user']['firstname'];?>
<a class="nav-link" href="index.php?ctrl=user&action=logout">Se déconnecter</a>  
                                </li>
                            
                            <?php } else { ?>
                                <li class="nav-link mx-sm-5 text-center py-4">
                                    <button data-bs-toggle="modal" data-bs-target="#conlog" id="logbtn">Connexion</button>   
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--Form Connexion-->
            <div class="modal fade" id="conlog">
                <div class="modal-dialog modal-fullscreen-md-down modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                data-bs-target="#conlog"></button>
                        </div>
                        <div class="modal-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel">
                                    <form name="FormCo" method="post" action="index.php?ctrl=user&action=login">
                                        <div class="text-center mb-3">
                                            <p>Connectez-vous</p>
                                        </div>
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="loginName" name="mail" class="form-control" />
                                            <label class="form-label" for="loginName">Email</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="loginPassword" name="password" class="form-control" />
                                            <label class="form-label" for="loginPassword">Mot de passe</label>
                                        </div>
                                        <!-- 2 column grid layout -->
                                        <div class="row mb-4">
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <!-- Checkbox -->
                                                <div class="form-check mb-3 mb-md-0 ">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="loginCheck" checked />
                                                    <label class="form-check-label" for="loginCheck"> Restez connecté
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 d-flex justify-content-center">
                                                <!-- Simple link -->
                                                <a href="#!">Mot de passe oublié?</a>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit"
                                                class="btn btn-danger  btn-block mb-3">Connexion</button>
                                        </div>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <p>Pas encore membre ? <a
                                                    href="index.php?ctrl=user&action=inscription">S'inscrire</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header><?php }
/* {block "CSS"} */
class Block_124983016263ea4c2f8c8233_89175513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'CSS' => 
  array (
    0 => 'Block_124983016263ea4c2f8c8233_89175513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="assets/styles/style.css">/>
    <?php
}
}
/* {/block "CSS"} */
}
