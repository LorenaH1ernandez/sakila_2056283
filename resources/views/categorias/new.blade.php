<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha256-0XAFLBbK7DgQ8t7mRWU5BF2OMm9tjtfH945Z7TTeNIo=" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Añadir categoria</title>
</head>
<body>
            <form class="form-horizontal" method="POST" action="{{url('categorias/store')}}">
                @csrf
                <fieldset>
                <!--detectar si la variable exito contiene un valor-->
                @if (session("exito"));
                    <div class="alert sucess">{{  session("exito")  }}</div>
                @endif
                <!-- Form Name -->
                <legend>Nueva Categoria</legend>
                
                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nombre">Nombre de Categoria</label>  
                <div class="col-md-4">
                <input id="categoria" name="categoria" value="{{ old('categoria') }}" type="text" placeholder="" class="form-control input-md">
                    <strong class="text-danger">{{ $errors->first('categoria') }}</strong>
                </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" type="submit" name="" class="btn btn-primary">enviar</button>
                </div>
                </div>
                
                </fieldset>
                </form>
</body>
</html>