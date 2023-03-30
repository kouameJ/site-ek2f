<!DOCTYPE html>
<html class="desktop mbr-site-loaded">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="../assets/images/globe.png" type="image/x-icon">
        <meta name="description" content="">
  
        <title>EK2F | CONNEXION</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/connexion.css">
        <link rel="stylesheet" href="../css/connexion1.css">
    </head>
<body>
    
    <div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/images/image-1007.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<?php if (isset($_GET['erreurco'])) { ?>
					<p class="erreur py-2 mb-4"> <?php echo $_GET['erreurco'] ?> </p>
				<?php } ?>
				<span class="text-center"> 
                    <h5 class="mbr-section-title mbr-fonts-style align-center display-6 mb-4 text-white">
                        <strong>CONNECTEZ-VOUS</strong>
                    </h5>
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="../controllers/authentification.php">
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="identifiant" placeholder="Identifiant" required="required">
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass" placeholder="Mot de passe" required="required">
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  
</body>
</html>