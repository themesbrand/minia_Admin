<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Notifications | Minia - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>

    <!-- alertifyjs Css -->
    <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">Notifications</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extended</a></li>
                                    <li class="breadcrumb-item active">Notifications</li>
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
                                <h4 class="card-title">Toast Notifications</h4>
                                <p class="card-title-desc">Toasts are lightweight notifications designed to mimic the push notifications</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="p-2">
                                            <h5 class="font-size-14">Basic</h5>
                                            <p class="card-title-desc mb-3">
                                                Toasts are as flexible as you need and have very little required markup.
                                                At a minimum, we require a single element to contain your
                                                “toasted” content and strongly encourage a dismiss button.
                                            </p>
                                            <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="assets/images/logo-sm.svg" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Minia</strong>
                                                    <small class="text-muted">11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                            <!--end toast-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="p-2">
                                            <h5 class="font-size-14">Translucent</h5>
                                            <p class="card-title-desc mb-3">
                                                Toasts are slightly translucent, too, so they blend over
                                                whatever they might appear over. For browsers that
                                                support the <code>backdrop-filter</code> CSS property,
                                                we’ll also attempt to blur the elements under a toast.
                                            </p>
                                            <div class="bg-soft-light p-3">
                                                <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                                                    <div class="toast-header">
                                                        <img src="assets/images/logo-sm.svg" alt="" class="me-2" height="18">
                                                        <strong class="me-auto">Minia</strong>
                                                        <small class="text-muted">11 mins ago</small>
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                </div>
                                                <!--end toast-->
                                            </div>
                                            <!--end /div-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="p-2 mt-4">
                                            <h5 class="font-size-14">Stacking</h5>
                                            <p class="card-title-desc mb-3">
                                                For systems that generate more notifications, consider using a wrapping element
                                                so they can easily stack.
                                            </p>
                                            <div class="bg-soft-light">
                                                <div aria-live="polite" aria-atomic="true" class="position-relative" style="min-height: 230px;">
                                                    <!-- Position it: -->
                                                    <!-- - `.toast-container` for spacing between toasts -->
                                                    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                                                    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
                                                    <div class="toast-container position-absolute top-0 end-0 p-2 p-lg-3">

                                                        <!-- Then put toasts within -->
                                                        <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo-sm.svg" alt="" class="me-2" height="18">
                                                                <strong class="me-auto">Minia</strong>
                                                                <small class="text-muted">just now</small>
                                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                See? Just like this.
                                                            </div>
                                                        </div>

                                                        <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo-sm.svg" alt="" class="me-2" height="18">
                                                                <strong class="me-auto">Minia</strong>
                                                                <small class="text-muted">2 sec ago</small>
                                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Heads up, toasts will stack automatically
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end /div-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="p-2 mt-4">
                                            <h5 class="font-size-14">Placement</h5>
                                            <p class="card-title-desc mb-3">
                                                You can also get fancy with flexbox utilities to align toasts horizontally
                                                and/or vertically.
                                            </p>
                                            <div class="bg-soft-light p-2 p-lg-3">
                                                <!-- Flexbox container for aligning the toasts -->
                                                <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100" style="min-height: 200px;">

                                                    <!-- Then put toasts within -->
                                                    <div class="toast fade show" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                                                        <div class="toast-header">
                                                            <img src="assets/images/logo-sm.svg" alt="" class="me-2" height="18">
                                                            <strong class="me-auto">Minia</strong>
                                                            <small>9 min ago</small>
                                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                        </div>
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end div-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">AlertifyJs</h4>
                                <p class="card-title-desc">Notifications examples of using AlertifyJS.</p>
                            </div>
                            <div class="card-body">

                                <h4 class="card-title mb-4">Default Dialogs</h4>

                                <div class="row text-center">
                                    <div class="col-sm-4">
                                        <div class="my-4">
                                            <h5 class="mb-4">Alert</h5>

                                            <a href="javascript: void(0);" id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="my-4">
                                            <h5 class="mb-4">Confirm</h5>

                                            <a href="javascript: void(0);" id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="my-4">
                                            <h5 class="mb-4">Prompt</h5>

                                            <a href="javascript: void(0);" id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="card-title mt-5 mb-3">Default Notifications</h4>

                                <div class="table-responsive">
                                    <table class="table mb-0">

                                        <tbody>
                                            <tr>
                                                <td>Default alert</td>
                                                <td><a href="javascript: void(0);" id="alert-message" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                            </tr>
                                            <tr>
                                                <td>Success alert</td>
                                                <td><a href="javascript: void(0);" id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                            </tr>
                                            <tr>
                                                <td>Error alert</td>
                                                <td><a href="javascript: void(0);" id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                            </tr>
                                            <tr>
                                                <td>Warning alert</td>
                                                <td><a href="javascript: void(0);" id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

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

<script src="assets/libs/alertifyjs/build/alertify.min.js"></script>
<script src="assets/js/pages/notification.init.js"></script>

<script src="assets/js/app.js"></script>
</body>

</html>