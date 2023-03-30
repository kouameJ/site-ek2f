<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="../assets/images/globe.png" type="image/x-icon">
        <meta name="description" content="">
  
        <title>EK2F | MENU</title>
        <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/dashstyles.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body class="sb-nav-fixed">
        <?php
            include('../includes/header-admin.php');
        ?>
        <div id="layoutSidenav">
            <?php
                include('../includes/menu-admin.php');
            ?>
            <div id="layoutSidenav_content">
                <?php
                    include('../controllers/connexion-db.php');
                ?>
                <main>
                    <div class="container-fluid p-4">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#4e73df;">
                                    <?php
                                        include('../controllers/affiche-valeur.php');
                                    ?>
                                    <div class="card-header">Messages Reçus</div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h4 class="text-white"><?php echo $nbrMessage;?> Messages</h4>
                                        <div class="text-white"><i class="bi bi-envelope-fill"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#1cc88a;">
                                    <div class="card-header">Terrains</div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4 class="text-white">Terrains</h4>
                                        <div class="text-white"><i class="bi bi-map-fill"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#36b9cc;">
                                    <div class="card-header">Maisons</div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4 class="text-white"><?php echo $nbrMaison;?> Maisons</h4>
                                        <div class="text-white"><i class="bi bi-house-fill"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#e74a3b;">
                                    <div class="card-header">Propriétaires</div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4 class="text-white"><?php echo $nbrProprietaire;?> Propriétaires</h4>
                                        <div class="text-white"><i class="bi bi-people-fill"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                    include('../includes/footer-admin.php');
                ?>
            </div>
        </div>
        <script src="../js/scripts.js"></script>
        <script src="../js/bootstrap.bundle.min.js.téléchargement"></script>
    </body>
</html>
