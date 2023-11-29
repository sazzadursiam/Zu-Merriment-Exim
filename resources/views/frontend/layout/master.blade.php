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
                <div class="py-0">
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
                        <a class="nav-link @yield('services_active')" href="{{ route('services') }}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('products_active')" href="{{ route('products') }}">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('news_updates_active')" href="{{ route('news_updates') }}">NEWS & UPDATES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link contact_menu text-white @yield('contact_us_active')" href="{{ route('contact_us') }}"
                            style="color: #fff !important">Contact us</a>
                    </li>
                </ul>

            </div>



        </div>
    </nav>

    @yield('content')

    <!-- <footer class="bg-dark text-white text-center py-3 fixed-bottom"> -->
    <section class="custom_section">
        <footer class="py-5 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo mb-5">
                            <img src="{{ asset('frontend_assets/img/logo-footer.png') }}" alt="">
                        </div>
                        <p><i class="fa-solid fa-location-dot me-2"></i><strong>Address:</strong> 10A Lime street,
                            Bedfort, MK40 1LD</p>
                        <p><i class="fa-solid fa-envelope me-2"></i><strong>Email:</strong> info@merrimentexim.com</p>
                        <p><i class="fa-solid fa-phone-volume me-2"></i><strong>Contact:</strong> +44 1234 340081, +44
                            7958 579924</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="ms-xl-4">
                            <h5 class="mb-4">Quick Links</h5>
                            <ul>
                                <li><a href="{{ route('about_us') }}">About us</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="{{ route('news_updates') }}">News & Updates</a></li>
                                <li><a href="{{ route('contact_us') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="mb-4">Follow Us</h5>
                        <div class="social-link d-flex">
                            <a href="https://www.facebook.com/" target="_blank"
                                style="text-decoration: none; color:unset;">
                                <div class="me-3">
                                    <i class="fa-brands fa-square-facebook fa-2xl"></i>
                                </div>
                            </a>
                            <a href="https://bd.linkedin.com/" target="_blank"
                                style="text-decoration: none; color:unset;">
                                <div class="me-3">
                                    <i class="fa-brands fa-linkedin fa-2xl"></i>
                                </div>
                            </a>
                            <a href="https://twitter.com/" target="_blank" style="text-decoration: none; color:unset;">
                                <div class="me-3">
                                    <i class="fa-brands fa-square-x-twitter fa-2xl"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <p>Copyright &copy; 2023 Merriment Exim Ltd, All rights reserved.</p>
                </div>
            </div>
        </footer>
    </section>


    <!-- Bootstrap JS (Be sure to include the Popper.js dependency as well) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    @yield('custom_js')
</body>

</html>
