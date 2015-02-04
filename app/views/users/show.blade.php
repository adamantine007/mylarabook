@extends('layouts.default')

@section('content')

    <div class="row">

        <div class="col-md-4">

            <div class="media">
                <div class="pull-left">
                    @include('users.partials.avatar', ['size' => 85])
                </div>

                <div class="media-body">
                    <h1 class="media-heading">{{ $user->username }}</h1>
                </div>

                @unless($user->is($currentUser))
                    @include('users.partials.follow-form')
                @endunless

                <p class="text-info">{{ $user->present()->followersCount() }}</p>

            </div>





        </div>

        <div class="col-md-8">

            <p class="text-center text-info">User {{ $user->username }} has {{ $user->present()->statusCount() }}</p>

            @if($user->is($currentUser))
                @include('statuses.partials.publish-status-form')
            @endif

            @include('statuses.partials.statuses', ['statuses' => $user->statuses])

        </div>

    </div>

@stop