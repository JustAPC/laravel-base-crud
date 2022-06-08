@extends('layouts.layout-comics')

@section('content')

    @if ($errors->any())
        {{-- Se sono presenti errori backend --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container text-center">
        <h1 class="text-primary pt-3">Edit comic</h1>
        <div class="row mx-auto">

            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="py-5">
                    <label for="title">Title: </label>
                    <input type="text" id="title" name="title" class="me-3" value="{{old('title'), $comic->title }}">

                    <label for="type">Type: </label>
                    <input type="text" id="type" name="type" class="me-3" value="{{old('type'), $comic->type }}">


                </div>

                <div class="py-5">
                    <label for="price">Price: </label>
                    <input type="text" id="price" name="price" class="me-3" value="{{old('price'), $comic->price }}">

                    <label for="series">Series: </label>
                    <input type="text" id="series" name="series" class="me-3" value="{{old('series'), $comic->series }}">

                    <label for="sale_date">Sale Date: </label>
                    <input type="date" id="sale_date" name="sale_date" class="me-3"
                        value="{{old('sale_date'), $comic->sale_date }}">
                </div>

                <div class="py-5 d-flex justify-content-center">
                    <div>
                        <p><label for="description">Description: </label></p>
                        <textarea name="description" id="" cols="30" rows="10" class="me-5">
                            {{!! $comic->description !!}}
                        </textarea>

                    </div>

                    <div>
                        <p><label for="thumb">Thumb: </label></p>
                        <textarea name="thumb" id="" cols="30" rows="5">
                            {{ $comic->thumb }}
                        </textarea>

                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Update Comic</button>

            </form>
        </div>
    </div>
@endsection
