<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller {
    
    protected $comicValidation = [
        "title" => "required|min:5",
        "description" => "required|min:10",
        "thumb" => "nullable|url",
        "price" => "required|numeric|between:0.00,999.99",
        "series" => "required|min:5",
        "sale_date" => "required|date_format:Y-m-d",
        "type" => "required|min:5",
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $dati = Comic::all();

        return view("comics.index", compact("dati"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->validate($this->comicValidation);

        $newComic = new Comic();

        $newComic->fill($data);
        // $newComic->title = $data["title"];
        // $newComic->description = $data["description"];
        // $newComic->thumb = $data["thumb"];
        // $newComic->price = $data["price"];
        // $newComic->series = $data["series"];
        // $newComic->sale_date = $data["sale_date"];
        // $newComic->type = $data["type"];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic) {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic) {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic) {
        $data = $request->validate($this->comicValidation);

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic) {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
