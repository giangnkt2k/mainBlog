<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Tag::query()->get();
        return Tag::all();
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
        $tag = Tag::create([
            "name" => $req['name']
        ]);
        return response()->json(["messsage" => "Create Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $tag = Tag::find($req['id']);
        if(!isset($tag))
        return response()->json(["message" => "There is no data match"],500);
        $tag->name = $req['name'];
        $tag->save();
        return response()->json(["messsage" => "Update Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // $categories = Employee::find($id);
            // $req = $id->all();
            $tag = Tag::find($id);
            if(!isset($tag))
            return response()->json(["message" => "There is no data match"],500);
            $tag->delete();

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
