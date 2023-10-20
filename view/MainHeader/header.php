<header class="site-header">
    <div class="container-fluid">
        <a href="#" class="site-logo">
            <img class="hidden-lg-up" src="../../public/img/logo-2-mob.png" alt="">
        </a>
        
        <div class="dropdown dropdown-typical">
            <div class="dropdown dropdown-typical">
                <div class="dropdown dropdown-typical">
                    <img src="https://icones.pro/wp-content/uploads/2021/03/avatar-de-personne-icone-homme.png" width="50" class="img-responsive" alt="Icon">
                </div>
                <div class="dropdown dropdown-typical">
                    <span class="dropdown-item"><?php echo $_SESSION["usu_nom"] ?> <?php echo $_SESSION["usu_ape"] ?></span>
                    <div class="dropdown-item"><span class="indicator label-success"></span>Online</div>
                </div>
                <button id="show-hide-sidebar-toggle" class="show-hide-sidebar" class="dropdown-item">
                    <span>toggle menu</span>
                </button>
                <div class="clear"></div>
            </div>
        </div>

        
        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrador<?php echo $_SESSION["rol_id"] ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="../MntPerfil/"><span class="font-icon glyphicon glyphicon-user"></span>Cuenta</a>
                            <a class="dropdown-item" href="../MntContraseña/"><img src="https://cdn4.iconfinder.com/data/icons/dashboard-icons/46/icon-edit-512.png" width="18"> Editar Perfil</a>
                            <a class="dropdown-item" href="../MntConfiguracion/"><img src="https://icones.pro/wp-content/uploads/2022/02/services-parametres-et-icone-d-engrenage-gris.png" width="20" class="img-responsive" alt="Icon"> Configuracion </a>
                            <a class="dropdown-item" href="../MntAyuda/"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../Logout/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
                        </div>
                    </div>
                </div>

                <div class="mobile-menu-right-overlay"></div>

                <input type="hidden" id="user_idx" value="<?php echo $_SESSION["usu_id"] ?>"><!-- ID del Usuario-->
                <input type="hidden" id="rol_idx" value="<?php echo $_SESSION["rol_id"] ?>"><!-- Rol del Usuario-->
            </div>
        </div>
    </div>
</header>