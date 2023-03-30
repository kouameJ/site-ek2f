<!DOCTYPE html>
<html class="desktop mbr-site-loaded">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="../assets/images/globe.png" type="image/x-icon">
        <meta name="description" content="">
  
        <title>EK2F | LOCATION-VENTE</title>
        <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/fontawesome.all.min.css">
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
                        <strong>LOCATION-VENTE</strong>
                    </h3>
                </div>
            </div>
        </div>
	</section>

    <section data-bs-version="5.1" class="content1 my-4 pt-3" id="acontent1-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center display-5" id="idterrain">
                        <strong>TERRAINS</strong>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <main> 
            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                    <?php
                        include('../controllers/connexion-db.php');
                        include('../controllers/affiche-valeur.php');
                    ?>
                    <?php
                        foreach ($listeMaiCounts as $listeMaiCount)
                        {
                    ?>
                        <div class="col px-2"> 
                            <div class="card shadow-sm img-dim"> 
                                <img src="../assets/images/<?php echo $listeMaiCount['image_maison'];?>" class="card-img-top" alt="..." style="height: 230px;background-size:contain;"> 
                                <div class="label-top shadow-sm"><?php echo $listeMaiCount['lieu_maison'];?></div>
                                <div class="card-body"> 
                                    <div class="clearfix mb-1"style="height: 50px;"> 
                                        <h4>
                                            <span class="float-start text-primary">
                                                <strong><?php echo $listeMaiCount['titre_maison'];?></strong> 
                                            </span> 
                                        </h4>
                                    </div> 
                                    <div style="height: 100px;">
                                        <h5 class="card-title" style="text-align:justify"><?php echo $listeMaiCount['description_maison'];?></h5> 
                                    </div>
                                    <div class="d-grid gap-2"> 
                                        <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    <?php   
                        }
                    ?>
                </div> 
            </div>
        </main>
    </section>

    <hr class="mx-5" style="border: 2px solid #3020df">
    
    <section data-bs-version="5.1" class="content1 my-4 pt-3" id="acontent1-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center display-5" id="idmaison">
                        <strong>MAISONS</strong>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <main> 
            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1000.jpg" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">ASSABOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>Duplexe </strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor eniam quidem eaque ut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1002.jpg" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">TRIKASSOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>villa base </strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1006.jpg" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">ASSABOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>Triplexe </strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor sut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1007.jpg" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">KOSSOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>Domaine</strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </main>
    </section>

    <hr class="mx-5" style="border: 2px solid #3020df">

    <section data-bs-version="5.1" class="content1 my-4 pt-3" id="acontent1-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center display-5" id="idopportunite">
                        <strong>OPPORTUNITES A SAISIR</strong>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <main> 
            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1015.jfif" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">ASSABOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>Duplexe </strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor eniam quidem eaque ut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1016.jfif" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">TRIKASSOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>villa base </strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col px-2"> 
                        <div class="card shadow-sm"> 
                            <img src="../assets/images/image-1017.jfif" class="card-img-top" alt="..." style="height: 230px;background-size:cover;"> 
                            <div class="label-top shadow-sm">ASSABOU</div>
                            <div class="card-body"> 
                                <div class="clearfix mb-1"style="height: 50px;"> 
                                    <h4>
                                        <span class="float-start text-primary">
                                            <strong>Triplexe </strong> 
                                        </span> 
                                    </h4>
                                </div> 
                                <div style="height: 100px;">
                                    <h5 class="card-title" style="text-align:justify">Lorem, ipsum dolor sut eveniet aut quis rerum. </h5> 
                                </div>
                                <div class="d-grid gap-2"> 
                                    <a href="#" class="btn btn-warning">Je suis intéressé(e)</a> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </main>
    </section>

    <?php include('../includes/footer.php'); ?>
    <script src="../js/bootstrap.bundle.min.js.téléchargement"></script>
</body>
</html>