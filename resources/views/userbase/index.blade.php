@extends('layouts.user')

@section('content')


    @foreach($users as $user)
        {{ $user->name }}
    @endforeach


    
    <div id="app">
        <post-component></post-component>
    </div>

    
    <table>

    </table>


@endsection
