<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Models
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comicData = $request->all();

        // $comic = new Comic();
        // $comic->title = $comicData['title'];
        // $comic->description = $comicData['description'];
        // $comic->thumb = $comicData['thumb'];
        // $comic->price = $comicData['price'];
        // $comic->series = $comicData['series'];
        // $comic->sale_date = $comicData['sale_date'];
        // $comic->type = $comicData['type'];
        // $comic->save();

        $comic = Comic::create($comicData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        // if ($comic == null) {
        //     abort(404);
        // }

        return view('comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comicData = $request->all();

        $comic->update($comicData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
