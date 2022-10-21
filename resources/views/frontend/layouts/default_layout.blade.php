<!DOCTYPE html>
<html>
<head>
    @include('frontend.includes.head_style')
</head>
<body>
<!-- Site wrapper -->
<div class="wrapper">

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ระบบสารสนเทศ มคอ.3 และเอกสารประกอบการสอน</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                
                <ul class="mt-2 mr-auto navbar-nav mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">เกี่ยวกับระบบสารสนเทศ</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('service')}}">Service</a>
                    </li> --}}
                </ul>

                <ul class="mt-2 ml-auto navbar-nav mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('login')}}">Login </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    </li> --}}
                </ul>          
            </div>
        </div>
    </nav>
 
    @yield('content')

</div>
<!-- ./wrapper -->

@include('frontend.includes.foot_script')
</body>
</html>
