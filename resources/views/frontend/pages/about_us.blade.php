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
                right: -275px;
                top: 65px;
            }

            .hero_img .hero_child_img img {
                width: 30%;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: -170px;
                top: 120px;
            }

            .hero_img .hero_child_img img {
                width: 50%;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: -170px;
                top: 120px;
            }

            .hero_img .hero_child_img img {
                width: 50%;
            }
        }

        @media (min-width: 991px) and (max-width: 1199px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: -40px;
                top: 150px;
            }

            .hero_img .hero_child_img img {
                width: 65%;
            }
        }

        @media (min-width: 1199px) and (max-width: 1399px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 0;
                top: 250px;
            }

            .hero_img .hero_child_img img {
                width: 75%;
            }
        }

        @media (min-width: 1399px) {
            .hero_img {
                position: relative;
            }

            .hero_img .hero_child_img {
                position: absolute;
                right: 0;
                top: 250px;
            }

            .hero_img .hero_child_img img {
                width: 75%;
            }
        }
    </style>
@endsection
@section('content')
    <div class="">
        <img class="" src="{{ asset('frontend_assets/img/about_us/hero.webp') }}" class="d-block w-100" alt="...">
        {{-- <div class="hero_child_img">
            <img src="{{ asset('frontend_assets/img/about_us/1.webp') }}" class="" alt="">
        </div> --}}
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
            </div>
        </section>
    </div>
@endsection
