<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable =[
        'completed',
        'description'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
    
}
