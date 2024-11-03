<?php
session_start();
include 'header-li.php';

?>

<div class="pagetitle">
    <h1>Doc. Emitidos</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Doc. Emitidos</li>
        </ol>
    </nav>
</div>

<!-- titulo de la pagina -->
<section class="section dashboard">
    <div class="row">

        <!-- columnas del lado izquierdo -->
        <div class="col-lg-12">
            <div class="row">
                <div class="input-info mb-4 col-12">
                    <label class="info-label"
                        style="font-size: 15px;color:rgba(28,43,51,1);font-weight:600;">Desde:</label>
                    <input type="date" id="fecha" onclick="" class="info-label col-1.5">

                    <label class="info-label"
                        style="font-size: 15px;color:rgba(28,43,51,1);font-weight:600;">Hasta:</label>
                    <input type="date" id="fecha" onclick="" class="info-label col-1.5">

                    <label class="info-label"
                        style="font-size: 15px;color:rgba(28,43,51,1);font-weight:600;">Establecimiento:</label>
                    <select id="nvTipoDoc" class="info-label col-2">
                        <option value="" disabled="" selected="">Principal</option>
                    </select>

                    <label class="info-label" style="font-size: 15px;color:rgba(28,43,51,1);font-weight:600;">Tipo
                        Documento:</label>
                    <select id="nvTipoDoc" class="info-label col-2">
                        <option value="" disabled="" selected="">Ventas</option>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="input-info mb-4 col-12">
                    <label class="info-label" style="font-size: 15px;color:rgba(28,43,51,1);font-weight:600;">Forma de
                        Pago:</label>
                    <select id="nvTipoDoc" class="info-label col-2">
                        <option value="" disabled="" selected="">Todos</option>
                    </select>

                    <label class="info-label"
                        style="font-size: 15px;color:rgba(28,43,51,1);font-weight:600;">Usuarios:</label>
                    <select id="nvTipoDoc" class="info-label col-2">
                        <option value="" disabled="" selected="">Todos</option>
                    </select>

                    <button type="button" class="btn btn-primary">Filtrar</button>
                    <button type="button" class="btn btn-success ">Exportar a Excel</button>
                    <button type="button" class="btn btn-success ">Exportar detalles Excel</button>
                    <button type="button" class="btn btn-warning">TxtPLE</button>
                    <button type="button" class="btn btn-primary">Regenerar XML</button>
                    <button type="button" class="btn btn-primary">Regenerar Documentos XML</button>

                </div>
            </div>

            <div class="row card">
                <h3>Reporte de Ventas</h3>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table id="dataTable_users" class="table table-striped">

                        <thead>
                            <tr>
                                <th class="centered">Detalles</th>
                                <th class="centered">Anular</th>
                                <th class="centered">TipoDoc.</th>
                                <th class="centered">Nro.</th>
                                <th class="centered">Fecha</th>
                                <th class="centered">Razon Social/Nombre</th>
                                <th class="centered">Total</th>
                                <th class="centered">Pago</th>
                                <th class="centered">Deuda</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody_users"></tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- fin de las columnas de la izquierda -->

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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/dataTable-documentos-emitidos.js"></script>


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- DataTable -->
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>