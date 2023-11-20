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
    </div>
@endsection
