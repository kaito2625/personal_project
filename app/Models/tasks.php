<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    const STATUS = [
        1 => ['label'=>'未完了', 'class'=>'label-danger'],
        2 => ['label'=>'完了', 'class'=>'labal-success']
    ];
    
    public function getStatusClassAttribute(){
        $status = $this->attributes['status'];
        if (!isset(self::STATUS[$status])) {
            return '';
        }
        return self::STATUS[$status]['class'];
    }
    
    protected $fillable = [
        'title',
        'due_date'
    ];
}
