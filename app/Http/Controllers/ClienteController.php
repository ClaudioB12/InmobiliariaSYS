<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $clientes = Cliente::all();
        return response()->json([
            'message' => 'Lista de clientes obtenida exitosamente.',
            'data' => $clientes
        ], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:clientes',
            'celular' => 'required|string|max:20',
            'user_id' => 'required|exists:users,id',
        ]);

        $cliente = Cliente::create($validatedData);

        return response()->json([
            'message' => 'Cliente creado exitosamente.',
            'data' => $cliente
        ], 201);
    }

    public function show(Cliente $cliente)
    {
        return response()->json([
            'message' => 'Cliente obtenido exitosamente.',
            'data' => $cliente
        ], 200);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $validatedData = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'apellido' => 'sometimes|required|string|max:255',
            'correo' => 'sometimes|required|string|email|max:255|unique:clientes,correo,' . $cliente->id,
            'celular' => 'sometimes|required|string|max:20',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);

        $cliente->update($validatedData);

        return response()->json([
            'message' => 'Cliente actualizado exitosamente.',
            'data' => $cliente
        ], 200);
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json([
            'message' => 'Cliente eliminado exitosamente.'
        ], 204);
    }
}
