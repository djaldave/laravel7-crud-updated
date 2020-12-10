@extends('layouts.app')

@section('title', 'View post: '.$post->title)

@section('content')
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="container text-light">
                <a class="btn btn-secondary btn-outline-warning mt-3 mb-3" href="{{ route('posts.index') }}" >&laquo; Back to Menu</a>
                <h1 class="text-center text-warning">View Details</h1>
                <form  autocomplete="off">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="post-title">Name</label>
                            <input readonly type="text" name="title"
                                   value="{{ $post->title }}" class="form-control" id="post-title">
                        </div>
                        <div class="form-group">
                            <label for="post-description">Description</label>
                            <textarea name="description" readonly class="form-control" id="post-description" rows="3"> {{ $post->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="post-price">Price</label>
                            <input readonly type="text" name="price"
                                   value="{{ $post->price }}" class="form-control" id="post-price">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

