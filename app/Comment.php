<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment_table";

    protected $fillable = [
        "comment",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
}
