@extends('layouts.app')

@section('content')
<div class="jumbotron p-5">
	<div class="row">
	<div class="col-sm-12 col-md-7 my-5 p-lg-5">
		
	<h1 class="display-3 font-weight-normal">Looking to hire or get hired?</h1>
    <p class="lead font-weight-normal">We've made looking for a job and seeking to hire as simple as possible by connecting employers and job seekers</p>
    <a class="btn btn-lg btn-success fpb" href="{{route('register')}}">SIGN UP</a>
	</div>
	</div>
</div>
@endsection