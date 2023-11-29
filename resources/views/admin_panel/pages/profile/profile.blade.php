@extends('admin_panel.layout.master')
@section('page_title', 'Profile')
@section('custom_style')
    <style>

    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0">Profile Information</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.profile-update', $user_info->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control name"
                                        value="{{ $user_info->name }}" id="name" />
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        value="{{ $user_info->phone }}" />
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" readonly
                                        value="{{ $user_info->email }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" id="address"
                                        value="{{ $user_info->address }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profile_photo">Photo</label>
                                    <input type="file" name="profile_photo" id="profile_photo" class="form-control"
                                        id="profile_photo" />
                                </div>
                                @if ($user_info->profile_photo)
                                    <img src="{{ asset($user_info->profile_photo) }}" alt=""
                                        style="height: 150px; width:150px; object-fit:contain;">
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="btn btn-sm custom_btn mt-2"
                            onclick="return confirm('Are you sure you want to update your information?');">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')




@endsection
