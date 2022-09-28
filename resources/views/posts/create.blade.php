@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">Imagen aquí</div>
    <div class="md:w-1/2 px-10">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input id="name" name="name" type="text" placeholder="Tu Nombre" class="border p-2 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                    <p class="bg-red-500 text-white my-2 p-2 rounded-lg">{{$message}}</p>
                @enderror
            </div>
        </form>
    </div>
</div>
@endsection