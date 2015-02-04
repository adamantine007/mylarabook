@if($signedIn)
    @if($user->isFollowedBy($currentUser))

        <!-- Form to /unfollows_path -->
        {{ Form::open(['method' => 'DELETE', 'route' => ['unfollows_path', $user->id]]) }}

            {{ Form::hidden('userIdToUnfollow', $user->id) }}

            <button type="submit" class="btn btn-danger">Unfollow {{ $user->username }}</button>

        {{ Form::close() }}

    @else

        <!-- Form to /follows_path -->
        {{ Form::open(['route' => 'follows_path']) }}

            {{ Form::hidden('userIdToFollow', $user->id) }}

            <button type="submit" class="btn btn-primary">Follow {{ $user->username }}</button>

        {{ Form::close() }}

    @endif
@endif

