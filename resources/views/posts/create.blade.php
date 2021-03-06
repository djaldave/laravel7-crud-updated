@extends('layouts.app')

@section('title', 'Add post')

@section('content')
<div class="row">
<div class="col-lg-12 mx-auto">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

        <div class="container text-light">
            <a class="btn btn-secondary btn-outline-warning mt-3 mb-3" href="{{ route('posts.index') }}" >&laquo; Back to Menu</a>
            <h1 class="text-center text-warning">Create</h1>
            <form method="post" action="{{ route('posts.store') }}" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="post-title">Name</label>
                        <input type="text" name="title"
                               value="{{ old('title') }}" class="form-control" id="post-title">
                    </div>
                    <div class="form-group">
                        <label for="post-description">Description</label>
                        <textarea name="description" class="form-control" id="post-description" rows="3">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="post-price">Price</label>
                        <input type="text" name="price"
                               value="{{ old('price') }}" class="form-control" id="post-price">
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success w-50" name="submit">Submit</button>
                </div>
            </form>
        </div>
</div>
</div>
@endsection
