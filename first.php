<?php include('header.php'); ?>



<div class="login-wrap">
<img class="logo" src="part/img/logo.png">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connecter</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
        <div class="login-form">

<!-- CONNECTER -->

            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label"></label>
                    <input id="user" type="mail" class="input" placeholder="E-mail">
                </div>
                <div class="group">
                    <label for="pass" class="label"></label>
                    <input id="pass" type="password" class="input" placeholder="Mot de passe" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Rester connecter</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Connexion">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Tu as oublié ton mot de passe?</a>
                </div>
            </div>

<!-- INSCRIRE -->
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Prénom</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Mot de passe</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Comfirmer Mot de passe</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">E-mail</label>
                    <input id="pass" type="text" class="input">
                </div>
                <br>
                <div class="group">
                    <input type="submit" class="button" value="Inscription">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Déja inscrit ?</a>
                </div>
            </div>
        </div>
    </div>
</div>


