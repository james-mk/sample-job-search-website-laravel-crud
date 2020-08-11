@extends('layouts.boilerplate')

@section('content')

<!-- <div class="container">
     <a style="margin: 15px;" href="{{ route('jobs.index')}}" class="btn btn-primary">Back To Jobs</a>
</div> -->
<div class="container text-center shadow p-3 mb-5 mt-3 bg-white rounded">
    <h1>Create A Job</h1>

  <form action="{{route('jobs.store')}}" method="POST">
    @csrf

    <div class="container ">
         <div class="row">

            <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="date">Name</label>
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name / Company Name">
                  </div>
            </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="date">Email</label>
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Enter Email / Company Email">
                      </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="date">Job Title</label>
                        <input type="text" class="form-control" name="title" id="title"  placeholder="e.g Senior Accountant">
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
                    <select class="form-control" id="type" name="type">
                      <option value="fulltime">Fulltime</option>
                      <option value="parttime">Part Time</option>
                    
                    </select>
                </div>
                <div class="col-sm-12 col-md-4 form-group">
                    <label for="location">Job Location</label>
                    <input type="text" class="form-control" name="location" id="location"  placeholder="e.g Nairobi">
                </div>
                <div class="col-sm-12 col-md-4 form-group">
                    <label for="type">Job Status</label>
                    <select class="form-control" id="status" name="status">
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
                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                </div>
                <div class="col-sm-12 col-md-6 form-group">
                    <label for="qualification">Job Qualifications</label>
                    <textarea class="form-control" id="qualification" rows="5" name="qualification"></textarea>
                </div>
               
            </div>
        </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success btn-lg" value="ADD JOB" name="add_job">
            </div>

        </form>




</div>

@endsection 
