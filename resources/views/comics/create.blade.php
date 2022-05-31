@extends('layouts.layout-comics')

@section('content')
    <div class="container text-center">
        <h1 class="text-primary pt-3">New comic</h1>
        <div class="row mx-auto">

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="py-5">
                    <label for="title">Title: </label>
                    <input type="text" id="title" name="title" class="me-3">

                    <label for="description">Description: </label>
                    <input type="text" id="description" name="description" class="me-3">

                    <label for="thumb">Thumb: </label>
                    <input type="text" id="thumb" name="thumb" class="me-3">
                </div>

                <div class="py-5">
                    <label for="price">Price: </label>
                    <input type="text" id="price" name="price" class="me-3">

                    <label for="series">Series: </label>
                    <input type="text" id="series" name="series" class="me-3">

                    <label for="sale_date">Sale Date: </label>
                    <input type="text" id="sale_date" name="sale_date" class="me-3">
                </div>

                <div class="py-5">
                    <label for="type">Type: </label>
                    <input type="text" id="type" name="type" class="me-3">
                </div>

                <button type="submit" class="btn btn-primary">Store Comic</button>
            </form>
        </div>
    </div>
@endsection
