<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


    <link rel="stylesheet" href="{{ asset('backend_assets/login.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Admin Dashboard | Log In</title>
</head>

<body>
    <div class="row g-0 login-bg-image">
        <div class="col-12">


            <div class="login d-flex align-items-center py-5 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 mx-auto">
                            <div class="text-center">
                                <a href="/" style="text-decoration: none;">
                                    <h1 class="mb-4" style="color: #184e77"><b>Merriment Exim Dashboard</b></h1>
                                </a>
                                {{-- <img class="pb-5 " src="{{ asset('common/lOGO.png') }}" alt="img"
                                    style="width: 20%;"> --}}
                            </div>

                            <!-- Sign In Form -->
                            <form action="{{ route('login') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Email or Phone" name="email" autocomplete="off">
                                    <label for="floatingInput" style="color: #184e77; opacity:100;">Email or
                                        Phone</label>
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if (session()->has('email_error'))
                                    <p class="text-danger">{{ session()->get('email_error') }}</p>
                                @endif
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password">
                                    <label for="floatingPassword" style="color: #184e77; opacity:100;">Password</label>
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if (session()->has('password_error'))
                                    <p class="text-danger">{{ session()->get('password_error') }}</p>
                                @endif
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-login text-uppercase fw-bold mb-2 text-white"
                                        style="background: #184e77" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (Session::has('message'))
        <script>
            var message = {!! json_encode(Session::get('message')) !!};
            toastr.success(message, {
                timeOut: 5000
            });
        </script>
    @endif
    @if (Session::has('login_error'))
        <script>
            var login_error = {!! json_encode(Session::get('login_error')) !!};
            toastr.error(message, {
                timeOut: 5000
            });
        </script>
    @endif

</body>

</html>
