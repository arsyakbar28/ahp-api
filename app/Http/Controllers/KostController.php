<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KostController extends Controller
{
    public function index()
    {
        return Kost::all();
    }

    public function show($id)
    {
        return Kost::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'number_of_rooms' => 'required|integer',
            'room_size' => 'required|numeric',
            'rating' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        return Kost::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'address' => 'string',
            'price' => 'numeric',
            'number_of_rooms' => 'integer',
            'room_size' => 'numeric',
            'rating' => 'numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $kost = Kost::findOrFail($id);
        $kost->update($request->all());

        return $kost;
    }

    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);
        $kost->delete();

        return response()->json(null, 204);
    }
}
