@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><h3>Dashboard</h3></div>
                <a style="margin: 19px;" href="{{ route('jobs.create')}}" class="btn btn-primary">Post New Job</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    

                    <h4>Your Job Postings</h4>
     <table class="table table-responsive table-striped ">

        <thead class="">
            <tr>
                <th>Job No</th>
                <th>Job Title</th>
                <th>Posted On</th>
              <!--    <th>Application Deadline</th> -->
                <th>Review</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @if(count($jobs)>0)
            @foreach ($jobs as $job)
            <tr>
                <td>{{$job->id}}</td>
                <td>{{$job->title}}</td>
                <td>{{$job->created_at}}</td>
           <!--      <td>{{$job->deadline}}</td> -->
            <td>
                <a href="/jobs/{{$job->id}}" class="btn btn-small btn-primary">View</a>
                  <a href="/jobs/{{$job->id}}/edit" class="btn btn-small btn-success">Edit</a>
            </td>
            <td>
                  <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                     @csrf
                     @method('DELETE')

                     <button class="btn btn-small btn-danger">Delete</button>

                </form>
            </td>
              
            </tr>
            
            @endforeach
           
           @else
           <p class="lead">You have no current job postings</p>

            @endif

             
        </tbody>
       
      
  </table>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
