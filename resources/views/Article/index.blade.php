@extends('layouts.app')

@section('content')
    <div class="container py-4">
        @forelse($articles as $article)
            <div class="card">
                <div class="card-body">
                    <h4><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></h4>
                </div>
            </div>
            <br>
        @empty
            <div class="d-flex justify-content-center">
                <h4>No Articles Found!</h4>
            </div>
        @endforelse
        <br>
        <a href="{{ route('articles.create') }}" class="btn btn-success">Create</a>
    </div>
@endsection
