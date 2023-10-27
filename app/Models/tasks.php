<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class tasks extends Model
{
    public function getByLimit(int $limit_count = 20){
        return $this->orderBy('updated_at', 'asc')->get();
    }
   
   public function folders(){
        return $this->hasmany(Folder::class);
    }
    
    protected $fillable = [
        'folder_id',
        'title',
        'status',
        'due_date'
    ];
    
   
}
