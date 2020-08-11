@extends('layouts/boilerplate')

@section('content')
<!--     <div class="container">
        <a style="margin: 19px;" href="{{ route('jobs.index')}}" class="btn btn-primary">Back To Jobs</a>
    </div>
 -->
<div class="container shadow p-3 mb-5 mt-3 bg-white rounded">
    <h1 class="job-headings text-center">Job Title: {{$job->title}}</h1>
  
<div class="row ">
    <div class="col-sm-12 col-md-7">
        <table class="table table-responsive">
            <thead >
                <tr>
    
                    <td>Employer:</td>
                    <td>Posted On:</td>
                    <td>Job Type:</td>
                    <td>Location:</td>
                    <td>Deadline:</td>
                
                </tr>
            </thead>
    
            <tbody>
                <tr>
                <td>{{$job->name}}</td>
                <td>{{$job->created_at}}</td>
                <td>{{$job->type}}</td>
                <td>{{$job->location}}</td>
                <td>{{$job->deadline}}</td>
         
                </tr>
            </tbody>
    
        </table>
    <h5 class="job-headings p-2">Job Description</h5>
    <p class="p-2">{{$job->description}}</p>
    <h5 class="job-headings p-2">Qualifications</h5>
    <ul class="list-group">
    @foreach (explode(',',$job->qualification) as $qualifications)
    <li class="list-group-item p-2">{{$qualifications}}</li>
        
    @endforeach
    
    
    </ul>
    
    
    </div>
    <div class="col-sm-12 col-md-5 ">

        <div class="card text-center shadow p-3 mb-5 bg-white rounded application-card application-div">
            <div class="card-header">
                <h4>Feeling confident about this job?</h4>
            </div>
            <div class="card-body">
              <h5 class="card-title">You can apply directly!</h5>
              <p class="card-text">If you meet the Employers qualifications,you can apply directly to their email. Remember to attach an updated and relevant CV to your application. Use the Job Title as the Email Subject</p>
              <a href="mailto:{{$job->email}}" class="btn btn-lg btn-success application-button">APPLY HERE NOW!</a>
            </div>
          </div>


        
    </div>
    

  


</div>
<br>

<!-- if user is not a guesti.ehe's logged in, then show the edit & delete buttons -->
@if(!Auth::guest())
<!-- further making sure the edit & delete buttons only shows up for the posts the jobs the logged in user has posted -->
@if(Auth::user()->id==$job->user_id)
<div class="row">
    <div class="col">
        <a href="/jobs/{{$job->id}}/edit" class="btn btn-success">Edit</a> 
    </div>
      <div class="col-sm-6 col-m6-6">
         <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">Delete</button>

 </form>

    </div>
</div>
@endif
@endif


</div> <!--Container-->



@endsection