<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $query = Category::query()->get();
        return Category::all();
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
        $category = Category::create([
            "name" => $req['name']
        ]);
        return response()->json(["messsage" => "Create Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $category = Category::find($req['id']);
        if(!isset($category))
        return response()->json(["message" => "There is no data match"],500);
        $category->name = $req['name'];
        $category->save();
        return response()->json(["messsage" => "Update Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // $categories = Employee::find($id);
            // $req = $id->all();
            $category = Category::find($id);
            if(!isset($category))
            return response()->json(["message" => "There is no data match"],500);
            $category->delete();

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
