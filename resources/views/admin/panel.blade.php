@extends('layout.general')

@section('content')

        @if(count($errors) > 0)
                    
        <p>{{$errors->first()}}</p>

        @endif

    @isset($msg)
        <p>{{$msg}}</p>
    @endisset

    <div class="admin-container">
        <form method="POST" action="{{route('enviarNoticia')}}">
            @csrf



            <h2>Añadir noticia</h2>

            <label for="titulo">Titulo</label>
            <input type="text" name="title" id="titulo">

            <label for="parrafo">Parrafo</label>
            <input type="text" name="paragraph" id="parrafo">

            <label for="vinculo">Vínculo (opcional)</label>
            <input type="text" name="link" id="vinculo">

            <label for="vinculo">Imagen</label>
            <input type="file" name="image" id="imagen">

            <input type="submit" value="Enviar">

        </form>
    </div>

@endsection