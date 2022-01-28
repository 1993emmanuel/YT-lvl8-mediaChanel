<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body'  =>  $this->body,
            'security' => 'Emmanuel aprove this'
        ];
    }

    public function with($request){
        return [
            'version' => '1.0.1',
            'author_url' => url('https://duelistempire.com'),
            'development' => 'Emmanuel Hernandez Mejia'
        ];
    }
}
