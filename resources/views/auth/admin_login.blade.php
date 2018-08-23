@extends('layouts.auth')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-header row">
            </div>

            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">

                                <div class="card-header border-0">
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span class="border">Admin Login Form</span>
                                    </h6>
                                </div>

                                <!-- error messages -->
                                @if (\Session::has('error'))
                                    <div class="alert alert-danger alert-dismissable mb-1" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                        {{ \Session::get('error') }}
                                    </div>
                                @endif

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
                                <!-- error messages -->

                                <div class="card-title text-center">
                                    <img src="{{ asset('/img/Time-Attendance-System.png') }}" alt="branding logo" class="img-position">
                                </div>

                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" method="POST" action="{{ route('admin.login') }}" novalidate>
                                            @csrf

                                            <!-- username -->
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <div class="controls">

                                                    <input
                                                        type="text"
                                                        class="form-control form-control-lg"
                                                        id="username"
                                                        name="username"
                                                        placeholder="Your Username"
                                                        required
                                                        data-validation-required-message="This field is required"
                                                        value="{{ (old('username') == null)? '':old('username') }}"
                                                    >

                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- password -->
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <div class="controls">

                                                    <input
                                                        type="password"
                                                        class="form-control form-control-lg"
                                                        id="password"
                                                        name="password"
                                                        placeholder="Enter Password"
                                                        required
                                                        data-validation-required-message="This field is required"
                                                        autocomplete="foo"
                                                    >

                                                    <div class="form-control-position">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i>Login</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection