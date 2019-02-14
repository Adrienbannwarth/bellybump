<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="style.css"> -->

</head>

<body>

	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
			<label for="tab-1" class="tab">Connecter</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up">
			<label for="tab-2" class="tab">Inscription</label>
			<div class="login-form">

				<!-- CONNECTER -->

				<div class="sign-in-htm">

					<form action="co.php" method="POST" class="col-lg">


						<div class="group">
							<label for="user" class="label"></label>
							<input id="user-email" type="mail" placeholder="E-mail" class="input" name="email" value="">
						</div>
						<div class="group">
							<label for="pass" class="label"></label>
							<input id="p" type="password" class="input" placeholder="Mot de passe" data-type="password" name="password" value="">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check">
								<span class="icon"></span> Rester connecter</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Connexion">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Tu as oublié ton mot de passe?</a>
						</div>
					</form>


				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<!-- INSCRIRE -->
				<div class="sign-up-htm">
					<form action="register.php" method="POST" class="col-lg">
						<div class="group">

							<label for="sexe" class="label">Homme</label>
							<input id="homme" type="checkbox" class="input" data-type="homme" value="homme" name="sexe">
							<label for="sexe" class="label">Femme</label>
							<input id="femme" type="checkbox" class="input" data-type="femme" value="femme" name="sexe">
						</div>

						<div class="group">
							<label for="user" class="label"></label>
							<input id="user-prenom" type="text" class="input" placeholder="Prénom" data-type="prenom" name="prenom">
						</div>

						<div class="group">
							<label for="date" class="label"></label>
							<input type="date" id="date" class="input" placeholder="Date du terme" data-type="date" name="date">
						</div>
						<!-- table différente -->
						<div class="group">
							<label for="situation" class="label">En couple</label>
							<input id="en couple" type="checkbox" class="input" data-type="en couple" value="en couple" name="situation">
							<label for="situation" class="label">Célibataire</label>
							<input id="celibataire" type="checkbox" class="input" data-type="celibataire" value="celibataire" name="situation">

							<!-- <label for="situation">Situation familiale:</label>
							<select id="situation">
								<option value="en couple" data-type="en couple" name="situation">En couple</option>
								<option value="celibataire" data-type="celibataire" name="situation">Célibataire</option>
							</select> -->
						</div>

						<div class="group">
							<label for="pass" class="label"></label>
							<input id="pass" type="password" class="input" placeholder="Mot de passe" data-type="password" name="password">
						</div>

						<div class="group">
							<label for="pass" class="label"></label>
							<input id="user" type="mail" placeholder="E-mail" class="input" name="email">
						</div>
						<br>
						<div class="group">
							<input type="submit" class="button" value="Inscription">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Déja inscrit ?</a>
						</div>
					</form>
				</div>
			</div>
		</div>

</body>

</html>
