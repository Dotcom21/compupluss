<?php
session_start();

include 'assets/lib/config.php';
include 'header-li.php';

?>

<div class="pagetitle">
    <h1>Nota de Crédito</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Nota de Crédito</li>
        </ol>
    </nav>
</div>

<!-- titulo de la pagina -->
<section class="section dashboard">
    <div class="row">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3"></div>
                        <h3>Factura/Boleta</h3>
                        <div class="mb-4"></div>

                        <div class="col-lg-12 mb-2">
                            <div class="row position-absolute top-0 end-0">
                                <div class=" col-0 mb-3 " style="margin: 20px;">
                                    <button type=" button"
                                        class="btn btn-primary bi bi-search btn-sm">&nbsp;&nbsp;Buscar
                                        Cliente</button>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">RUC/DNI:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name=" ruc" class="form-control" id="yourPassword" required>
                            <button type="button" class="btn btn-success bi bi-search"></button>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label "
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Razón
                                Social/Nombre:</label>&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Dirección:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Correo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Factura/Boleta:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name=" ruc" class="form-control" id="yourPassword" required>
                            <button type="button" class="btn btn-danger bi bi-search"></button>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label "
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Fecha de
                                Emisión:</label>&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control col-4"
                                placeholder="18/03/2023">
                            <label class="info-label "
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">&nbsp;&nbsp;Moneda:</label>&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control col-2">
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Motivo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="nvTipoDoc" class="form-select">
                                <option value="" disabled="" selected="">Seleccione un motivo</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Concepto:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Establecimiento:</label>&nbsp;&nbsp;&nbsp;
                            <select id="nvTipoDoc" class="form-select">
                                <option value="" disabled="" selected="">Principal</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Total
                                Facturado:</label>&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control" placeholder="0.00">
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: center">
                    <button type="button" class="btn btn-warning">Nuevo</button>
                    <button type="button" class="btn btn-primary">Generar Documento</button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ======= pie de pagina ======= -->
<?php
require ("pieDePagina.php");
?>