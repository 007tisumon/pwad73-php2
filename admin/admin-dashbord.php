<!--start header-->
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}

if ($_SESSION['role'] != 'admin') {
    header("Location: unauthorized.php");
}
include "partials/topHtml.php";
include "partials/header.php"


    ?>
<!--end header-->
<!--start sidebar-->
<?php include "partials/admin_leftbar.php" ?>
<!--end sidebar-->

<!--start main content-->
<main class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Admin Dashbord</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <img src="assets/images/wlcome.jpg" alt="" class="myimg">
                </div>
            </div>
        </div>
    </div><!--end row-->

</main>
<!--end main content-->



<?php
include "partials/modal.php";
include "partials/customize.php";
include "partials/scripts.php"
    ?>