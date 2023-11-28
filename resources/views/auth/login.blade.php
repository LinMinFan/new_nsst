<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入頁面</title>

    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/font-awesome/font-awesome-6.4.2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/login/login.css') }}" rel="stylesheet" type="text/css"/>

</head>
<!-- BEGIN BODY -->
<body class="page-md login">
    <div class="login-logo text-center p-3">
        <img src="{{ asset('img/login/logo-big.png') }}" alt="">
    </div>
    <div class="login-bg wrapper">
        <div class="h5 text-center text-white">歡迎回來</div>
        <div class="h5 text-center text-white pt-2">NEW NSST</div>
        <form class="pt-3">
            @csrf
            <div class="form-group">
                <div class="input-field">
                    <i class="i-border-radius fa fa-user p-2 bg-white"></i>
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="{{__('使用者帳號')}}" required class="full-with">
                </div>
            </div>
            <div class="form-group">
                <div class="input-field">
                    <i class="i-border-radius fa fa-lock p-2 bg-white"></i>
                    <input type="password" name="password" placeholder="{{__('密碼')}}" required class="full-with">
                </div>
            </div>
            <div class="row">
                <div class="col-6 d-flex justify-content-start align-content-center">
                    <div class="col-12 d-flex">
                            <input class="align-self-center" type="checkbox" name="remember">&nbsp;
                            <span class="align-self-center text-white">{{__('記住我')}}</span>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn bg-primary text-white text-center my-3">
                            {{__('登入')}}
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="create-account mt-3">
                <a href="javascript:;"  id="btn_usecard" class="usecard btn bg-secondary col-12">
                    {{__('使用感應卡登入')}}<i class="fa fa-link"></i>
                </a>
            </div>
        </form>
    </div>
    <div class="copyright d-flex justify-content-center text-white">
        2015 © NSST 全方位建築智慧化管理系統
    </div>


    <script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/login/jquery.backstretch.min.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {     
	        
            // init background slide images
            $.backstretch([
                "{{ asset('img/login/1.jpg') }}",
                "{{ asset('img/login/2.jpg') }}",
                "{{ asset('img/login/3.jpg') }}",
                "{{ asset('img/login/4.jpg') }}"
            ], 
            {
                fade: 1000,
                duration: 8000
            }
            );
        });
    </script>
</body>
<!-- END BODY -->
</html>