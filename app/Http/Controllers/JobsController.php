<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;// use the model created for this controller


class JobsController extends Controller
{

    //this method denies access to all the job routes to users who are not logged in
    public function __construct()
    {
        
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //some different ways to get db results with elequent 
        //$jobs=Job::where('title','Admin Assistant')->get();
       // $jobs=Job::orderBy('title','desc')->take(1)->get();
       // $jobs=Job::orderBy('title','desc')->get();
        $jobs=Job::orderBy('created_at','desc')->paginate(3);
        return view('jobs.index')->with('jobs',$jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //perform form validation first

        $job=new Job(); //instantiate the model
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'title'=>'required',
            'type'=>'required',
            'deadline'=>'required',
            'location'=>'required',
            'status'=>'required',
            'description'=>'required',
            'qualification'=>'required'
        ]);

        //assign form values
        $job->user_id=auth()->user()->id;
        $job->name=request('name');
        $job->email=request('email');
        $job->title=request('title');
        $job->type=request('type');
        $job->deadline=request('deadline');
        $job->location=request('location');
        $job->status=request('status');
        $job->description=request('description');
        $job->qualification=request('qualification');
       
        $job->save();
       return redirect('/jobs')->with('success','Your Job has been listed successfully') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $job=Job::find($id);
        return view('jobs.show')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Job::find($id);

        // determine if the user requesting to edit the listing is actually the author

        if(auth()->user()->id !== $job->user_id){
            return redirect('/jobs')->with('error','Access Denied. You are not authorized to access that page');
        }

        return view('jobs.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'title'=>'required',
            'type'=>'required',
            'deadline'=>'required',
            'location'=>'required',
            'status'=>'required',
            'description'=>'required',
            'qualification'=>'required'
        ]);

        $job = Job::find($id);
        $job->name=request('name');
        $job->email=request('email');
        $job->title=request('title');
        $job->type=request('type');
        $job->deadline=request('deadline');
        $job->location=request('location');
        $job->status=request('status');
        $job->description=request('description');
        $job->qualification=request('qualification');
       
        $job->save();

           return redirect('/jobs')->with('success','Your Job has been updated successfully') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);

          // determine if the user requesting to delete the post is actually the author

         if(auth()->user()->id!==$job->user_id){
            return redirect('/jobs')->with('error','Access Denied. You are not authorized to access that page');
        }
        $job->delete();
        return redirect('/jobs')->with('success','Job deleted successfully') ;
    }
}
