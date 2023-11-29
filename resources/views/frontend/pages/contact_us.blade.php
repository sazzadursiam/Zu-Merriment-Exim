@extends('frontend.layout.master')
@section('contact_us_active')
    active
@endsection
@section('custom_css')
    <style>


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection
@section('content')
    <div class="hero_img">
        <img src="{{ asset('frontend_assets/img/contact_us/1.png') }}" class="d-block w-100" alt="...">
        <div class="hero_child_img text-end">
            <img src="{{ asset('frontend_assets/img/contact_us/2.png') }}" class="" alt="">
        </div>

        <div class="d-inline-block page_title">
            <h5 class="text-white" style="text-shadow: 2px 2px 8px #f25c05;"><b>CONTACT US</b></h5>
            <hr style="height: 3px; background-color:#f25c05; opacity:unset; border-top: 0; margin: 0; width: 135%;">
        </div>

    </div>


    <div class="container">
        <section class="custom_section"></section>

        <section class="custom_section">
            <div class="row">

                <div class="col-12 mt-0">
                    <h6 class="d-inline brand_color text-uppercase px-2 py-1" style="border: 1px solid #f25c05"><b>WHERE YOU
                            CAN FIND US</b>
                    </h6>
                    <p class="mt-3 mb-0" style="text-align: justify">We'd love to hear from you! If you have any questions,
                        suggestions, or would like to get involved, please don't hesitate to contact us. Our dedicated team
                        is here to assist you. Feel free to reach out via email, give us a call or fill out the contact form
                        below. Your feedback and interest in volunteering are greatly appreciated. Let's work together to
                        make a positive impact in our community.</p>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="row brand_color">
                        <div class="col-md-4 text-center  py-4">
                            <i class="fa-solid fa-house"></i>
                            <h6 class="fw-bold mt-2">
                                Address
                            </h6>
                            <p class="text-dark">10A Lime street, Bedfort, MK40 1LD</p>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <i class="fa-solid fa-phone"></i>
                            <h6 class="fw-bold mt-2">
                                Phone
                            </h6>
                            <p class="text-dark">+44 1234 340081 <br>
                                +44 7958 579924</p>
                        </div>
                        <div class="col-md-4 text-center  py-4">
                            <i class="fa-solid fa-envelope"></i>
                            <h6 class="fw-bold mt-2">
                                E-mail
                            </h6>
                            <p class="text-dark">info@merrimentexim.com</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-12  text-center">
                    <iframe
                        src="https://www.google.com/maps/embed/v1/place?q=Lime+Street,+Bedford+MK40+1LD,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                        width="100%" height="500"
                        style="border: 2px solid #f25c05;
                        border-radius: 10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <img src="{{ asset('frontend_assets/img/contact_us/3.png') }}" alt="" class="img-fluid"> --}}
                </div>
            </div>
        </section>

        <section class="custom_section">
            <div class="row">
                <div class="col-12 text-center mt-0">
                    <h6 class="d-inline brand_color text-uppercase  px-2 py-1" style="border: 1px solid #f25c05">
                        <b>SAY HELLO
                            TO US</b>
                    </h6>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-8 col-lg-6">
                    <form action="{{ route('msg_post') }}" method="POST" class=""
                        style="border-radius: 5px;  padding:30px 20px; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-2">
                                <input type="text" name="f_name" class="form-control" id=""
                                    placeholder="First Name" style="border: 1px solid #03371F">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <input type="text" name="l_name" class="form-control" id=""
                                    placeholder="Last Name" style="border: 1px solid #03371F">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <input type="email" class="form-control" name="email" id=""
                                    placeholder="Your Email" style="border: 1px solid #03371F">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <input type="text" class="form-control" name="phone" id=""
                                    placeholder="Your Phone" style="border: 1px solid #03371F">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="address" class="form-control" id=""
                                    placeholder="Address" style="border: 1px solid #03371F">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Briefly Write About Yourself"
                                style="border: 1px solid #03371F"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn text-white" style="background-color: #f25c05;"><i
                                    class="fa-solid fa-paper-plane me-1"></i>Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection

@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (Session::has('message'))
        <script>
            var message = {!! json_encode(Session::get('message')) !!};
            toastr.success(message, {
                timeOut: 5000
            });
        </script>
    @endif
@endsection
