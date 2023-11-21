<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merriment Exim @yield('page_title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    @yield('custom_css')
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-top"> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">

            <a class="navbar-brand me-5" href="{{ route('home') }}">
                <div class="py-2">
                    <img src="{{ asset('frontend_assets/img/logo.png') }}" alt="" height="60px">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 d-flex justify-content-between align-items-center">
                    <li class="nav-item">
                        <a class="nav-link @yield('home_active')" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('about_us_active')" href="{{ route('about_us') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS & UPDATES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link contact_menu" href="#">Contact us</a>
                    </li>
                </ul>

            </div>



        </div>
    </nav>

    @yield('content')

    <!-- <footer class="bg-dark text-white text-center py-3 fixed-bottom"> -->
    <section class="custom_section">
        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                &copy; 2023 Your Company. All rights reserved.
            </div>
        </footer>
    </section>


    <!-- Bootstrap JS (Be sure to include the Popper.js dependency as well) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('custom_js')
</body>

</html>
