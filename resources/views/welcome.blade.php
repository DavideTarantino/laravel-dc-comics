@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('main')
<main id="welcome-main">
    <h1>Benvenuto In DC Comics</h1>
    <a href="{{ route('comics.index') }}">Vai alla Sezione Comics</a>
</main>
@endsection