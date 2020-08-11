@extends('layouts/boilerplate')

@section('content')

<div class="container">
     <a href="/jobs/{{$job->id}}" class="mb-3 mt-3"><< Go Back</a>
</div>
<div class="container text-center shadow p-3 mb-5 bg-white rounded">
    <h1>Edit Job</h1>

  <form action="{{ route('jobs.update', $job->id) }}" method="POST">
    @csrf
    @method('PATCH') 

    <div class="container">
         <div class="row">

            <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="date">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$job->name}}"  placeholder="Enter Name / Company Name">
                  </div>
            </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="date">Email</label>
                        <input type="email" class="form-control" name="email"value="{{$job->email}}"  placeholder="Enter Email / Company Email">
                      </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="date">Job Title</label>
                        <input type="text" class="form-control" name="title" value="{{$job->title}}"  placeholder="e.g Senior Accountant">
                      </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="date">Application Deadline</label>
                        <input type="date" class="form-control" name="deadline" id="date" placeholder="deadline" >
                      </div>
                </div>
         </div>
</div>
    <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 form-group">
                    <label for="type">Job Type</label>
                    <select class="form-control" id="type" name="type" value="{{$job->type}}">
                      <option value="fulltime">Fulltime</option>
                      <option value="parttime">Part Time</option>
                    
                    </select>
                </div>
                <div class="col-sm-12 col-md-4 form-group">
                    <label for="location">Job Location</label>
                    <input type="text" class="form-control" name="location" value="{{$job->location}}"  placeholder="e.g Nairobi">
                </div>
                <div class="col-sm-12 col-md-4 form-group">
                    <label for="type">Job Status</label>
                    <select class="form-control" value="{{$job->status}}" name="status">
                      <option value="open">Open</option>
                      <option value="closed">Closed</option>
                    
                    </select>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 form-group">
                    <label for="description">Job Description</label>
                    <textarea class="form-control" id="description" rows="5" name="description" value="{{$job->description}}"></textarea>
                </div>
                <div class="col-sm-12 col-md-6 form-group">
                    <label for="qualification">Job Qualifications</label>
                    <textarea class="form-control" value="{{$job->qualification}}" rows="5" name="qualification"></textarea>
                </div>
               
            </div>
        </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success btn-lg" value="UPDATE JOB" name="add_job">
            </div>

        </form>




</div>

@endsection 
