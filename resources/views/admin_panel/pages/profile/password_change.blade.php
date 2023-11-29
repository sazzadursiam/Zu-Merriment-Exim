@extends('admin_panel.layout.master')
@section('page_title', 'Password Change')
@section('custom_style')
    <style>

    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0">Change Password</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.password-update', $user_info->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="text" name="current_password" class="form-control" value=""
                                        id="current_password" />
                                    @error('current_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="text" name="new_password" class="form-control" id="new_password"
                                        value="" />
                                    @error('new_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="text" name="confirm_password" class="form-control" id="confirm_password"
                                        value="" />
                                    @error('confirm_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-sm custom_btn mt-2"
                            onclick="return confirm('Are you sure you want to update your password?');">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')

    @if (Session::has('password_error'))
        <script>
            var message = {!! json_encode(Session::get('password_error')) !!};
            toastr.warning(message, {
                timeOut: 5000
            });
        </script>
    @endif


@endsection
