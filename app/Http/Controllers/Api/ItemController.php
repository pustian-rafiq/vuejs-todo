<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::latest()->get();

        return response()->json([
            "success" => true,
            "data" => $items
        ]);
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
        $data = new Item();

        $data->name =$request->name;

        $data->save();

        return response()->json([
            "success" => true,
            "message" => "Item added successfully",
            "data" => $data
        ]);
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
        $data = Item::find($id);

        if($data){
            $data->completed = $request->completed ? true : false;
            $data->completed_at = $request->compeleted ? Carbon::now() : null;
            $data->save();

            return response()->json([
                "success" => true,
                "message" => "Item updated successfully",
                "data" => $data
            ]);
        }else{
            return response()->json([
                "success" => false,
                "message" => "Item not found"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Item::find($id);

        if($data){
            $data->delete();
            return response()->json([
                "success" => true,
                "message" => "Item  deleted successfully"
            ]);
        }else{
            return response()->json([
                "success" => false,
                "message" => "Item not found"
            ]);
        }
    }
}
