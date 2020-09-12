@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Last entries</h1>
            @foreach ($entries as $entry)
            <div class="card my-4">
                <div class="card-header">
                    <h4 class="card-title">
                        {{ $entry->id }} - {{ $entry->title }}
                    </h4>
                </div>
                <div class="card-body">
                    <p>{{ $entry->content }}</p>
                </div>
                <div class="card-footer">
                    Author: <a href="{{ url('users/'.$entry->user_id) }}">{{ $entry->user->name }}</a>
                </div>
            </div>
            @endforeach
            {!! $entries->links() !!}
        </div>
    </div>
</div>
@endsection
