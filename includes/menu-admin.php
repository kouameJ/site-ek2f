<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion bg-menu-color" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="../dashboard/dash.php">
                    <div class="sb-nav-link-icon"><i class="bi bi-speedometer"></i></div>
                    Dashboard
                </a>
                <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" aria-expanded="false" >
                    <div class="sb-nav-link-icon"><i class="bi bi-envelope-fill"></i></div>
                    Messages
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsT" aria-expanded="false" aria-controls="collapseLayoutsT">
                    <div class="sb-nav-link-icon"><i class="bi bi-map-fill"></i></div>
                    Terrains
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsT" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Static Navigation</a>
                        <a class="nav-link" href="#">Light Sidenav</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsM" aria-expanded="false" aria-controls="collapseLayoutsM">
                    <div class="sb-nav-link-icon"><i class="bi bi-house-fill"></i></div>
                    Maisons
                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsM" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../dashboard/ajouter-maison.php">Ajouter Maison</a>
                        <a class="nav-link" href="../dashboard/liste-maison.php">Liste des Maisons</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsP" aria-expanded="false" aria-controls="collapseLayoutsP">
                    <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                    Propriétaires
                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsP" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../dashboard/ajouter-proprietaire.php">Ajouter Propriétaire</a>
                        <a class="nav-link" href="../dashboard/liste-proprietaire.php">Liste des propriétaires</a>
                    </nav>
                </div>
                <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a> -->
            </div>
        </div>
    </nav>
</div>