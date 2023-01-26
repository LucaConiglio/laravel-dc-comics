
@extends('layout.main')

<h1 class="text-danger py-5 text-center">Pagina iniziale</h1>
    

<div class="text-center d-flex flex-column">
    <a href="{{ route('comics.create')}}">vai al create</a>
    <a href="{{ route('comics.index')}}">vai all'index</a>
</div>