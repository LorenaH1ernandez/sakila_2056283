<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Paises</title>
</head>
<body>
    <h1 class="text-danger" >Lista de paises</h1>
    
    <table class="table table-bordered  table-bordes">

<thead>
    <tr>
        <th>Pais</th>
        <th>capital</th>
        <th>moneda</th>
        <th>poblacion</th>
        <th>Ciudades</th>
    </tr>
</thead>
<tbody>
    @foreach ($paises as $pais=>$infopais)
    <tr>
        <td>
            {{ $pais }}
        </td>
        <td> 
        {{  $infopais["capital"]  }} 
        </td>
        <td>
            {{  $infopais["moneda"]  }} 
        </td>
        <td>
            {{  $infopais["poblacion"]  }}
        </td>
        <td>
        @foreach ($infopais ["Ciudades"] as $ciudad )
            {{ $ciudad }}
          <div class="col"></div>

        @endforeach  
    </td>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>

</html>