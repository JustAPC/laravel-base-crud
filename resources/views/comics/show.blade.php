@extends('layouts.layout-comics')

@section('content')
    <div class="container">
        <div class="col-8 my-5">
            <img src="{{ $comic->thumb }}" alt="">
            <div class="col-3 offset-2 d-inline-block">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block ps-2">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Remove">
                </form>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="p-0 border border-dark card col-2">
                <div class="card-header">Title</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->title }}</li>
                </ul>
            </div>
            <div class="p-0 border border-dark card col-4">
                <div class="card-header">Description</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->description }}</li>
                </ul>
            </div>
            <div class="p-0 border border-dark card col-1">
                <div class="card-header">Price</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->price }}$</li>
                </ul>
            </div>
            <div class="p-0 border border-dark card col-1">
                <div class="card-header">Series</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->series }}</li>
                </ul>
            </div>
            <div class="p-0 border border-dark card col-1">
                <div class="card-header">Sale Date</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->sale_date }}</li>
                </ul>
            </div>
            <div class="p-0 border border-dark card col-1">
                <div class="card-header">Type</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $comic->type }}</li>
                </ul>
            </div>

        </div>
    </div>
@endsection
