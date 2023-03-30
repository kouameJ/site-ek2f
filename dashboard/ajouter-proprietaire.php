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
                                <?php if (isset($_GET['mess-enr'])) { ?>
                                    <p class="mess-enr py-2 mb-4"> <?php echo $_GET['mess-enr'] ?> </p>
                                <?php } ?>
                                <div class="card shadow-2-strong card-registration">
                                    <div class="card-body p-3">
                                        <h3 class="mb-2 pb-2">Saisir les informations</h3>
                                        <form method="post" action="../controllers/ajout-pro.php">
                                            <div class="row">
                                                <div class="col-4 mb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="firstName" class="form-control" name="nomPro" required/>
                                                        <label class="form-label" for="firstName">Nom</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="lastName" class="form-control" name="prenomsPro" required/>
                                                        <label class="form-label" for="lastName">Prénoms</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <div class="form-outline">
                                                        <input type="tell" id="Numéro" class="form-control" name="numeroPro" maxlength="10" required/>
                                                        <label class="form-label" for="Numéro">Numéro (WhatsApp)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 mb-2 d-flex align-items-center">
                                                    <div class="form-outline datepicker w-100">
                                                        <input type="text" class="form-control" name="emailPro" id="birthdayDate" required/>
                                                        <label for="birthdayDate" class="form-label">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 mb-2 d-flex align-items-center">
                                                    <div class="form-outline datepicker w-100">
                                                        <input type="text" class="form-control" name="villePro" id="Password" required/>
                                                        <label for="Password" class="form-label">Ville</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <select class="select form-control" type="text" id="Possession" name="possessionPro">
                                                        <option value="Terrain">Terrain</option>
                                                        <option value="Maison">Maison</option>
                                                        <option value="Maison et terrain">Maison et terrain</option>
                                                    </select>
                                                    <label class="form-label select-label" for="Possession">Possession</label>
                                                </div>
                                            </div>
                                            <div class="mt-2 ">
                                                <input class="btn btn-primary float-end" type="submit" value="Valider" />
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