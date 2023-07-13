<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
	rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link rel="icon" href="images/favicon.png">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<title>FAQ Locataire</title>
</head>
<body>
	@include('commun/header')
	<br>
	<br>
	<br>

	<!-- Example Code -->
	<div class="container">
		<br>
		<h1>FAQ Locataire</h1>
		<br>
		<br>
		<div class="accordion-item">
			<p>Comment vous connecter, gerez vos logement en ligne, contacter
				l'équipe... On répond ici à toutes vos questions !</p>
		</div>
		<br>
		<br>
		<br>

		<div class="accordion" id="accordionExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseOne"
						aria-expanded="true" aria-controls="collapseOne">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;"> Les règles de la
								plateforme </font></font>
					</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show"
					aria-labelledby="headingOne" data-bs-parent="#accordionExample"
					style="">
					<div class="accordion-body" id="family">
						<font style="vertical-align: inherit;"><font
								style="vertical-align: inherit;"> La plateforme vous
									permet de trouver une chambre à louer chez un hébergeur qui
									vous accueille dans son logement pour une courte ou longue
									durée. <br> <br> . Vous pouvez choisir votre chambre
									parmi des milliers d’annonces vérifiées et évaluées dans des
									centaines de villes au Cameroun et à l’étranger. <br> <br>
									. Vous pouvez échanger gratuitement avec les hébergeurs et vous
									mettre d’accord sur les conditions de votre séjour. <br>
								<br> Vous pouvez réserver en ligne votre chambre avec des
									frais de services limités qui incluent une assurance et la
									garantie de loyer impayé. <br>
								<br> . Vous devez respecter les règles de vie et de
									propreté du logement, ainsi que les horaires d’arrivée et de
									départ convenus avec l’hébergeur. <br>
								<br> . Vous devez payer le loyer à l’avance et ne pas
									sous-louer la chambre sans l’accord de l’hébergeur. <br>
								<br> . Vous devez annuler votre réservation dans les délais
									prévus par la plateforme pour bénéficier d’un remboursement ou
									d’une indemnité.
							</font></font>
					</div>
				</div>
			</div>


			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseTwo"
						aria-expanded="false" aria-controls="collapseTwo">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;"> Comment s'inscrire
								(personne physique ou morale) ? </font></font>
					</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse"
					aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
					style="">
					<div class="accordion-body" id="family">
						<P>D’abord spécialisés dans le logement étudiant, nous logeons
							les étudiants et des non fonctionnaires.</P>
						<P>> Pour vous inscrire :</P>
						<P>
							1. RDV sur la page locataire en cliquant <a href="/connexion-locataire">ICI</a>
						</P>
						<p>2. Cliquez sur Je m'inscris en haut de la page</p>
						<p>3. Renseignez vos informations personnelles et cliquez sur
							S'inscrire</p>
						<p>
						<h4>Avec quelles informations s'inscrire si c'est une
							personne morale qui gère le compte ?</h4>
						À la création de votre compte locataire, il vous sera demandé de
						renseigner certaines informations personnelles pour assurer la
						sécurité de notre plateforme de paiement. Si vous créez un compte
						pour une personne morale, renseignez simplement les informations
						personnelles de la personne physique qui gère le compte Harmony
						Horsing au sein de votre société.

						</p>
					</div>
				</div>
			</div>


			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseThree"
						aria-expanded="false" aria-controls="collapseThree">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;"> Comment me connecter à
								mon compte ? </font></font>
					</button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse"
					aria-labelledby="headingThree" data-bs-parent="#accordionExample"
					style="">
					<div class="accordion-body" id="family">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;">
								<h3>Pour accéder à votre compte :</h3>
								<p>1. Rendez-vous sur la plateforme sur laquelle vous avez
									créé votre compte.</p>
								<p>2. Cliquez sur Connexion.</p>
								<p>3. Saisissez votre adresse mail et votre mot de passe
									habituels.</p>
								<p>4. Cliquez sur Me connecter.</p>
								<h3>Si vous ne parvenez pas à vous connecter :</h3>
								<p>1. Assurez-vous d’avoir saisi la bonne adresse mail, il
									peut arriver d’avoir oublié un point ou un tiret.</p>
								<p>2. Assurez-vous d’avoir saisi le bon mot de passe : vous
									pouvez le visualiser en cliquant sur le petit oeil à droite du
									champs.</p>
								<p>Cela ne fonctionne toujours pas ? Réinitialisez votre mot
									de passe :</p>
								<p>1. Cliquez sur Mot de passe oublié, sous le champs Mot de
									passe</p>
								<p>2. Saisissez votre adresse mail et cliquez sur Envoyer le
									lien de réinitialisation.</p>
								<p>3. Rendez-vous sur votre boîte mail : cliquez sur le lien
									de réinitialisation qui vous a été envoyé.</p>
								<p>4. Saisissez votre nouveau mot de passe.</p>
								<p>Cliquez sur Confirmer.</p>
						</font></font>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="headingFour">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseFour"
						aria-expanded="false" aria-controls="collapseFour">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;"> Comment modifier mes
								coordonnées ? </font></font>
					</button>
				</h2>
				<div id="collapseFour" class="accordion-collapse collapse"
					aria-labelledby="headingFour" data-bs-parent="#accordionExample"
					style="">
					<div class="accordion-body" id="family">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;">
								<p>Pour modifier vos coordonnées :</p>
								<p>1. Cliquez sur votre nom, en haut à droite de l’écran.</p>
								<p>2. Cliquez sur Mon profil dans le menu déroulant.</p>
								<p>3. Une fois vos modifications terminées, cliquez sur
									Enregistrer en bas de l’écran.</p>
								<p>Si vous souhaitez modifier votre adresse mail,
									informez-nous en nous contactant via le chat en ligne
									directement sur la plateforme</p>
						</font></font>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="headingFive">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseFive"
						aria-expanded="false" aria-controls="collapseFive">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;"> Comment supprimer mon
								compte ? </font></font>
					</button>
				</h2>
				<div id="collapseFive" class="accordion-collapse collapse"
					aria-labelledby="headingFive" data-bs-parent="#accordionExample"
					style="">
					<div class="accordion-body">

						<p>Nous sommes navrés de vous voir partir. Pour supprimer
							votre compte :</p>
						<p>1. Cliquez sur votre nom, en haut à droite de l’écran.</p>
						<p>2. Cliquez sur Mon profil dans le menu déroulant.</p>
						<p>3. Cliquez sur Supprimer mon compte en bas de la page.</p>

					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="headingSix">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseSix"
						aria-expanded="false" aria-controls="collapseSix">
						<font style="vertical-align: inherit;"><font
							style="vertical-align: inherit;"> Parcoursup I Faciliter
								la recherche de logement pour les étudiants avec Harmony Horsing
						</font></font>
					</button>
				</h2>
				<div id="collapseSix" class="accordion-collapse collapse"
					aria-labelledby="headingSix" data-bs-parent="#accordionExample"
					style="">
					<div class="accordion-body">Chaque année, de plus en plus de
						bacheliers quittent le foyer familial pour poursuivre leurs
						études. Un pas vers l'indépendance... et la recherche d'un premier
						logement ! En 2023, le nombre d'étudiants dans l'enseignement
						supérieur au Cameroun dépassera les 3 millions. Cette hausse
						démographique étudiante pointe du doigt une problématique majeure
						: la pénurie de logements dans les grandes villes où se
						concentrent les offres de formation supérieure avec seulement 70
						000 places disponibles dans les cités universitaires, par exemple.
						La majorité des étudiants se tournent vers le secteur privé pour
						se loger, ce qui peut poser des problèmes, car les propriétaires
						peuvent être réticents à accueillir des étudiants en raison de
						leur mobilité accrue et des garanties souvent perçues comme
						insuffisantes.</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="headingSeven">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseSeven"
						aria-expanded="false" aria-controls="collapseSeven">Les
						valeurs de la communauté Harmony Hosing</button>
				</h2>
				<div id="collapseSeven" class="accordion-collapse collapse"
					aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
					<div class="accordion-body" id="family">Chez Harmony Hosing,
						on se lève chaque matin pour faire des locations une expérience
						plus simple et humaine. Une expérience juste et efficace où chacun
						est maître de sa location. Pour cela, on crée une culture commune
						aux loueurs et aux locataires : la culture du mieux loger. Elle
						nous rassemble et rassemble nos utilisateurs autour de valeurs
						communes de respect, de communication et de vivre ensemble</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header" id="headingHeigth">
					<button class="accordion-button collapsed" type="button"
						data-bs-toggle="collapse" data-bs-target="#collapseHeigth"
						aria-expanded="false" aria-controls="collapseHeigth">
						Quel type d'annonces puis-je trouver chez Harmony Hosing ?</button>
				</h2>
				<div id="collapseHeigth" class="accordion-collapse collapse"
					aria-labelledby="headingHeigth" data-bs-parent="#accordionExample">
					<div class="accordion-body" id="family">
						<p>Chez Harmony Horsing, nous proposons des milliers
							d’annonces partout au cameroun. Il s’agit essentiellement de
							petites et moyennes surfaces, meublées ou non. Peu importe la
							durée, pour un stage de fin d’études comme une licence entière :
							les logements sont disponibles pour des durées d’un mois minimum.
							Toutes nos annonces ont des dates de disponibilité à jour.</p>
						<p>Pour garantir un service de qualité à nos locataires, notre
							équipe vérifie soigneusement la qualité de chaque annonce avant
							publication.</p>

					</div>
				</div>
			</div>


		</div>
	</div>
	<br>
	<br>
	<br> @include('commun/footer')
	<!-- End Example Code -->
</body>
</html>
