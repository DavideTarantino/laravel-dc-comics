@extends('layouts.basic')

@section('title', 'Dc-Comics | Crea')

@section('main')
<main id="create-main">
    <h1>Crea una nuova inserzione</h1>
    <form action="{{ route('comics.store') }}" method='POST'>
        @csrf

        <div>
            <label for="title">titolo</label>
            <input 
                type="text"
                name="title"
                id="title"
            >
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea 
                name="description" 
                id="description" 
                type='text'>
            </textarea>
        </div>

        <div>
            <label for="thumb">Immagine</label>
            <input 
                type="text"
                name="thumb"
                id="thumb"
            >
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input 
                type="text"
                name="price"
                id="price"
            >
        </div>

        <div>
            <label for="series">Serie</label>
            <input 
                type="text"
                name="series"
                id="series"
            >
        </div>

        <div>
            <label for="sale_date">Data di vendita</label>
            <input 
                type="text"
                name="sale_date"
                id="sale_date"
            >
        </div>

        <div>
            <label for="type">Tipo</label>
            <input 
                type="text"
                name="type"
                id="type"
            >
        </div>

        <button type="submit">
            Crea
        </button>
    </form>
</main>
@endsection