@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Entry</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="bg-white">
                        <form action="{{ url('entries/'.$entry->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="title" class="col-form-label">Title</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $entry->title) }}" required autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="form-group">
                                <label for="content" class="col-form-label">Content</label>
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" required>{{ old('content', $entry->content) }}</textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Save changes
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
