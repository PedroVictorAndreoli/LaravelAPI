<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Musica;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMusicaRequest;
class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musica = Musica::all();
        return response()->json([
        'status' => true,
        'musica' => $musica
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicaRequest $request)
    {
       $musica = Musica::create($request->all());
   
       return response()->json([
           'status' => true,
           'message' => "Musica criada com sucesso",
           'product' => $musica
       ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Musica $musica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Musica $musica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Musica $musica)
    {
        $musica->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Musica atualizada com sucesso",
            'musica' => $musica
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Musica $musica)
    {
        $musica->delete();

        return response()->json([
            'status' => true,
            'message' => "Musica deletada com sucesso",
        ], 200);
    }
}
