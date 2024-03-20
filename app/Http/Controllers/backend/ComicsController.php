<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();

        return view("welcome", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comicsView.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $now = date("Y-m-d H:i:s");
        $request->validate([
            "title" => "required",
            "description" => "required",
            "thumb" => "required",
            "price" => "required|gt:0,00",
            "series" => "required",
            "sale_date" => "required|date|before:$now",
            "type" => "required",
        ]);

        $newProduct = $request->all();
        $newComic = new Comic();
        $newComic->fill($newProduct);
        $newComic->save();

        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comicsView.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comicsView.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $now = date("Y-m-d H:i:s");
        $request->validate([
            "title" => "required",
            "description" => "required",
            "thumb" => "required",
            "price" => "required|gt:0,00",
            "series" => "required",
            "sale_date" => "required|date|before:$now",
            "type" => "required",
        ]);
        
        $modifiche = $request->all();
        $comic->update($modifiche);
        return redirect()->route("comics.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("homePage");
    }
}
