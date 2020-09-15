<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Inventory";
        $data = Inventory::all();
        // dd($data);
        return view('inventory/home', [
            'judul' => $title,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inventory::create([
            'name' => $request->name,
            'detail' => $request->detail
        ]);

        $last_inventory = Inventory::where('name', $request->name)->get()->last();

        // dd($last_inventory);
        Archive::create([
            'inventory_id' => $last_inventory->id,
            'name' => $request->archive_name,
            'detail' => $request->archive_detail
        ]);

        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Inventory";
        $data = Inventory::where('id', '=', $id)->first();
        return view('inventory/show', [
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
        $title = "Inventory";
        $data = Inventory::where('id', '=', $id)->first();
        $archive = Archive::where('inventory_id', '=', $id)->first();
        return view('inventory/edit', [
            'judul' => $title,
            'data' => $data,
            'archive' => $archive
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
        Inventory::where('id', '=', $request->id)->update([
            'name' => $request->name,
            'detail' => $request->detail
        ]);
        Archive::where('id', '=', $request->id)->update([
            'name' => $request->archive_name,
            'detail' => $request->archive_detail
        ]);

        return redirect('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Mass Assignment
        Inventory::where('id', '=', $id)->delete();
        Archive::where('inventory_id', '=', $id)->delete();

        return redirect('/inventory');
    }
}
