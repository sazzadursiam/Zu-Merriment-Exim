@extends('frontend.layout.master')
@section('home_active')
    active
@endsection
@section('content')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend_assets/img/home-hero.png') }}" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>
    <div class="container">
        <section class="custom_section">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="{{ asset('frontend_assets/img/home/about us 1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>ABOUT US</h3>
                    <h2 class="brand_color fw-bold">Empowering Global Commerce: Uniting Markets, Delivering Excellence</h2>
                    <p class="" style="text-align: justify">
                        Welcome to Merriment Exim, where we transcend the boundaries of mere trade and embrace the role of
                        global architects, connecting markets and fostering sustainable commerce. With a rich portfolio
                        spanning timber, metal scrap, bitumen, seafood, RMG, jute bags, and more, our expertise lies in
                        navigating the intricacies of international trade. At Merriment Exim, we pride ourselves on our
                        commitment to integrity, quality, and innovation. Operating on a global scale, we bring together
                        suppliers and consumers from around the world, ensuring a seamless flow of goods that contributes to
                        the growth and sustainability of businesses at both ends. With a strong emphasis on sustainability,
                        we promote responsible sourcing and strive to minimize our environmental footprint. Quality is the
                        cornerstone of our trading philosophy, and every product in our portfolio undergoes rigorous checks
                        to meet the highest standards. At the heart of our success is our
                        customer-eccentric approach, tailoring solutions to meet specific requirements and ensuring a
                        personalized trading experience. As we look to the future, our vision is clear—to be a catalyst for
                        positive change, fostering enduring relationships and contributing to the sustainable development of
                        industries worldwide. Thank you for considering Merriment Exim as your trusted trading partner. We
                        look forward to building a future of collaboration, growth, and mutual success.
                    </p>
                    <a href="javascript:void(0)" class="bg_primary read_more">
                        READ MORE
                    </a>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">WHY CHOOSE US</h3>
                    <h2 class="brand_color text-center fw-bold">
                        Discover the Advantage of Unparalleled Expertise, Sustainable Practices, and Tailored Solutions for
                        a Seamless Trading Experience
                    </h2>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-4 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/home/why_chose_us/1.png') }}" alt="">
                            <h5 class="fw-bold mt-4">
                                Reliability and Consistency
                            </h5>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/home/why_chose_us/2.png') }}" alt="">
                            <h5 class="fw-bold mt-4">
                                Quality Assurance
                            </h5>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/home/why_chose_us/3.png') }}" alt="">
                            <h5 class="fw-bold mt-4">
                                Customer-Centric Approach
                            </h5>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/home/why_chose_us/4.png') }}" alt="">
                            <h5 class="fw-bold mt-4">
                                Global Reach
                            </h5>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/home/why_chose_us/5.png') }}" alt="">
                            <h5 class="fw-bold mt-4">
                                Competitive Pricing
                            </h5>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/home/why_chose_us/6.png') }}" alt="">
                            <h5 class="fw-bold mt-4">
                                Responsive Communication
                            </h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-md-12">
                    <h3>OUR SERVICES</h3>

                </div>
                <div class="col-md-10">
                    <h2 class="brand_color fw-bold">
                        Our Comprehensive Services Unleash Opportunities, Navigate Challenges, and Elevate Your Business in
                        the Global Marketplace
                    </h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 py-4">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/home/our_service/1.webp') }}" alt="">
                        <div class="inner_btn">
                            EXPORT
                        </div>
                        <div class="inner_text">
                            <p>
                                With a commitment to excellence, our trading company ensures smooth, reliable, and efficient
                                global export operations, facilitating growth for businesses worldwide.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 py-4 text-md-end">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/home/our_service/2.webp') }}" alt="">
                        <div class="inner_btn">
                            IMPORT
                        </div>
                        <div class="inner_text">
                            <p>
                                Leveraging our global network, we streamline import processes, ensuring timely and
                                dependable access to the finest goods for our clients
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">OUR PRODUCTS</h3>

                </div>
                <div class="col-md-12">
                    <h2 class="brand_color fw-bold text-center">
                        Discover the Distinctive Range of Premium Trading CommoditiesUnmatched Quality, Endless
                        Opportunities
                    </h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/1.png') }}" alt="">
                        <div class="product_inner_btn">
                            Timber
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/2.png') }}" alt="">
                        <div class="product_inner_btn">
                            Sea Food
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/3.png') }}" alt="">
                        <div class="product_inner_btn">
                            RMG
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/4.png') }}" alt="">
                        <div class="product_inner_btn">
                            Metal Scrap
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/5.png') }}" alt="">
                        <div class="product_inner_btn">
                            Dry Food
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/6.png') }}" alt="">
                        <div class="product_inner_btn">
                            Bitumen
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/7.png') }}" alt="">
                        <div class="product_inner_btn">
                            Crashed Stone
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/home/products/8.png') }}" alt="">
                        <div class="product_inner_btn">
                            Jute Bag
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="">TESTIMONIALS</h3>

                </div>
                <div class="col-md-12">
                    <h2 class="brand_color fw-bold">
                        Our Clients Reviews
                    </h2>
                </div>
            </div>
            <div class="row testimonials mt-5">
                <div class="col-md-4 mb-4">
                    <div class="testimonials-item">
                        <p>
                            “ I'm consistently impressed with this trading company's efficiency and reliability in executing
                            trades. Their transparent transactions and insightful market analyses have made my trading
                            experience seamless.“
                        </p>
                    </div>
                    <div style="padding: 7px">
                        <h5 class="mb-0 fw-bold">Wilton Grooves</h5>
                        <p class="brand_color">Trader</p>
                    </div>

                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonials-item">
                        <p>
                            “ This trading company stands out for its precision in executing trades and transparent
                            approach,
                            making my investment journey smooth and stress-free. “
                        </p>
                    </div>
                    <div style="padding: 7px">
                        <h5 class="mb-0 fw-bold">Arif Shahriar</h5>
                        <p class="brand_color">Businessman</p>
                    </div>

                </div>

                <div class="col-md-4 mb-4">
                    <div class="testimonials-item">
                        <p>
                            "Consistent precision in trades, transparent dealings, and insightful market analyses define
                            this
                            trading company. The user-friendly platform and responsive support enhance the overall
                            experience."
                        </p>
                    </div>
                    <div style="padding: 7px">
                        <h5 class="mb-0 fw-bold">George D. Coffey</h5>
                        <p class="brand_color">Businessman</p>
                    </div>

                </div>


            </div>

        </section>
    </div>
@endsection
