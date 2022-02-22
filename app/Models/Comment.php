<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    const COMMENT_APPROVED = 2;
    const COMMENT_PENDING = 1;
    const COMMENT_REJECTED = 0;

    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}
