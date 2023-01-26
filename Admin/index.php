<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php
    require_once "layouts/config.php";
    $users = mysqli_query($link, "SELECT * from users");
    $alt = mysqli_query($link, "SELECT * FROM alternatifhp");
    $kri = mysqli_query($link, "SELECT * FROM kriteria");
    $subkri = mysqli_query($link, "SELECT * FROM subkriteria");

    $user = mysqli_num_rows($users);
    $alternatif = mysqli_num_rows($alt);
    $kriteria = mysqli_num_rows($kri);
    $subkriteria = mysqli_num_rows($subkri);
?>

<head>
    <title><?php echo $language["Dashboard"]; ?> Dashboard | AI Skin Recognizer</title>

    <?php include 'layouts/head.php'; ?>

    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18"><?php echo $language["Dashboard"]; ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">AI Skin</a></li>
                                    <li class="breadcrumb-item active"><?php echo $language["Dashboard"]; ?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate"><?php echo $language["Data Pengguna"]; ?></span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target=<?= $user ?>>0</span> Users

                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-users fa-4x"></i>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate"><?php echo $language["Alternatif"]; ?></span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target=<?=$alternatif ?>>0</span> ALT
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-users fa-4x"></i>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate"><?php echo $language["Kriteria"]; ?></span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target=<?= $kriteria ?>>0</span> Kriteria
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-users fa-4x"></i>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-10">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate"><?php echo $language["Sub-kriteria"]; ?></span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target=<?= $subkriteria ?>>0</span>-SUB
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <i class="fas fa-users fa-4x"></i>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

                <div class="row">
                    <div class="col-xl-5">
                        <!-- card -->
                       
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <?php include 'layouts/right-sidebar.php'; ?>
        <!-- /Right-bar -->

        <!-- JAVASCRIPT -->
        <?php include 'layouts/vendor-scripts.php'; ?>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        </body>

        </html>