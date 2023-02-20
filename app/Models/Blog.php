<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'blog_image', 'paragraph'];
    protected $guarded = [];

    //Relationship
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
}
