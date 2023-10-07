<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tweets extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'text'
    ];
    
    public function users(){
        return $this->belongTo(users::class);
    }
    
    public function favorites(){
        return $this->hasMany(favorites::class);
    }
    
    public function comments(){
        return $this->hasMany(comments::class);
    }
    
    public function getTimeLines(Int $user_id){
        return $this->WhereIn('user_id')->orderBy('created_at','DESC')->paginate(30);
    }
   
}
