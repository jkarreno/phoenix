<?php
    if(!empty($_POST["registro"])){
        if(empty($_POST["usu_nom"]) or empty($_POST["usu_ape"]) or empty($_POST["usu_correo"]) or empty($_POST["usu_pass"])){
            ?>
                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="font-icon font-icon-warning"></i>
                    Uno de los campos esta vacios.
                </div>
            <?php
        }
        else {
            $nombre=$_POST["usu_nom"];
            $apellido=$_POST["usu_ape"];
            $correo=$_POST["usu_correo"];
            $password=$_POST["usu_pass"];
            $conectar = $dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdesk1","root","");
            $sql=$conectar->query("insert into tm_usuario (usu_nom,usu_ape,usu_correo,usu_pass)values('$nombre','$apellido','$correo','$password')");
            if($sql==1) {
                ?>
                    <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="font-icon font-icon-warning"></i>
                        Error al registrarse.
                    </div>
                <?php
            }
            else { 
                ?>
                    <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="font-icon font-icon-warning"></i>
                        Usuario registrado correctamente.
                    </div>
                    <script>
                        window.location.href="index.php"
                    </script>
                <?php
            }

        }
    }
?>