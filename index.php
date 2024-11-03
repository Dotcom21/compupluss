<?php
session_start();
include 'assets/lib/config.php';
include 'header-li.php';
include("redireccionamiento.php");

?>

<div class="pagetitle">
    <h1>INICIO</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">INICIO</li>
        </ol>
    </nav>
</div>
<!-- titulo de la pagina -->

<section class="section dashboard">
    <div class="row">

        <!-- primer grafico -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <div class="input-group mb-4">
                        <div>
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">Soles</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary bi bi-arrow-repeat"></button>
                        </span>
                    </div>

                    <!-- Doughnut Chart -->
                    <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#doughnutChart'), {
                            type: 'doughnut',
                            data: {
                                labels: [
                                    'Red',
                                    'Blue',
                                    'Yellow'
                                ],
                                datasets: [{
                                    label: 'My First Dataset',
                                    data: [300, 50, 100],
                                    backgroundColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(54, 162, 235)',
                                        'rgb(255, 205, 86)'
                                    ],
                                    hoverOffset: 4
                                }]
                            }
                        });
                    });
                    </script>
                    <!-- End Doughnut CHart -->

                </div>
            </div>
        </div>

        <!-- segundo grafico -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <!-- select cantidad -->
                    <div class="input-group mb-4 col-12">
                        <div class="col-4">
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">Soles</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <div class="col-3">
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">2023</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <div class="col-3">
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">Febrero</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <span class="input-group-btn col-1">
                            <button type="button" class="btn btn-primary bi bi-arrow-repeat"></button>
                        </span>
                    </div>

                    <!-- Bar Chart -->
                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#barChart'), {
                            type: 'bar',
                            data: {
                                labels: ['January', 'February', 'March', 'April', 'May', 'June',
                                    'July'
                                ],
                                datasets: [{
                                    label: 'Bar Chart',
                                    data: [65, 59, 80, 81, 56, 55, 40],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    });
                    </script>
                    <!-- End Bar CHart -->

                </div>
            </div>
        </div>

        <!-- tercer grafico -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <div class="input-group mb-4 col-12">
                        <div class="col-4">
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">Soles</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <div class="col-3">
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">2023</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <div class="col-3">
                            <select class="form-select" id="select-medida" style="text-align:center;">
                                <option value="" disabled="" selected="">Febrero</option>
                                <option value="1">uno</option>
                            </select>
                        </div>&nbsp;
                        <span class="input-group-btn col-1">
                            <button type="button" class="btn btn-primary bi bi-arrow-repeat"></button>
                        </span>
                    </div>

                    <!-- Pie Chart -->
                    <canvas id="pieChart" style="max-height: 400px;"></canvas>
                    <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#pieChart'), {
                            type: 'pie',
                            data: {
                                labels: [
                                    'Red',
                                    'Blue',
                                    'Yellow'
                                ],
                                datasets: [{
                                    label: 'My First Dataset',
                                    data: [300, 50, 100],
                                    backgroundColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(54, 162, 235)',
                                        'rgb(255, 205, 86)'
                                    ],
                                    hoverOffset: 4
                                }]
                            }
                        });
                    });
                    </script>
                    <!-- End Pie CHart -->

                </div>
            </div>
        </div>

    </div>

</section>
<!-- ======= pie de pagina ======= -->
<?php
require ("pieDePagina.php");
?>