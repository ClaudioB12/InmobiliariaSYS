<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{

    use ApiResponser;

    public function index(){
        $inmuebles=Inmueble::all();
        return $this->successResponse($inmuebles);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'direccion' => 'required|string|max:255',
            'categoria' => 'required|integer',
            'precio' => 'required|numeric',
            'estado' => 'required|in:Activo,Inactivo',
        ]);

        $inmueble = Inmueble::create($validatedData);

        return response()->json($inmueble, 201);
    }

    public function show(Inmueble $inmueble)
    {
        return $inmueble;
    }

    public function update(Request $request, Inmueble $inmueble)
    {
        $validatedData = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
            'direccion' => 'sometimes|required|string|max:255',
            'categoria' => 'sometimes|required|integer',
            'precio' => 'sometimes|required|numeric',
            'estado' => 'sometimes|required|in:Activo,Inactivo',
        ]);

        $inmueble->update($validatedData);

        return response()->json($inmueble, 200);
    }

    public function destroy(Inmueble $inmueble)
    {
        $inmueble->delete();

        return response()->json(null, 204);
    }
}
