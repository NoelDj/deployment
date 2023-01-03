<?php
require_once 'components/meta.php'
?>

<style>
    .nav-link img {
        width: 25px;
    }
</style>


<?php
require_once 'components/header.php';
?>

<main>

    <div class="col-md-8 mb-4">
        <h1>Welcome to Desk Tools</h1>
        <p>Links on the page</p>


    </div>

    <div class="card p-4 d-flex justify-center p-4">
        <div class="row">
            <div class="col-xl-1">
                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active mb-2" id="v-pills-link1-tab" data-mdb-toggle="pill" role="tab" aria-controls="v-pills-link1" aria-selected="true">
                        <img src="../img/icons/graphs-icon.svg" alt="">
                        <div>Graphs</div>
                    </button>
                    <button class="nav-link" id="v-pills-link1-tab" data-mdb-toggle="pill" role="tab" aria-controls="v-pills-link1" aria-selected="true">
                        <img src="../img/icons/graphs-icon.svg" alt="">
                        <div>Graphs</div>
                    </button>
                    <!-- 
                    <button class="nav-link" id="v-pills-link2-tab" data-mdb-toggle="pill" role="tab" aria-controls="v-pills-link2" aria-selected="false">Pictures</button>
                    <button class="nav-link" id="v-pills-link3-tab" data-mdb-toggle="pill" role="tab" aria-controls="v-pills-link3" aria-selected="false">Gradients</button>
                    <button class="nav-link" id="v-pills-link4-tab" data-mdb-toggle="pill" role="tab" aria-controls="v-pills-link4" aria-selected="false">Text</button> -->
                </div>
            </div>

            <div class="col-xl-3 p-4">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-link1" role="tabpanel" aria-labelledby="v-pills-link1-tab">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Corporis molestias porro, eius magnam provident eos!
                    </div>
                    <div class="tab-pane fade" id="v-pills-link2" role="tabpanel" aria-labelledby="v-pills-link2-tab">
                        <div class="row img-container">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-link3" role="tabpanel" aria-labelledby="v-pills-link3-tab">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Aspernatur, illum.
                    </div>
                    <div class="tab-pane fade" id="v-pills-link4" role="tabpanel" aria-labelledby="v-pills-link4-tab">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Sequi quasi dicta qui porro eligendi nam doloribus vel minus ullam quam!
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="overlay" id="print">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <button class="btn mt-2 text-white" id="d-pdf">Download PDF</button>

</main>
<?php
require_once 'components/footer.php';
?>


<?php
require_once 'components/scripts.php';
?>