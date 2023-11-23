@extends('frontend.layout.master')
@section('news_updates_active')
    active
@endsection
@section('custom_css')
    <style>

    </style>
@endsection
@section('content')
    <div class="hero_img">
        <img src="{{ asset('frontend_assets/img/news_updates/1.png') }}" class="d-block w-100" alt="...">
        <div class="hero_child_img text-end">
            <img src="{{ asset('frontend_assets/img/news_updates/2.png') }}" class="" alt="">
        </div>

        <div class="d-inline-block page_title">
            <h5 class="text-white" style="text-shadow: 2px 2px 8px #f25c05;"><b>NEWS & UPDATES</b></h5>
            <hr style="height: 3px; background-color:#f25c05; opacity:unset; border-top: 0; margin: 0; width: 135%;">
        </div>

    </div>


    <div class="container">

        <section class="custom_section"></section>

        <section class="custom_section">
            <div class="row">
                <div class="col-12">
                    <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>NEWS & BLOGS</b>
                    </h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/news_updates/3.png') }}" alt="">
                        <h6 class="brand_color py-2"><b>Global shipping giant Maersk to slash 10,000 jobs, citing difficult
                                container trade environment</b>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/news_updates/4.png') }}" alt="">
                        <h6 class="brand_color py-2"><b>Tata Power shares rise 0.04 per cent in Wednesday's trading session
                            </b>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/news_updates/5.png') }}" alt="">
                        <h6 class="brand_color py-2"><b>Timber investor Manulife raises more than $200 million to buy
                                forests for carbon</b>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/news_updates/6.png') }}" alt="">
                        <h6 class="brand_color py-2"><b>Wood prices fall into crisis mode in Germany</b>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/news_updates/7.png') }}" alt="">
                        <h6 class="brand_color py-2"><b>Bitumen Market Poised For Explosive Growth, With A Projected US$ 7.3
                                Bn By 2032 At A Steady 3.8% CAGR</b>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="product_wrapper">
                        <img src="{{ asset('frontend_assets/img/news_updates/8.png') }}" alt="">
                        <h6 class="brand_color py-2"><b>Barney’s Beanery Presents Line of Premium Frozen Burgers</b>
                        </h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>LATEST UPDATES</b></h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-3 pe-0"><img src="{{ asset('frontend_assets/img/news_updates/9.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="col-9 d-flex align-items-center latest_update_text" style="background-color:#f25c05;">
                            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-3 pe-0"><img src="{{ asset('frontend_assets/img/news_updates/10.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="col-9 d-flex align-items-center latest_update_text" style="background-color:#f25c05;">
                            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-3 pe-0"><img src="{{ asset('frontend_assets/img/news_updates/9.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="col-9 d-flex align-items-center latest_update_text" style="background-color:#f25c05;">
                            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-3 pe-0"><img src="{{ asset('frontend_assets/img/news_updates/10.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="col-9 d-flex align-items-center latest_update_text" style="background-color:#f25c05;">
                            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-3 pe-0"><img src="{{ asset('frontend_assets/img/news_updates/9.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="col-9 d-flex align-items-center latest_update_text" style="background-color:#f25c05;">
                            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-3 pe-0"><img src="{{ asset('frontend_assets/img/news_updates/10.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="col-9 d-flex align-items-center latest_update_text" style="background-color:#f25c05;">
                            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>
@endsection
