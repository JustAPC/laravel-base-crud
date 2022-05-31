@extends('layouts.layout-comics')

@section('section')
    <div class="container text-center">
        <h1>Edit comic</h1>
        <form action="post">
            <label for="title">Title: </label>
            <input type="text" id="title" name="title" value="{{ $comic->title }}">

        </form>
    </div>
@endsection
