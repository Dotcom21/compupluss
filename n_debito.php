<?php
session_start();

include 'assets/lib/config.php';
include 'header-li.php';

?>

<div class="pagetitle">
    <h1>Nota de Débito</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Nota de Débito</li>
        </ol>
    </nav>
</div>

<!-- titulo de la pagina -->
<section class="section dashboard">
    <div class="row">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-5">
            <div class="card">
                <div class="card-body ">
                    <form>
                        <div class="mb-3"></div>
                        <h3>Factura/Boleta</h3>
                        <div class="mb-4"></div>

                        <div class="col-lg-12 mb-2 ">
                            <div class="row position-absolute top-0 end-0">
                                <div class=" col-0 mb-3 " style="margin: 15px;">
                                    <button type=" button" class="btn btn-primary bi bi-search">&nbsp;&nbsp;Buscar
                                        Cliente</button>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Ruc/DNI:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Dirección:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label "
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Fecha de
                                emisión:</label>&nbsp;&nbsp;
                            <input type="date" id="fecha" onclick="" class="form-control">
                            <label class="info-label "
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">&nbsp;&nbsp;Moneda:</label>&nbsp;&nbsp;
                            <select id="nvTipoDoc" class="form-select">
                                <option value="" disabled="" selected="">SOLES (S/)</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Establecimiento:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="nvTipoDoc" class="form-select col-6">
                                <option value="" disabled="" selected="">Principal</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Motivo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="nvTipoDoc" class="form-select col-6">
                                <option value="" disabled="" selected="">Interés por mora</option>
                            </select>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="row card">
            <!-- Boton select -->


            <!-- Agregar Producto -->
            <div class="col-12">
                <div class="mb-3"></div>
                <h4>Agregar Item</h4>
                <div class="mb-4"></div>

                <div class="row col-xs-12">

                    <div class="col-3">
                        <select class="form-select" id="select-medida" style="text-align:center;">
                            <option value="" disabled="" selected="">Factura</option>
                        </select>
                    </div>

                    <div class="col-3">
                        <div class="input-group has-validation">
                            <input name=" ruc" class="form-control" id="yourPassword" placeholder="Nro Doc." required>
                            <div class="invalid-feedback">Por favor, ingrese el codigo del producto.
                            </div>
                            <button type="button" class="btn btn-danger bi bi-search "></button>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="input-group has-validation">
                            <input type="date" id="fecha" onclick="" class="form-control">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="input-group has-validation">
                            <textarea id="nvAgenda" class="form-control" style="height: 30px;"
                                placeholder="Descripción"></textarea>
                        </div>
                    </div>

                    <!-- Boton Agregar Producto-->
                    <div class="col-lg-12 mb-3 ">
                        <div class="row position-absolute bottom-0 end-0">
                            <div class=" col-0 mb-3 " style="margin: 20px;">
                                <button type=" button" class="btn btn-primary bi bi-plus-lg">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-xs-12 mb-5">
                    <div class="col-3">
                        <div class="input-group has-validation">
                            <input name=" ruc" class="form-control" id="yourPassword" placeholder="P.Venta (0.000)"
                                required>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CSS para subir imagen con icono -->
            <style>
            input[type="file"] {
                display: none;
            }

            .custom-file-upload {
                border: 1px solid #ccc;
                display: inline-block;
                padding: 6px 12px;
                cursor: pointer;
            }
            </style>
        </div>

        <div class="row card table-responsive">
            <h2>Item</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>TIPO</th>
                        <th>NRO.DOC</th>
                        <th>FECHA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>V.VENTA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Factura</td>
                        <td>001-001</td>
                        <td>01/01/2023</td>
                        <td>Venta de productos</td>
                        <td>150.00</td>
                    </tr>
                    <tr>
                        <td>Boleta</td>
                        <td>002-001</td>
                        <td>02/01/2023</td>
                        <td>Venta de servicios</td>
                        <td>50.00</td>
                    </tr>
                    <!-- Añade aquí más filas según necesites -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Incluido IGV
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    Más IGV
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sin Impuestos
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1"></td>
                        <td>
                            <div class="input-group has-validation">
                                <strong>Exon:</strong>&nbsp;&nbsp;
                                <input type="text" class="form-control" placeholder="0.000" name="exon">
                            </div>
                        </td>
                        <td>
                            <div class="input-group has-validation">
                                <strong>SubTotal:</strong>&nbsp;&nbsp;
                                <input type="text" class="form-control" placeholder="0.000" name="Subtotal">
                            </div>
                        </td>
                        <td>
                            <div class="input-group has-validation">
                                <strong>IGV:</strong>&nbsp;&nbsp;
                                <input type="text" class="form-control" placeholder="0.000" name="igv">
                            </div>
                        </td>
                        <td>
                            <div class="input-group has-validation">
                                <strong>Total Venta:</strong>&nbsp;&nbsp;
                                <input type="text" class="form-control" placeholder="0.000" name="total_venta">
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <style>
        table {
            font-size: 14px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .form-control {
            font-size: 14px;
            height: 38px;
        }
        </style>

    </div>

</section>

<!-- ======= pie de pagina ======= -->
<?php
require ("pieDePagina.php");
?>