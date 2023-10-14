<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = [
        'title',
        'id'
    ];
    
    public function users()
    {
        return $this->belongsTo(users::class,'folder_id');
        
    }
    
    public function tasks(){
        return $this->hasMany(tasks::class);
    }
}
