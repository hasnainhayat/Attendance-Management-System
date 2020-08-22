<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
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
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $canMark=true;
        $currentDate=date('Y-m-d');
        echo $currentDate;
        $attendance=Attendance::where('student_id',auth()->user()->id)->get();
        foreach ($attendance as $at) {
           if($currentDate==date('Y-m-d',strtotime($at->created_at))){
            $canMark=false;
            return back()->with('found','Attendance marked already');
            break;
           }       

             }
       if($canMark){
       $add=Attendance::create([
        'status'=>$request->input('status'),
        'student_id'=>$request->input('student_id'),


        ]);
        return back()->with('success','Attendance marked successfully');    
   }
   else{
    
   }
   return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
             
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}