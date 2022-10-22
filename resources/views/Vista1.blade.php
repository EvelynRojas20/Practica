@extends('Plantilla')

@section('contenido')

    @if(session()->has('confirmacion'))
      
      {!!"<script>Swal.fire(
        'Correcto',
        'Tu mensaje a sido guardardo',
        'success'
        )</script>"!!}

    @endif

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">Ingresar</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{$error}}Formulario Incompleto</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

    <div class="card text-center mb-5">
        <div class="card-header">
            Ingresa tus datos
        </div>
        <div class="card-body">
            <form method="post" action="guardarRecuerdo">
                @csrf 
                <input type="text" placeholder="Titulo del recuerdo" name="txtTitulo" class="form-control">
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('txtTitulo')}}</p>
                <br><input type="text" placeholder="Recuerdo" name="txtRecuerdo" class="form-control"><br>
                <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('txtRecuerdo')}}</p>

            
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar recuerdo</button>
        </form>
        </div>
</div>


</div>

 @stop
