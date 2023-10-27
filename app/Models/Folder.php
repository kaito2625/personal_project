<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function getByLimit(int $limit_count = 10){
        return $this->orderBy('updated_at', 'asc')->get();
    }
    
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
