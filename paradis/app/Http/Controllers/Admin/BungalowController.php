<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Bungalow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BungalowStoreRequest;

class BungalowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bungalows = Bungalow::all();
        return view('admin.bungalows.index', compact('bungalows'));
    }

    public function catalogue()
    {
        $bungalows = Bungalow::all();
        return view('paradis.catalogue', compact('bungalows'));
    }

    // public function reservation($id)
    // {
    //     $reserves = Bungalow::find($id);
    //     return view('paradis.reservation', compact('reserves'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bungalows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BungalowStoreRequest $request)
    {
        $image = $request->file('image')->store('public/bungalows');

        Bungalow::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'image' => $image,
            'prix' => $request->prix,
        ]);

        return to_route('admin.bungalows.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bungalow $bungalow)
    {
        return view('admin.bungalows.edit', compact('bungalow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bungalow $bungalow)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
        ]);

        $image = $bungalow->image;

        /* Si on choisi de modifier l'image alors l'image remplacer sera effacer et
             l'image qui lui remplace sera ajouter dans le dossier "public/bungalows" */

        if ($request->hasFile('image')) {
            Storage::delete($bungalow->image);
            $image = $request->file('image')->store('public/bungalows');
        }

        $bungalow->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'image' => $image,
            'prix' => $request->prix,
        ]);

        return to_route('admin.bungalows.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bungalow $bungalow)
    {
        Storage::delete($bungalow->image);
        $bungalow->delete();
        $bungalow->reservations()->delete();

        return to_route('admin.bungalows.index');
    }
}
