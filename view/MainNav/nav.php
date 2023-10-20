<?php
    if ($_SESSION["rol_id"]==1){
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Panel</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Mecánicos</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Petición de servicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\DetalleTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Reporte</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MantenimientoUsuario\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Categoría</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ReportesTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Servicios</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\PermisosTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Usuarios</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }else{
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                  <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Panel</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Mecánicos</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Petición de servicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\DetalleTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Reporte</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MantenimientoUsuario\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Categoría</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ReportesTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Servicios</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\PermisosTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Lista de Usuarios</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }
?>
