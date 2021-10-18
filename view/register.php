<body style="background-color: #16a085;">
	<section id="login-container">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 midway-horizontal midway-vertical fadeInDown animated">
			<div id="logbox" class="register">
				<h1><i class="fa fa-twitter"></i> Inscrivez-vous !</h1>
				<form method="POST" action="register.php">

					<div class="form-input">
						<span class="username">
							<input type="text" name="username" placeholder="Username">
						</span>

						<?php
							// S'il y a une erreur sur le nom alors on affiche
							if (isset($er_username)){
						?>
						<div><?= $er_username ?></div>
						<?php
							}
						?>
					</div>

					<div class="form-input">
						<span class="email">
							<input type="text" name="email" placeholder="Email">
						</span>

						<?php
							if (isset($er_email)){
						?>
							<div><?= $er_email ?></div>
						<?php
							}
						?>
					</div>

					<div class="form-input">
						<span class="password">
							<input type="password" name="mdp" placeholder="Password">
						</span>

						<?php
							if (isset($er_mdp)){
						?>
							<div><?= $er_mdp ?></div>
						<?php
							}
						?>
					</div>

					<div class="form-submit">
						<input type="submit" name="inscription" value="Je m'inscris !">	
					</div>
					<p class="account">Vous avez un compte ? <a href="index.php">Connectez-vous !</a></p>
				</form>
			</div>
		</div>
	</section>