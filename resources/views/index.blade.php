@extends('layouts.layout')

@section('content')
@foreach ($allPost as $singlePost)
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="post-section card">
            <div class="row">
                <div class="col-md-3 post_image">
                    <img src="{{ asset(empty($singlePost->user->avatar) ? 'images/avatar.jpg' : $singlePost->user->avatar)  }}" alt="">
                </div>
                <div class="col-md-9">
                    <p>
                        <a href="{{ route('shout.publictimeline',$singlePost->user->nickname) }}">
                            <strong>{{ $singlePost->user->name }}</strong>
                        </a>
                        {{ date('h:m a jS F, Y', strtotime($singlePost->created_at)) }}
                    </p>
                    <p>
                        {{ $singlePost->status }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
@endforeach
@endsection