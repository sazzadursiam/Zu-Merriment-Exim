@extends('frontend.layout.master')
@section('about_us_active')
    active
@endsection
@section('custom_css')
    <style>
        @media screen and (max-width: 575px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 50px;
                top: 70px;
            }

            .hero_img .hero_child_img img {
                width: 33%;
            }
        }
        
        @media (min-width: 576px) and (max-width: 767px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 88px;
                top: 120px;
            }

            .hero_img .hero_child_img img {
                width: 36%;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 106px;
                top: 140px;
            }

            .hero_img .hero_child_img img {
                width: 45%;
            }
        }

        @media (min-width: 991px) and (max-width: 1199px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 142px;
                top: 184px;
            }

            .hero_img .hero_child_img img {
                width: 60%;
            }
        }

        @media (min-width: 1200px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 125px;
                top: 264px;
            }

            .hero_img .hero_child_img img {
                width: 75%;
            }
        }
    </style>
@endsection
@section('content')
    <div class="hero_img">
        <img src="{{ asset('frontend_assets/img/about_us/hero.webp') }}" class="d-block w-100" alt="...">
        <div class="hero_child_img text-end">
            <img src="{{ asset('frontend_assets/img/about_us/1.webp') }}" class="" alt="">
        </div>
    </div>


    <div class="container">
        <section class="custom_section">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>WHO WE ARE</b></h6>
                    <p class="mt-3" style="text-align: justify">Welcome to Merriment Exim Ltd, where excellence meets
                        expertise in the dynamic world of trading. Established with a passion for delivering unparalleled
                        trading solutions, we take pride in our commitment to innovation, integrity, and client success.
                    </p>
                </div>
                <p style="text-align: justify">Merriment Exim Ltd. is a team of seasoned professionals, each bringing a
                    wealth of experience and a unique set of skills to the table. From market analysts and financial experts
                    to technology specialists, we have assembled a diverse team dedicated to staying ahead of market trends
                    and delivering top-notch services. What Sets Us Apart</p>
            </div>
        </section>
        <section class="custom_section">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="card"
                        style="border-left: 20px solid #f25c05; border-radius: 0; box-shadow: 0px 0px 5px 0px #888888; height:100%;">
                        <div class="card-body">
                            <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>Our Mission</b>
                            </h6>
                            <p class="mt-3" style="text-align: justify">At Merriment Exim, our mission is to empower
                                individuals and businesses to navigate the complexities of the global market with
                                confidence. We strive to provide cutting-edge trading services that enable our clients to
                                achieve their financial goals while ensuring
                                transparency, trust, and reliability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card"
                        style="border-left: 20px solid #f25c05; border-radius: 0; box-shadow: 0px 0px 5px 0px #888888; height:100%;">
                        <div class="card-body">
                            <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>Our Vision</b>
                            </h6>
                            <p class="mt-3" style="text-align: justify">We envision a future where financial empowerment
                                knows no bounds. We aspire to be pioneers in the trading industry, setting new standards of
                                excellence and innovation. Our commitment is to empower individuals and businesses globally,
                                fostering informed, strategic, and sustainable financial decisions. By leveraging
                                cutting-edge technology and fostering personal growth, we aim to create a positive impact
                                that transcends traditional boundaries, enriching lives and communities worldwide through
                                the exciting possibilities of trading.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0 text-center text-lg-start">
                    <img src="{{ asset('frontend_assets/img/about_us/2.webp') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline brand_color px-2 py-1 text-uppercase" style="border: 1px solid #f25c05"><b>What Sets
                            Us Apart</b>
                    </h6>

                    <div class="mt-3 d-flex align-items-center">
                        <i class="fa-solid fa-circle-check me-2" style="color: #f25c05"></i>
                        <p class="mb-0"><b>Expertise:</b> Our team comprises industry veterans who bring years of
                            experience in trading
                            and financial markets. This expertise allows us to offer insights and strategies that set our
                            clients on the path to success.</p>
                    </div>
                    <div class="mt-3 d-flex align-items-center">
                        <i class="fa-solid fa-circle-check me-2" style="color: #f25c05"></i>
                        <p class="mb-0"><b>Innovation:</b> In a rapidly evolving market, innovation is key. We leverage
                            cutting-edge technology to provide our clients with the latest tools and resources, ensuring
                            they stay ahead of the curve.</p>
                    </div>
                    <div class="mt-3 d-flex align-items-center">
                        <i class="fa-solid fa-circle-check me-2" style="color: #f25c05"></i>
                        <p class="mb-0"><b>Client-Centric Approach:</b> Your success is our success. We
                            prioritize a client-centric approach, tailoring our services to meet the unique needs and goals
                            of each individual or business we work with.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>Our Commitment to
                            Excellence</b></h6>
                    <p class="mt-3 mb-0">At Merriment Exim Ltd, excellence is not just a goal; it's a standard. We are
                        dedicated to
                        maintaining the highest standards of professionalism, transparency, and ethical conduct. Whether
                        you're a seasoned trader or just starting, we are here to guide you on your financial journey.</p>

                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h4 class="d-inline brand_color px-2 py-1" style=""><b>Trusted by more than 20
                            global companies have worked with us</b></h4>
                    <div class="card mt-4" style="border-radius: 0; box-shadow: 0px 0px 5px 0px #888888;">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <img src="{{ asset('frontend_assets/img/about_us/3.webp') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
