<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;


class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Tags::query()->get();
        return Tags::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();
        $tags = Tags::create([
            "name" => $req['name']
        ]);
        return response()->json(["messsage" => "Create Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show(Tags $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $tags = Tags::find($req['id']);
        if(!isset($tags))
        return response()->json(["message" => "There is no data match"],500);
        $tags->name = $req['name'];
        $tags->save();
        return response()->json(["messsage" => "Update Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // $categories = Employee::find($id);
            // $req = $id->all();
            $tags = Tags::find($id);
            if(!isset($tags))
            return response()->json(["message" => "There is no data match"],500);
            $tags->delete();

            return response()->json([
                "message" => "Delete Successfully"
            ]);
        }
        catch(\Exception $e) {
            return response()->json([
                "message" => "Delete Unsuccessfully"
            ],500);
        };
    }
}
