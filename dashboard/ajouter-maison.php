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
                <main>
                    <div class="container-fluid pt-2 pb-5">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card shadow-2-strong card-registration">
                                    <div class="card-body p-3">
                                        <h3 class="mb-2 pb-2">Nouvelle maison</h3>
                                        <form method="post" action="../controllers/ajout-maison.php" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-4 mb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="firstName" class="form-control" name="lieuMai" required/>
                                                        <label class="form-label" for="firstName">Lieu</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <div class="form-outline">
                                                        <input type="file" id="lastName" class="form-control" name="img" required/>
                                                        <label class="form-label" for="lastName">Image</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="Numéro" class="form-control" name="titreMai" required/>
                                                        <label class="form-label" for="Numéro">Titre</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <select class="select form-control" type="text" id="Possession" name="proMai">
                                                        <option value="Terrain">Terrain</option>
                                                        <option value="Maison">Maison</option>
                                                        <option value="Maison et terrain">Maison et terrain</option>
                                                    </select>
                                                    <label class="form-label select-label" for="Possession">Proprietaire</label>
                                                </div>
                                                <div class="col-4 mb-2 d-flex align-items-center">
                                                    <div class="form-outline w-100">
                                                        <textarea type="text" class="form-control" name="desMai" rows="7" placeholder="Description" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 ">
                                                <input class="btn btn-primary float-end" type="submit" name="valider" value="Valider" />
                                            </div>
                                        </form>
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