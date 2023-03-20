<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>@stack('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ url('') }}/public/assets/users/img/add-notes.png" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ url('') }}/public/assets/backend/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ url('') }}/public/assets/backend/css/style.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ url('') }}/public/assets/backend/css/styles/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/public/assets/css/custom.css">
     {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="{{ url('') }}/public/assets/backend/js/app.min.js"></script>
    {{-- For Select Dropdopwn Start--}}
    <link href="{{ url('') }}/public/assets/backend/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <!-- Multi Select Css -->
    <link href="{{ url('') }}/public/assets/backend/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
    <!-- Plugins Core Css -->
    <link href="{{ url('') }}/public/assets/backend/css/form.min.css" rel="stylesheet">
    {{-- For Select Dropdopwn --}}
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ url('') }}/public/assets/images/loader.gif" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="{{ url('') }}/BackEnd">
                   <!--  <img src="{{ url('') }}/public/assets/users/img/logo.png" alt="" /> -->
                    <span class="logo-name">UniDell Medical</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            
                            <i class="fas fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="{{ url('') }}/BackEnd/chan4545101dgf4r3645pass35fh34">
                                            <i class="material-icons">person</i>Change password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('') }}/BackEnd/cOUT0JnLE465knil45664mk">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->


