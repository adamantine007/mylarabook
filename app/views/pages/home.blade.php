@extends('layouts/default')

@section('content')
    <h1>Hello there!</h1>
    <div class="jumbotron">
        <p>This is my first site with bootstrap! Do you want to know how it work?</p>

        @if( ! $currentUser)
            <p>
                {{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-lg btn-primary'])  }}
            </p>
        @endif
    </div>
@stop