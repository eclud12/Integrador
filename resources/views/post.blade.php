@extends('layouts.layout')

@section('title', 'Post')

@section('content')
<!-- Contenido -->
<section class="container-fluid content py-5">
    <div class="row justify-content-center">
        <!-- Post -->
        <div class="col-12 col-md-7 text-center">
            <h1>{{$post->title}}</h1>
            <hr>
            <img src="{{asset($post->featured)}}" width="300" alt="{{$post->title}}" class="img-fluid">

            <p class="text-left mt-3 post-txt">
                <span>Autor: {{$post->author}}</span>
                <span class="float-right">Publicado:{{$post->created_at->diffForHumans()}}</span>
            </p>
            <p class="text-left">
                {{$post->content}}
            </p>
            <p class="text-left post-txt"><i>Categoría:{{$post->category->name}}</i></p>
        </div>

       
    </div>
</section>
@endsection