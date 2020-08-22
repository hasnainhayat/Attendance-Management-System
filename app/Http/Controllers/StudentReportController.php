<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use DB;

class StudentReportController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {


    return view('admin.studentreport.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function report(request $request)
    {
$present=0;
$absents=0;
$leaves=0;
        $percentage=0;
        if(null!=$request->input('from') && null!=$request->input('to') && null!=$request->input('id')){
        $from=$request->input('from');
        $to=$request->input('to');
        $id=$request->input('id');
        
         $attendance=DB::table('users')->join('attendances','attendances.student_id','=','users.id')
         ->select('*')
         ->whereDate('attendances.created_at', '>=', date('Y-m-d',strtotime($from)))
         ->whereDate('attendances.created_at', '<=', date('Y-m-d',strtotime($to)))->where('attendances.student_id','=',$id)->get();
         $present=DB::table('attendances')
         ->whereDate('created_at', '>=', date('Y-m-d',strtotime($from)))
         ->whereDate('created_at', '<=', date('Y-m-d',strtotime($to)))->where('status','=','present')->where('student_id','=',$id)->count();
         $absents=DB::table('attendances')
         ->whereDate('created_at', '>=', date('Y-m-d',strtotime($from)))
         ->whereDate('created_at', '<=', date('Y-m-d',strtotime($to)))->where('status','=','absent')->where('student_id','=',$id)->count();
         $leaves=DB::table('attendances')
         ->whereDate('created_at', '>=', date('Y-m-d',strtotime($from)))
         ->whereDate('created_at', '<=', date('Y-m-d',strtotime($to)))->where('status','=','leave')->where('student_id','=',$id)->count();
         $total=DB::table('attendances')
         ->whereDate('created_at', '>=', date('Y-m-d',strtotime($from)))
         ->whereDate('created_at', '<=', date('Y-m-d',strtotime($to)))->where('student_id','=',$id)->count();
         if($total>0){
         $percentage=($present/$total)*100;
     }
         
         
        return view('admin.studentreport.index')->with('attendance',$attendance)->with('present',$present)->with('absents',$absents)->with('leaves',$leaves)->with('percentage',$percentage);
    }
    else{
        return view('admin.studentreport.index');
    }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
