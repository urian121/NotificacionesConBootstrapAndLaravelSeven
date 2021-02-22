<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="{{ asset ('img/logo-mywebsite-urian-viera.svg') }}"/>
    <title>Notificación con Bootstrap y Laravel :: WebDeveloper Urian Viera</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!---css para las Notificaciones  ---->
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
        <span style="color: green"> Notificaciones <strong style="color: crimson;">(Alertas)</strong> </span> con
            <img src="{{ asset('img/bootstrap.png') }}" style="width: 100px;">
        <strong>+</strong>
            <img src="{{ asset('img/laravel.png') }}" style="width: 120px">
        <span style="color: coral">:: Web Developer Urian Viera </span>
        <strong>
            <a href="{{ ('/')}}" class="btn btn-primary" title="demo">Volver</a>
        </strong>
    </h3>
    
    <hr>



<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form method="POST" action="{{ route('registrarPelicula') }}" enctype="multipart/form-data">
    {{ csrf_field() }} <!-- token -->

        <div class="body">
            <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre de la pelicula" required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="genero" placeholder="Genero"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="year" placeholder="Año de Publicación"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-sm-12 text-center">
                        <button class="btn btn-defaul btn-lg btn-block waves-effect" type="submit">Registrar Pelicula</button>
                    </div>
                </div>

            </div>
        </form>

<hr>

<h3 class="text-center">Lista de Peliculas <strong>({{ $peliculas->count() }})</strong></h3>

@if($peliculas->count()>0)
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>#</th>
            <th>Nombre de la Pelicula</th>
            <th>Genero</th>
            <th>Año </th>
        </tr>
            @foreach($peliculas   as $pelicula)
                <tr>
                    <td>
                        {{ $pelicula->id }}
                    </td>
                    <td>{{ $pelicula->nombre }}</td>
                    <td>{{ $pelicula->genero }}</td>
                    <td>{{ $pelicula->year }}</td>
                </tr>
            @endforeach
    </table>
</div>
@endif

    </div>
  </div>

</div>



<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>  
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 

<!-- Libreria js para las Notificaciones -->
<script src="{{ asset('js/Lobibox.js') }}"></script>
<script src="{{ asset('js/notification-active.js') }}"></script>

@if (session('mensaje'))
<script type="text/javascript">
Lobibox.notify(
    'success',{
    //img: 'notificaciones/img/error.png',
    title: 'Felicitaciones',
    msg: 'Pelicula Registrada Correctamente...'
});

</script>
@endif


