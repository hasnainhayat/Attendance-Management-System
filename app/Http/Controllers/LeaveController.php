<?php

namespace App\Http\Controllers;

use App\Leaves;
use Illuminate\Http\Request;

class LeaveController extends Controller
{ public function __construct()
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
        return view('users.requestleave');
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
        $add=leaves::create([
        
        'student_id'=>$request->input('student_id'),
        'reason'=>$request->input('reason'),
        'status'=>$request->input('status'),
        'from'=>$request->input('from'),
        'to'=>$request->input('to'),

        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaves $leaves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leaves $leaves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaves $leaves)
    {
        //
    }
}
