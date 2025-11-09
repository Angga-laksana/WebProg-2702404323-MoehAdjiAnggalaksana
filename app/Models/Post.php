<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;
    protected $fillable = [
        'category_id','writer_id','title','slug','excerpt','content','image','published_at','views'
    ];

    protected $dates = ['published_at'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function writer() {
        return $this->belongsTo(Writer::class);
    }
}
