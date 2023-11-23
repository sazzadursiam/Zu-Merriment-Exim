@extends('frontend.layout.master')
@section('products_active')
    active
@endsection
@section('custom_css')
    <style>

    </style>
@endsection
@section('content')
    <div class="hero_img">
        <img src="{{ asset('frontend_assets/img/products/1.svg') }}" class="d-block w-100" alt="...">
        <div class="hero_child_img text-end">
            <img src="{{ asset('frontend_assets/img/products/2.svg') }}" class="" alt="">
        </div>

        <div class="d-inline-block page_title">
            <h5 class="text-white" style="text-shadow: 2px 2px 8px #f25c05;"><b>PRODUCTS</b></h5>
            <hr style="height: 3px; background-color:#f25c05; opacity:unset; border-top: 0; margin: 0; width: 135%;">
        </div>
    </div>


    <div class="container">
        <section class="custom_section">
            <div class="row">
                <div class="col-md-6">
                    <p class="mt-3" style="text-align: justify">We take pride in offering a diverse range of high-quality
                        products to meet the ever-evolving needs of our valued clients. With a focus on excellence and
                        reliability, we specialize in the trading of premium goods such as timber, bitumen, crushed stone,
                        jute bags, frozen food, and dry food.
                    </p>
                </div>
            </div>
        </section>

        <section class="custom_section">

            <div class="row">
                <div class="col-md-6 py-4">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/3.svg') }}" alt="">
                        <div class="inner_btn">
                            TIMBER
                        </div>

                    </div>

                </div>
                <div class="col-md-6 py-4 text-start">
                    <p>Our extensive selection of hardwood and softwood is sourced from sustainable forests, ensuring not
                        only the highest standards of quality but also a commitment to environmental responsibility. Whether
                        you're engaged in construction or furniture manufacturing, our timber comes in various dimensions
                        and grades to suit your specific needs. We prioritize the durability and reliability of our timber,
                        making it the ideal choice for projects that demand strength and longevity. At Merriment Exim, we
                        understand the importance of delivering products that meet and exceed industry expectations, and our
                        timber selection is a testament to our dedication to excellence. Explore our range and experience
                        the assurance that comes with choosing Merriment Exim for all your timber requirements.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 py-4 text-start order-1 order-md-0">
                    <p>Our extensive selection of hardwood and softwood is sourced from sustainable forests, ensuring
                        not only the highest standards of quality but also a commitment to environmental responsibility.
                        Whether you're engaged in construction or furniture manufacturing, our timber comes in various
                        dimensions and grades to suit your specific needs. We prioritize the durability and reliability
                        of our timber, making it the ideal choice for projects that demand strength and longevity. At
                        Merriment Exim, we understand the importance of delivering products that meet and exceed
                        industry expectations, and our timber selection is a testament to our dedication to excellence.
                        Explore our range and experience the assurance that comes with choosing Merriment Exim for all
                        your timber requirements.</p>
                </div>
                <div class="col-md-6 py-4 text-md-end order-0 order-md-1">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/4.svg') }}" alt="">
                        <div class="inner_btn">
                            METAL SCRAP
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 py-4">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/5.svg') }}" alt="">
                        <div class="inner_btn">
                            BITUMEN
                        </div>

                    </div>

                </div>
                <div class="col-md-6 py-4 text-start">
                    <p>As a leading trading company, we take pride in offering a comprehensive range of bitumen solutions
                        that cater to diverse industrial applications. Our commitment to excellence is reflected in the
                        reliability and performance of our bitumen, making it the material of choice for road construction,
                        roofing, and waterproofing projects. At Merriment Exim Ltd, we understand the critical role bitumen
                        plays in infrastructure development, and our products adhere to the highest international standards.
                        Whether you're embarking on a large-scale construction project or require bitumen for specific
                        applications, our range is designed to meet your unique needs. Trust Merriment Exim Ltd for a
                        seamless supply of top-tier bitumen, ensuring the success and durability of your projects.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 py-4 text-start order-1 order-md-0">
                    <p>Our selection of crushed stone stands as a testament to our commitment to quality and durability.
                        Meticulously processed to meet the highest industry standards, our stones provide a solid foundation
                        for a wide range of applications, including roads, buildings, and other key infrastructure projects.
                        At Merriment Exim Ltd, we understand the importance of having a dependable source of construction
                        materials, and our crushed stone products are chosen for their strength and reliability. Whether you
                        are a contractor, builder, or engaged in any construction endeavor, our crushed stone offers the
                        assurance of a robust and enduring solution. Choose Merriment Exim Ltd for your crushed stone needs,
                        and experience the difference that top-tier quality and service can make in your projects.</p>
                </div>
                <div class="col-md-6 py-4 text-md-end order-0 order-md-1">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/4.svg') }}" alt="">
                        <div class="inner_btn">
                            CRUSHED STONE
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 py-4">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/6.svg') }}" alt="">
                        <div class="inner_btn">
                            RMG
                        </div>

                    </div>

                </div>
                <div class="col-md-6 py-4 text-start">
                    <p>As a leading trading company, we pride ourselves on offering a diverse and fashionable array of
                        high-quality apparel for every occasion. Our Ready-Made Garments are crafted with precision,
                        combining contemporary style with comfort, catering to the ever-evolving tastes of our discerning
                        clientele.
                        At Merriment Exim Ltd, we understand the importance of staying ahead in the fast-paced fashion
                        industry. Our commitment to quality is reflected in the careful selection of fabrics, meticulous
                        stitching, and attention to detail, ensuring that each garment meets the highest standards of
                        excellence. Whether you're looking for casual wear, formal attire, or trendy fashion statements, our
                        RMG collection encompasses a wide range of styles to suit various preferences.
                        We take pride in our customer-centric approach, ensuring a seamless experience from selection to
                        delivery. Our Ready-Made Garments not only exemplify the latest trends but also underscore our
                        dedication to providing fashionable, affordable, and top-notch clothing for individuals and
                        retailers alike. Trust Merriment Exim Ltd to elevate your wardrobe with our curated selection of
                        Ready-Made Garments, where style meets quality, and fashion meets functionality.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 py-4 text-start order-1 order-md-0">
                    <p>We are your premier destination for high-quality jute bags, combining sustainability with versatile
                        functionality. Our commitment to Eco-friendly practices is evident in our selection of jute bags, a
                        natural and biodegradable alternative to conventional packaging materials. Known for their strength
                        and durability, our jute bags are ideal for a variety of uses, including packaging, promotion, and
                        transport. At Merriment Exim Ltd, we understand the growing demand for environmentally conscious
                        solutions, and our jute bags reflect our dedication to meeting these needs. Whether you are a
                        retailer looking for sustainable packaging options or a business seeking promotional materials, our
                        jute bags offer a stylish and eco-friendly choice. Trust Merriment Exim Ltd for your jute bag
                        requirements, and join us in promoting sustainability while maintaining the highest standards of
                        quality and functionality.</p>
                </div>
                <div class="col-md-6 py-4 text-md-end order-0 order-md-1">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/7.svg') }}" alt="">
                        <div class="inner_btn">
                            JUTE BAG
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 py-4">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/8.svg') }}" alt="">
                        <div class="inner_btn">
                            SEA FOOD
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4 text-start">
                    <p>At Merriment Exim Ltd, where we bring the finest and freshest sea foods to your table. As a leading
                        trading company in the seafood industry, we pride ourselves on delivering a diverse array of
                        high-quality products sourced directly from the bountiful oceans. From succulent shrimp and
                        delectable fish to premium shellfish, our selection is a testament to our commitment to providing
                        the best the sea has to offer.
                        At Merriment Exim Ltd, we prioritize the highest standards of quality and sustainability in our
                        seafood sourcing practices. Our dedicated team ensures that every product meets rigorous standards,
                        guaranteeing freshness and flavor that exceeds expectations. Whether you are a seafood connoisseur
                        or a culinary professional, our range of sea foods is designed to elevate your dining experience.
                        Trust Merriment Exim Ltd as your preferred seafood supplier, where a passion for quality meets a
                        commitment to responsible sourcing. Explore our diverse offerings and indulge in the unmatched taste
                        and nutritional benefits of our premium sea foods.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 py-4 text-start order-1 order-md-0">
                    <p>At Merriment Exim Ltd, your go-to destination for premium dry foods that combine quality, flavor, and
                        convenience. As a leading trading company, we take pride in curating a diverse selection of
                        high-quality dry food products to meet the culinary needs of our customers. From pantry staples to
                        gourmet treats, our range encompasses a variety of grains, pulses, dried fruits, nuts, and more.
                        At Merriment Exim Ltd, we understand the importance of offering not just products, but experiences.
                        Our commitment to excellence is reflected in the careful sourcing of ingredients and meticulous
                        quality control measures, ensuring that each dry food item meets and exceeds the expectations of our
                        discerning clientele. Whether you're a home chef, a busy professional, or a retailer seeking premium
                        dry foods for your shelves, Merriment Exim Ltd is your reliable partner in providing flavorful,
                        nutritious, and shelf-stable options.
                        Choose Merriment Exim Ltd for a culinary journey that combines the finest ingredients with a
                        commitment to reliability and taste. Explore our range of dry foods and elevate your cooking and
                        dining experiences with the excellence that defines our brand.</p>
                </div>
                <div class="col-md-6 py-4 text-md-end order-0 order-md-1">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/img/products/9.svg') }}" alt="">
                        <div class="inner_btn">
                            DRY FOOD
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
