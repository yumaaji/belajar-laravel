<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    // relation one to many to post table
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
