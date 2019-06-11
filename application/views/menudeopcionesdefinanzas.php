<div class="wrap">
<!--    <h1>Menu Administrador</h1>-->
<!--    <nav>-->
        <ul id="menu">
            
              <li><a href="#"><span class="iconic plus-alt"></span> SISTEMA DE FINANCIERO DE CUENTAS AL CONTADO Y AL CREDITO DE LA AAC</a>
                <ul>
                    
                        <li><a href="#"><span class="iconic arrow-right"></span>Gestión de Parametrizacion de Cuentas - Usuario Contabilidad</a>
                            <ul>
                        <li><a href="<?= base_url('index.php/parametrizacion/crearparametrizacion/add') ?>"><span class="iconic arrow-bottom"></span>Crear Parametrizacion</a></li>
                        <li><a href="<?= base_url('index.php/parametrizacion/editarparametrizacion/') ?>"><span class="iconic arrow-bottom"></span>Editar Parametrizacion</a></li>
                       
               </ul>
                    <li><a href="#"><span class="iconic arrow-right"></span>Gestión de Cuentas Financieras - Usuario Contabilidad</a>
                            <ul>
                        <li><a href="<?= base_url('index.php/cuentafinanciera/crearcuentafinanciera/add') ?>"><span class="iconic arrow-bottom"></span>Generar Cuentas Financieras</a></li>
                        <li><a href="<?= base_url('index.php/editarcuentafinanciera/edicion/') ?>"><span class="iconic arrow-bottom"></span> Editar Cuentas Financieras</a></li>
                        <li><a href="<?= base_url('index.php/cambiarestadodecuentafinanciera/desactivar/') ?>"><span class="iconic arrow-bottom"></span>Desactivar Cuentas Financieras</a></li>
                        <li><a href="<?= base_url('index.php/cambiarestadodecuentafinanciera/activar/') ?>"><span class="iconic arrow-bottom"></span>Activar Cuentas Financieras</a></li>
               </ul>
                       
            <li><a href="#"><span class="iconic plus-alt"></span> Gestión de Cuentas al Contado Por Dirección - Usuario Unidad Gestora</a>
                <ul>
                    <li><a href="#"><span class="iconic arrow-right"></span>Gestión de Cuentas al Contado</a>
                            <ul>
                        <li><a href="<?= base_url('index.php/prefacturas/crearprefacturas/add') ?>"><span class="iconic arrow-bottom"></span>Generar Prefactura</a></li>
                        <li><a href="<?= base_url('/index.php/cambiarestadodelaprefactura/anular/') ?>"><span class="iconic arrow-bottom"></span> Anular Prefactura</a></li>
                            <li><a href="<?= base_url('/index.php/cambiarestadodelaprefactura/revertir/') ?>"><span class="iconic arrow-bottom"></span> Revertir Proceso de Anulación de Prefactura</a></li>
                        <li><a href="<?= base_url('index.php/editarprefactura/editarprefactura/') ?>"><span class="iconic arrow-bottom"></span> Modificar Datos de la Prefactura</a></li>
                        <li><a href="<?= base_url('/index.php/certificaciondefacturas/consultarcuentas/') ?>"><span class="iconic arrow-bottom"></span> Certificar Factura</a></li>
                        <li><a href="<?= base_url('/index.php/consultasdeprefacturas/consultasdeprefacturas/') ?>"><span class="iconic arrow-bottom"></span> Reportes de Prefacturacion</a></li>
                         <li><a href="<?= base_url('/index.php/consultasdefacturacion/consultasdefacturas/') ?>"><span class="iconic arrow-bottom"></span> Reportes de Facturacion</a></li>
  
                            
                            
                            </ul>
                         <li> <a href="#"><span class="iconic arrow-right"></span>Gestión de Caja de la AAC - Usuario Cajero</a>
                            <ul>
                       
                        <li><a href="<?= base_url('/index.php/caja/prefactura') ?>"><span class="iconic arrow-bottom"></span> Gestionar Cobros</a></li>
                       <li><a href="<?= base_url('index.php/caja/visualizarestadodefactura') ?>"><span class="iconic arrow-bottom"></span> Imprimir Factura</a></li>
                            </ul>     </li>
                       
                        <li><a href="#"><span class="iconic arrow-bottom"></span> Reportes de las Cuentas al Contado Por Direcciòn</a></li>
                         <ul>
                            
                             <li><a href="<?= base_url('index.php/facturasprocesadas/consultarcuentas') ?>"><span class="iconic arrow-bottom"></span>Reportes de las Facturas  Facturadas</a></li>
                              <li><a href="<?= base_url('index.php/facturasporprocesar/consultarcuentas') ?>"><span class="iconic arrow-bottom"></span> Reportes de las Facturas No Facturadas</a></li>
                               <li><a href="<?= base_url('index.php/facturasanuladas/consultas') ?>"><span class="iconic arrow-bottom"></span> Reportes de las Facturas Anuladas</a></li>
                            
                            
                         </ul>
                        </li>  
                        
                        <li><a href="#"><span class="iconic arrow-right"></span>Gestión de Logs</a>
                            <ul>
  <li><a href="<?= base_url('index.php/Logdereportes/facturasprocesadas') ?>"><span class="iconic arrow-bottom"></span>Reportes de Facturas Procesadas</a></li>
<li><a href="<?= base_url('index.php/Logdereportes/facturasnoprocesadas') ?>"><span class="iconic arrow-bottom"></span>Reportes de  Facturas No Procesada</a></li>            
   <li><a href="<?= base_url('index.php/Logdereportes/facturasanuladas') ?>"><span class="iconic arrow-bottom"></span>Reportes de Facturas Anuladas</a></li>
                            </ul>
                        </li>  
                        
                    </li>       
        </ul>
               
            <Ii>
                 <ul>
                    
                <li><a href="#"><span class="iconic plus-alt"></span> Reportes Especializados </a>
               <ul> 
                        <li><a href="<?= base_url('index.php/boton/llamado')?>"><span class="iconic arrow-bottom"></span>Reporte General de Recaudación Por Codigo Interno</a></li>
                        <li><a href="<?= base_url('index.php/boton/llamado4') ?>"><span class="iconic arrow-bottom"></span>Reporte  General de Recaudacion Por Devengandos</a></li> 
                      
        </ul>

    <!--</nav>-->
</div>
</div>