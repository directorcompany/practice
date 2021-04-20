<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['fio','title','description','image','user_id','status'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
