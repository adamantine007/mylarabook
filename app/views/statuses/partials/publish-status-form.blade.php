@include('layouts.partials.errors')

<div class="status-post">

    <!-- Form to /statuses_path -->
    {{ Form::open(['route' => 'statuses_path']) }}

        <!-- Status form field -->
        <div class="form-group">
            {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => "What's on your mind?"]) }}
        </div>

        <!-- Post Status form button -->
        <div class="form-group status-post-submit">
            {{ Form::submit('Post Status', ['class' => 'btn btn-default btn-xs']) }}
        </div>

    {{ Form::close() }}

</div>