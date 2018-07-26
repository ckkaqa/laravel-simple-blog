@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">What is in your mind?</div>

                <div class="panel-body">
                    <form method = "post" action = "{{url('create_post')}}">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <textarea name = "message" rows = "4" cols = "110"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$post->user->name}}</div>

                    <div class="panel-body">
                        {{$post->message}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection
