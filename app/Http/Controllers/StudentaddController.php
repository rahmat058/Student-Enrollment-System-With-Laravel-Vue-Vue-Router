<?php

namespace App\Http\Controllers;

use App\Studentadd;
use Illuminate\Http\Request;

class StudentaddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student');
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
        $student = new student;

        $student->name  = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;

        $student->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studentadd  $studentadd
     * @return \Illuminate\Http\Response
     */
    public function show(Studentadd $studentadd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studentadd  $studentadd
     * @return \Illuminate\Http\Response
     */
    public function edit(Studentadd $studentadd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studentadd  $studentadd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studentadd $studentadd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studentadd  $studentadd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studentadd $studentadd)
    {
        //
    }
}
