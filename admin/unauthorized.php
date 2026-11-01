<?php
session_start();
http_response_code(403);

$homeUrl = 'login.php';
if (isset($_SESSION['role'])) {
    switch ($_SESSION['role']) {
        case 'admin':
            $homeUrl = 'admin-dashbord.php';
            break;
        case 'staff':
            $homeUrl = 'staff-dashbord.php';
            break;
        case 'customer':
            $homeUrl = 'index.php';
            break;
    }
}

include "partials/topHtml.php";
?>

<main class="min-vh-100 d-flex align-items-center justify-content-center p-3">
    <section class="card border-0 shadow-lg rounded-4 overflow-hidden w-100" style="max-width: 560px;">
        <div class="card-body text-center p-4 p-md-5">
            <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger bg-opacity-10 text-danger mb-4"
                style="width: 96px; height: 96px;" aria-hidden="true">
                <i class="bi bi-shield-lock fs-1"></i>
            </div>
            <p class="text-uppercase fw-semibold text-danger mb-2">Error 403</p>
            <h1 class="h2 fw-bold mb-3">Access denied</h1>
            <p class="text-body-secondary mb-4">
                You don’t have permission to view this page. If you think this is a mistake, please contact your administrator.
            </p>
            <a class="btn btn-primary px-4 py-2" href="<?php echo htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8'); ?>">
                <i class="bi bi-house-door me-2" aria-hidden="true"></i>Back to home
            </a>
        </div>
    </section>
</main>

</body>
</html>
