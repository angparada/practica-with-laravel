@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title h3">{{ $entry->title }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $entry->content }}</p>
                </div>
                @if ($entry->user_id == auth()->id())
                <div class="card-footer">
                    <a href="{{ url('/entries/'.$entry->id.'/edit') }}" class="btn btn-primary">Edit entry</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
