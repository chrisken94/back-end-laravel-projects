<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Position;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::all();

        // $data = Employee::withTrashed()->get();

        // dd($data);
        return view('employee/home', [
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all();
        return view('employee/create', [
            "position" => $position
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // $employee = new employee;
        // $employee->employee_id = $request->employee_id;
        // $employee->name = $request->name;
        // $employee->address = $request->address;
        // $employee->email = $request->email;
        // $employee->save();

        // Eloquent ORM Mass Assignment
        Employee::create([
            'position_id' => $request->position_id,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email
        ]);

        return redirect('/employee');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Employee";
        $data = Employee::where('id', '=', $id)->first();
        return view ('employee/show', [
            'judul' => $title,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $position = Position::all();
        $data = Employee::where('id', '=', $id)->first();
        return view('employee/edit', [
            'data' => $data,
            'position' => $position,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        
        // ORM biasa
        // $employee = Employee::find($request->id);
        // $employee->employee_id = $request->employee_id;
        // $employee->name = $request->name,
        // $employee->address = $request->address,
        // $employee->email = $request->email,
        // $employee->save();

        // ORM Mass Assignment
        Employee::where('id', '=', $request->id)->update([
            'postion_id' => $request->position_id,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email
        ]);

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ORM biasa
        // $employee = Employee::find($id);
        // $employee->delete();

        // ORM Mass Assignment
        Employee::where('id', '=', $id)->delete();

        // Employee::destroy($id);

        // Force Delete the soft-deleted
        // $employee = Employee::find($id);
        // $employee->forceDelete();

        return redirect('/employee');
    }
}
