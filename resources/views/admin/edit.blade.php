@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"></div>

            <div class="content-body">

                <!-- input validation error message -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissable mb-1" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        <ul role="alert">
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- profile image and background -->
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-with-cover">

                                <div class="card-img-top img-fluid bg-cover height-100">
                                </div>

                                <div class="media profil-cover-details w-100 profile-pic-position">

                                    <div class="media-left pl-2 pt-2">
                                        <a href="#" class="profile-image" id="profileImage">
                                            <img src="{{ asset('/img/github_acc_pic.png') }}" class="rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                        <input type="file" id="profileImageUpload" style="display:none" accept="image/*">
                                    </div>

                                    <div class="media-body pt-3 px-2">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="card-title profile-font-color">Jose Diaz</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- update information -->
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-content">
                        <div class="card-body">

                            <form method="POST" action="{{ route('adminProfile.update', $admin->id) }}" novalidate>
                                @csrf

                                <input type="hidden" name="_method" value="PUT">

                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <label class="label-position">Name</label>
                                    </div>

                                    <div class="col-md-5 col-9">
                                        <fieldset class="form-group has-icon-left">

                                        <div class="controls">
                                            <input
                                                    type="text"
                                                    class="form-control round"
                                                    name="name"
                                                    id="name"
                                                    placeholder="Your name"
                                                    value="{{ old('name') == null? $admin->name:old('name') }}"
                                                    data-validation-required-message="This field is required"
                                                    required
                                                >

                                                <div class="form-control-position">
                                                    <i class="ft-user warning"></i>
                                                </div>
                                        </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <label class="label-position">Email</label>
                                    </div>

                                    <div class="col-md-5 col-9">
                                        <fieldset class="form-group has-icon-left">

                                            <div class="controls">
                                                <input
                                                    type="email"
                                                    class="form-control round"
                                                    name="email"
                                                    placeholder="Your name"
                                                    value="{{ old('email') == null? $admin->email:old('email') }}"
                                                    data-validation-required-message="This field is required"
                                                    required
                                                >

                                                <div class="form-control-position">
                                                    <i class="ft-mail warning"></i>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <label class="label-position">Username</label>
                                    </div>

                                    <div class="col-md-5 col-9">
                                        <fieldset class="form-group has-icon-left">
                                            <div class="controls">

                                                <input
                                                    type="text"
                                                    class="form-control round"
                                                    name="username"
                                                    id="username"
                                                    placeholder="Your username"
                                                    required
                                                    data-validation-required-message="This field is required"
                                                    value="{{ old('username') == null? $admin->username:old('username') }}"
                                                >

                                                <div class="form-control-position">
                                                    <i class="ft-lock warning"></i>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-3">
                                        <label class="label-position">Password</label>
                                    </div>

                                    <div class="col-md-5 col-9">
                                        <fieldset class="form-group has-icon-left">

                                            <input
                                                type="password"
                                                class="form-control round"
                                                name="password"
                                                id="Password"
                                                placeholder="Your password"
                                            >

                                            <div class="form-control-position">
                                                <i class="ft-log-in warning"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Update </button>
                                    <a href="{{ route('client.index') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> Back </a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection