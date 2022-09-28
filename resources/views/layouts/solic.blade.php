<!doctype html>
<html lang="en" dir="ltr">
    
    <?php
    use App\Livreur;
    $livreurs = Livreur::orderBy("name","asc")->get();
    ?>


    <head>
        <!-- Meta data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
        
        <!--favicon -->
        <link rel="icon" href="{{ asset('../../assets/images/brand/favicon.jpeg') }}" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{ asset('../../assets/images/brand/favicon.jpeg') }}" type="image/x-icon"/>

        <!-- TITLE -->
        <title> INTAJI </title>

        <!-- DASHBOARD CSS -->

        <link href="{{ asset('../../assets/css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../../assets/css/style-modes.css') }}" rel="stylesheet"/>

        <!-- HORIZONTAL-MENU CSS -->
        <link href="{{ asset('../../assets/css/horizontal-menu.css') }}" rel="stylesheet">

        <!--C3.JS CHARTS PLUGIN -->
        <link href="{{ asset('../../assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>

        <!-- TABS CSS -->
        <link href="{{ asset('../../assets/plugins/tabs/style-2.css') }}" rel="stylesheet" type="text/css">

        <!-- PERFECT SCROLL BAR CSS-->
        <link href="{{ asset('../../assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

        <!-- NOTIFICATION CSS -->
        <link href="{{ asset('../../assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet"/>

        <!--- FONT-ICONS CSS -->
        <link href="{{ asset('../../assets/css/icons.css') }}" rel="stylesheet"/>

        <!-- Skin css-->
        <link href="{{ asset('../../assets/skins/skins-modes/color18.css') }}"  id="theme" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('../../assets/plugins/multipleselect/multiple-select.css') }}">

        <link href="{{ asset('../../assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet" />

    </head>

    <body class="default-header">


        <div id="global-loader">
            <img src="{{ asset('../../assets/images/svgs/loader.gif') }}" class="loader-img" alt="Loader">
        </div>


        <div class="page">
            <div class="page-main">
                <!-- HEADER -->
                <div class="header hor-top-header">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>

                            <a class="header-brand" href="/home">
                                <img src="{{ asset('../../assets/images/brand/favicon.jpeg') }}" class="header-brand-img desktop-logo" alt="Solic logo">
                                <img src="{{ asset('../../assets/images/brand/favicon.jpeg') }}" class="header-brand-img mobile-view-logo" alt="Solic logo">
                            </a><!-- LOGO -->

                            <a class="header-brand header-brand2" href="/home">
                                <img src="{{ asset('../../assets/images/brand/favicon.jpeg') }}" class="header-brand-img desktop-logo" alt="Solic logo">
                                <img src="{{ asset('../../assets/images/brand/favicon.jpeg') }}" class="header-brand-img mobile-view-logo" alt="Solic logo">
                            </a><!-- LOGO -->
                            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                                <div class="dropdown d-md-flex">
                                    <a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
                                        <i class="fe fe-maximize-2"></i>
                                    </a>
                                </div><!-- FULL-SCREEN -->

                                <div class="dropdown d-md-flex header-settings">
                                    <a href="#" class="nav-link " data-toggle="dropdown">
                                        <span><img src="{{ asset('../../assets/images/brand/favicon.jpeg') }}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="drop-heading  text-center border-bottom pb-3">
                                            <h5 class="text-dark mb-1">TASSHIL</h5>
                                            <small class="text-muted">Logiciel De Gestion de l'école</small>
                                        </div>
                                        <a class="dropdown-item" href="/home"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>

                                        <a class="dropdown-item" href="/sync"><i class="mdi mdi-account-outline mr-2"></i> <span>Synchronisation</span></a>

                                        {{-- <a class="dropdown-item" href="/lang/ar"><i class="mdi mdi-account-outline mr-2"></i> <span>Arabe</span></a> --}}
                                        <a class="dropdown-item" href="/lang/en"><i class="mdi mdi-account-outline mr-2"></i> <span>Français</span></a>

                                        <a class="dropdown-item" onclick="event.preventDefault();

                                            document.getElementById('logout-form').submit();" href="{{ url('/logout') }}"><i class="mdi mdi-logout-variant mr-2"></i> <span>Logout</span>

                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">

                                            {{ csrf_field() }}

                                        </form>

                                        {{--  --}}
                                    </div>
                                </div>
                                

                                <!-- SIDE-MENU -->
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HEADER END -->

                <!-- HORIZONTAL-MENU -->
                <div class="sticky">
                    <div class="horizontal-main hor-menu clearfix">
                        <div class="horizontal-mainwrapper container clearfix">
                            <nav class="horizontalMenu clearfix">
                                <ul class="horizontalMenu-list">
                                    
                                    <li aria-haspopup="true">
                                        
                                        <a style="cursor: pointer;" class="sub-icon">
                                            <i class="mdi mdi-cube-outline"></i>Produit 
                                            <i class="fa fa-angle-down horizontal-icon"></i>
                                        </a>
                                        
                                        <ul class="sub-menu">
                                                
                                            <li aria-haspopup="true">
                                                <a href="/categorie">Catégories</a>
                                            </li>

                                            <li aria-haspopup="true">
                                                <a href="/produit">Produits</a>
                                            </li>
                                        </ul>
                                    </li>                                    
                                    
                                    <li aria-haspopup="true"><a href="/home/mes_depot" class=""><i class="mdi mdi-home-map-marker"></i> Dépots</a></li>


                                    <li aria-haspopup="true">
                                        
                                        <a style="cursor: pointer;" class="sub-icon">
                                            <i class="mdi mdi-ticket-confirmation"></i>Tickets 
                                            <i class="fa fa-angle-down horizontal-icon"></i>
                                        </a>
                                        
                                        <ul class="sub-menu">
                                                
                                            <li aria-haspopup="true">
                                                <a href="/impression">Impression</a>
                                            </li>

                                            <li aria-haspopup="true">
                                                <a href="/ticket">Mes Tickets</a>
                                            </li>
                                        </ul>
                                    </li>                                    

                                    <li aria-haspopup="true">
                                        
                                        <a style="cursor: pointer;" class="sub-icon">
                                            <i class="mdi mdi-account-multiple"></i>Agents
                                            <i class="fa fa-angle-down horizontal-icon"></i>
                                        </a>
                                        
                                        <ul class="sub-menu">
                                                
                                            <li aria-haspopup="true">
                                                <a href="/production">Agents Production</a>
                                            </li>

                                            <li aria-haspopup="true">
                                                <a href="/depot">Agents Dépots</a>
                                            </li>

                                            <li aria-haspopup="true">
                                                <a href="/livreur">Livreurs</a>
                                            </li>

                                        </ul>
                                    </li>                                    
                                    
                                    <li aria-haspopup="true">
                                        
                                        <a style="cursor: pointer;" class="sub-icon">
                                            <i class="mdi mdi-cube-send"></i>Envoyer/Recevoir
                                            <i class="fa fa-angle-down horizontal-icon"></i>
                                        </a>
                                        
                                        <ul class="sub-menu">
                                                
                                            <li aria-haspopup="true">
                                                <a href="/ticket/vers_depot">Envoyer vers dépot</a>
                                            </li>

                                            <li aria-haspopup="true">
                                                <a href="/ticket/au_depot">Recevoir au dépot</a>
                                            </li>


                                        </ul>
                                    </li>                                                                      
                                    <li aria-haspopup="true">
                                        
                                        <a style="cursor: pointer;" class="sub-icon">
                                            <i class="mdi mdi-account-multiple"></i>Livreurs
                                            <i class="fa fa-angle-down horizontal-icon"></i>
                                        </a>
                                        
                                        <ul class="sub-menu">

                                            @foreach ($livreurs as $livreur)
                                                
                                                <li aria-haspopup="true">
                                                    <a href="/livreur/filter/{{$livreur->id}}">Livreur : {{$livreur->email}} </a>
                                                </li>

                                                {{--  --}}
                                            @endforeach
                                        </ul>
                                    </li>                                                                                            
                                    <li aria-haspopup="true">
                                        
                                        <a href="/rapport" style="cursor: pointer;" class="sub-icon">
                                            <i class="mdi mdi-chart-line"></i> Stats
                                            <i class="fa fa-angle-down horizontal-icon"></i>
                                        </a>
                                        
                                        <ul class="sub-menu">
                                                
                                            <li aria-haspopup="true">
                                                <a href="/rapport">Rapport</a>
                                            </li>

                                            <li aria-haspopup="true">
                                                <a href="/statistiques">Statistiques</a>
                                            </li>


                                        </ul>
                                    </li>

                                    <li aria-haspopup="true"><a href="/home/caisse" class=""><i class="ion-cash"></i> Caisse</a></li>

                                    <li aria-haspopup="true"><a href="/home/livraisons" class=""><i class="ion-cash"></i>Livraisons</a></li>


                                    {{--  --}}                                        
                                </ul>
                            </nav>
                            <!-- NAV END -->
                            
                        </div>
                    </div>
                </div>
                <!-- HORIZONTAL-MENU END -->

                @if ((session()->has('notification.message')))

                    <div id="nnotif" class="alert alert-{{ session()->get('notification.type') }}" style="text-align: center;">

                        {{ session()->get('notification.message') }}
                    </div>

                  {{--  --}}
                @endif               


                <!-- CONTAINER -->
                <div class="container content-area relative">

                    @yield('content')

                </div>
                <!-- CONTAINER END -->
            </div>


            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © 2021 <a href="#">Intaji</a> Designed by <a href="#">Power Evo</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->
        </div>

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

        <!-- JQUERY SCRIPTS -->
        <script src="{{ asset('../../assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="{{ asset('../../assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

        <!-- SPARKLINE -->
        <script src="{{ asset('../../assets/js/vendors/jquery.sparkline.min.js') }}"></script>

{{--         <!-- CHART-CIRCLE -->
        <script src="{{ asset('../../assets/js/vendors/circle-progress.min.js') }}"></script>
 --}}
        <!-- RATING STAR -->
        <script src="{{ asset('../../assets/plugins/rating/jquery.rating-stars.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('../../assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('../../assets/js/select2.js') }}"></script>

        <!-- CHARTJS CHART -->
{{--         <script src="{{ asset('../../assets/plugins/chart/Chart.bundle.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/chart/utils.js') }}"></script>
 --}}
        <!-- PIETY CHART -->
        <script src="{{ asset('../../assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/peitychart/peitychart.init.js') }}"></script>

        <!-- HORIZONTAL-MENU -->
        <script src="{{ asset('../../assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

        <!-- PERFECT SCROLL BAR JS-->

        <!-- SIDEBAR JS -->
        <script src="{{ asset('../../assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- APEX-CHARTS JS -->
        <script src="{{ asset('../../assets/plugins/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/apexcharts/irregular-data-series.js') }}"></script>

        <!-- INDEX-SCRIPTS  -->
        <script src="{{ asset('../../assets/js/index.js') }}"></script>

        <!-- STICKY JS -->
        <script src="{{ asset('../../assets/js/stiky.js') }}"></script>

        <!-- CUSTOM JS -->

        <!-- C3.JS CHART PLUGIN -->
        <script src="{{ asset('../../assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/charts-c3/c3-chart.js') }}"></script>

        <!-- INPUT MASK PLUGIN-->
        <script src="{{ asset('../../assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

        <!-- DATA TABLE -->
        <script src="{{ asset('../../assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/datatable/datatable.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('../../assets/plugins/select2/select2.full.min.js') }}"></script>

        <!-- STICKY JS -->

        <!-- SIDEBAR JS -->
        <script src="{{ asset('../../assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- CUSTOM JS-->
        <script src="{{ asset('../../assets/js/custom.js') }}"></script>

        <script src="{{ asset('../../js/printThis.js') }}"></script>

        <!-- SWEET-ALERT PLUGIN -->
        <script src="{{ asset('../../assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('../../assets/js/sweet-alert.js') }}"></script>        

        <!-- NOTIFICATIONS JS -->
        <script src="{{ asset('../../assets/plugins/notify/js/rainbow.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/notify/js/sample.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/notify/js/jquery.growl.js') }}"></script>

        <script src="{{ asset('../../assets/plugins/multipleselect/multiple-select.js') }}"></script>
        <script src="{{ asset('../../assets/plugins/multipleselect/multi-select.js') }}"></script>

        <script>

            $('.js-example-basic-single').select2({
                'width': '100%'
            });


            $('#input_id').on('change',function(){
            console.log('saz')
            if($('#input_id').val().length >0){
                let number = parseInt($('#input_id').val(), 10);

                /**
                 * هاد البارتي خليها نفيريفي المتركول ادا يكزيستي بجافا سكريبت قبل ما تبعتو
                 */
                // let matricules = [788];
                //console.log(matricules);
                // var res = false;
                // matricules.map(function (matricule) {
                //     res = res || matricule.matricule == number;
                // });          
                // console.log(res)
                // if(res==false){
                //     // toastr.error('Carte Non valide')
                //     $('#input_id').val("")
                // }else{
                    window.location.href = 'http://localhost/gym/membre/compte/'+number;
                // }
            }
            });

        </script>



        @yield('scripts')
    </body>
</html>
