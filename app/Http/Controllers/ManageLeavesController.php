<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Leaves;
use DB;
use App\Attendance;
use Carbon\Carbon;



class ManageLeavesController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $leaves=DB::table('users')->join('leaves','leaves.student_id','=','users.id')
         ->select('*')->get();
        return view('admin.leaves.index')->with('leaves',$leaves);

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
        $leaves=Leaves::find($id);
        $leaves->status=$request->get('update');
        $leaves->save();
        $startDate = date('Y-m-d',strtotime($leaves->from));
                                      
                        $endDate = date('Y-m-d',strtotime($leaves->to));


                                
        if($leaves->status=='approved'){
                
                 
                


                        
                        while($startDate<=$endDate){
                           $canMark=true;
                                $attendance=Attendance::where('student_id',$id)->get();
                                
                                foreach ($attendance as $at) {
                            
                                   if($startDate==date('Y-m-d',strtotime($at->created_at))){
                                            if($at->status=='absent'){
                                                $at->status='leave';
                                                $at->save();
                                                
                                            }
                                            $canMark=false;
                                            break;
                                        
                                   }
                                   else{
                                    $canMark=true;
                                   }
                               }
                               
                               
                               if($canMark){
                                $att=new Attendance;
                                $att->student_id=$id;
                                $att->status='leave';
                                $att->created_at=$startDate;

                                $att->save();
                                
                               }
                               $startDate=date('Y-m-d',strtotime($startDate.'+1 day'));
                               
                               }
                       
                    
                   }
                   else{
                     while($startDate<=$endDate){
                           $canMark=true;
                                $attendance=Attendance::where('student_id',$id)->get();
                                
                                foreach ($attendance as $at) {
                            
                                   if($startDate==date('Y-m-d',strtotime($at->created_at))){
                                            if($at->status=='leave'){
                                                $at->status='absent';
                                                $at->save();
                                                
                                            }
                                            
                                            break;
                                        
                                   }
                                   
                               }
                               $startDate=date('Y-m-d',strtotime($startDate.'+1 day'));

                           }

                   }
                
        
                      

                        
        return back();
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
