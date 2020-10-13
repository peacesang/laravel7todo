<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    public function getLabelAttribute()
    {
        if($this->status==0)
        {
            return "pending";
        }
        return "Done";
        
        
    }
}
