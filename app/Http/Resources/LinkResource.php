<?php

namespace App\Http\Resources;

use App\Models\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class LinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'domain' => $this->domain,
            'title' => $this->title,
            'description' => $this->description,
            'queries' => $this->queries->count(),
            'trusts' => $this->votes()->where('vote', 1)->count(),
            'mistrusts' => $this->votes()->where('vote', 0)->count(),
            'comments' => $this->comments()->where('status', Comment::COMMENT_APPROVED)->orderByDesc('created_at')->get(),
        ];
    }
}
