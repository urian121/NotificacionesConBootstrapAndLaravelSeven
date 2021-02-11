<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="{{ asset ('img/logo-mywebsite-urian-viera.svg') }}"/>
    <title>Borrar Multiple Registro en Laravel con Ajax :: WebDeveloper Urian Viera</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


<!---Notificaciones en Bootstrap ---->
<link rel="stylesheet" href="{{ asset('css/Lobibox.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
</head>
<body>

<nav class="navbar navbar-default" style="background-color: #563d7c !important;">
    <span class="navbar-brand">
        <img src="{{ asset ('img/logo-mywebsite-urian-viera.svg') }}" alt="Web Developer Urian Viera" width="120">
    </span>
</nav>


<div class="container top">
    <h3 class="text-center mt-5">
        <br>
        <span style="color: green"> Notificaciones con</span> 
        <span style="color: #563d7c; font-weight:bold;"> Bootstrap </span>
        <span style="color: coral">:: Web Developer Urian Viera </span>
    </h3>
    <hr>



    <div class="notification-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Notificacione Basicas</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicDefault" class="btn btn-default">Default</button>
                            <button id="basicInfo" class="btn btn-info">Info</button>
                            <button id="basicWarning" class="btn btn-warning">Warning</button>
                            <button id="basicError" class="btn btn-danger">Error</button>
                            <button id="basicSuccess" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Notificaciones con imagenes</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicDefaultImage" class="btn btn-default">Default</button>
                            <button id="basicInfoImage" class="btn btn-info">Info</button>
                            <button id="basicWarningImage" class="btn btn-warning">Warning</button>
                            <button id="basicErrorImage" class="btn btn-danger">Error</button>
                            <button id="basicSuccessImage" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Notificaciones Sin Sonido</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicInfoNoSound" class="btn btn-info">Info</button>
                            <button id="basicWarningNoSound" class="btn btn-warning">Warning</button>
                            <button id="basicErrorNoSound" class="btn btn-danger">Error</button>
                            <button id="basicSuccessNoSound" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h3>Título personalizado de notificaciones</h3>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicDefaultCustomTitle" class="btn btn-default">Default</button>
                            <button id="basicInfoCustomTitle" class="btn btn-info">Info</button>
                            <button id="basicWarningCustomTitle" class="btn btn-warning">Warning</button>
                            <button id="basicErrorCustomTitle" class="btn btn-danger">Error</button>
                            <button id="basicSuccessCustomTitle" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Notificaciones sin icono e imagen</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicDefaultNoIcon" class="btn btn-default">Default</button>
                            <button id="basicInfoNoIcon" class="btn btn-info">Info</button>
                            <button id="basicWarningNoIcon" class="btn btn-warning">Warning</button>
                            <button id="basicErrorNoIcon" class="btn btn-danger">Error</button>
                            <button id="basicSuccessNoIcon" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Notificaciones con tiempo de demora</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicDefaultCustomDelay" class="btn btn-default">Default</button>
                            <button id="basicInfoCustomDelay" class="btn btn-info">Info</button>
                            <button id="basicWarningCustomDelay" class="btn btn-warning">Warning</button>
                            <button id="basicErrorCustomDelay" class="btn btn-danger">Error</button>
                            <button id="basicSuccessCustomDelay" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Notificaciones Sticky (sin demora)</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicDefaultNoDelay" class="btn btn-default">Default</button>
                            <button id="basicInfoNoDelay" class="btn btn-info">Info</button>
                            <button id="basicWarningNoDelay" class="btn btn-warning">Warning</button>
                            <button id="basicErrorNoDelay" class="btn btn-danger">Error</button>
                            <button id="basicSuccessNoDelay" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h3>Notificaciones con Posicines diferentes</h3>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicInfoPosition" class="btn btn-info">Info</button>
                            <button id="basicWarningPosition" class="btn btn-warning">Warning</button>
                            <button id="basicErrorPosition" class="btn btn-danger">Error</button>
                            <button id="basicSuccessPosition" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h3>Notificaciones con ancho personalizado</h3>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicInfoWidth" class="btn btn-info">Info</button>
                            <button id="basicWarningWidth" class="btn btn-warning">Warning</button>
                            <button id="basicErrorWidth" class="btn btn-danger">Error</button>
                            <button id="basicSuccessWidth" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h3>Notificaciones con diferente animación</h3>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="basicInfoAnimation" class="btn btn-info">Info</button>
                            <button id="basicWarningAnimation" class="btn btn-warning">Warning</button>
                            <button id="basicErrorAnimation" class="btn btn-danger">Error</button>
                            <button id="basicSuccessAnimation" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset mg-b-15">
                        <div class="alert-title">
                            <h2>Notificaciones grandes</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="largeInfoBasic" class="btn btn-info">Info</button>
                            <button id="largeWarningBasic" class="btn btn-warning">Warning</button>
                            <button id="largeErrorBasic" class="btn btn-danger">Error</button>
                            <button id="largeSuccessBasic" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="notification-list shadow-reset mg-b-15">
                        <div class="alert-title">
                            <h2>Notificaciones pequeñas</h2>
                        </div>
                        <div class="notification-bt responsive-btn">
                            <button id="miniDefaultAnimation" class="btn btn-default">Default</button>
                            <button id="miniInfoAnimation" class="btn btn-info">Info</button>
                            <button id="miniWarningAnimation" class="btn btn-warning">Warning</button>
                            <button id="miniErrorAnimation" class="btn btn-danger">Error</button>
                            <button id="miniSuccessAnimation" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notification End-->






</div>



<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>  
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 

<script src="{{ asset('js/Lobibox.js') }}"></script>
<script src="{{ asset('js/notification-active.js') }}"></script>

</body>
</html>