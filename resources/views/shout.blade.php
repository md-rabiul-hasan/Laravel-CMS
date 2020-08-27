@extends('layouts.layout')

@push('css')

@endpush

@section('form')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('shout.save') }}" method="POST">
            @csrf
            <textarea name="post" class="form-control card" id="" cols="3" rows="6"></textarea>
            <button type="submit"  class="btn btn-primary post-btn">Post</button>
        </form>
    </div>
</div>
@endsection

@section('content')
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="post-section card">
                    <div class="row">
                        <div class="col-md-3 post_image">
                            <img src="{{ asset($avatar)}}" alt="">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <strong>{{ $post->user->name }}</strong>
                                {{ date('h:m a jS F, Y', strtotime($post->created_at)) }}
                            </p>
                            <p>
                                {{ $post->status }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    @endforeach
@endsection


@push('js')
@endpush