<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Department;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Position::all();

        // $data = Position::withTrashed()->get();

        // dd($data);
        return view('position/home', [
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
        $department = Department::all();
        return view('position/create', [
            "department" => $department
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

        // $position = new position;
        // $position->name = $request->name;
        // $position->code = $request->code;
        // $position->save();

        // Eloquent ORM Mass Assignment
        Position::create([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'code' => $request->code 
        ]);

        return redirect('/position');
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
        // dd($id);
        $department = Department::all();
        $data = Position::where('id', '=', $id)->first();
        return view('position/edit', [
            'data' => $data,
            'department' => $department
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
        // $position = Position::find($request->id);
        // $position->department_id = $request->department_id,
        // $position->name = $request->name,
        // $position->code = $request->code,
        // $position->save();

        // ORM Mass Assignment
        Position::where('id', '=', $request->id)->update([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'code' => $request->code
        ]);

        return redirect('/position');
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
        // $position = Position::find($id);
        // $position->delete();

        // ORM Mass Assignment
        Position::where('id', '=', $id)->delete();

        // Position::destroy($id);

        // force delete the soft-deleted
        // $position = Position::find($id);
        // $position->forceDelete();

        return redirect('/position');
    }
}
