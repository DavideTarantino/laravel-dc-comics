<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::All();

        return view('components.comicsView.index', compact('comics'));
    }

    public function create()
    {
        return view('components.comicsView.create');
    }

    public function store(Request $request)
    {
        $formData = $request->all();

        $newComic = new Comic();
        $newPasta->fill($formData);
        $newPasta->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    public function show(Comic $comic)
    {

        return view('pages.comicsView.show', compact('comic'));
    }
}
