<?php
session_start();
include 'header-li.php';

?>

<div class="pagetitle">
    <h1>Guía Remisión</h1>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Guía Remisión</li>
        </ol>
    </nav>
</div>

<!-- titulo de la pagina -->
<section class="section dashboard">
    <div class="row card">
        <!-- Boton select -->


        <!-- Agregar Producto -->
        <div class="col-12">
            <div class="mb-3"></div>
            <h4>Agregar Producto</h4>
            <div class="mb-4"></div>

            <div class="col-lg-12 mb-4 ">
                <div class="row position-absolute top-0 end-0">
                    <div class="col-2 mb-3 " style="margin: 20px;">
                        <button type="button" class="btn btn-primary dropdown-toggle bi bi-gear-fill"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Opciones
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Opcion A</a></li>
                            <li><a class="dropdown-item" href="#">Opcion B</a></li>
                            <li><a class="dropdown-item" href="#">Opcion C</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row col-xs-12">
                <div class="col-3">
                    <div class="input-group has-validation">
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Código" required>
                        <div class="invalid-feedback">Por favor, ingrese el codigo del producto.
                        </div>
                        <button type="button" class="btn btn-danger bi bi-search btn-sm "></button>
                        <button type="button" class="btn btn-primary bi bi-pencil-square btn-sm"></button>
                    </div>
                </div>

                <div class="col-4">
                    <div class="input-group has-validation">
                        <input type="text" id="descripcion" class="form-control" placeholder="Descripción"></input>
                        <div class="invalid-feedback">Por favor, ingrese una Descripción.
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <select class="form-select" id="select-medida" style="text-align:center;">
                        <option value="" disabled="" selected="">Seleccione una medida</option>
                    </select>
                </div>

                <!-- Boton Agregar Producto-->
                <div class="col-lg-12 mb-3 ">
                    <div class="row position-absolute bottom-0 end-0">
                        <div class=" col-0 mb-3 " style="margin: 20px;">
                            <button type=" button" class="btn btn-primary bi bi-plus-lg">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-xs-12">
                <div class="col-3 mb-3">
                    <div class="input-group has-validation"
                        style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">
                        <strong>Cantidad:</strong>&nbsp;&nbsp;
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Cantidad (0.000)"
                            required>
                        <div class="invalid-feedback">Por favor, ingrese una cantidad.
                        </div>
                    </div>
                </div>
                <!-- Espacio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

                <div class="col-3">
                    <div class="input-group has-validation">
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="P.Lista (0.000)"
                            required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group has-validation"
                        style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">
                        <strong>P.U:</strong>&nbsp;&nbsp;
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="P.Venta (0.000)"
                            required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group has-validation">
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Total (0.000)" required>
                    </div>
                </div>
            </div>

            <div class="row col-xs-12">
                <div class="col-3 mb-5">
                    <div class="input-group has-validation"
                        style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;"><strong>Peso
                            <br>Total:</strong>&nbsp;&nbsp;
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Peso Total (0.000)"
                            required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="input-group has-validation"
                        style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">
                        <strong>Nro.<br>Bultos:</strong>&nbsp;&nbsp;
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Numero Bultos (0.00)"
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
        <h2>Tabla de productos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CÓDIGO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>MEDIDA</th>
                    <th>CANTIDAD</th>
                    <th>P.LISTA</th>
                    <th>P.UNITARIO</th>
                    <th>V.VENTA</th>
                    <th>PESO</th>
                    <th>BULTOS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Producto 1</td>
                    <td>1 kg</td>
                    <td>5</td>
                    <td>10.00</td>
                    <td>8.50</td>
                    <td>42.50</td>
                    <td>5 kg</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Producto 2</td>
                    <td>500 g</td>
                    <td>3</td>
                    <td>7.50</td>
                    <td>6.00</td>
                    <td>18.00</td>
                    <td>1.5 kg</td>
                    <td>2</td>
                </tr>
                <!-- Añade aquí más filas según necesites -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"></td>
                    <td>
                        <div class="input-group has-validation">
                            <strong>Peso:</strong>&nbsp;&nbsp;
                            <input type="text" class="form-control" placeholder="0.000" name="peso">
                        </div>
                    </td>
                    <td>
                        <div class="input-group has-validation">
                            <strong>Bulto:</strong>&nbsp;&nbsp;
                            <input type="text" class="form-control" placeholder="0.000" name="bulto">
                        </div>
                    </td>
                    <td>
                        <div class="input-group has-validation">
                            <strong>Inafecto:</strong>&nbsp;&nbsp;
                            <input type="text" class="form-control" placeholder="0.000" name="inafecto">
                        </div>
                    </td>
                    <td>
                        <div class="input-group has-validation">
                            <strong>Exon:</strong>&nbsp;&nbsp;
                            <input type="text" class="form-control" placeholder="0.000" name="exon">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6"></td>
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

    <div class="row col-12" style="margin: 20px;">

        <div class="row card col-md-5">
            <div class="mb-3"></div>
            <h3>Cliente</h3>
            <div class="mb-2"></div>

            <div class="container">
                <form action="/action_page.php">

                    <div class="input-group mb-3">
                        <label class="info-label"
                            style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">RUC/DNI:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Total (0.00)" required>
                        <button type="button" class="btn btn-success bi bi-search btn-sm"></button>
                    </div>

                    <div class="input-group mb-3">
                        <label class="info-label " style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Razón
                            <br>Social/Nombre:</label>&nbsp;&nbsp;
                        <input type="text" id="nvNrCelularOficial" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <label class="info-label"
                            style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Correo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="nvNrCelularOficial" class="form-control">
                    </div>

                    <div class="input-group mb-4">
                        <label class="info-label" style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Fecha
                            de <br>emisión:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="date" id="fecha" onclick="" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <label class="info-label" style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Tipo
                            de <br>Operaciones:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select id="nvTipoDoc" class="form-select">
                            <option value="" disabled="" selected="">VENTA</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="info-label"
                            style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Observaciones:</label>&nbsp;&nbsp;
                        <input type="text" id="nvNrCelularOficial" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <label class="info-label" style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Nro de
                            F/B:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="nvNrCelularOficial" class="form-control">
                    </div>

                </form>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="row card col-md-5">
            <div class="mb-3"></div>
            <h3>Datos Generales</h3>

            <div class="mb-5"></div>
            <div class="container">
                <form action="/action_page.php">

                    <div class="input-group mb-4">
                        <label class="info-label"
                            style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Moneda:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select id="nvTipoDoc" class="form-select col-6">
                            <option value="" disabled="" selected="">SOLES (S/)</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <label class="info-label"
                            style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Establecimiento:</label>&nbsp;
                        <select id="nvTipoDoc" class="form-select col-6">
                            <option value="" disabled="" selected="">Principal</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <label class="info-label" style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Fecha
                            de
                            <br>Traslado:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="date" id="fecha" onclick="" class="form-control">
                    </div>

                    <div class="input-group mb-4">
                        <label class="info-label" style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Punto
                            de
                            <br>Partida:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select id="nvTipoDoc" class="form-select col-6">
                            <option value="" disabled="" selected="">JR.COMANDANTE LADISLAO ESPINAR N° 461</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="info-label" style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Punto
                            de
                            <br>Llegada:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name=" ruc" class="form-control" id="yourPassword" placeholder="Total (0.00)" required>
                        <button type="button" class="btn btn-success btn-sm"><i class="bi bi-card-text"></i></button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="row card col-md-12">
        <div class="mb-3"></div>
        <h3>Datos Transportista</h3>
        <div class="mb-2"></div>

        <div class="row col-12"><br>
            <div class="row col-6">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="input-group mb-3">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Ruc<br>
                                Transportista:</label>&nbsp;&nbsp;
                            <input name=" ruc" class="form-control" id="yourPassword" required>
                            <button type="button" class="btn btn-success bi bi-search btn-sm"></button>
                        </div>

                        <div class="input-group mb-4">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Vehículo:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-4">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Chofer:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-4">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Certificado de
                                <br>Inscripción:</label>&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                    </form>
                </div>
            </div><br>
            <div class="row col-6">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="input-group mb-4">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Razón Social
                                <br>Transp:</label>&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-4">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Marca/Placa:</label>&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                        <div class="input-group mb-4">
                            <label class="info-label"
                                style="font-size: 12px;color:rgba(28,43,51,1);font-weight:600;">Licencia de
                                <br>Conducir:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="nvNrCelularOficial" class="form-control">
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12" style="text-align: center">
            <button type="button" class="btn btn-primary">Generar Documento</button>
            <button type="button" class="btn btn-warning">Nuevo</button>
        </div>
    </div>

</section>

<!-- ======= pie de pagina ======= -->

<?php

require ("pieDePagina.php");

?>