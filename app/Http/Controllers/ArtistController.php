<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    
    /**
     * Relación muchos a muchos
     */
    public function concerts() {
        return $this->belongsToMany(Concert::class, 'concerts');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view ('artists')->with('artists', $artists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('artistCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre'=>['required', 'string', 'max:100', 'unique:'.Artist::class],
            'descripcion'=>['required', 'string', 'max:255'],
            'img_artista'=>['required', 'string', 'max:255'],
        ]);

        
        $newArtist = Artist::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'img_artista' => $request->img_artista,
        ]);
            
        return redirect(RouteServiceProvider::ARTISTS);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        //
=======
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return redirect()->route('artistIndex')->with('status', 'Eliminado correctamente.');
>>>>>>> 65f823d377ad1461e1321699d50a655372807435
    }
}
