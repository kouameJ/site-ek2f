<!DOCTYPE html>
<html class="desktop mbr-site-loaded">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="../assets/images/globe.png" type="image/x-icon">
        <meta name="description" content="">
  
        <title>EK2F | CONTACT</title>
        <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/mbr-additional.css" type="text/css">
    </head>
<body>
    <?php include('../includes/menu.php'); ?>
    <section class="sect-info-Bfre py-5">
		<div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-md-12 col-lg-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center display-2 text-white">
                        <strong>CONTACT</strong>
                    </h3>
                </div>
            </div>
        </div>
	</section>

    <section class="py-5 section-contact-items">
		<div class="container mb-5">
            <?php if (isset($_GET['erreurme'])) { ?>
                <p class="erreurme py-3 mb-4"> <?php echo $_GET['erreurme'] ?> </p>
            <?php } ?>
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4 mb-3 px-3">
                    <img src="../assets/images/image-1009.png" alt="Immobilier" style="height:100px; width: 100px; margin: auto;">
                    <p class="mbr-text mbr-fonts-style mb-0 display-7">
                        <a href="#">Yamoussoukro, Quatier Thérèse</a>
                    </p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 mb-3 px-3">
                    <img src="../assets/images/image-1008.png" alt="Immobilier" style="height:100px; width: 100px; margin: auto;">
                    <p class="mbr-text mbr-fonts-style mb-0 display-7">
                        <a href="mailto:info@ek2f.ci" style="text-decoration: none">info@ek2f.ci</a>
                    </p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 mb-3 px-3">
                    <img src="../assets/images/image-1010.png" alt="Immobilier" style="height:100px; width: 100px; margin: auto;">
                    <p class="mbr-text mbr-fonts-style mb-0 display-7">
                    <a href="tel:+225 27 22 47 05 00">+225 07 07 98 26 27</a>
                    </p>
				</div>
			</div>
		</div>
	</section>

    <section class="mbr-section my-5" data-rv-view="791">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Laissez nous un message</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <form class="mbr-form" action="../controllers/contact-form.php" method="post">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style " for="name-form1-4">Nom</label>
                                    <input type="text" class="form-control" name="nommessages" required="" id="name-form1-4">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4">Email</label>
                                    <input type="email" class="form-control" name="emailmessages" required="" id="email-form1-4">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-4">Téléphone</label>
                                    <input type="tel" class="form-control" name="telephonemessages" id="phone-form1-4" maxlenght="10">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Message</label>
                            <textarea type="text" class="form-control" name="textmessages" rows="7" id="message-form1-4"></textarea>
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
</section>
    
    <?php include('../includes/footer.php'); ?>
    <script src="../js/bootstrap.bundle.min.js.téléchargement"></script>
</body>
</html>