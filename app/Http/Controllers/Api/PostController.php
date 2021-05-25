<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Models\Categories;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $req = $request->all();
        $home = (isset($req['homepage'])) ? $req['homepage'] : "";
        if($home === 'yes'){
            $query = Post::query();
           
          //  if(isset($req['category'])){
                // $queryC = Categories::query()->where('id', $req['category'])
                // ->with([
                //     "post" => function($queryC){
                //         $queryC->paginate(10,['id','title','picture','body'],10);
                //     }
                // ]);
                // return $queryC->get(['id','name']);
           // }
            return PostResource::collection($query->paginate(10,['id','title','picture','body'],'page'));
        }
        else{
            $query = Post::query();
            return PostResource::collection($query->paginate(20,['id','title'],'page'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $Validater = Validator::make($request->all(),[
            'title' => 'required|string',
            'body' => 'required',
            
        ]);
        $picture = "";
        if($request->file('picture') != null)
        {
            $request->validate([
                'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            ]);    
            $picture_path = $request->file('picture');
            $picture = $picture_path->store('public/images');//
            $picture = str_replace('public/','',$picture);
        }
        if($Validater->fails()) return response()->json(["message" => "fail"],500);
        $req = $request->all();
        $post = Post::create([
            "title" => $req['title'],
            "body" => $req[ 'body'],
            "picture" => $picture
        ]);
        $post->category()->attach($req['categories']);
        $post->tag()->attach($req['tags']);
        $post = $post->where('id',$post->id)->with([
            "category" => function($query){
                $query->select(['id','name']);
            },
            "tag" => function($query){
                $query->select(['id','name']);
            }
        ])->get(["*"]);
        $post = (new PostResource($post[0]))->toArray(1);
        return response()->json(["messsage" => "Create Successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if(!isset($post))
        return response()->json(["message" => "There is no data match"],500);
        $post = $post->where('id',$post->id)->with([
            "category" => function($query){
                $query->select(['id','name']);
            },
            "tag" => function($query){
                $query->select(['id','name']);
            }
        ])->get(["*"]);
        PostResource::withoutWrapping();
        return new PostResource($post[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $req = $request->all();
        // return $req;
        $post = Post::find($id);
        // $post = Post::find($req['id']);
        // return $post;
        if(!isset($post)){
            return response()->json(["message" => "There is no data match"],500);
        }

        if(isset($req['tags'])){
            $count = Tags::whereIn('id',$req['tags'])->count();
            if($count != count($req['tags']))
                return response()->json(["message" => "Ko co tag nao nhu the nay"],500);
            else {
                DB::table('post_has_tags')->where('post_id',$post->id)->delete();
                $post->tags()->attach($req['tags']);
            }
        } else {
            $post->tags()->sync([]);
        }
        
        if(isset($req['categories'])){
            $count = Categories::whereIn('id',$req['categories'])->count();
            if($count != count($req['categories']))
                return response()->json(["message" => "Ko co categories nao nhu the nay"],500);
            else {
                DB::table('post_has_categories')->where('post_id',$post->id)->delete();
                $post->categories()->attach($req['categories']);
            }
        } else {
            $post->categories()->sync([]);
        }
        $picture = "";
        if($request->file('picture') != null)
        {
            $picture_path = $request->file('picture');
            $picture = $picture_path->store('public/images');//
            $picture = str_replace('public/','',$picture);
            Storage::delete(['public/'.$post->picture]);
            $post->picture = $picture;
        }

        $post->title = $req['title'];
        $post->body = $req['body'];
        $post->save();
        
        $post = (new PostResource($post));
        return response()->json(["message" => "Update Sucessfly"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json([
            "message" => "Delete Successfully"
        ]);
    }
}
