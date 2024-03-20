@extends('layouts.basic')

@section('title', 'Dc-Comics | Modifica')

@section('main')
<main class="create-main">
    <h1>Modifica un'inserzione</h1>

    @if ($errors->any())
        <div class="errore">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method='POST'>
        @csrf
        @method("PUT")

        <div>
            <label for="title">titolo</label>
            <input 
                type="text"
                name="title"
                id="title"
                value="{{ old('title') ?? $comic->title }}"
            >
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea 
                name="description" 
                id="description"
                rows="10" 
                type='text'>
                value="{{ old('description') ?? $comic->description }}"
            </textarea>
        </div>

        <div>
            <label for="thumb">Immagine</label>
            <input 
                type="text"
                name="thumb"
                id="thumb"
                value="{{ old('thumb') ?? $comic->thumb }}"
            >
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input 
                type="text"
                name="price"
                id="price"
                value="{{ old('price') ?? $comic->price }}"
            >
        </div>

        <div>
            <label for="series">Serie</label>
            <input 
                type="text"
                name="series"
                id="series"
                value="{{ old('series') ?? $comic->series }}"
            >
        </div>

        <div>
            <label for="sale_date">Data di vendita</label>
            <input 
                type="text"
                name="sale_date"
                id="sale_date"
                value="{{ old('sale_date') ?? $comic->sale_date }}"
            >
        </div>

        <div>
            <label for="type">Tipo</label>
            <input 
                type="text"
                name="type"
                id="type"
                value="{{ old('type') ?? $comic->type }}"
            >
        </div>

        <button type="submit">
            Conferma Modifica
        </button>
    </form>
</main>
@endsection