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
}
