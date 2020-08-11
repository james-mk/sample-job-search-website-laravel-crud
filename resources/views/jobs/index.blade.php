@extends('layouts.app')

@section('content')

{{-- @if(session('success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div> 
@endif --}}
<!-- <div class="container">
     <a style="margin: 19px;" href="{{ route('jobs.create')}}" class="btn btn-primary">Post New Job</a>
</div> -->
<div class="container shadow p-3 mb-5 mt-3 bg-white rounded">
    <h1>Available Jobs</h1>

    <table class="table table-responsive table-striped ">

		<thead class="">
			<tr>
				
				<th>Job Title</th>
				<th>Posted On</th>
				<th>Employer</th>
                <th>Job Type</th>
                <th>Application Deadline</th>
                <th>Location</th>
                <th></th>
				{{-- <th>Action</th> --}}
			</tr>
        </thead>
        <tbody>

            @if(count($jobs)>0)
            @foreach ($jobs as $job)
            <tr>
            
                <td>{{$job->title}}</td>
                <td>{{$job->created_at}}</td>
                <td>{{$job->name}}</td>
                <td>{{$job->type}}</td>
                <td>{{$job->deadline}}</td>
                <td>{{$job->location}}</td>
                <td>
                <a href="/jobs/{{$job->id}}" class="btn btn-small btn-primary">View</a>
                </td>
              
            </tr>
            
            @endforeach
           

            @endif

             
        </tbody>
       
      
  </table>
{{$jobs->links()}}
</div>

@endsection 

