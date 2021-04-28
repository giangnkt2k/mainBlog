<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $query = Categories::query()->get();
        return Categories::all();
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
        $categories = Categories::create([
            "name" => $req['name']
        ]);
        return response()->json(["messsage" => "Create Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $categories = Categories::find($req['id']);
        if(!isset($categories))
        return response()->json(["message" => "There is no data match"],500);
        $categories->name = $req['name'];
        $categories->save();
        return response()->json(["messsage" => "Update Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // $categories = Employee::find($id);
            // $req = $id->all();
            $categories = Categories::find($id);
            if(!isset($categories))
            return response()->json(["message" => "There is no data match"],500);
            $categories->delete();

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
