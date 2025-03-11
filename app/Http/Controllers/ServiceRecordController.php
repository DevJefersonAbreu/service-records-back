<?php

// app/Http/Controllers/ServiceRecordController.php

namespace App\Http\Controllers;

use App\Models\ServiceRecord;
use Illuminate\Http\Request;

class ServiceRecordController extends Controller
{
    // Listar todos os registros
    public function index()
    {
        return ServiceRecord::all();
    }

    // Criar um novo registro
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'date' => 'required|date',
        ]);

        $record = ServiceRecord::create($data);

        return response()->json($record, 201);
    }

    // Mostrar um registro específico
    public function show($id)
    {
        return ServiceRecord::findOrFail($id);
    }

    // Atualizar um registro
    public function update(Request $request, $id)
    {
        $serviceRecord = ServiceRecord::findOrFail($id);

        $request->validate([
            'full_name' => 'sometimes|string|max:255',
            'address' => 'sometimes|string|max:255',
            'phone_number' => 'sometimes|string|max:20',
            'date' => 'sometimes|date',
        ]);

        $serviceRecord->update($request->all());

        return $serviceRecord;
    }

    // Deletar um registro
    public function destroy($id)
    {
        $serviceRecord = ServiceRecord::findOrFail($id);
        $serviceRecord->delete();

        return response()->noContent();
    }
}
