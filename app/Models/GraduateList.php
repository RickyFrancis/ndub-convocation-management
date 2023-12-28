<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduateList extends Model{
    use HasFactory;

    public function departmentInfo(){
        return $this->belongsTo('App\Models\Department','department_id','division_id');
    }
}
