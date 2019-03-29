@extends('layouts.app')

@section('content')
<div class="container">

<!-------------------------------------------------------------------------------------->
<!--<nav class="navbar navbar-default" role="navigation">
  El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-togle="collapse" data-target="#colapsar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Operacion Sistemica</a>
        </div>
    </div>
</nav>



<div class="panel-body">
     
    
</div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión correctamente!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
