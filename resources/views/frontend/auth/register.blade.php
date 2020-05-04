@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumb area Start -->

<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Register</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="#">Home</a></li>
                    <li class="current"><span>Register</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div id="content" class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40 justify-content-center">
                <div class="col-md-6">
                    <div class="register-box">
                        <h4 class="mb--35 mb-sm--20">Register</h4>
                        <form class="form form--login" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="name">Name<span class="required">*</span></label>
                                <input type="text" class="form__input form__input--3" id="name" name="name">
                                @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="email">Email address <span class="required">*</span></label>
                                <input type="email" class="form__input form__input--3" id="email" name="email">
                                @error('email')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__group mb--20">
                               <label class="form__label form__label--2" for="password">Password <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="password" name="password">
                                @error('password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__group mb--20">
                               <label class="form__label form__label--2" for="password_confirmation">Password Confirmation <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--3" id="password_confirmation" name="password_confirmation">
                            </div>
                            <p class="privacy-text mb--20">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                            <div class="form__group">
                                <input type="submit" value="Register" class="btn btn-submit btn-style-1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->


@endsection