<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
    <title>Perfil {{Auth::user()->name}}</title>
</head>
<body>
    

<x-app-layout>

    <x-slot name="header">
       <img src="img/GYMHUB.png" alt="">
        <a href="welcome" style="margin-left:90%;margin-top:-20px;">
        <button>
            <span>Volver al Menu</span>
        </button>
    </a>

    </x-slot>

<h1 style= "margin-left: 19%; margin-top: 40px; font-size:30px; margin-bottom:-40px;">PERFIL</h1>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 >Fecha de registro:</h3>
                    {{ Auth::user()->created_at}}
                    <h3 style= "margin-top: 20px;">Nombre Usuario:</h3>
                    {{ Auth::user()->name}}
                    <h3 style= "margin-top: 20px;">Email:</h3>
                    {{ Auth::user()->email}}
                    <h3 style= "margin-top: 20px;">Ultima actualizacion de la informacion:</h3>
                    {{ Auth::user()->updated_at}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<h5>
<table class="table">
<thead>
    <tr>
    
      <th scope="col">Peso</th>
      <th scope="col">Repeticiones</th>
      <th scope="col">Series</th>
      <th scope="col">Peso Total</th>
    </tr>
  </thead>
@foreach($ejercicios as $PesoData)
  
 
    <tr>
            <td>{{  $PesoData->Peso  }}</td>
            <td>{{  $PesoData->repeticiones }}</td>
            <td>{{  $PesoData->series  }}</td>
            <td>{{  $PesoData->pesoTotal  }}</td>
            <td><form action="{{ route('mensajes.eliminar', ['PesoData' => $PesoData]) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                            Eliminar
                                        </button>
                                    </form></td>
                                    <td><a href="{{ route('dashboard.editar', ['PesoData' => $PesoData]) }}"
                                       class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                        Editar
                                    </a></td>
    </tr>
 

   @endforeach
</table>
</h5>
</body>
</html>