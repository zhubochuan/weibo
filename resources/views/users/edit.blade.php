@extends('layouts.default')
@section('title', 'update profile')

@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card ">
        <div class="card-header">
            <h5>update profile</h5>
        </div>
        <div class="card-body">

            @include('shared._errors')

            <div class="gravatar_edit">
                <a href="http://gravatar.com/emails" target="_blank">
                    <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar" />
                </a>
            </div>

            <form method="POST" action="{{ route('users.update', $user->id )}}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">name：</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">email/gmail：</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
                </div>

                <div class="form-group">
                    <label for="password">password：</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">comfirm password：</label>
                    <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                </div>

                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@stop