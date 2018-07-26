<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<link rel="stylesheet" href="{{asset('/css/bootstrap-4.0.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap-4.0.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

	<div class = "row">
		<div class = "col-md-3">
			Users: {{$registered_user}}<br/>
			<a href="{{url('/register')}}">Register</a>
		</div>
		<div class = "col-md-6"></div>
		<div class = "col-md-3">
			<a class = "btn btn-success float-right" href = "{{url('/login')}}">Login</a>
		</div>
	</div>
	<hr/>

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
	

</body>
</html>