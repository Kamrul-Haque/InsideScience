@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <h4 class="display-4">{{ $article->title }}</h4>
                <span class="text-muted">by {{ $article->author }}</span>
                <span class="text-muted float-right">{{ $article->date }}</span>
                <hr>
                <p>{{ $article->description }}</p>
                <hr>
                <div class="d-flex">
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
