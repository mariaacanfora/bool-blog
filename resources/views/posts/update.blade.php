@extends('layouts.default')

@section('title', 'Aggiornamento post')

@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Aggiornamento post</h1>
        </div>
    </div>
</header>
@endsection

@section('main_content')
    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="coverImg" class="form-label">Immagine principale</label>
            <input type="text" class="form-control" id="coverImg" name="coverImg">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>

        <div class="text-center mb-5">
            <button class="btn btn-success" type="submit">Aggiorna</button>
        </div>       
    </form>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

@endsection