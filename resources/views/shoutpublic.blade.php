@extends('layouts.layout')

@if($displayAction == true)
    @section('action')
    <p class="action">
        <a href="{{ route('shout.public.friend',$friendId) }}">make friend</a> / 
        <a href="{{ route('shout.public.unfriend',$friendId) }}">unfriend</a>
    </p>    
    @endsection
@endif

@section('content')
    @foreach ($statuses as $public_user_post)
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="post-section card">
                    <div class="row">
                        <div class="col-md-3 post_image">
                            <img src="{{ asset($public_user_avatar)}}" alt="">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <strong>{{ $public_user_name }}</strong>
                                {{ date('h:m a jS F, Y', strtotime($public_user_post->created_at)) }}
                            </p>
                            <p>
                                {{ $public_user_post->status }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    @endforeach
@endsection