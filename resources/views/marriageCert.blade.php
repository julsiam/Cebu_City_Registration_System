<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/cf7a571938.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ url('image/Cebu Seal.png') }}">
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/marriageCert.css') }}" />
    <title>Marriage Certificate</title>

</head>

<body>
    <div class="container">
        <div class="navigation">
            <img class="logo" src="image/Cebu Seal.png" alt="logo">
            <ul>
                <li>
                    <a href="">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/') }}">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>

                <li>
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}">
                                <span class="icon"><i class="fa fa-sign-in" aria-hidden="true"></i> </span>
                                <span class="title">{{ __('Sign in') }}</span>

                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <span class="icon"><i class="fa-solid fa-user-plus" aria-hidden="true"></i> </span>
                                <span class="title">{{ __('Sign up') }}</span>
                            </a>
                        @endif
                    @else
                        <a href="{{ url('/staffHome') }}">
                            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i> </span>
                            <span class="title">Back to Dashboard</span>
                        </a>

                    @endguest
                </li>
            </ul>
        </div>
    </div>

    <div class="main" id="main">
        <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" style="color: white; font-weight:600" aria-expanded="false" v-pre>
                                <span style="font-family: 'Courier New', Courier, monospace">
                                    Welcome,{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

        <section>
            <div>
                <h1 class="intro_title"> Marriage Certificate Request</h1>
            </div>
            <div class="instruct"> Upon your request, we need the information below... <br> <br>
                <div class="details">1. Your name, sex, birthday, and valid government-issued ID</div>
                <div class="details">2. The husband's name on the certificate</div>
                <div class="details">3. The wife's name on the certificate</div>
                <div class="details">4. The date when you got married</div>
                <div class="details">5. The place where you were married</div>
                <div class="details">6. Late registration (if applicable)</div>
                <div class="details">7. The purpose of your request</div>
            </div>
            <a href="{{ url('/marriageForm') }}"><button class="continueBtn">Continue</button></a>

        </section>

        <footer class="footer">
            <div class="contain">
                <div class="row1">
                    <div class="footer-col">
                        <h4>Our location</h4>
                        <ul>
                            <li><a href="#">talamban</a></li>
                            <li><a href="#">banilad</a></li>
                            <li><a href="#">mandaue</a></li>
                            <li><a href="#">cabancalan</a></li>
                            <li><a href="#">cebu</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>quick links</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">account</a></li>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Keep in touch</h4>
                        <ul>
                            <li><a href="#">+(63)955 480 0304</a></li>
                            <li><a href="#">+123 - 345 - 567</a></li>
                            <li><a href="#">https://www.cebucity.gov.ph/</a></li>
                        </ul>
                    </div>
                </div>
                <div class="connect">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login" target="blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/login" target="blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>

</body>

</html>
