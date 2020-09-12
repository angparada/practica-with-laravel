@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Tweets</div>
                <div class="card-body">
                    Twitter API (soon)
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title h3">{{ $user->name }}</h1>
                </div>
                <div class="card-body">
                    <p>Published entries</p>
                    <ul class="list-group">
                        @foreach ($entries as $entry)
                            <li class="list-group-item">{{ $entry->title }}</li>
                        @endforeach
                    </ul> 
                </div>
    
            </div>
        </div>
    </div>
</div>
@endsection
