@extends('layouts.auth_app')
@section('title')
    {{ __('auth.logins') }}
@endsection
@section('content')
    <!--begin::Authentication - Sign-in -->
    @php
        $settingValue = getSettingValue();
        App::setLocale(checkLanguageSession());
    @endphp
        <style>
        .btn-custom {
            font-size: 12px;
            font-weight:900;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            color: #100E0E;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }

        #admin-btn { background-color: rgba(255, 111, 97, 0.8); }
        #doctor-btn { background-color: rgba(107, 91, 149, 0.8); }
        #patient-btn { background-color: rgba(136, 176, 75, 0.8); }
        #accountant-btn { background-color: rgba(247, 202, 201, 0.8); }
        #nurse-btn { background-color: rgba(146, 168, 209, 0.8); }
        #receptionist-btn { background-color: rgba(149, 82, 81, 0.8); }
        #lab-technician-btn { background-color: rgba(181, 101, 167, 0.8); }
        #pharmacist-btn { background-color: rgba(0, 155, 119, 0.8); }
        #case-manager-btn { background-color: rgba(255, 165, 0, 0.8); } 

    </style>
    <ul class="nav nav-pills" style="justify-content: flex-end; cursor: pointer">
        <li class="nav-item dropdown">
            <a class="btn btn-primary w-150px mb-5 indicator m-3"
               data-bs-toggle="dropdown" href="javascript:void(0)" role="button"
               aria-expanded="false">{{ __('messages.language.'.getCurrentLanguageName()) }}</a>
            <ul class="dropdown-menu w-150px">
                @foreach(getLanguages() as $key => $value)
                    <li class="{{(checkLanguageSession() == $key) ? 'active' : '' }}"><a
                                class="dropdown-item  px-5 language-select {{(checkLanguageSession() == $key) ? 'bg-primary text-white' : 'text-dark' }}"
                                data-id="{{$key}}">{{$value}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-top p-4">
        <div class="col-12 text-center">
            <a href="{{ url('/home-page') }}" class="image mb-7 mb-sm-10" data-turbo="false">
                <img alt="Logo" src="{{ $settingValue['app_logo']['value'] }}" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="width-540">
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7">{{__('auth.sign_in')}}</h1>
            <form method="post" action="{{ url('/login') }}">
                @csrf
                <div class="mb-sm-7 mb-4">
                    <label for="email" class="form-label">
                        {{ __('auth.email').':' }}<span class="required"></span>
                    </label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required placeholder="{{__('auth.email')}}" value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">{{ __('auth.password') .':' }}<span
                                    class="required"></span></label>
                        <a href="{{ url('/password/reset') }}" class="link-info fs-6 text-decoration-none">
                            {{ __('auth.login.forgot_password').'?' }}
                        </a>
                    </div>
                    <input name="password" type="password" class="form-control" id="password" required placeholder="{{ __('messages.user.password')}}"
                           value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}">
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember" checked>
                    <label class="form-check-label" for="remember_me">{{ __('auth.remember_me') }}</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{__('auth.login.login')}}</button>
                </div>
                <div class="d-flex align-items-center mb-10 mt-4">
                    <span class="text-gray-700 me-2">{{__('auth.new_here')}}</span>
                    <a href="{{ route('register') }}" class="link-info fs-6 text-decoration-none">
                        {{__('auth.create_an_account')}}
                    </a>
                </div>
            </form>
            
            <div class="container mt-3">
                <h1>Log in as:</h1>
                 <div class="row">
            <div class="col-md-4 mb-2">
                <button id="admin-btn" class="btn btn-custom">Admin</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="doctor-btn" class="btn btn-custom">Doctor</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="patient-btn" class="btn btn-custom">Patient</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="accountant-btn" class="btn btn-custom">Accountant</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="nurse-btn" class="btn btn-custom">Nurse</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="receptionist-btn" class="btn btn-custom">Receptionist</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="lab-technician-btn" class="btn btn-custom">Lab Technician</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="pharmacist-btn" class="btn btn-custom">Pharmacist</button>
            </div>
            <div class="col-md-4 mb-2">
                <button id="case-manager-btn" class="btn btn-custom">Case Manager</button>
            </div>
        </div>
            </div>
            
        </div>
    </div>
@endsection
