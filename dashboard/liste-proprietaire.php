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
                    <div class="container-fluid py-4">
                        <!-- DataTales Example -->
                        <?php if (isset($_GET['mess-modif'])) { ?>
                            <p class="mess-enr py-2 mb-4"> <?php echo $_GET['mess-modif'] ?> </p>
                        <?php } ?>
                        <?php if (isset($_GET['mess-no'])) { ?>
                            <p class="erreur py-2 mb-4"> <?php echo $_GET['mess-no'] ?> </p>
                        <?php } ?>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr style="background-color:lightgray">
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Prénoms</th>
                                                <th>Numéro</th>
                                                <th>Email</th>
                                                <th>Ville</th>
                                                <th>Possession</th>
                                                <th>Ajouter le</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include('../controllers/connexion-db.php');
                                            include('../controllers/affiche-valeur.php');
                                        ?>
                                        <tbody>
                                            <?php
                                                $nbr = 0;
                                                foreach ($listeProCounts as $listeProCount)
                                                {
                                                    $nbr++;
                                            ?>
                                            <tr>
                                                <td><?php echo $nbr;?></td>
                                                <td><?php echo $listeProCount['nom_proprietaire'];?></td>
                                                <td><?php echo $listeProCount['prenom_proprietaire'];?></td>
                                                <td><?php echo $listeProCount['numero_proprietaire'];?></td>
                                                <td><?php echo $listeProCount['email_proprietaire'];?></td>
                                                <td><?php echo $listeProCount['ville_proprietaire'];?></td>
                                                <td><?php echo $listeProCount['bien_proprietaire'];?></td>
                                                <td><?php echo $listeProCount['date_ajout_proprietaire'];?></td>
                                                <td class="td-actions d-flex justify-content-around">
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-round btn-just-icon btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?=$listeProCount['id_proprietaire']?>">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-just-icon btn-sm" data-bs-toggle="modal" data-bs-target="#closeModal<?=$listeProCount['id_proprietaire']?>">
                                                        <i class="fas fa-xmark"></i>
                                                    </button>
                                                    <div class="modal fade" id="updateModal<?=$listeProCount['id_proprietaire']?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="updateModalLabel">Modifier les informations</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="../controllers/modifier.php?idmodif=<?=$listeProCount['id_proprietaire']?>" method="post">
                                                                        <div class="row">
                                                                            <div class="col-4 mb-2">
                                                                                <div class="form-outline">
                                                                                    <input type="text" id="firstName" class="form-control" name="nomMod" value="<?php echo $listeProCount['nom_proprietaire'];?>" required/>
                                                                                    <label class="form-label" for="firstName">Nom</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4 mb-2">
                                                                                <div class="form-outline">
                                                                                    <input type="text" id="lastName" name="prenomMod" value="<?php echo $listeProCount['prenom_proprietaire'];?>" class="form-control" required/>
                                                                                    <label class="form-label" for="lastName">Prénoms</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4 mb-2">
                                                                                <div class="form-outline">
                                                                                    <input type="text" id="Numero" class="form-control" name="numeroMod" value="<?php echo $listeProCount['numero_proprietaire'];?>" required/>
                                                                                    <label class="form-label" for="Numero">Numéro(WhatsApp)</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4 mb-2 d-flex align-items-center">
                                                                                <div class="form-outline datepicker w-100">
                                                                                    <input type="text" class="form-control" id="birthdayDate" name="mailMod" value="<?php echo $listeProCount['email_proprietaire'];?>" required/>
                                                                                    <label for="birthdayDate" class="form-label">Email</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4 mb-2 d-flex align-items-center">
                                                                                <div class="form-outline w-100">
                                                                                    <input type="text" class="form-control" id="Password" name="villeMod" value="<?php echo $listeProCount['ville_proprietaire'];?>" required/>
                                                                                    <label for="Password" class="form-label">Ville</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <select class="select form-control" id="Possession" name="bienMod" >
                                                                                    <option value="<?php echo $listeProCount['bien_proprietaire'];?>"><?php echo $listeProCount['bien_proprietaire'];?></option>
                                                                                    <option value="Terrain">Terrain</option>
                                                                                    <option value="Maison">Maison</option>
                                                                                    <option value="Maison et terrain">Maison et terrain</option>
                                                                                </select>
                                                                                <label class="form-label select-label" for="Possession">Possession</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2 ">
                                                                            <input class="btn btn-primary float-end" type="submit" name="send-btn" value="valider" />
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="closeModal<?=$listeProCount['id_proprietaire']?>" tabindex="-1" aria-labelledby="closeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="closeModalLabel">Etes-vous sûre de vouloir supprimer <br> <span class="text-danger"></span> de la gare <span class="text-danger"></span></h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="px-5 py-2">
                                                                    <?php echo $listeProCount['nom_proprietaire'];?>
                                                                    <?php echo $listeProCount['prenom_proprietaire'];?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="../controllers/supprimer.php?id_proprietaire=<?=$listeProCount['id_proprietaire']?>" type="button" rel="tooltip" class="btn btn-primary btn-round btn-just-icon btn-sm">Supprimer</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php   
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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