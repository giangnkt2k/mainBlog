<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PostTagsResource;
use App\Http\Resources\PostCategoriesResource;
class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {	
        // return $request;
        if(isset($this->picture))
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'picture' => $this->picture,
            'tags' => PostTagsResource::collection($this->tags),
            'categories' => PostCategoriesResource::collection($this->categories)
        ];
        else  
        return [
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
