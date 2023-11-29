@extends('frontend.layout.master')
@section('services_active')
    active
@endsection
@section('custom_css')
    <style>

    </style>
@endsection
@section('content')
    <div class="hero_img">
        <img src="{{ asset('frontend_assets/img/services/1.webp') }}" class="d-block w-100" alt="...">
        <div class="hero_child_img text-end">
            <img src="{{ asset('frontend_assets/img/services/2.webp') }}" class="" alt="">
        </div>

        <div class="d-inline-block page_title">
            <h5 class="text-white" style="text-shadow: 2px 2px 8px #f25c05;"><b>SERVICES</b></h5>
            <hr style="height: 3px; background-color:#f25c05; opacity:unset; border-top: 0; margin: 0; width: 135%;">
        </div>
    </div>


    <div class="container">
        <section class="custom_section">
            <div class="row">
                <div class="col-md-6">

                    <p class="mt-3" style="text-align: justify">Welcome to the heart of global trade at Merriment Exim. As
                        a leading trading company, we specialize in comprehensive export and import services designed to
                        connect businesses to opportunities worldwide. Whether you're looking to expand your market reach,
                        source quality products, or streamline your supply chain, we have the expertise and resources to
                        make international trade seamless for you.
                    </p>
                </div>
                <div class="col-12 mt-4">
                    <h6 class="d-inline brand_color text-uppercase px-2 py-1" style="border: 1px solid #f25c05"><b>Our
                            Export Services</b>
                    </h6>
                    <p class="mt-3 mb-0" style="text-align: justify">At Merriment Exim, we understand that success in
                        international markets requires precision and reliability. Our export services are tailored to meet
                        the diverse needs of businesses seeking to venture into new territories. From navigating complex
                        regulations to optimizing shipping logistics, we handle the intricacies, allowing you to focus on
                        growing your business globally.</p>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/3.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Market Analysis
                            </h6>
                            <p>Gain insights into global market trends, identify potential opportunities, and assess the
                                demand for your products in different regions.</p>
                        </div>
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/4.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Regulatory Compliance
                            </h6>
                            <p>Navigate the maze of international trade regulations and customs procedures with confidence,
                                ensuring smooth and compliant cross-border transactions.</p>
                        </div>
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/6.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Logistics Management
                            </h6>
                            <p>Streamline your export process with our logistics expertise, from packaging and documentation
                                to transportation and delivery.</p>
                        </div>
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/5.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Risk Mitigation
                            </h6>
                            <p>
                                Minimize risks associated with currency fluctuations, political instability, and other
                                variables through our comprehensive risk management strategies.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="custom_section">
            <div class="row">

                <div class="col-12">
                    <h6 class="d-inline brand_color text-uppercase px-2 py-1" style="border: 1px solid #f25c05"><b>OUR
                            IMPORT SERVICES</b>
                    </h6>
                    <p class="mt-3 mb-0" style="text-align: justify">At Merriment Exim, we understand that success in
                        international markets requires precision and reliability. Our export services are tailored to meet
                        the diverse needs of businesses seeking to venture into new territories. From navigating complex
                        regulations to optimizing shipping logistics, we handle the intricacies, allowing you to focus on
                        growing your business globally.</p>
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/7.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Supplier Identification
                            </h6>
                            <p>Leverage our extensive network to identify reputable suppliers who meet your product
                                specifications and quality standards.</p>
                        </div>
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/8.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Customs Clearance
                            </h6>
                            <p>Navigate the complexities of customs clearance and import documentation, ensuring a smooth
                                and timely flow of goods into your supply chain.</p>
                        </div>
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/9.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Quality Assurance
                            </h6>
                            <p>Our team conducts rigorous quality checks to guarantee that the products you import meet or
                                exceed your expectations.</p>
                        </div>
                        <div class="col-md-5 text-center  py-4">
                            <img src="{{ asset('frontend_assets/img/services/10.png') }}" alt="">
                            <h6 class="fw-bold mt-4">
                                Cost Optimization
                            </h6>
                            <p>
                                We work to optimize your import costs, providing transparent pricing structures and advising
                                on duty drawbacks, tariff classifications, and cost-effective shipping options.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="custom_section">
            <div class="row">
                <div class="col-md-12 mb-md-0">
                    <div class="card"
                        style="border-left: 20px solid #f25c05; border-radius: 0; box-shadow: 0px 0px 5px 0px #888888; height:100%;">
                        <div class="card-body">
                            <h6 class="d-inline brand_color px-2 py-1" style="border: 1px solid #f25c05"><b>Why Choose
                                    Merriment Exim for Export and Import?</b>
                            </h6>
                            <p class="mt-3 mb-0"><b>Global Network:</b> Benefit from our
                                extensive global network, connecting you to opportunities in diverse markets.</p>
                            <p class="mt-0 mb-0"><b>Expertise:</b> Rely on the expertise of our
                                seasoned professionals who understand the nuances of international trade.</p>
                            <p class="mt-0 mb-0"><b>Transparency:</b> Experience transparency at
                                every step, from pricing to regulatory compliance, fostering trust in our partnership.</p>
                            <p class="mt-0 mb-0"><b>Innovation:</b> Embrace innovation in trade
                                facilitation, leveraging cutting-edge technology to streamline processes and enhance
                                efficiency.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>






    </div>
@endsection
