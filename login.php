<?php
//error_reporting(o); oculta los errores en pantalla, es necesario utilizarlo cuando el proyecto o archivo esta terminado.
error_reporting(0);
include("session_iniciada.php");
include 'assets/lib/config.php';
$session_iniciada = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - COMPUPLUSS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Site Verificación -->
    <meta name="google-site-verification" content="cFUKpQCeGS0EqcTRSR7aTxaftEZZFPlZ3qzz5pVA9lk" />

    <!-- Favicons -->
    <link href="assets/img/logo-compupluss.jpg" rel="icon">
    <link href="assets/img/logo-compupluss.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

======================================================== -->

    <!-- CODIGO ADSENSE -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6516501701017951"
        crossorigin="anonymous"></script>

</head>

<body class="img">
    <style>
    .img {
        background-image: url('https://img.freepik.com/foto-gratis/hermosa-vista-arboles-cielo-colorido-nublado-capturado-bali_181624-7862.jpg?w=1060&t=st=1682303747~exp=1682304347~hmac=9583480a0a23aebcb374fecd2bb0c4dbe4b799c1d23255d9019310bd1f1f8c23');
        background-size: cover;
        background-position: center;

    }
    </style>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo-compupluss.jpg" alt="">
                                    <span class="d-none d-lg-block" style="color: #FFF;">COMPUPLUSS</span>
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Inicie
                                            sesión en su cuenta</h5>
                                        <p class="text-center small">Ingrese ruc, usuario y contraseña para
                                            iniciar sesión</p>
                                    </div>

                                    <form class="row g-3 " novalidate action="validar.php" method="post">
                                        <div class="col-12">
                                            <label for="ruc" class="form-label">RUC</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text bi bi-calculator"
                                                    id="inputGroupPrepend"></span>
                                                <input type="text" name="ruc" class="form-control" id="ruc"
                                                    placeholder="10705503091" required>
                                                <div class="invalid-feedback">Por favor, ingrese su numero de Ruc.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text bi bi-person-fill"
                                                    id="inputGroupPrepend"></span>
                                                <input type="text" name="usuario" class="form-control" id="usuario"
                                                    placeholder="70550309" required>
                                                <div class="invalid-feedback">Por favor, ingrese su nombre de usuario.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text bi bi-lock-fill"
                                                    id="inputGroupPrepend"></span>
                                                <input type="password" name="contraseña" class="form-control"
                                                    id="password" placeholder="•••••••••" required>
                                                <span class="input-group-text bi bi-eye-slash-fill"
                                                    id="inputGroupPrepend" onclick="mostrar()"></span>
                                                <div class=" invalid-feedback">¡Por favor, introduzca su
                                                    contraseña!
                                                </div>
                                            </div>
                                        </div>

                                        <!-- visualizador de contraseñas -->
                                        <script type="text/javascript">
                                        function mostrar() {
                                            var tipo = document.getElementById("password");
                                            if (tipo.type == 'password') {
                                                tipo.type = 'text';
                                            } else {
                                                tipo.type = 'password';
                                            }
                                        }
                                        </script>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Recordar mis
                                                    datos</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" id="ingresar_plataform"
                                                name="ingresar_plataforma">Ingresar</button>
                                        </div>

                                        <div class="col-12">
                                            <p class="small mb-0">¿No tienes cuenta? <a href="p_register.php">Crea
                                                    una cuenta</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Diseñada por <a href="#">Compupluss</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <!-- End #main -->

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

</body>

</html>