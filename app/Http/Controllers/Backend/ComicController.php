<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all(); 
        
        return view('pages.comics.index', compact('comics'));
    }

     public function create()
     {
         return view('pages.comics.create');
     }

     public function store(Request $request)
     {
         $form_data = $request->all();

         $new_comic = new Comic();
         $new_comic->fill($form_data);
         $new_comic->save();

         return redirect()->route('comics.show', ['comic' => $new_comic->id]);
     }

      public function show(string $id)
        { 
            $comic = Comic::findOrFail($id);
            return view('pages.comics.show', compact('comic'));
        }
}
