@extends('layouts.app')


@section('titulo')
    Crear una nueva Publicación
@endsection

@section('contenido')
    <div class="md:flex md:item-center">
        <div class="md:w-1/2 px-10">
            <form action="/img" id="dropzone" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-96 rounded flex
            flex-col justify-center items-center">
            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input id="titulo" name="titulo" type="text" placeholder="Titulo de la Publicación" 
                    class="border p-3 w-full rounded-lg @error('titulo') border-red-500                         
                    @enderror"
                    value="{{ old('titulo') }}" />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripción de la Publicación" 
                    class="border p-3 w-full rounded-lg @error('titulo') border-red-500                         
                    @enderror"
                    value="{{ old('titulo') }}" ></textarea>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <input type="submit" value="Crear Publicación" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase fonr-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
@endsection