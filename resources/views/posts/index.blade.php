@extends('layouts.app')

@section('title', 'All posts')

@section('content')
<div class="col-lg-12">
    <a href="{{ route('posts.create') }}" class="btn btn-secondary btn-outline-warning mt-3">Create a post</a>

    @if(session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped mt-3 table-responsive-sm table-dark bg-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col" class=" d-none d-sm-table-cell">Description</th>
            <th scope="col" class="w-auto">Price</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th class="w-auto" scope="row">{{ $post->id }}</th>
                <td class="w-auto">{{ $post->title }}</td>
                <td class="w-auto  d-none d-sm-table-cell">{{ $post->description }}</td>
                <td class="w-auto">{{ $post->price }}</td>
                <td class="table-buttons d-flex">
                    <a  href="{{ route('posts.show', $post) }}" class="btn btn-info btn-lg  mr-2">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-lg  mr-2">
                        <i class="fa fa-pencil" ></i>
                    </a>
                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
