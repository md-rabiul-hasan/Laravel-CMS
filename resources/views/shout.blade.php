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

@section('post')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="post-section card">
            <div class="row">
                <div class="col-md-3 post_image">
                    <img src="{{ asset('assets/image/avatar.jpg')}}" alt="">
                </div>
                <div class="col-md-9">
                    <p>
                        <strong>Md.Rabiul Hasan</strong>
                        7:58 pm 7th July, 2020
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas eos sapiente asperiores dicta similique rem neque aliquam quaerat, quasi exercitationem maiores modi tempore, placeat fugiat eligendi veritatis itaque cumque.m
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
@endsection


@push('js')
@endpush