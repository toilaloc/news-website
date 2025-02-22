<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Error 404 | Front - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('frontend/assets//vendor/font-awesome/css/all.min.css')}}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{asset('frontend/assets//css/theme.css')}}">
</head>

<body class="bg-img-hero-fixed" style="background-image: url({{asset('frontend/assets//svg/illustrations/error-404.svg')}});">
<!-- ========== HEADER ========== -->
<header id="header" class="header header-bg-transparent header-abs-top py-3">
    <div class="header-section">
        <div id="logoAndNav" class="container">
            <nav class="navbar">
                <a class="navbar-brand" href="../landings/index.html" aria-label="Front">
                    <img src="../../du-an-tot-nghiep/images/logo.svg" width="100" height="100" alt="Logo">
                </a>
            </nav>
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex">
        <div class="container d-lg-flex align-items-lg-center min-vh-lg-100 space-4">
            <div class="w-lg-60 w-xl-50">
                <!-- Title -->
                <div class="mb-4">
                    <img class="max-w-23rem mb-3" src="{{asset('frontend/assets/svg/illustrations/error-number-404.svg')}}" alt="SVG Illustration">
                    <p class="lead">Oops! Looks like you followed a bad link. <br> If you think this is a problem with us, please <a href="#">tell us.</a></p>
                </div>
                <!-- End Title -->

                <a class="btn btn-wide btn-primary transition-3d-hover" href="../landings/index.html">Back Home</a>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
</main>
<!-- ========== END MAIN ========== -->

<!-- ========== FOOTER ========== -->
<footer class="position-absolute right-0 bottom-0 left-0">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center space-1">
            <!-- Copyright -->
            <p class="small text-muted mb-0">&copy; Front. 2020 Htmlstream.</p>
            <!-- End Copyright -->

            <!-- Social Networks -->
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a class="btn btn-xs btn-icon btn-ghost-secondary" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-xs btn-icon btn-ghost-secondary" href="#">
                        <i class="fab fa-google"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-xs btn-icon btn-ghost-secondary" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-xs btn-icon btn-ghost-secondary" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
            </ul>
            <!-- End Social Networks -->
        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- JS Global Compulsory -->
<script src="{{asset('frontend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{asset('frontend/assets//vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- JS Implementing Plugins -->

<!-- JS Front -->
<script src="{{asset('frontend/assets//js/hs.core.js')}}"></script>

<!-- IE Support -->
<script>

    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{asset('frontend/assets/vendor/polifills.js')}}"><\/script>');
</script>
</body>

</html>
