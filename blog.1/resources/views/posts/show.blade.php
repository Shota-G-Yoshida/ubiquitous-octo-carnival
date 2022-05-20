<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @extends('layouts.app')　　　　　　　　　　　　　　　　　　

        @section('content')
        {{ Auth::user()->name }}
        <form action="/posts/{{ $post->id }}" id="form_delete" method="POST">
            @csrf
            @method('delete')
            <input type='submit' style='display:none'>
            <p class='delete'>[<span onclick='return deletePost(this);'>delete</span>]</p>
        </form>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="footer">
            <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(e) {
                'use strict';
                if(confirm('本当に削除しますか')) {
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
        @endsection
    </body>
</html>