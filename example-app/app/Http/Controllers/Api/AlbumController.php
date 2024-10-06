<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $album = Album::all();
        return response()->json([
        'status' => true,
        'album' => $album
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
    public function store(StoreAlbumRequest $request)
    {
        $album = Album::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Album foi salvo",
            'album' => $album 
        ], 200);
     }
    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAlbumRequest $request, Album $album)
    {
        $album->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Album salvo com sucesso",
            'album' => $album
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return response()->json([
            'status' => true,
            'message' => "album deletado",
        ], 200);
    }
}
