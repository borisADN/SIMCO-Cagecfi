<header id="page-topbar" class="fixed-top">
    <div class="navbar-header">

        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/personnalisation/_logo.png') }}" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/personnalisation/_logo.png') }}" alt=""
                            height="26"> <span class="logo-txt"></span>
                    </span>

                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/personnalisation/_logo.png') }}" alt=""
                            height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/personnalisation/_logo.png') }}" alt=""
                            height="26"> <span class="logo-txt"></span>
                    </span>
                </a>
            </div>
            {{-- Bouton hamburger pour petits écrans! --}}
            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse"
                id="horimenu-btn" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href=""
                                id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-home-circle icon"></i>
                                    <span data-key="t-dashboard">Accueil</span>
                                </a>
                            </li>

    

                            {{-- @foreach($groupedOptions as $menu => $options)
                            <h2>{{ $menu }}</h2>
                            <ul>
                                @foreach($options as $option)
                                    <li>
                                        <strong>{{ $option['libOption'] }}</strong><br>
                                        <small>Numéro d'option: {{ $option['numOption'] }}</small><br>
                                        <small>URL: {{ $option['urlParam'] }}</small><br>
                                        <small>DataKey: {{ $option['dataKey'] }}</small> <!-- Affichage du dataKey -->
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach --}}
                        
                            
{{-- @if (!empty($groupedOptions))
@forelse ($groupedOptions as $libMenu => $menuOptions)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-{{ strtolower($libMenu) }}" role="button">
            <span data-key="t-{{ strtolower($libMenu) }}">{{ $libMenu }}</span>
            <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-{{ strtolower($libMenu) }}">
            <div class="menu-title">{{ $libMenu }}</div>
            @forelse ($menuOptions as $option)
                <a href="" class="dropdown-item">{{ $option['libOption'] }}</a>
            @empty
                <!--<div class="menu-title">Aucune option disponible</div>-->
            @endforelse
        </div>
    </li>
@empty
 <!--<div class="menu-title">Aucun menu disponible</div>-->
@endforelse
@else
<!-- <p>Aucune donnée disponible</p> -->
@endif --}}


@if (!empty($groupedOptions))
    @foreach ($groupedOptions as $libMenu => $menuOptions)
        <li class="nav-item dropdown">
            <!-- Affichage du dataKey du menu principal -->
            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-{{ strtolower($libMenu) }}" role="button">
                <span data-key="{{ $menuOptions[0]['head'] }}"></span>
                <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-{{ strtolower($libMenu) }}">
                {{-- <div class="menu-title">{{ ($menuOptions[0]['head']) }}</div> --}}
                
                @foreach ($menuOptions as $option)
                    <!-- Affichage de chaque sous-menu avec un dataKey spécifique -->
                    <a href="{{ $option['urlParam'] }}" class="dropdown-item" data-key="{{ $option['dataKey'] }}">
                        {{ __($option['libOption']) }}
                    </a>
                @endforeach
            </div>
        </li>
    @endforeach
@endif





                            {{-- @php


                            Illuminate\Http\Client\ConnectionException
cURL error 28: SSL connection timeout (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://creditdusahel.net:8081/DEMO_APIEXTERNE_CDS_WEB/FR/APIEXTERNE/pmobileapi.awp
                                // Charger le fichier JSON
                                $menuPath = public_path('assets/json/menu.json'); // Chemin du fichier JSON

                                $menuJson = file_get_contents($menuPath);
                                // Cette fonction PHP permet de lire le contenu d'un fichier et de le retourner sous forme de chaîne de caractères

$menus = json_decode($menuJson, true); // Convertir en tableau PHP

// Récupérer uniquement la section "Credit"
$creditMenu = $menus['menu']['LDCredit'] ?? null;
                            @endphp --}}

                            {{-- @if ($creditMenu)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-credit"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="bx bx-money"></i>
                                        <span data-key="t-elements">Credit</span>
                                        <!-- <span>{{ $creditMenu['libMenu'] }}</span> -->
                                        <div class="arrow-down"></div>
                                    </a>
                                    le dropdown
                                    <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                        aria-labelledby="topnav-credit">
                                        <div class="ps-2 p-lg-0">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div>
                                                        <div class="menu-title">Credit</div>
                                                        <div class="row g-0">
                                                            <div class="col-lg-5">
                                                                <div>
                                                                    @foreach ($creditMenu['optionsMenu'] as $option)
                                                                        <a href="{{ $option['urlParam'] }}"
                                                                            class="dropdown-item"
                                                                            data-key="{{ $option['dataKey'] }}">
                                                                            {{ $option['libOption'] }}
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif --}}

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-money"></i>
                                    <span data-key="t-elements">Credit</span>
                                    <div class="arrow-down"></div>
                                </a>
                      
                                <!-- le dropdown -->
                                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                    aria-labelledby="topnav-uielement">
                                    <div class="ps-2 p-lg-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div>
                                                    <div class="menu-title">Credit</div>
                                                    <div class="row g-0">
                                                        <div class="col-lg-5">
                                                            <div>
                                                                <a href="ui-modals.html" class="dropdown-item"
                                                                    data-key="t-credit1">Tableau d'ammortissement</a>

                                                                <a href="ui-modals.html" class="dropdown-item"
                                                                    data-key="t-credit2">Situation Des Remboursements</a>

                                                                <a href="ui-modals.html" class="dropdown-item"
                                                                    data-key="t-credit3">simulation Tableau
                                                                    D'ammortissement</a>

                                                                <a href="ui-modals.html" class="dropdown-item"
                                                                    data-key="t-credit4">Demande De Credit</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                         
                                        </div>
                                    </div>
                                </div>
                            </li> --}}

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                    role="button">
                                    <i class="bx bx-refresh"></i>

                                    <span data-key="t-apps">Operations</span>
                                    <div class="arrow-down"></div>
                                </a>
                                Le dropdown
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <div class="menu-title">Operations</div>

                                    <a href="{{ route('form1') }}" class="dropdown-item"
                                        data-key="t-operation1">Transert
                                        entre mes comptes</a>

                                    <a href="{{ route('form2') }}" class="dropdown-item">Virement
                                        vers autres comptes {{ env('SOCIETY_NAME') }}</a>

                                    <a href="{{ route('form3') }}" class="dropdown-item">Depot
                                        {{ env('SOCIETY_NAME') }} via mobile money</a>

                                    <a href="{{ route('form4') }}" class="dropdown-item">Retrait
                                        {{ env('SOCIETY_NAME') }} via mobile money</a>


                                </div>
                            </li> --}}




                        </ul>
                    </div>
                </nav>
            </div>

        </div>

        <div class="d-flex">


            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img id="header-lang-img" src="https://flagcdn.com/w20/fr.png"
                        srcset="https://flagcdn.com/w40/fr.png 2x" width="20" alt="France">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr">
                        <img src="https://flagcdn.com/w20/fr.png" srcset="https://flagcdn.com/w40/fr.png 2x"
                            width="20" alt="France" class="me-2" height="12">
                        <span class="align-middle">Français</span>
                    </a>
                    <!-- item-->



                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="https://flagcdn.com/w20/us.png" srcset="https://flagcdn.com/w40/us.png 2x"
                            width="20" alt="United States" class="me-2" height="12">
                        <span class="align-middle">English</span>
                    </a>




                </div>
            </div>



            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('assets/images/personnalisation/avatar.png') }}"
                        alt="Header Avatar">
                    <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                        {{-- <span class="user-name">Boris W. <i class="mdi mdi-chevron-down"></i></span> --}}
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <h6 class="dropdown-header">Welcome {{  $completeName }}</h6>

                    @foreach ($userSpace as $option)
                    <a class="dropdown-item" href="{{ url($option['urlParam']) }}">
                        <span class="align-middle" data-key="{{ $option['dataKey'] }}">
                            {{ __($option['libOption']) }}
                        </span>
                    </a>
                @endforeach

                    {{-- <a class="dropdown-item" href="pages-profile.html"> <span
                            class="align-middle" data-key="">Informations Clients</span></a>

                    <a class="dropdown-item" href="apps-chat.html"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">Changer de mot de passe</span></a>

                    <a class="dropdown-item" href="apps-kanban-board.html"><i
                            class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">Modification de reponses</span></a>

                    <a class="dropdown-item" href="pages-faqs.html"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Changer Code PIN</span></a> --}}

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('logout') }}"><i
                            class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Deconnexion</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse show dash-content" id="dashtoggle">

        {{-- =========================================== --}}
        {{-- <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 sub-title">Welcome !</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item page-head"><a
                                    href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item page-head active">Welcome !</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- start dash info -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card dash-header-box shadow-none border-0">
                    <div class="card-body p-0">
                        <div class="row row-cols-xxl-6 row-cols-md-3 row-cols-1 g-0">
                            <div class="col">
                                <div class="mt-md-0 py-3 px-4 mx-2">
                                    <p class="text-white-50 mb-2 text-truncate">Campaign Sent </p>
                                    <h3 class="text-white mb-0">197</h3>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                    <p class="text-white-50 mb-2 text-truncate">Annual Profit</p>
                                    <h3 class="text-white mb-0">$489.4k</h3>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                    <p class="text-white-50 mb-2 text-truncate">Lead Coversation</p>
                                    <h3 class="text-white mb-0">32.89%</h3>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                    <p class="text-white-50 mb-2 text-truncate">Sales Forecast</p>
                                    <h3 class="text-white mb-0">75.35%</h3>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                    <p class="text-white-50 mb-2 text-truncate">Daily Average Income</p>
                                    <h3 class="text-white mb-0">$1,596.5</h3>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                    <p class="text-white-50 mb-2 text-truncate">Annual Deals</p>
                                    <h3 class="text-white mb-0">2,659</h3>
                                </div>
                            </div><!-- end col -->

                        </div><!-- end row -->
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end dash info -->
    </div> --}}

        {{-- ========================================== --}}
    </div>

    <!-- start dash troggle-icon -->
    {{-- <div>
    <a class="dash-troggle-icon" id="dash-troggle-icon" data-bs-toggle="collapse" href="#dashtoggle"
        aria-expanded="true" aria-controls="dashtoggle">
        <i class="bx bx-up-arrow-alt"></i>
    </a>
</div> --}}
    <!-- end dash troggle-icon -->

</header>

<div class="hori-overlay"></div>
