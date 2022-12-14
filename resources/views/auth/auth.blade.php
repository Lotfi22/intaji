<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="shortcut icon" href="{{ asset('../../assets/images/brand/favicon2.jpeg') }}" type="image/x-icon"/>
    <title>
        Intaji
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('ui/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('ui/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('ui/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('ui/css/soft-ui-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/login/admin">
                            Intaji
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ">

                                <li class="nav-item">
                                    <a class="nav-link" href="/login/production">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Espace Agent Production
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/login/depot">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Espace Agent Depot
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/login/commercial">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Espace Agent Commercial
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Authentification
                                        {{ $url }}</h3>
                                    <p class="mb-0">Entrer votre login</p>
                                </div>
                                <div class="card-body">
                                    @isset($url)
                                        <form method="POST" action='{{ url("login/$url") }}'
                                            aria-label="{{ __('Login') }}">
                                        @else
                                            <form method="POST" action="{{ route('login') }}"
                                                aria-label="{{ __('Login') }}">
                                            @endisset
                                            @csrf
                                            <label>Login</label>
                                            <div class="mb-3">
                                                <input
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email" class="form-control" placeholder="Email"
                                                    aria-label="Email" aria-describedby="email-addon">
                                            </div>
                                            <label>Mot de passe</label>
                                            <div class="mb-3">
                                                <input id="password" type="password"
                                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="password" aria-describedby="password-addon">
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Se
                                                    Connecter </button>
                                            </div>
                                        </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">



                            <img style="margin:auto;" width="100%" src="{{ asset('intaji.jpeg') }}">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('ui/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('ui/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ui/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('ui/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('ui/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
</body>

</html>
