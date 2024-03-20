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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ]);

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

        public function edit(string $id)
        {
            $comic = Comic::findOrFail($id);

            return view('pages.comics.edit', compact('comic'));
        }

        public function update(Request $request, string $id)
        {

            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'thumb' => 'required',
                'price' => 'required',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required',
            ]);

            $form_data = $request->all();

            $pasta = Comic::find($id);

            $pasta->update($form_data);

            return redirect()->route('comics.index');

        }

        public function destroy(string $id)
        {
            $comic = Comic::find($id);

            $comic->delete();
            
            return redirect()->route('comics.index');
        }
}
