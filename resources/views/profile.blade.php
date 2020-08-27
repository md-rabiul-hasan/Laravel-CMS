@extends('layouts.layout')

@section('form')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h5>Update Your Profile</h5>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control card" name="name" id="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control card" name="email" id="email" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group">
                <label for="text">Nickname</label>
                <input type="text" class="form-control card" name="nickname" id="nickname" value="{{ Auth::user()->nickname }}">
            </div>
            <div class="form-group">
                <label for="image">Profile Picture</label>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
            <button type="submit"  class="btn btn-primary post-btn">update</button>
        </form>
    </div>
</div>
@endsection