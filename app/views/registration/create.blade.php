@extends('layouts/default')

@section('content')
    <div class="row">
        <div class="col-md-6">

            <h1>Register</h1>

            @include('layouts.partials.errors')

            <!-- Form to /register_path -->
            {{ Form::open(['route' => 'register_path']) }}

                <!-- Username form field -->
                <div class="form-group">
                    {{ Form::label('username', 'Username:')  }}
                    {{ Form::text('username', null, ['class' => 'form-control']) }}
                </div>

                <!-- Email form field -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:')  }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <!-- Password form field -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:')  }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>

                <!-- Password confirmation form field -->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password confirmation:')  }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                </div>

                <!-- Sign Up form button -->
                <div class="form-group">
                    {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
                </div>

                {{ link_to('/password/remind', 'Forgot password'); }}

            {{ Form::close() }}

        </div>
    </div>

@stop