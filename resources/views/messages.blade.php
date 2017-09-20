@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    <br>

    @if(count($messages) > 0)
        @foreach($messages as $message)
            <div class="panel panel-primary">
                <div class="panel-heading">Email: {{ $message->email }}</div>
                <div class="panel-body">
                    <p>Name: {{ $message->name }}</p>
                    <p>Message: {{ $message->message }}</p>
                </div>
            </div>
        @endforeach
    @endif
    <br>
@endsection

@section('sidebar')
    <!-- apend + include parent -->
    @parent
    <p>This is appended to the sidebar</p>
@endsection