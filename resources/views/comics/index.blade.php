@extends('layout.main')

<div>
  <h1 class="text-warning text-center py-5">questo é l'index</h1>
  <div class="text-center d-flex flex-column">
    <a href="{{ route('comics.create')}}">vai al create</a>
    <a href="{{ route('app')}}">vai alla pagina iniziale</a>
</div>


</div>