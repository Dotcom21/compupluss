<?php
session_start();

include 'assets/lib/config.php';
include 'header-li.php';

?>

<div class="pagetitle">
    <h1>Usuarios</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
        </ol>
    </nav>
</div>

<!-- titulo de la pagina -->
<section class="section dashboard">

    <div class="row mb-3">
        <div class="col-12" style="text-align: center">
            <button type="button" class="btn btn-primary">CREAR USUARIO</button>
        </div>
    </div>

    <div class="row card">
        <h3>Usuarios Registrados</h3>
        <div class="mb-3"></div>
        <div class="table-responsive">
            <table class="table table-bordered table-condensed table-hover" id="dataTable_users" data-id="" width="100%"
                cellspacing="0" data-page-length='7'>
                <thead>
                    <tr>
                        <th class="centered">Código</th>
                        <th class="centered">Usuario</th>
                        <th class="centered">Nombre y apellidos</th>
                        <th class="centered">Correo</th>
                        <th class="centered">Teléfono</th>
                        <th class="centered">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query_cant_usuarios = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) AS TOTAL FROM `usuarios`"));
                    if($query_cant_usuarios['TOTAL']==0){?>

                    <?php }else if($query_cant_usuarios['TOTAL']>0){?>

                    <?php
                    $num = 0;
                    $query_usuarios = mysqli_query($conn,"SELECT usuario,nombres,apellidos,correo,telefono FROM `usuarios`");
                    while($data = mysqli_fetch_array($query_usuarios)){

                    $num++;
                    ?>

                    <tr>
                        <td class="text-center" style="color: #292929;font-size: 15px;">
                            <?php echo $num; ?></td>
                        <td class="text-center" style="color: #292929;font-size: 15px;">
                            <?php echo $data['usuario']; ?></td>
                        <td class="text-center" style="color: #292929;font-size: 15px;">
                            <?php echo $data['nombres'].' '.$data['apellidos']; ?></td>
                        <td class="text-center" style="color: #292929;font-size: 15px;">
                            <?php echo $data['correo']; ?></td>
                        <td class="text-center" style="color: #292929;font-size: 15px;">
                            <?php echo $data['telefono']; ?></td>

                        <td class="text-center">
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Editar"
                                class="bi bi-pencil btn btn-xs btn-success btn-edit-ninos"
                                data-id="<?php echo $data[0];?>"><i class="fas fa-pen"></i></a>
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Eliminar"
                                class="bi bi-trash btn btn-xs btn-danger btn-delete-ninos"
                                data-id="<?php echo $data[0];?>"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL PARA CREAR USUARIO -->
    <div class="modal fade" id="modal_nusuario" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;" align="center">
                    <div class="modal-title confirm-title col-12 text-center"
                        style="text-align: center;font-size: 1.2rem;font-weight: 700;color: #6f6f6f;padding-top: 0px;margin-bottom: 0px;">
                        <i class="fa fa-plus"></i> CREAR USUARIO
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row g-3">
                            <div class="col-3 mb-2">
                                <label>Nombres:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" id="add_nombre_nino" class="form-control">
                            </div>
                            <div class="col-3 mb-2">
                                <label>Apellidos:</label>
                            </div>
                            <div class="col-9">
                                <input type="text" id="add_apellidos_nino" class="form-control">
                            </div>
                            <div class="col-3 mb-2">
                                <label>Tipo doc:</label>
                            </div>
                            <div class="col-9">
                                <select id="add_tipo_doc_nino" class="form-select">
                                    <option value="" selected="" disabled="">Selecciona un Tipo doc</option>
                                </select>
                            </div>
                            <div class="col-3 mb-2">
                                <label>N° documento</label>
                            </div>
                            <div class="col-9">
                                <input type="text" id="add_nr_doc_nino" class="form-control">
                            </div>
                            <div class="col-3 mb-2">
                                <label>Nacimiento:</label>
                            </div>
                            <div class="col-9">
                                <input type="date" id="add_fecha_nacimiento" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="align-content: center;align-items: center;align-self: center;">
                    <button class="btn confirm-button btn-sm" id="conf_add_nino" type="button" data-confirm="true"
                        style="padding: 2px 10px !important;background: #1a73e8; border: 1px solid #1a73e8;color: #fff;"><i
                            class="fa fa-check" aria-hidden="true"></i> Agregar
                    </button>
                    <button id="cancelar_add_nino" class="btn btn-danger confirm-button btn-sm" type="button"
                        style="padding: 2px 10px !important;"><i class="fa fa-times"></i> Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ======= pie de pagina ======= -->
</main><!-- End #main -->

<!-- agregar pie de pagina en un archivo general para su utilizacion en todos los archivos creados -->
<!-- ======= pie de pagina ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Compupluss</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- TABLA JS 
<script type="text/javascript">
$(document).ready(function() {
    $('#dataTable_users thead th').each(function() {
        var title = $('#dataTable_users thead th').eq($(this).index()).text();
        $(this).html(title +
            '<br></br><input type="text" class="input-sm desabilitar_orden" style="width:100%;border: 1px solid #d1d3e2;color: #6e707e;background-color: #fff;border-radius: 4px;height: 25px;" onKeyUp="mayus(this);"/>'
        );
    });

    // DataTable
    var table = $('#dataTable_users').DataTable();

    // Apply the search
    table.columns().eq(0).each(function(colIdx) {
        $('input', table.column(colIdx).header()).on('keyup change', function() {
            table
                .column(colIdx)
                .search(this.value)
                .draw();
        });

        $('input', table.column(colIdx).header()).on('click', function(e) {
            e.stopPropagation();
        });
    });


    $('[name=dataTable_users_length]').prepend('<option value="7" selected="selected">7</option>');

});
</script>
-->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- DataTable -->
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>