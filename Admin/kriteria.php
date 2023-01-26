<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/config.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $nama_kriteria = $_POST['nama_kriteria'];
    $atribut = $_POST['atribut'];
    

    $res = mysqli_query($link, "INSERT INTO kriteria (nama_kriteria,attribut) VALUES ('$nama_kriteria','$atribut')");
    echo "console.log('KLIK BERHASIL)";
};

var_dump($id_kriteria);
?>


<head>

    <title><?php echo $language["Kriteria"] ?> | AI Skin Recognizer</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">Data <?php echo $language["Kriteria"] ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                    <li class="breadcrumb-item active"><?php echo strtoupper($language["Kriteria"])?></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo strtoupper($language["Kriteria"])?></h4>
                                <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                                    <i class="fas fa-plus align-middle me-2"></i> <?php echo strtoupper($language["Add"])?>
                                </button>

                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo $language["Add" ], " " ,$language["Kriteria"]?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="kriteria.php" method="POST" class="needs-validation" novalidate>
                                                    <div class="row">
                                    
             
                                                            <div class="mb-3">
                                                                <label class="form-label" for="nama"><?php echo $language["Kriteria"]?></label>
                                                                <input type="text" name="nama_kriteria" class="form-control" placeholder=`<?php echo $language["Kriteria"]?>` required>
                                                            </div>
                                           
                                        
                                                            <div class="mb-3">
                                                                <label class="form-label" for="atribut"><?php echo $language["Attribut"]?></label>
                                                                <input type="text" name="atribut" class="form-control" placeholder="<?php echo $language["Attribut"]?>" required>
                                                            </div>

                                                    <button type="submit" class="btn btn-primary"  name="submit">Submit form</button>
                                                </form>
                                            </div>

                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                            </div>

                            <div class="card-body">
                                <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th class="col-2">ID</th>
                                            <th>Kriteria</th>
                                            <th class="col-2">Attribut</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $kriteria = mysqli_query($link, "SELECT * FROM kriteria");
                                        while ($data = mysqli_fetch_array($kriteria)) { ?>
                                            <tr>
                                                <td><?php echo $data['id_kriteria']; ?></td>
                                                <td><?php echo $data['nama_kriteria']; ?></td>
                                                <td><?php echo $data['attribut']; ?></td>
                                                <td>
                                                    <button class="btn btn-outline-secondary">
                                                    <i class="fas fa-pencil-alt" title="Edit"></i> 
                                                    </button>  
                                                    <button  class="btn btn-outline-danger waves-effect waves-light" id="sa-warning">
                                                    <i class="fas fa-trash-alt" title="trash"></i> 
                                                    </button></td>
                                                    
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
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

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="assets/js/pages/sweetalert.init.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
<!-- form validation -->
<script src="assets/js/pages/form-validation.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>