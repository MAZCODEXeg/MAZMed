<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') | {{ getAppName() }}</title>
    <meta name="description" content="Hospital management system">
    <meta name="keyword" content="hospital,doctor,patient,fever,MD,MS,MBBS">
    <link rel="icon" href="{{ $settingValue['favicon']['value'] }}" type="image/png">
    <link rel="canonical" href="{{ url('/home-page') }}" />
    <link rel="stylesheet" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ mix('/assets/css/custom-auth.css') }}" rel="stylesheet" type="text/css" />
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages.css') }}"> --}}
    <!-- CSS Libraries -->
    @yield('css')
    <!-- Scripts -->
    <script src="{{ asset('assets/js/third-party.js') }}"></script>
    <script src="{{ asset('messages.js') }}"></script>
    <script src="{{ asset('js/pages.js') }}"></script>
    @yield('scripts')
    
    <script>
    $(document).ready(function() {
        function setCredentials(username, password) {
            document.getElementById('email').value = username;
            document.getElementById('password').value = password;
        }

        // Add event listeners to each button to call the setCredentials function with the corresponding credentials
        document.getElementById('admin-btn').addEventListener('click', function() {
            setCredentials('admin@mazmed.com', '123456789');
        });
        
        document.getElementById('doctor-btn').addEventListener('click', function() {
            setCredentials('doctor@mazmed.com', '123456789');
        });
        
        document.getElementById('patient-btn').addEventListener('click', function() {
            setCredentials('patient@mazmed.com', '123456789');
        });

        document.getElementById('accountant-btn').addEventListener('click', function() {
            setCredentials('accountant@mazmed.com', '123456789');
        });

        document.getElementById('nurse-btn').addEventListener('click', function() {
            setCredentials('nurse@mazmed.com', '123456789');
        });

        document.getElementById('receptionist-btn').addEventListener('click', function() {
            setCredentials('receptionist@mazmed.com', '123456789');
        });

        document.getElementById('case-manager-btn').addEventListener('click', function() {
            setCredentials('casemanager@mazmed.com', '123456789');
        });
        document.getElementById('lab-technician-btn').addEventListener('click', function() {
            setCredentials('labtechnician@mazmed.com', '123456789');
        });

        document.getElementById('pharmacist-btn').addEventListener('click', function() {
            setCredentials('pharmacist@mazmed.com', '123456789');
        });
    });
</script>


    <script>
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300)
        });
        
        

        $(document).on('click', '.language-select', function() {
            let languageName = $(this).data('id');
            $.ajax({
                type: 'get',
                url: 'set-language',
                data: {
                    languageName: languageName
                },
                success: function() {
                    location.reload();
                },
            });
        });
    </script>
</head>

<body
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <div class="d-flex flex-column flex-root">
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
            @yield('content')
        </div>
    </div>
    {{ Form::hidden('userCurrentLanguage', checkLanguageSession(), ['class' => 'userCurrentLanguage']) }}
    {{ Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber']) }}
    {{ Form::hidden('invalidCountryNumber', __('messages.common.invalid_country_code'), ['class' => 'invalidCountryNumber']) }}
    {{ Form::hidden('tooShort', __('messages.common.too_short'), ['class' => 'tooShort']) }}
    {{ Form::hidden('tooLong', __('messages.common.too_long'), ['class' => 'tooLong']) }}
    {{ Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber']) }}
    {{ Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber']) }}
</body>

</html>
