@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <h4>Tags</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="bg-secondary text-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th class="text-centerv">OPERATIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('tag.destroy', $tag->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm ml-1">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('tag.create') }}" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>
@endsection
