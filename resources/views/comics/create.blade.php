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
        <h1 class="text-primary pt-3">New comic</h1>
        <div class="row mx-auto">

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="py-5">
                    <label for="title">Title: </label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class="me-3">

                    <label for="type">Type: </label>
                    <input type="text" id="type" name="type" value="{{ old('type') }}" class="me-3">


                </div>

                <div class="py-5">
                    <label for="price">Price: </label>
                    <input type="text" id="price" name="price" value="{{ old('price') }}" class="me-3">

                    <label for="series">Series: </label>
                    <input type="text" id="series" name="series" value="{{ old('series') }}" class="me-3">

                    <label for="sale_date">Sale Date: </label>
                    <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') }}"
                        class="me-3">
                </div>

                <div class="py-5 d-flex justify-content-center">

                    <div>
                        <p><label for="description">Description: </label></p>
                        <textarea name="description" id="" cols="30" rows="10" class="me-5"></textarea>
                    </div>

                    <div>
                        <p><label for="thumb">Thumb: </label></p>
                        <textarea name="thumb" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Store Comic</button>

            </form>
        </div>
    </div>
@endsection
