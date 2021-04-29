<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PostTagsResource;
use App\Http\Resources\PostCategoriesResource;
use Illuminate\Support\Env;
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
        if(!isset($this->homepage))
        {
            return [
                'id' => $this->id,
                'title' => $this->title,
                'body' => $this->body,
                'picture' => env('MIX_STORE_IMAGE_URL', false).'/'.$this->picture,
                'tags' => PostTagsResource::collection($this->tags),
                'categories' => PostCategoriesResource::collection($this->categories)
            ];
        }
        else  
        return [
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
