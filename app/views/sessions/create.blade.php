@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">

            <h1>Sign In!</h1>

            <!-- Form to /login_path -->
            {{ Form::open(['route' => 'login_path']) }}

                <!-- Email form field -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:')  }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <!-- Password form field -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:')  }}
                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <!-- Sign In form button -->
                <div class="form-group">
                    {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
                </div>

            {{ Form::close() }}

        </div>
    </div>

@stop