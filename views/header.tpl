<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$strTitle}</title>
    <meta name="description" content="Un acceuil pour vous permettre la garde de vos animaux plus facilement">

    {block name="CSS"}
        <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="assets/styles/style.css">/>
    {/block}

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
                            
                            {if isset($smarty.session.user.id) && $smarty.session.user.id != ''}
                                
                                <li class="nav-link mx-sm-5 text-center py-4 my-1">
                                    Bonjour{$smarty.session.user.firstname}<a class="nav-link" href="index.php?ctrl=user&action=logout">Se déconnecter</a>  
                                </li>
                            
                            {else}
                                <li class="nav-link mx-sm-5 text-center py-4">
                                    <button data-bs-toggle="modal" data-bs-target="#conlog" id="logbtn">Connexion</button>   
                                </li>
                            {/if}
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
                                    <form name="FormCo" method="post" action="index.php?ctrl=page&action=accueil">
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
</header>