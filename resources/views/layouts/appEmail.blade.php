@include('layouts.head')

<body class="landing-page">

<div class="content-bg-wrap">
    <div class="content-bg"></div>
</div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="#" class="logo">
                <div class="img-wrap">
                    <img src="{{asset('img/logo.png')}}" alt="Olympus">
                    <img src="{{asset('img/logo-colored-small.png')}}" alt="Olympus" class="logo-colored">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">olympus</h6>
                    <div class="sub-title">SOCIAL NETWORK</div>
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
            </a>
        </div>
    </div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="landing-content">
                <h1>Welcome to the Biggest Social Network in the World</h1>
                <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                    thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                </p>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">

            <!-- Login-Registration Form  -->

            <div class="registration-login-form" style="min-height: 0px; border-radius: 5px">
                <!-- Nav tabs -->


                <!-- Tab panes -->
                <div class="tab-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')