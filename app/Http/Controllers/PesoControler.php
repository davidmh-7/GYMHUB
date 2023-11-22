<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PesoData;
use Illuminate\Http\Request;


class PesoControler extends Controller
{
    //ver pesos
    public function index()
    {
        $ejercicios = PesoData::all();

        return view('/dashboard', ['ejercicios' => $ejercicios]);
    }

    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'Peso' => 'required|int|max:255',
            'series' => 'required|int|max:255',
            'repeticiones' => 'required|int|max:255',
            'pesoTotal' => 'required|int|max:255',
        ]);

        // Crear una nueva instancia del modelo PesoData
        $pesoData = new PesoData;

        // Asignar los valores de los campos desde la solicitud
        $pesoData->Peso = $request->input('Peso');
        $pesoData->pesoTotal = $request->input('pesoTotal');
        $pesoData->series = $request->input('series');
        $pesoData->repeticiones = $request->input('repeticiones');
        
        // Guardar el modelo en la base de datos
        $pesoData->save();

        // Redireccionar a la página de inicio u otra vista después de guardar
        return redirect()->route('dashboard');
    }
    
    public function destroy(PesoData $PesoData)
    {
        $PesoData->delete();
        
        return redirect()->route('dashboard');
    }
    //sirve para recoger el mensaje

    public function edit(PesoData $PesoData)
{
    return view('modificar', compact('PesoData'));
}


//actualizar los datos 
public function update(Request $request)
{

    $request->validate([
        'id' => 'required|int|max:255',
        'Peso' => 'required|int|max:255',
        'series' => 'required|int|max:255',
        'repeticiones' => 'required|int|max:255',
        'pesoTotal' => 'required|int|max:255',
    ]);

    $pesoData = new PesoData;
    $pesoData->update([
        'id'=> $request->input('id'),
        'Peso'=> $request->input('Peso'),
        'series'=> $request->input('series'),
        'repeticiones'=> $request->input('repeticiones'),
        'pesoTotal'=> $request->input('pesoTotal'),

    ]);

    return redirect()->route('dashboard');
}

    

}



   

